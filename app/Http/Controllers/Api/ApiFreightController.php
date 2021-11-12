<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApisController;
use App\Http\Controllers\Controller;
use Facade\FlareClient\Http\Response;
use Illuminate\Support\Facades\Http;

class ApiFreightController extends ApisController
{

    public function getFreight()
    {
        $responseGet = $this->ApiFreightGet();
//        $plate = $responseGet['plate'];
//        $vehicleOwner = $responseGet['vehicle_owner'];
//        $startDate = $responseGet['start_date'];
//        $costFreight = $responseGet['cost_of_freight'];
//        $endDate = $responseGet['end_date'];
//        $status = $responseGet['status'];
//        dd($responseGet, $res);
        return view('site.contact', compact('responseGet'));

//        $res = ['responseGet'=> $responseGet['data']];
//        return view('site.contact', $res);
    }

    public function postFreight()
    {
        $responsePost = HTTP::post('http://127.0.0.1:8001/api/freight/add', [
            'plate' => 'CCC1010',
            'vehicle_owner' => 'TESTE alves',
            'cost_of_freight' => '100',
            'start_date' => '20/11/2021',
            'end_date' => '20/11/2021',
            'status' => 'started',
        ]);

        if ($responsePost->clientError() || $responsePost->serverError()) {
            dd('Erro na requisição...');
        }

        return $responsePost->json();

    }

}
