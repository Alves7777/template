<?php

namespace App\Http\Controllers\Navbar;

use App\Http\Controllers\Controller;
use App\Http\Requests\Navbar\NavbarRequest;
use App\Models\NavBar\Navbar;
use App\Services\Navbar\NavbarService;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    private Navbar $navbar;
    private NavbarService $navbarService;
    private string $title = 'NavBar';
    private string $route_index = 'navbar.index';

    public function __construct(Navbar $navbar, NavbarService $navbarService)
    {
        $this->navbar = $navbar;
        $this->navbarService = $navbarService;
    }

    public function index()
    {
        try {
            $navbar = $this->navbarService->all();
            return view($this->route_index, compact('navbar', 'navbar'));
        } catch (Exception $e) {
            alert()->error('Ops', 'Algo deu errado.');
            return redirect()->back();
        }
    }

    public function create()
    {
        try {
        return view('navbar.create');
    } catch (Exception $e) {
        alert()->error($this->title . " não encontrada.");
        return redirect()->back();
    }
    }

    public function store(NavbarRequest $request): RedirectResponse
    {
        try {
            $this->navbarService->create($request->validated());
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
            $navbar = $this->navbarService->findOrFail($id);
            return view('navbar.show', compact('navbar'));
        } catch (Exception $e) {
            alert()->error($this->title . " não encontrada.");
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        try {
            $navbar = $this->navbarService->findOrFail($id);
            return view('navbar.edit', compact('navbar'));
        } catch (Exception $e) {
            alert()->error($this->title . " não encontrada.");
            return redirect()->back();
        }
    }

    public function update(NavbarRequest $request, $id): RedirectResponse
    {
        try {
            $this->navbarService->update($id, $request->validated());
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
            $this->navbarService->delete($id);
            alert()->success($this->title . " excluído com sucesso.");
            return redirect()->route($this->route_index);
        } catch (Exception $e) {
            alert()->error($e->getMessage());
            return redirect()->back();
        }
    }
}
