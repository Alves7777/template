<?php

namespace App\Http\Controllers\Title;

use App\AbstractView\AbstractView;
use App\Http\Controllers\Controller;
use App\Http\Requests\Title\TitleRequest;
use App\Services\Title\TitleService;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class TitleController extends Controller
{
    private AbstractView $abstract;
    private TitleService $titleService;

    public function __construct(TitleService $titleService)
    {
        parent::__construct();
        $this->titleService = $titleService;
        $this->abstract = new AbstractView();
        $this->abstract->setTitle();
    }

    public function index()
    {
        try {
            $title = $this->titleService->all();
            return view($this->abstract->index, compact('title'));
        } catch (Exception $e) {
            $this->ops($e);
            return redirect()->back();
        }
    }

    public function create()
    {
        try {
            $qtdMax = 4; // array
            $data = $this->titleService->all();
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

    public function store(TitleRequest $request): RedirectResponse
    {
        try {
            DB::beginTransaction();
            $this->titleService->create($request->validated());
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
            $title = $this->titleService->findOrFail($id);
            return view($this->abstract->show, compact('title'));
        } catch (Exception $e) {
            $this->error($this->abstract->title);
            return redirect()->back();
        }
    }

    public function edit(string $id)
    {
        try {
            $title = $this->titleService->findOrFail($id);
            return view($this->abstract->edit, compact('title'));
        } catch (Exception $e) {
            $this->error($this->abstract->title);
            return redirect()->back();
        }
    }

    public function update(TitleRequest $request, $id): RedirectResponse
    {
        try {
            DB::beginTransaction();
            $this->titleService->update($id, $request->validated());
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
            $this->titleService->delete($id);
            DB::commit();
            $this->successDelete($this->abstract->title);
            return redirect()->route($this->abstract->index);
        } catch (Exception $e) {
            DB::rollBack();
            $this->errorMsg($e);
            return redirect()->back();
        }
    }
}
