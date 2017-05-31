<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\section;
use App\Models\constant;

class landingController extends Controller
{
    //el Footer va en el layout!!
    //page_id = 1
    //Contiene Cabecera, Perfil, Noticias, Acerca, Testimonio, Servicios
    public function landing()
    {       
        $Cabecera = section::where('page_id', '1')->where('name', 'Cabecera')->first();
        $Perfil = section::where('page_id', '1')->where('name', 'Perfil')->first();
        $Noticias = section::where('page_id', '1')->where('name', 'Noticias')->first();
        $Acerca = section::where('page_id', '1')->where('name', 'Acerca')->first();
        $Testimonio = section::where('page_id', '1')->where('name', 'Testimonio')->first();
        $Servicios = section::where('page_id', '1')->where('name', 'Servicios')->first();
        $Slider = section::where('page_id', '1')->where('name', 'Slider')->first();
        $Constant = constant::all();

        return view('landing.public')
        ->with('Cabecera', $Cabecera)
        ->with('Perfil', $Perfil)
        ->with('Noticias', $Noticias)
        ->with('Acerca', $Acerca)
        ->with('Testimonio', $Testimonio)
        ->with('Constant', $Constant)
        ->with('Servicios', $Servicios)
        ->with('Slider', $Slider);
    }
}
