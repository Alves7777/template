<?php

namespace App\Http\Controllers\Score;

use App\AbstractView\AbstractView;
use App\Http\Controllers\Controller;
use App\Http\Requests\Score\ScoreRequest;
use App\Services\Score\ScoreService;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class ScoreController extends Controller
{
    private AbstractView $abstract;
    private ScoreService $scoreService;
    public string $type = AbstractView::VIEWS['Contagem'];

    public function __construct(ScoreService $scoreService)
    {
        parent::__construct();
        $this->scoreService = $scoreService;
        $this->abstract = new AbstractView();
        $this->abstract->setScore();
    }

    public function index()
    {
        try {

            $this->type = $this->scoreService->all();
            return view($this->abstract->index, compact(json_decode($this->type)));
        } catch (Exception $e) {
            $this->ops($e);
            return redirect()->back();
        }
    }

    public function create()
    {
        try {
            $qtdMax = 3; // array
            $data = $this->scoreService->all();
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

    public function store(ScoreRequest $request): RedirectResponse
    {
        try {
            DB::beginTransaction();
            $this->scoreService->create($request->validated());
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
            $score = $this->scoreService->findOrFail($id);
            return view($this->abstract->show, compact('score'));
        } catch (Exception $e) {
            $this->error($this->abstract->title);
            return redirect()->back();
        }
    }

    public function edit(string $id)
    {
        try {
            $score = $this->scoreService->findOrFail($id);
            return view($this->abstract->edit, compact('score'));
        } catch (Exception $e) {
            $this->error($this->abstract->title);
            return redirect()->back();
        }
    }

    public function update(ScoreRequest $request, $id): RedirectResponse
    {
        try {
            DB::beginTransaction();
            $this->scoreService->update($id, $request->validated());
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
            $this->scoreService->delete($id);
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
