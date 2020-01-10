<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Image;

class SalsasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salsa = DB::table('salsas')->where('status','A')
        ->get();
        return view('admin.salsas.index')->with('salsa',$salsa);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.salsas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [];
        $data['users_id'] = 1;
        
        if($request->hasfile('imagenPequenia')){
            $file = $request->file('imagenPequenia');
            $name = time();
            $extension = $file->getClientOriginalExtension();
            $filename = 'producto'.$name.'.'.$extension;
            $file = Image::make($request->file('imagenPequenia'))->save('frontend/images/productos/'.$filename, 90);
            $data['imagenPequenia'] = $filename;
        }

        if($request->hasfile('imagenGrande')){
            $newFile = $request->file('imagenGrande');
            $newName = time();
            $newExtension = $newFile->getClientOriginalExtension();
            $newFilename = 'receta'.$newName.'.'.$newExtension;
            $newFile = Image::make($request->file('imagenGrande'))->save('frontend/images/recetasMes/'.$newFilename, 90);
            $data['imagenGrande'] = $newFilename;
        }

        $data['nombre'] = $request->nombre;
        $data['status'] = 'A';
        $data['contenidoNeto'] = $request->contenidoNeto;
        $data['precioUnitario'] = $request->precioUnitario;
        $data['precioMayoreo'] = $request->precioMayoreo;
        $data['ingredientes'] = $request->ingredientes;
        $data['preparacion'] = $request->preparacion;
        $data['recetaMes'] = $request->recetaMes;
        DB::table('salsas')->insert($data);
        return redirect('/admin/salsas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $salsa = DB::table('salsas')->where('id',$id)
        ->first();
        return view('admin.salsas.edit')->with('salsa',$salsa);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = [];
        $data['users_id'] = 1;
        
        if($request->hasfile('imagenPequenia')){
            $file = $request->file('imagenPequenia');
            $name = time();
            $extension = $file->getClientOriginalExtension();
            $filename = 'imagen'.$name.'.'.$extension;
            $file = Image::make($request->file('imagenPequenia'))->save('img/'.$filename, 90);
            $data['imagenPequenia'] = $filename;
        }

        if($request->hasfile('imagenGrande')){
            $newFile = $request->file('imagenGrande');
            $newName = time();
            $newExtension = $newFile->getClientOriginalExtension();
            $newFilename = 'img'.$newName.'.'.$newExtension;
            $newFile = Image::make($request->file('imagenGrande'))->save('img/'.$newFilename, 90);
            $data['imagenGrande'] = $newFilename;
        }

        $data['nombre'] = $request->nombre;
        $data['status'] = 'A';
        $data['contenidoNeto'] = $request->contenidoNeto;
        $data['precioUnitario'] = $request->precioUnitario;
        $data['precioMayoreo'] = $request->precioMayoreo;
        $data['ingredientes'] = $request->ingredientes;
        $data['preparacion'] = $request->preparacion;
        $data['recetaMes'] = $request->recetaMes;
        DB::table('salsas')->where('id',$id)->update($data);
        return redirect('/admin/salsas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('salsas')->where('id', '=', $id)->update(['status' => 'I']);
        return redirect('/admin/salsas');
    }
}
