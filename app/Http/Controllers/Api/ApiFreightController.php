<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApisController;
use App\Http\Controllers\Controller;
use Facade\FlareClient\Http\Response;
use Illuminate\Support\Facades\Http;

class ApiFreightController
{
    public ApisController $apisController;

    public function __construct(ApisController $apiController)
    {
        $this->apiController = $apiController;
    }
    const PREFIX = [
        'error' => 'Página não encontrada.',
        'registeredSuccess' => 'Cadastrado com Sucesso.',
        'editedSuccess' => 'Editado com Sucesso.'

    ];

    public function getFreight($plate, $vehicleOwner, $startDate, $costFreight, $endDate, $status)
    {
        $method = 'testinho';

        $data['plate'] = $plate;
        $data['vehicle_owner'] = $vehicleOwner;
        $data['start_date'] = $startDate;
        $data['cost_of_freight'] = $costFreight;
        $data['end_date'] = $endDate;
        $data['status'] = $status;

        $res = $this->apiController->makeRequest($method, $data);

        return json_decode($res->getBody(), true);

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

    public function test() {
        $res = $this->makeRequest($method, $data);
        return json_decode($res->getBody(), true);
    }
}
