<?php

namespace App\Http\Controllers;

use App\Http\Requests\Api\SectionTwoRequest;
use GuzzleHttp\Client;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class ApisController
{

    public function ApiSectionTwoGet()
    {
        $responseGet = HTTP::get(env('APP_URL') . 'section-two/list')['data'];

        return $responseGet;

    }


}
