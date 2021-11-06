<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;

class ApisController
{
//    O IDEAL É DEIXAR NO .ENV -> $responseGet = HTTP::get(env('APP_URL') . '/list')['data'];

    public function ApiFreightGet()
    {
        $responseGet = HTTP::get('http://127.0.0.1:8001/api/freight/list')['data'];

        return $responseGet;

    }
}
