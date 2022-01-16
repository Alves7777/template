<?php

namespace App\Http\Controllers\Progress;

use App\AbstractView\AbstractView;
use App\Http\Controllers\Controller;
use App\Http\Requests\Progress\ProgressRequest;
use App\Services\Progress\ProgressService;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Vtiful\Kernel\Format;

class ProgressController extends Controller
{
    private AbstractView $abstract;
    private ProgressService $progressService;
    public string $type = AbstractView::VIEW[7];

    public function __construct(ProgressService $progressService)
    {
        parent::__construct();
        $this->progressService = $progressService;
        $this->abstract = new AbstractView();
        $this->abstract->setProgress();
    }

    public function index()
    {
        try {

            $this->type = $this->progressService->all();
            return view($this->abstract->index, compact(json_decode($this->type)));
        } catch (Exception $e) {
            $this->ops($e);
            return redirect()->back();
        }
    }

    public function create()
    {
        try {
            $qtdMax = 4; // array
            $data = $this->progressService->all();
            $this->abstract->getValidation($data, $qtdMax);
            return view($this->abstract->create);
        } catch (\ErrorException $e) {
            alert()->warning('Você não pode adicionar mais ' . $this->abstract->title);
            return redirect()->back();

        } catch (\Exception $e) {
            alert()->error($this->abstract->index . " não encontrada.");
            return redirect()->back();
        }
    }

    public function store(ProgressRequest $request): RedirectResponse
    {
        try {
            DB::beginTransaction();
            $this->progressService->create($request->validated());
            DB::commit();
            $this->successRegister($this->abstract->title);
            return redirect()->route($this->abstract->index);
        } catch (Exception $e) {
            DB::rollBack();
            $this->errorMsg($e);
            return redirect()->back();
        }
    }

    public function show($id)
    {
        try {
            $progress = $this->progressService->findOrFail($id);
            return view($this->abstract->show, compact('progress'));
        } catch (Exception $e) {
            $this->error($this->abstract->title);
            return redirect()->back();
        }
    }

    public function edit(string $id)
    {
        try {
            $progress = $this->progressService->findOrFail($id);
            return view($this->abstract->edit, compact('progress'));
        } catch (Exception $e) {
            $this->error($this->abstract->title);
            return redirect()->back();
        }
    }

    public function update(ProgressRequest $request, $id): RedirectResponse
    {
        try {
            DB::beginTransaction();
            $this->progressService->update($id, $request->validated());
            DB::commit();
            $this->successEditing($this->abstract->title);
            return redirect()->route($this->abstract->index);
        } catch (Exception $e) {
            DB::rollBack();
            $this->errorMsg($e);
            return redirect()->back();
        }
    }

    public function destroy($id): RedirectResponse
    {
        try {
            DB::beginTransaction();
            $this->progressService->delete($id);
            DB::commit();
            $this->successDelete($this->abstract->title);
            return redirect()->route($this->abstract->index);
        } catch (Exception $e) {
            DB::rollBack();
            $this->errorMsg($e);
            return redirect()->back();
        }
    }

    public function exportExcel()
    {

        $arquivo = date('d-m-Y') . '-dados-contagem.xls';

        $response = $this->progressService->all();

        $html = '<table border="1">';
        $html .= '<tr>';
        $html .= '<th colspan="3">Tabela de Contagem</th>';
        $html .= '</tr>';
        $html .= '<tr>';
        $html .= '<th><b>Nome do Progresso</b></th>';
        $html .= '<th><b>Porcentagem</b></th>';
        $html .= '<th><b>Data da Create</b></th>';
        $html .= '</tr>';

        foreach ($response as $key => $result) {
            $createDate = Carbon::createFromFormat("Y-m-d H:i:s", $result["created_at"])->format('d/m/Y');
            $html .= '<tr>';
            $html .= '<td><b>' . $result["progress_name"] . '</b></td>';
            $html .= '<td><b>' . $result["percentage"] . '</b></td>';
            $html .= '<td><b>' . $createDate . '</b></td>';
            $html .= '</tr>';
        }
        $html .= '</table>';

        header('Cache-Control: no-cache, must-revalidate');
        header('Pragma: no-cache');
        header('Content-Type: application/x-msexcel');
        header("Content-Disposition: attachment; filename=\"{$arquivo}\"");
        echo $html;
        exit();
    }
}
