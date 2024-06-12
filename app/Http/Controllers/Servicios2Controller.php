<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Servicios2Controller extends Controller
{
    /**
    * @param \Iluminate\Http\Request $request
     *@return \Iluminate\Http\Response
    */
   public function index()
    {

        $servicios = [
            ['titulo' => 'Mantenimiento'],
            ['titulo' => 'Afinamiento'],
            ['titulo' => 'Cambio de Aceite'],
            ['titulo' => 'Lavado tipo salón'], 
        ]; 
        return view('servicios',compact('servicios'));
}
}