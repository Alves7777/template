<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\ApisController;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    private ApisController $apiController;

    public function __construct(ApisController $apiController)
    {
        parent::__construct();
        $this->apiController = $apiController;
    }

    public function index()
    {
        $getSection_0 = $this->apiController->ApiSectionTwoGet()[0];

        $icon = $getSection_0['icon'];
        $colorIcon = $getSection_0['color_icon'];
        $url = $getSection_0['url'];
        $title = $getSection_0['title'];
        $description = $getSection_0['description'];

        $getSection_1 = $this->apiController->ApiSectionTwoGet()[1];

        $icon_1 = $getSection_1['icon'];
        $colorIcon_1 = $getSection_1['color_icon'];
        $url_1 = $getSection_1['url'];
        $title_1 = $getSection_1['title'];
        $description_1 = $getSection_1['description'];

        $getSection_2 = $this->apiController->ApiSectionTwoGet()[2];

        $icon_2 = $getSection_2['icon'];
        $colorIcon_2 = $getSection_2['color_icon'];
        $url_2 = $getSection_2['url'];
        $title_2 = $getSection_2['title'];
        $description_2 = $getSection_2['description'];

        $getSection_3 = $this->apiController->ApiSectionTwoGet()[3];

        $icon_3 = $getSection_3['icon'];
        $colorIcon_3 = $getSection_3['color_icon'];
        $url_3 = $getSection_3['url'];
        $title_3 = $getSection_3['title'];
        $description_3 = $getSection_3['description'];

        return view('site.home', compact(
            'icon', 'colorIcon', 'url', 'title', 'description',
            'icon_1', 'colorIcon_1', 'url_1', 'title_1', 'description_1',
            'icon_2', 'colorIcon_2', 'url_2', 'title_2', 'description_2',
            'icon_3', 'colorIcon_3', 'url_3', 'title_3', 'description_3'));
    }

}
