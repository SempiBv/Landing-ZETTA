<?php

namespace App\Http\Controllers;

class LandingController extends Controller
{

   public function inicio()
    {
        return view('home.index');
    }

    public function servicios()
    {
        return view('servicios.index', [
            'servicios' => config('landing.servicios'),

            'proceso' => config('landing.proceso'),

            'estadisticas'=> config('landing.estadisticas')
        ]);
    }

    public function nosotros()
    {
        return view('nosotros.index');
    }

    public function faq()
    {
        return view('faq.index', [

            'preguntas' => config('landing.faq')

        ]);
    }

    public function contacto()
    {
        return view('contacto.index');
    }

    public function cotizacion()
    {
        return view('cotizacion.index',[

            'tiposServicio' => config('landing.tipos_servicio')

        ]);
    }

}