<?php

namespace App\Services;

use App\Interfaces\LandingInterface;
use Illuminate\Support\Facades\Http;

class LandingServices implements LandingInterface
{
    private $url = 'http://deskservice-zetta.onrender.com//api/v1';

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