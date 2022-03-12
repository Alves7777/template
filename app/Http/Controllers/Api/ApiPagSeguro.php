<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Ecommerce\Product\ProductController;
use GuzzleHttp\Client;

class ApiPagSeguro
{
    public $token;

    public function __construct()
    {
        $this->token = new ProductController();
        $this->tokenGet = $this->token->getCredential()->getToken();
    }

    public function charges()
    {
        try {
            $http = new Client([
                'headers' => [
                    'content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $this->tokenGet
                ]
            ]);
            $response = $http->request('POST', "https://sandbox.api.pagseguro.com/orders", [
                'json' => json_decode('
{
    "reference_id": "ex-00002",
    "customer": {
        "name": "Jose da Silva",
        "email": "email@test.com",
        "tax_id": "12345678909",
        "phones": [
            {
                "country": "55",
                "area": "11",
                "number": "999999999",
                "type": "MOBILE"
            }
        ]
    },
    "items": [
        {
            "reference_id": "referencia do item",
            "name": "nome do item",
            "quantity": 1,
            "unit_amount": 5000
        }
    ],
    "qr_code": {
        "amount": {
            "value": 5000
        }
    },
    "shipping": {
        "address": {
            "street": "Avenida Brigadeiro Faria Lima",
            "number": "1384",
            "complement": "apto 12",
            "locality": "Pinheiros",
            "city": "São Paulo",
            "region_code": "SP",
            "country": "BRA",
            "postal_code": "01452002"
        }
    },
    "notification_urls": [
        "https://meusite.com/notificacoes"
    ],
    "charges": [
        {
            "reference_id": "referencia do pagamento",
            "description": "descricao do pagamento",
            "amount": {
                "value": 5000,
                "currency": "BRL"
            },
            "payment_method": {
                "type": "CREDIT_CARD",
                "installments": 2,
                "capture": true,
                "card": {
                    "number": "4111111111111111",
                    "exp_month": "12",
                    "exp_year": "2026",
                    "security_code": "123",
                    "holder": {
                        "name": "Jose da Silva"
                    },
                    "store": false
                }
            },
            "notification_urls": [
                "https://meusite.com/notificacoes"
            ]
        }
    ]
}
                ')
            ]);
            return $response->getBody();
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
}
