<?php

namespace App\Http\Controllers\SectionFive;

use App\AbstractView\AbstractView;
use App\Http\Controllers\Controller;
use App\Http\Requests\SectionFive\SectionFiveRequest;
use App\Services\SectionFive\SectionFiveService;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class SectionFiveController extends Controller
{
    private AbstractView $abstract;
    private SectionFiveService $sectionFiveService;

    public function __construct(SectionFiveService $sectionFiveService)
    {
        parent::__construct();
        $this->sectionFiveService = $sectionFiveService;
        $this->abstract = new AbstractView();
        $this->abstract->setSectionFive();
    }

    public function index()
    {
        try {
            $sectionfive = $this->sectionFiveService->all();
            return view($this->abstract->index, compact('sectionfive'));
        } catch (Exception $e) {
            $this->ops($e);
            return redirect()->back();
        }
    }

    public function create()
    {
        try {
            $qtdMax = 4; // array
            $data = $this->sectionFiveService->all();
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

    public function store(SectionFiveRequest $request): RedirectResponse
    {
        try {
            // se o primeiro array estiver adicionado, o restante é null
            DB::beginTransaction();
            $this->sectionFiveService->create($request->validated());
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
            $sectionfive = $this->sectionFiveService->findOrFail($id);
            return view($this->abstract->show, compact('sectionfive'));
        } catch (Exception $e) {
            $this->error($this->abstract->title);
            return redirect()->back();
        }
    }

    public function edit(string $id)
    {
        try {
            $sectionfive = $this->sectionFiveService->findOrFail($id);
            return view($this->abstract->edit, compact('sectionfive'));
        } catch (Exception $e) {
            $this->error($this->abstract->title);
            return redirect()->back();
        }
    }

    public function update(SectionFiveRequest $request, $id): RedirectResponse
    {
        try {
            DB::beginTransaction();
            $this->sectionFiveService->update($id, $request->validated());
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
            $this->sectionFiveService->delete($id);
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
