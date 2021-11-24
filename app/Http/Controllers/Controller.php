<?php

namespace App\Http\Controllers;

use App\AbstractView\AbstractView;
use App\Http\Controllers\SectionThree\SectionThreeController;
use App\Models\NavBar\Navbar;
use App\Models\Pages\Pages;
use App\Models\Progress\Progress;
use App\Models\SectionOne\SectionOne;
use App\Models\SectionThree\SectionThree;
use App\Models\Topbar\Topbar;
use App\Services\SectionThree\SectionThreeService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private SectionThreeService $sectionThreeService;

    public function __construct()
    {
        View::share('navbar', Navbar::all());
        View::share('topbar', Topbar::all());
        View::share('sectionone', SectionOne::all());
        View::share('page_1', Pages::all());
        View::share(AbstractView::VIEWS['Seção 3'], SectionThree::all());
        View::share(AbstractView::VIEWS['Progresso'], Progress::all());

        //MESSAGES
        $this->MSG_ERROR = 'Página não encontrada.';
        $this->MSG_REGISTER_SUCCESS = 'Cadastrado com Sucesso.';
        $this->MSG_EDITING_SUCCESS = 'Editado com Suecesso.';
        $this->MSG_OPS = 'Ops, Algo deu errado.';
        $this->MSG_DELETE = 'Deletado com sucesso';

    }

    public function ops($e)
    {
        return alert()->error($this->MSG_OPS);
    }

    public function error($title)
    {
        return alert()->error($title . $this->MSG_ERROR);
    }

    public function successRegister($title)
    {
        return alert()->success($title . $this->MSG_REGISTER_SUCCESS);
    }

    public function successEditing($title)
    {
        return alert()->success($title . $this->MSG_EDITING_SUCCESS);
    }

    public function successDelete($title)
    {
        return alert()->success($title . $this->MSG_DELETE);
    }

    public function errorMsg($e)
    {
        return alert()->error($e->getMessage());
    }


}
