<?php

namespace App\Http\Controllers\SectionOne;

use App\Http\Controllers\Controller;
use App\Http\Requests\SectionOne\SectionOneRequest;
use App\Models\SectionOne\SectionOne;
use App\Services\SectionOne\SectionOneService;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SectionOneController extends Controller
{
    private SectionOne $sectionOne;
    private SectionOneService $sectionOneService;
    private string $title = 'Seção 1';
    private string $route_index = 'sectionone.index';

    public function __construct(SectionOne $sectionOne, SectionOneService $sectionOneService)
    {
        $this->sectionOne = $sectionOne;
        $this->sectionOneService = $sectionOneService;
    }

    public function index()
    {
        try {
            $sectionone = $this->sectionOneService->all();
            return view($this->route_index, compact('sectionone'));
        } catch (Exception $e) {
            alert()->error('Ops', 'Algo deu errado.');
            return redirect()->back();
        }
    }

    public function create()
    {
        try {
            return view('sectionone.create');
        } catch (Exception $e) {
            alert()->error($this->title . " não encontrada.");
            return redirect()->back();
        }
    }

    public function store(SectionOneRequest $request): RedirectResponse
    {
        try {
            $this->sectionOneService->create($request->validated());
            alert()->success($this->title . ' Cadastrado com Sucesso.');
            return redirect()->route($this->route_index);
        } catch (Exception $e) {
            alert()->error($e->getMessage());
            return redirect()->back();
        }
    }

    public function show($id)
    {
        try {
            $sectionone = $this->sectionOneService->findOrFail($id);
            return view('sectionone.show', compact('sectionone'));
        } catch (Exception $e) {
            alert()->error($this->title . " não encontrada.");
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        try {
            $sectionone = $this->sectionOneService->findOrFail($id);
            return view('sectionone.edit', compact('sectionone'));
        } catch (Exception $e) {
            alert()->error($this->title . " não encontrada.");
            return redirect()->back();
        }
    }

    public function update(SectionOneRequest $request, $id): RedirectResponse
    {
        try {
            $this->sectionOneService->update($id, $request->validated());
            alert()->success($this->title . " editado com sucesso.");
            return redirect()->route($this->route_index);
        } catch (Exception $e) {
            alert()->error($e->getMessage());
            return redirect()->back();
        }
    }

    public function destroy($id): RedirectResponse
    {
        try {
            $this->sectionOneService->delete($id);
            alert()->success($this->title . " excluído com sucesso.");
            return redirect()->route($this->route_index);
        } catch (Exception $e) {
            alert()->error($e->getMessage());
            return redirect()->back();
        }
    }
}
