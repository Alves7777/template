<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Api\ApiSectionTwoController;
use App\Http\Controllers\Controller;
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
        $section_four_1 = $getSectionFour[0];

//      TÍTULOS
        $getTitle = $this->titleService->all();
        $title_1 = $getTitle[0];
        $title_2 = $getTitle[1];
        $title_3 = $getTitle[2];
        $title_4 = $getTitle[3];
        $title_5 = $getTitle[4];

        $getSectionFive = $this->sectionFiveService->all();
        $sectionFive = [
            1 => $getSectionFive[0],
            2 => $getSectionFive[1],
            3 => $getSectionFive[2],
            4 => $getSectionFive[3],
            5 => $getSectionFive[4],
        ];

        $section5_background = $sectionFive[1]['background'];
        $image_1 = $sectionFive[1]['image'];
        $image_2 = $sectionFive[2]['image'];
        $image_3 = $sectionFive[3]['image'];
        $image_4 = $sectionFive[4]['image'];
        $image_5 = $sectionFive[5]['image'];

        return view('site.home', compact('section_four_1', 'getSectionFour', 'getSectionTwo', 'getScore',
            'title_1', 'title_2', 'title_3', 'title_4', 'title_5', 'sectionFive','image_1','image_2','image_3','image_4','image_5',
            'section5_background'));
    }

}
