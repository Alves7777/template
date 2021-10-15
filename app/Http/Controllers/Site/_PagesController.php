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
            $page = $this->pagesService->all();
            return view('site.page_1', compact('page'));
        } catch (Exception $e) {
            alert()->error('Ops', 'Algo deu errado.');
            return redirect()->back();
        }
    }

}
