<?php

namespace App\Http\Controllers;

use App\AbstractView\AbstractView;
use App\Http\Controllers\CollectionsImages\CollectionsImagesController;
use App\Models\Admin;
use App\Models\Carousel\Carousel;
use App\Models\Contact\Contact;
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
use App\Services\CollectionsImages\CollectionsImagesService;
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
        //MESSAGES
        $this->MSG_ERROR = ' Página não encontrada.';
        $this->MSG_REGISTER_SUCCESS = ' Cadastrado com Sucesso.';
        $this->MSG_EDITING_SUCCESS = ' Editado com Suecesso.';
        $this->MSG_OPS = ' Ops, Algo deu errado.';
        $this->MSG_DELETE = ' Deletado com sucesso';

    }

    public function shareClientData($clientId)
    {
        $navbarService = app(\App\Services\Navbar\NavbarService::class);
        $topbarService = app(\App\Services\Topbar\TopbarService::class);
        $sectionOneService = app(\App\Services\SectionOne\SectionOneService::class);
        $sectionThreeService = app(\App\Services\SectionThree\SectionThreeService::class);
        $progressService = app(\App\Services\Progress\ProgressService::class);
        $scoreService = app(\App\Services\Score\ScoreService::class);
        $sectionFourService = app(\App\Services\SectionFour\SectionFourService::class);
        $titleService = app(\App\Services\Title\TitleService::class);
        $sectionFiveService = app(\App\Services\SectionFive\SectionFiveService::class);
        $collectionsImagesService = app(CollectionsImagesService::class);
        $sectionSixService = app(\App\Services\SectionSix\SectionSixService::class);
        $sectionSevenService = app(\App\Services\SectionSeven\SectionSevenService::class);
        $contactService = app(\App\Services\Contact\ContactService::class);

        \Illuminate\Support\Facades\View::share([
            'navbar' => $navbarService->all($clientId),
            'topbar' => $topbarService->all($clientId),
            'sectionone' => $sectionOneService->all($clientId),
            'sectionthree' => $sectionThreeService->all($clientId),
            'progress' => $progressService->all($clientId),
            'score' => $scoreService->all($clientId),
            'sectionfour' => $sectionFourService->all($clientId),
            'title' => $titleService->all($clientId),
            'sectionfive' => $sectionFiveService->all($clientId),
            'carousel' => $collectionsImagesService->all($clientId),
            'sectionsix' => $sectionSixService->all($clientId),
            'sectionseven' => $sectionSevenService->all($clientId),
            'contact' => $contactService->all($clientId),
        ]);
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
