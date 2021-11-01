<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Services\Pages\PagesService;
use Exception;

class _PagesController extends Controller
{
    private PagesService $pagesService;

    public function __construct(PagesService $pagesService)
    {
        parent::__construct();
        $this->pagesService = $pagesService;
    }

    public function page_1()
    {
        try {
            $page = $this->pagesService->page_1();
            return view('site.page_1', compact('page'));
        } catch (Exception $e) {
            alert()->error('Ops', 'Algo deu errado.');
            return redirect()->back();
        }
    }

    public function page_2()
    {
        try {
            $page = $this->pagesService->page_2();
            return view('site.page_1', compact('page'));
        } catch (Exception $e) {
            alert()->error('Ops', 'Algo deu errado.');
            return redirect()->back();
        }
    }

    public function page_3()
    {
        try {
            $page = $this->pagesService->page_3();
            return view('site.page_1', compact('page'));
        } catch (Exception $e) {
            alert()->error('Ops', 'Algo deu errado.');
            return redirect()->back();
        }
    }

    public function page_4()
    {
        try {
            $page = $this->pagesService->page_4();
            return view('site.page_1', compact('page'));
        } catch (Exception $e) {
            alert()->error('Ops', 'Algo deu errado.');
            return redirect()->back();
        }
    }

    public function page_5()
    {
        try {
            $page = $this->pagesService->page_5();
            return view('site.page_1', compact('page'));
        } catch (Exception $e) {
            alert()->error('Ops', 'Algo deu errado.');
            return redirect()->back();
        }
    }

    public function page_6()
    {
        try {
            $page = $this->pagesService->page_6();
            return view('site.page_1', compact('page'));
        } catch (Exception $e) {
            alert()->error('Ops', 'Algo deu errado.');
            return redirect()->back();
        }
    }

    public function page_7()
    {
        try {
            $page = $this->pagesService->page_7();
            return view('site.page_1', compact('page'));
        } catch (Exception $e) {
            alert()->error('Ops', 'Algo deu errado.');
            return redirect()->back();
        }
    }

    public function page_8()
    {
        try {
            $page = $this->pagesService->page_8();
            return view('site.page_1', compact('page'));
        } catch (Exception $e) {
            alert()->error('Ops', 'Algo deu errado.');
            return redirect()->back();
        }
    }

    public function page_9()
    {
        try {
            $page = $this->pagesService->page_9();
            return view('site.page_1', compact('page'));
        } catch (Exception $e) {
            alert()->error('Ops', 'Algo deu errado.');
            return redirect()->back();
        }
    }

    public function page_10()
    {
        try {
            $page = $this->pagesService->page_10();
            return view('site.page_1', compact('page'));
        } catch (Exception $e) {
            alert()->error('Ops', 'Algo deu errado.');
            return redirect()->back();
        }
    }

    public function page_11()
    {
        try {
            $page = $this->pagesService->page_11();
            return view('site.page_1', compact('page'));
        } catch (Exception $e) {
            alert()->error('Ops', 'Algo deu errado.');
            return redirect()->back();
        }
    }
}
