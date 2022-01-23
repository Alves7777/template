<?php

namespace App\Http\Controllers\SectionSix;

use App\AbstractView\AbstractView;
use App\Http\Controllers\Controller;
use App\Http\Requests\SectionSix\SectionSixRequest;
use App\Services\SectionSix\SectionSixService;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class SectionSixController extends Controller
{
    private AbstractView $abstract;
    private SectionSixService $sectionSixService;

    public function __construct(SectionSixService $sectionSixService)
    {
        parent::__construct();
        $this->sectionSixService = $sectionSixService;
        $this->abstract = new AbstractView();
        $this->abstract->setSectionSix();
    }

    public function index()
    {
        try {
            $sectionsix = $this->sectionSixService->all();
            return view($this->abstract->index, compact('sectionsix'));
        } catch (Exception $e) {
            $this->ops($e);
            return redirect()->back();
        }
    }

    public function create()
    {
        try {
            $qtdMax = 3; // array
            $data = $this->sectionSixService->all();
            $this->abstract->getValidation($data, $qtdMax);
            return view($this->abstract->create);
        } catch (\ErrorException $e) {
            alert()->warning('Você não pode adicionar mais ' . $this->abstract->title);
            return redirect()->back();
        } catch (\Exception $e) {
            alert()->error($e->getMessage());
            return redirect()->back();
        }
    }

    public function store(SectionSixRequest $request): RedirectResponse
    {
        try {
            // se o primeiro array estiver adicionado, o restante é null
            DB::beginTransaction();
            $this->sectionSixService->create($request->validated());
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
            $sectionsix = $this->sectionSixService->findOrFail($id);
            return view($this->abstract->show, compact('sectionsix'));
        } catch (Exception $e) {
            $this->error($this->abstract->title);
            return redirect()->back();
        }
    }

    public function edit(string $id)
    {
        try {
            $sectionsix = $this->sectionSixService->findOrFail($id);
            return view($this->abstract->edit, compact('sectionsix'));
        } catch (Exception $e) {
            $this->error($this->abstract->title);
            return redirect()->back();
        }
    }

    public function update(SectionSixRequest $request, $id): RedirectResponse
    {
        try {
            DB::beginTransaction();
            $this->sectionSixService->update($id, $request->validated());
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
            $this->sectionSixService->delete($id);
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
