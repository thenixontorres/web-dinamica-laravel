<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\section;
use App\Models\constant;
use Illuminate\Support\Facades\Mail;

class landingController extends Controller
{
    //page_id = 1
    //Contiene Cabecera, Perfil, Noticias, Acerca, Testimonio, Servicios, Slider
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
    //page id 3 contiene Bio y Spotlight
    public function perfil(){
        $Bio = section::where('page_id', '3')->where('name', 'Bio')->first();
        $Spotlight = section::where('page_id', '3')->where('name', 'Spotlight')->first();
        $Constant = constant::all();
        return view('landing.perfil')
        ->with('Constant', $Constant)
        ->with('Bio', $Bio)
        ->with('Spotlight', $Spotlight);
    }
    //page id 4 mision vision y equipo
    public function acerca(){
        $Sobre = section::where('page_id', '4')->where('name', 'Sobre Nosotros')->first();
        $Mision = section::where('page_id', '4')->where('name', 'Misión')->first();
        $Equipo = section::where('page_id', '4')->where('name', 'Nuestro Equipo')->first();
        $Constant = constant::all();
        return view('landing.acerca')
        ->with('Constant', $Constant)
        ->with('Sobre', $Sobre)
        ->with('Mision', $Mision)
        ->with('Equipo', $Equipo);
    }

}
