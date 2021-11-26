<?php

namespace App\Http\Controllers\SectionThree;


use App\AbstractView\AbstractView;
use App\Http\Controllers\Controller;
use App\Http\Requests\SectionThree\SectionThreeRequest;
use App\Services\SectionThree\SectionThreeService;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class SectionThreeController extends Controller
{
    private AbstractView $abstract;
    private SectionThreeService $sectionThreeService;

    public function __construct(SectionThreeService $sectionThreeService)
    {
        parent::__construct();
        $this->sectionThreeService = $sectionThreeService;
        $this->abstract = new AbstractView();
        $this->abstract->setSectionThree();
    }

    public function index()
    {
        try {
            $sectionthree = $this->sectionThreeService->all();
            return view($this->abstract->index, compact('sectionthree'));
        } catch (Exception $e) {
            $this->ops($e);
            return redirect()->back();
        }
    }

    public function create()
    {
        try {
            $qtdMax = 0; // array
            $data = $this->sectionThreeService->all();
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

    public function store(SectionThreeRequest $request): RedirectResponse
    {
        try {
            DB::beginTransaction();
            $this->sectionThreeService->create($request->validated());
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
            $sectionThree = $this->sectionThreeService->findOrFail($id);
            return view($this->abstract->show, compact('sectionThree'));
        } catch (Exception $e) {
            $this->error($this->abstract->title);
            return redirect()->back();
        }
    }

    public function edit(string $id)
    {
        try {
            $sectionThree = $this->sectionThreeService->findOrFail($id);
            return view($this->abstract->edit, compact('sectionThree'));
        } catch (Exception $e) {
            $this->error($this->abstract->title);
            return redirect()->back();
        }
    }

    public function update(SectionThreeRequest $request, $id): RedirectResponse
    {
        try {
            DB::beginTransaction();
            $this->sectionThreeService->update($id, $request->validated());
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
            $this->sectionThreeService->delete($id);
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
