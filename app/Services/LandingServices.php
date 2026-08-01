<?php

namespace App\Services;

use App\Interfaces\LandingInterface;
use Illuminate\Support\Facades\Http;

class LandingService implements LandingInterface
{
    private $url = 'http://127.0.0.1:8000/api/v1';

    public function enviarContacto(array $datos)
    {
        return Http::post(
            $this->url.'/contact-messages/',
            $datos
        );
    }

    public function solicitarServicio(array $datos)
    {
        return Http::post(
            $this->url.'/service-requests/',
            $datos
        );
    }
}