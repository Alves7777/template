<?php

namespace App\Http\Controllers\SectionTwo;

use App\AbstractView\AbstractView;
use App\Http\Controllers\Controller;
use App\Http\Requests\SectionTwo\SectionTwoRequest;
use App\Services\SectionTwo\SectionTwoService;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class SectionTwoController extends Controller
{
    private AbstractView $abstract;
    private SectionTwoService $sectionTwoService;

    public function __construct(SectionTwoService $sectionTwoService)
    {
        parent::__construct();
        $this->sectionTwoService = $sectionTwoService;
        $this->abstract = new AbstractView();
        $this->abstract->setSectionTwo();
    }

    public function index()
    {
        try {
            $sectiontwo = $this->sectionTwoService->all();
            return view($this->abstract->index, compact('sectiontwo'));
        } catch (Exception $e) {
            $this->ops($e);
            return redirect()->back();
        }
    }

    public function create()
    {
        try {
            $qtdMax = 5; // array
            $data = $this->sectionTwoService->all();
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

    public function store(SectionTwoRequest $request): RedirectResponse
    {
        try {
            // se o primeiro array estiver adicionado, o restante é null
            DB::beginTransaction();
            $this->sectionTwoService->create($request->validated());
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
            $sectiontwo = $this->sectionTwoService->findOrFail($id);
            return view($this->abstract->show, compact('sectiontwo'));
        } catch (Exception $e) {
            $this->error($this->abstract->title);
            return redirect()->back();
        }
    }

    public function edit(string $id)
    {
        try {
            $sectiontwo = $this->sectionTwoService->findOrFail($id);
            return view($this->abstract->edit, compact('sectiontwo'));
        } catch (Exception $e) {
            $this->error($this->abstract->title);
            return redirect()->back();
        }
    }

    public function update(SectionTwoRequest $request, $id): RedirectResponse
    {
        try {
            DB::beginTransaction();
            $this->sectionTwoService->update($id, $request->validated());
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
            $this->sectionTwoService->delete($id);
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
