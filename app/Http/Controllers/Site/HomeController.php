<?php

namespace App\Http\Controllers\Site;

use App\AbstractView\AbstractView;
use App\Http\Controllers\Api\ApiSectionTwoController;
use App\Http\Controllers\Controller;
use App\Models\Carousel\Carousel;
use App\Services\CollectionsImages\CollectionsImagesService;
use App\Services\Score\ScoreService;
use App\Services\SectionFive\SectionFiveService;
use App\Services\SectionFour\SectionFourService;
use App\Services\Title\TitleService;

class HomeController extends Controller
{
    private ScoreService $scoreService;
    private SectionFourService $sectionFourService;
    private ApiSectionTwoController $apiSectionTwoController;
    private TitleService $titleService;
    private SectionFiveService $sectionFiveService;

    public function __construct(ScoreService            $scoreService,
                                ApiSectionTwoController $apiSectionTwoController,
                                SectionFourService      $sectionFourService,
                                TitleService            $titleService,
                                SectionFiveService      $sectionFiveService)
    {
        parent::__construct();
        $this->scoreService = $scoreService;
        $this->sectionFourService = $sectionFourService;
        $this->sectionFiveService = $sectionFiveService;
        $this->apiSectionTwoController = $apiSectionTwoController;
        $this->titleService = $titleService;
    }

    public function index()
    {
//      SEÇÃO 2 / CONSUMO DA API
        $getSectionTwo = $this->apiSectionTwoController->RESPONSE_SECTIONTWO_GET;

//      CONTAGEM
        $getScore = $this->scoreService->all();

//      SEÇÃO 4
        $getSectionFour = $this->sectionFourService->all();

        $abstractView = new AbstractView();
//      TÍTULOS
        $getTitle = $this->titleService->all();
        $titles = $abstractView->loopThroughArray($getTitle);

        $title = $abstractView->getInfoFromArray($getTitle,
            1,'color_title',
            1,'title',
            1,'text',
            2,'color_title',
            2,'title',
            2,'text');

        $getSectionFive = $this->sectionFiveService->all();
        $sectionFive = $abstractView->loopThroughArray($getSectionFive);

        $listUnique = $abstractView->getInfoFromArray($getSectionFive,
            1, 'background',
            1, 'image',
            2, 'image',
            3, 'image',
            4, 'image',
            5, 'image');

        $collections = Carousel::all();
        $listCollections = $abstractView->loopThroughArray($collections);
        $getCollections = $abstractView->getInfoFromArray($listCollections,
            1,'photo',
            2, 'photo',
            3,'photo',
            4,'photo',
            5,'photo',
            6, 'photo',
            7,'photo',
            8,'photo',
            9,'photo',
            10,'photo');

        return view('site.home', compact( 'getSectionFour', 'getSectionTwo',
            'getScore', 'titles', 'listUnique','sectionFive', 'title', 'getCollections','listCollections'));
    }

}
