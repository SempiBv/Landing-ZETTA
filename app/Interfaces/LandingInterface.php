<?php

namespace App\Interfaces;

interface LandingInterface
{
    public function enviarContacto(array $datos);

    public function solicitarServicio(array $datos);
}