<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function servicios(){
    $servicios =[ /*
        ['titulo' => 'Servicios 01'],
        ['titulo' => 'Servicios 04'],
        ['titulo' => 'Servicios 05'],
        ['titulo' => 'Servicios 06'], */
    
    ];
    return view('servicios', compact('servicio'));
}
}