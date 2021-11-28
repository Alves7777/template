<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Services\Score\ScoreService;

class HomeController extends Controller
{
    private ScoreService $scoreService;
    private SiteHomeApi $siteHomeApi;

    public function __construct(ScoreService $scoreService, SiteHomeApi $siteHomeApi)
    {
        parent::__construct();
        $this->scoreService = $scoreService;
        $this->siteHomeApi = new SiteHomeApi();
        $this->siteHomeApi->getSectionTwo();
    }

    public function index()
    {
//      SEÇÃO 2 / CONSUMO DA API
        $sectionTwo_1 = $this->siteHomeApi->sectionTwo1;
        $sectionTwo_2 = $this->siteHomeApi->sectionTwo2;
        $sectionTwo_3 = $this->siteHomeApi->sectionTwo3;
        $sectionTwo_4 = $this->siteHomeApi->sectionTwo4;

//      CONTAGEM
        $getScore = $this->scoreService->all();

        $score_1 = $getScore[0];
        $score_2 = $getScore[1];
        $score_3 = $getScore[2];
        $score_4 = $getScore[3];

        return view('site.home', compact(
            'sectionTwo_1', 'sectionTwo_2', 'sectionTwo_3', 'sectionTwo_4', 'score_1', 'score_2', 'score_3', 'score_4'));
    }

}
