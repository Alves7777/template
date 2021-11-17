<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class ApisController
{

    function __construct()
    {
        $this->URL = env('APP_URL');
        //MESSAGES
        $this->MSG_ERROR = 'Página não encontrada.';
        $this->MSG_REGISTER_SUCCESS = 'Cadastrado com Sucesso.';
        $this->MSG_EDITING_SUCCESS = 'Editado com Suecesso.';
        //ROUTES GET
        $this->ROUTE_SECTIONTWO_GET = 'section-two/list';
        //ROUTES POSTS
         $this->ROUTE_SECTIONTWO_POST = 'section-two/add';
        //ROUTES EDIT
        $this->ROUTE_SECTIONTWO_PUT = 'section-two/edit{id}';
        //ROUTES DELETE
        $this->ROUTE_SECTIONTWO_DELETE = 'section-two/delete{id}';
        //RESPONSE GET
        $this->RESPONSE_SECTIONTWO_GET = HTTP::get($this->URL . $this->ROUTE_SECTIONTWO_GET)['data'];
        // CLIENT
        $this->CLIENT = new Client(['headers' => ['content-type' => 'application/json', 'Accept' => 'application/json']]);

    }

//    public function ApiSectionTwoPost($request)
//    {
//        $url = $this->URL . $this->ROUTE_SECTIONTWO_POST;
//        $client = new Client([
//            'headers' => ['content-type' => 'application/json', 'Accept' => 'application/json']
//        ]);
//        $response = $client->request('POST', $url, [
//            'json' => $request->all()
//        ]);
//
//        return json_decode($response->getBody(), true);
//
//    }

    public function ApiSectionTwoPut($id, $request)
    {
        $url = $this->URL . $this->ROUTE_SECTIONTWO_PUT;;
        $client = new Client([
            'headers' => ['content-type' => 'application/json', 'Accept' => 'application/json']
        ]);
        $response = $client->request('PUT', $url, [
            'json' => $request->findOrFail($id)
        ]);

        return json_decode($response->getBody(), true);

    }


}
