<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Servicio;
use PhpParser\Node\Stmt\Return_;
use App\Http\Requests\CreateServicioRequest;
use GuzzleHttp\Promise\Create;

class ServiciosController extends Controller
{
  public function __construct(){
    
   // $this->middleware('auth')->only('create','edit');
    //$this->middleware('auth')->except('create','show');
  }
  
    
  
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

    //public function store(Request $request)
    public function store(CreateServicioRequest $request)

    {
          $servicio = new Servicio($request->validated());
          $servicio-> image = $request->file('image')->store('images');
          $servicio->save();
          return redirect()->route('servicios.index')->with('estado','El servicio fue creado correctamente');
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
   
    public function edit(Servicio $id)
    {
        return view('edit',[
          'servicio' =>$id
        ]);
    }

    //public function update(Servicio $id)
    public function update(Servicio $servicio, CreateServicioRequest $request)
    {
      //$servicio->update( array_filter($request->validate()) );
      //$id->update([
        //'titulo' => request('titulo'),
        //'descripcion' => request('descripcion')
      //]);
      if($request->hasFile('image')){
        $servicio->fill( $request->validated() );
        $servicio->image = $request->file('image')->store('images');
        $servicio->save();
      } else{
        $servicio->update( array_filter($request->validated()) );
      }

        return redirect()->route('servicios.index')->with('success', 'Servicio actualizado correctamente.');
    }

    public function destroy(Servicio $servicio){
      $servicio->delete();

      return redirect()->route('servicios.index');
    }

  
}
  
  
    
  
    

  