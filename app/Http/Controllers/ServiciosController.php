<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Servicio;
class ServiciosController extends Controller
{
   /**
    * @param \Iluminate\Http\Request $request
     *@return \Iluminate\Http\Response
    */
    
    public function index()
    {
      $servicios = DB::table('servicios')->get();
      //$servicios = Servicio::get();
     
      return view('servicios',compact('servicios'));
    }
}