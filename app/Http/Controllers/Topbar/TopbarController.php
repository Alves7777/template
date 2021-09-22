<?php

namespace App\Http\Controllers\Topbar;

use App\Http\Controllers\Controller;
use App\Http\Requests\Topbar\TopbarRequest;
use App\Models\Topbar\Topbar;
use App\Services\Topbar\TopbarService;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TopbarController extends Controller
{
    private Topbar $topbar;
    private TopbarService $topbarService;
    private string $title = 'Topbar';
    private string $route_index = 'topbar.index';

    public function __construct(Topbar $topbar, TopbarService $topbarService)
    {
        $this->topbar = $topbar;
        $this->topbarService = $topbarService;
    }

    public function index()
    {
//        try {
            $topbar = $this->topbarService->all();
            return view($this->route_index, compact('topbar', 'topbar'));
//        } catch (Exception $e) {
//            alert()->error('Ops', 'Algo deu errado.');
//            return redirect()->back();
//        }
    }

    public function create()
    {
        try {
        return view('topbar.create');
    } catch (Exception $e) {
        alert()->error($this->title . " não encontrada.");
        return redirect()->back();
    }
    }

    public function store(TopbarRequest $request): RedirectResponse
    {
        try {
            $this->topbarService->create($request->validated());
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
            $topbar = $this->topbarService->findOrFail($id);
            return view('topbar.show', compact('topbar'));
        } catch (Exception $e) {
            alert()->error($this->title . " não encontrada.");
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        try {
            $topbar = $this->topbarService->findOrFail($id);
            return view('topbar.show', compact('topbar'));
        } catch (Exception $e) {
            alert()->error($this->title . " não encontrada.");
            return redirect()->back();
        }
    }

    public function update(TopbarRequest $request, $id): RedirectResponse
    {
        try {
            $this->topbarService->update($id, $request->validated());
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
            $this->topbarService->delete($id);
            alert()->success($this->title . " excluído com sucesso.");
            return redirect()->route($this->route_index);
        } catch (Exception $e) {
            alert()->error($e->getMessage());
            return redirect()->back();
        }
    }
}
