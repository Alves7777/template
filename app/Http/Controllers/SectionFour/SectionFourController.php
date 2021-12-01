<?php

namespace App\Http\Controllers\SectionFour;


use App\AbstractView\AbstractView;
use App\Http\Controllers\Controller;
use App\Http\Requests\SectionFour\SectionFourRequest;
use App\Services\SectionFour\SectionFourService;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class SectionFourController extends Controller
{
    private AbstractView $abstract;
    private SectionFourService $sectionFourService;

    public function __construct(SectionFourService $sectionFourService)
    {
        parent::__construct();
        $this->sectionFourService = $sectionFourService;
        $this->abstract = new AbstractView();
        $this->abstract->setSectionFour();
    }

    public function index()
    {
        try {
            $sectionfour = $this->sectionFourService->all();
            return view($this->abstract->index, compact('sectionfour'));
        } catch (Exception $e) {
            $this->ops($e);
            return redirect()->back();
        }
    }

    public function create()
    {
        try {
            $qtdMax = 5; // array
            $data = $this->sectionFourService->all();
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

    public function store(SectionFourRequest $request): RedirectResponse
    {
        try {

            // se o primeiro array estiver adicionado, o restante é null

            DB::beginTransaction();
            $this->sectionFourService->create($request->validated());
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
            $sectionfour = $this->sectionFourService->findOrFail($id);
            return view($this->abstract->show, compact('sectionfour'));
        } catch (Exception $e) {
            $this->error($this->abstract->title);
            return redirect()->back();
        }
    }

    public function edit(string $id)
    {
        try {
            $sectionfour = $this->sectionFourService->findOrFail($id);
            return view($this->abstract->edit, compact('sectionfour'));
        } catch (Exception $e) {
            $this->error($this->abstract->title);
            return redirect()->back();
        }
    }

    public function update(SectionFourRequest $request, $id): RedirectResponse
    {
        try {
            DB::beginTransaction();
            $this->sectionFourService->update($id, $request->validated());
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
            $this->sectionFourService->delete($id);
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
