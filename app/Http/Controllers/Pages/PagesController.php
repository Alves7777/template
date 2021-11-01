<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pages\PagesRequest;
use App\Models\Pages\Pages;
use App\Services\Pages\PagesService;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    private Pages $pages;
    private PagesService $pagesService;
    private string $title = 'Pages';
    private string $route_index = 'pages.index';

    public function  __construct(Pages $pages, PagesService $pagesService)
    {
        $this->pages = $pages;
        $this->pagesService = $pagesService;
    }

    public function index()
    {
//        try {
            $page = $this->pagesService->all();
            return view($this->route_index, compact('page'));
//        } catch (Exception $e) {
//            alert()->error('Ops', 'Algo deu errado.');
//            return redirect()->back();
//        }
    }

    public function create()
    {
        try {
            return view('pages.create');
        } catch (Exception $e) {
            alert()->error($this->title . " não encontrada.");
            return redirect()->back();
        }
    }

    public function store(PagesRequest $request): RedirectResponse
    {
//        try {
            $this->pagesService->create($request->validated());
            alert()->success($this->title . ' Cadastrado com Sucesso.');
            return redirect()->route($this->route_index);
//        } catch (Exception $e) {
//            alert()->error($e->getMessage());
//            return redirect()->back();
//        }
    }

    public function show($id)
    {
        try {
            $pages = $this->pagesService->findOrFail($id);
            return view('pages.show', compact('pages'));
        } catch (Exception $e) {
            alert()->error($this->title . " não encontrada.");
            return redirect()->back();
        }
    }

    public function edit(string $id)
    {
        try {
            $pages = $this->pagesService->findOrFail($id);
            return view('pages.edit', compact('pages'));
        } catch (Exception $e) {
            alert()->error($this->title . " não encontrada.");
            return redirect()->back();
        }
    }

    public function update(PagesRequest $request, $id): RedirectResponse
    {
        try {
            $this->pagesService->update($id, $request->validated());
            alert()->success($this->title . " editado com sucesso.");
            return redirect()->route($this->route_index);
        } catch (Exception $e) {
            alert()->error($e->getMessage());
            return redirect()->back();
        }
    }

    public function destroy(string $id): RedirectResponse
    {
        try {
            $this->pagesService->delete($id);
            alert()->success($this->title . " excluído com sucesso.");
            return redirect()->route($this->route_index);
        } catch (Exception $e) {
            alert()->error($e->getMessage());
            return redirect()->back();
        }
    }
}
