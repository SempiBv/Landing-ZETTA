<?php

namespace App\Http\Controllers;

use App\Interfaces\LandingInterface;
use App\Services\LandingService;
use App\Services\LandingServices;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    // private $landingService;

    public function __construct(protected LandingServices $landingService){
        $this->landingService = $landingService;
    }

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
        return view('layouts.nosotros.index');
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

    public function enviarContacto(Request $request){
        $respuesta = $this->landingService->enviarContacto(
            $request->all()
        );

        if($respuesta->successful())
        {
            return back()->with('success','Mensaje enviado');
        }

        return back()->with('error','Error al enviar');
    }

    public function solicitarServicio(Request $request){
        $respuesta = $this->landingService
                        ->solicitarServicio($request->all());

        if($respuesta->successful())
        {
            return back()->with('success','Solicitud enviada');
        }

        return back()->with('error','Error al enviar');
    }

}