<?php

namespace App\Traits;

trait HasClientId
{
    protected function getClientId($clientId = null)
    {
        if ($clientId) {
            return $clientId;
        }
        $user = auth()->user();
        if ($user && isset($user->client_id)) {
            return $user->client_id;
        }
        throw new \Exception('Client ID não encontrado');
    }
}
