<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Api\ApiSectionTwoController;
use App\Http\Controllers\Controller;
use App\Services\Score\ScoreService;
use App\Services\SectionFour\SectionFourService;
use App\Services\Title\TitleService;

class HomeController extends Controller
{
    private ScoreService $scoreService;
    private SectionFourService $sectionFourService;
    private ApiSectionTwoController $apiSectionTwoController;
    private TitleService $titleService;

    public function __construct(ScoreService            $scoreService,
                                ApiSectionTwoController $apiSectionTwoController,
                                SectionFourService      $sectionFourService,
                                TitleService            $titleService)
    {
        parent::__construct();
        $this->scoreService = $scoreService;
        $this->sectionFourService = $sectionFourService;
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
        $section_four_1 = $getSectionFour[0];

//      TÍTULOS
        $getTitle = $this->titleService->all();
        $title_1 = $getTitle[0];
        $title_2 = $getTitle[1];
        $title_3 = $getTitle[2];
        $title_4 = $getTitle[3];
        $title_5 = $getTitle[4];

        return view('site.home', compact('section_four_1','getSectionFour', 'getSectionTwo', 'getScore',
            'title_1','title_2','title_3','title_4','title_5'));
    }

}
