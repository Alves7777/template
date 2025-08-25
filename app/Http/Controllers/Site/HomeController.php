<?php

namespace App\Http\Controllers\Site;

use App\AbstractView\AbstractView;
use App\Http\Controllers\Controller;
use App\Models\Carousel\Carousel;
use App\Models\Client;
use App\Services\Contact\ContactService;
use App\Services\Score\ScoreService;
use App\Services\SectionFive\SectionFiveService;
use App\Services\SectionFour\SectionFourService;
use App\Services\SectionTwo\SectionTwoService;
use App\Services\Title\TitleService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    private ScoreService $scoreService;
    private SectionFourService $sectionFourService;
    private SectionTwoService $sectionTwoService;
    private TitleService $titleService;
    private SectionFiveService $sectionFiveService;
    private ContactService $contactService;
    private int $clientId;

    public function __construct(
        ScoreService $scoreService,
        SectionFourService $sectionFourService,
        SectionFiveService $sectionFiveService,
        TitleService $titleService,
        ContactService $contactService,
        SectionTwoService $sectionTwoService
    ) {
        parent::__construct();
        if (app()->runningInConsole() === false) {
            $this->resolveClientId();
        }
        $this->scoreService = $scoreService;
        $this->sectionFiveService = $sectionFiveService;
        $this->sectionFourService = $sectionFourService;
        $this->contactService = $contactService;
        $this->sectionTwoService = $sectionTwoService;
        $this->titleService = $titleService;
    }

    private function resolveClientId(): void
    {
        $slug = request()->segment(count(request()->segments()));
        $client = Client::whereSlug($slug)->first();
        if (!$client) {
            abort(404);
        }
        $this->clientId = $client->id;
    }

    public function index()
    {
        $abstractView = new AbstractView();

        // Seção 2 / Consumo da API
        $getSectionTwo = $this->sectionTwoService->getSlug($this->clientId);

        // Contagem
        $getScore = $this->scoreService->getSlug($this->clientId);

        // Seção 4
        $getSectionFour = $this->sectionFourService->getSlug($this->clientId);

        // Títulos
        $getTitle = $this->titleService->getSlug($this->clientId);
        $titles = $abstractView->loopThroughArray($getTitle);
        $title = $abstractView->getInfoFromArray($getTitle,
            1, 'color_title',
            1, 'title',
            1, 'text',
            2, 'color_title',
            2, 'title',
            2, 'text');

        // Seção 5
        $getSectionFive = $this->sectionFiveService->all();
        $sectionFive = $abstractView->loopThroughArray($getSectionFive);
        $listUnique = $abstractView->getInfoFromArray($getSectionFive,
            1, 'background',
            1, 'image',
            2, 'image',
            3, 'image',
            4, 'image',
            5, 'image');

        // Carrossel
        $collections = Carousel::all();
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

        // Contato
        $iframe = $this->contactService->getSlug($this->clientId);

        return view('site.home', compact(
            'getSectionFour',
            'getSectionTwo',
            'getScore',
            'titles',
            'listUnique',
            'sectionFive',
            'title',
            'getCollections',
            'listCollections',
            'iframe'
        ));
    }

    /**
     * Retorna dados do cliente pelo slug
     * @param string $slug
     * @return Client|null
     */
    public function getSlug(string $slug): ?Client
    {
        return Client::whereSlug($slug)->first();
    }
}
