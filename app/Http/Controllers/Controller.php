<?php

namespace App\Http\Controllers;

use App\AbstractView\AbstractView;
use App\Http\Controllers\CollectionsImages\CollectionsImagesController;
use App\Models\Admin;
use App\Models\Carousel\Carousel;
use App\Models\NavBar\Navbar;
use App\Models\Pages\Pages;
use App\Models\Progress\Progress;
use App\Models\Score\Score;
use App\Models\SectionFive\SectionFive;
use App\Models\SectionFour\SectionFour;
use App\Models\SectionOne\SectionOne;
use App\Models\SectionSeven\SectionSeven;
use App\Models\SectionSix\SectionSix;
use App\Models\SectionThree\SectionThree;
use App\Models\Title\Title;
use App\Models\Topbar\Topbar;
use App\Services\SectionThree\SectionThreeService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private SectionThreeService $sectionThreeService;

    public function __construct()
    {
        $abstract = new AbstractView();
        $view = $abstract::VIEW;

        View::share([
            $view[1] => Navbar::all(),
            $view[2] => Topbar::all(),
            $view[3] => SectionOne::all(),
            $view[4] => Pages::all(),
            $view[5] => Admin::all(),
            $view[6] => SectionThree::all(),
            $view[7] => Progress::all(),
            $view[8] => Score::all(),
            $view[9] => SectionFour::all(),
            $view[10] => Title::all(),
            $view[11] => SectionFive::all(),
            $view[12] => Carousel::all(),
            $view[13] => SectionSix::all(),
            $view[14] => SectionSeven::all(),
        ]);

        //MESSAGES
        $this->MSG_ERROR = ' Página não encontrada.';
        $this->MSG_REGISTER_SUCCESS = ' Cadastrado com Sucesso.';
        $this->MSG_EDITING_SUCCESS = ' Editado com Suecesso.';
        $this->MSG_OPS = ' Ops, Algo deu errado.';
        $this->MSG_DELETE = ' Deletado com sucesso';

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
