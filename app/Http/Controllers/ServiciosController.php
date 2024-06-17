<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Servicio;
use PhpParser\Node\Stmt\Return_;
use App\Http\Requests\CreateServicioRequest;

class ServiciosController extends Controller
{
   /**
    * @param \Iluminate\Http\Request $request
     *@return \Iluminate\Http\Response
    */
    
    public function index()
    {
     // $servicios = DB::table('servicios')->get();
      $servicios = Servicio::get();
      $servicios= Servicio::latest()->paginate(2);
      return view('servicios',compact('servicios'));
    }

    public function show($id){

      return view('show',[
        
        'servicio' => Servicio::find($id)
      ]);
       //return Servicio::find($id);
    }

    public function create(){

      return view('create');

    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string|max:1000',
        ]);

        // Crear el nuevo servicio
        Servicio::create([
            'titulo' => $validatedData['titulo'],
            'descripcion' => $validatedData['descripcion'],
        ]);

       // Redirigir a una página de éxito o de lista de servicios
       return redirect()->route('servicios.index')->with('success', 'Servicio creado exitosamente.');
    }


    
  }
    

  