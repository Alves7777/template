<?php

namespace App\Models\Ecommerce\PagSeguro;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client as Guzzle;

class PagSeguro extends Model
{
    use HasFactory;

    public function generate()
    {
        $params = [
            'email' => config('pagseguro.email'),
            'token' => config('pagseguro.token'),
            'currency' => 'BRL',
            'itemId1' => '0001',
            'itemDescription1' => 'Produto PagSeguroI',
            'itemAmount1' => '99999.99',
            'itemQuantity1' => '1',
            'itemWeight1' => '1000',
            'itemId2' => '0002',
            'itemDescription2' => 'Produto PagSeguroII',
            'itemAmount2' => '99999.98',
            'itemQuantity2' => '2',
            'itemWeight2' => '750',
            'reference' => 'REF1234',
            'senderName' => 'Jose Comprador',
            'senderAreaCode' => '99',
            'senderPhone' => '99999999',
            'senderEmail' => 'comprador@uol.com.br',
            'shippingType' => '1',
            'shippingAddressStreet' => 'Av. PagSeguro',
            'shippingAddressNumber' => '9999',
            'shippingAddressComplement' => '99o andar',
            'shippingAddressDistrict' => 'Jardim Internet',
            'shippingAddressPostalCode' => '99999999',
            'shippingAddressCity' => 'Cidade Exemplo',
            'shippingAddressState' => 'SP',
            'shippingAddressCountry' => 'ATA',
        ];
//        $params = http_build_query($params);

//        $guzzle = new Guzzle;
//        $response = $guzzle->request('post', config('pagseguro.url_checkout_sandbox'), [
//            'query' => $params,
//        ]);
//
//        dd($response);

        $client = new Guzzle([
            'headers' => ['content-type' => 'application/json', 'Accept' => 'application/json']
        ]);
        $response = $client->request('post', config('pagseguro.url_checkout_sandbox'), [
            'json' => $params,
        ]);

        dd($response);
        return json_decode($response->getBody(), true);
//        $body = $response->getBody();
//        $contents = $body->getContents();
//
//        $xml = simplexml_load_string($contents);
//
//        $code = $xml->code;
//
//        return $code;
    }
}
