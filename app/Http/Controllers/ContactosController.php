<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Mail;
use App\Mail\MensajeRecibido;

class ContactosController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos
        $mensaje = request()->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'asunto' => 'required',
            'mensaje' => 'required|min:3',
        ],[
            'nombre.required' => 'Ingrese su nombre',
            'email.required' => 'Ingrese su correo',
            'asunto.required' => 'Ingrese un asunto',
            'mensaje.required' => 'Ingrese el mensaje'
        ]);

        // Enviar el correo
        Mail::to('serinniquin@gmail.com')->send(new MensajeRecibido($mensaje));
          return new MensajeRecibido($mensaje);                                

        // Retornar una respuesta
        return 'Mensaje enviado correctamente';
    }
}
