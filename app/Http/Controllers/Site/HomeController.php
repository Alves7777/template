<?php

namespace App\Http\Controllers\Site;

use App\AbstractView\AbstractView;
use App\Http\Controllers\Controller;
use App\Models\Carousel\Carousel;
use App\Models\Client\Client;
use App\Services\Contact\ContactService;
use App\Services\Score\ScoreService;
use App\Services\SectionFive\SectionFiveService;
use App\Services\SectionFour\SectionFourService;
use App\Services\SectionTwo\SectionTwoService;
use App\Services\Title\TitleService;

class HomeController extends Controller
{
    private ScoreService $scoreService;
    private SectionFourService $sectionFourService;
    private SectionTwoService $sectionTwoController;
    private TitleService $titleService;
    private SectionFiveService $sectionFiveService;
    private ContactService $contactService;

    public function __construct(ScoreService       $scoreService,
                                SectionFourService $sectionFourService,
                                SectionFiveService $sectionFiveService,
                                TitleService       $titleService,
                                ContactService     $contactService,
                                SectionTwoService  $sectionTwoController)
    {
        parent::__construct();
        $this->scoreService = $scoreService;
        $this->sectionFiveService = $sectionFiveService;
        $this->sectionFourService = $sectionFourService;
        $this->contactService = $contactService;
        $this->sectionTwoController = $sectionTwoController;
        $this->titleService = $titleService;
    }

    public function index($slug)
    {
        // Busca o client pelo slug
        $client = Client::where('slug', $slug)->firstOrFail();
        $clientId = $client->id;

//      SEÇÃO 2 / CONSUMO DA API
        $getSectionTwo = $this->sectionTwoController->all($clientId);

//      CONTAGEM
        $getScore = $this->scoreService->all($clientId);

//      SEÇÃO 4
        $getSectionFour = $this->sectionFourService->all($clientId);

        $abstractView = new AbstractView();
//      TÍTULOS
        $getTitle = $this->titleService->all($clientId);
        $titles = $abstractView->loopThroughArray($getTitle);

        $title = $abstractView->getInfoFromArray($getTitle,
            1, 'color_title',
            1, 'title',
            1, 'text',
            2, 'color_title',
            2, 'title',
            2, 'text');

        $getSectionFive = $this->sectionFiveService->all($clientId);
        $sectionFive = $abstractView->loopThroughArray($getSectionFive);

        $listUnique = $abstractView->getInfoFromArray($getSectionFive,
            1, 'background',
            1, 'image',
            2, 'image',
            3, 'image',
            4, 'image',
            5, 'image');

        // Atualiza para buscar apenas as imagens do cliente específico
        $collections = Carousel::where('client_id', $clientId)->get();
        $listCollections = $abstractView->loopThroughArray($collections);
        $getCollections = $abstractView->getInfoFromArray($listCollections,
            1, 'photo',
            2, 'photo',
            3, 'photo',
            4, 'photo',
            5, 'photo',
            6, 'photo',
            7, 'photo',
            8, 'photo',
            9, 'photo',
            10, 'photo');

        $iframe = $this->contactService->all($clientId);

        return view('site.home',
            compact('getSectionFour',
                'getSectionTwo',
                'getScore',
                'titles',
                'listUnique',
                'sectionFive',
                'title',
                'getCollections',
                'listCollections',
                'iframe')
        );
    }

}
