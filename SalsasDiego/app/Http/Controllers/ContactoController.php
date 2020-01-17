<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Mail\Contacto;
use Mail;

class ContactoController extends Controller
{
    public function contacto(Request $request){
        $data = [];
        $data['nombre'] = $request->nombre;
        $data['correo'] = $request->correo;
        $data['asunto'] = $request->asunto;
        $data['mensaje'] = $request->mensaje;
        DB::table('contacto')->insert($data);
        $all_comentario_info = DB::table('contacto')->orderBy('id', 'desc')->first();
        Mail::to('code.t.developers@gmail.com')->send(new Contacto($all_comentario_info));
        return redirect('/contacto');
    }
}

