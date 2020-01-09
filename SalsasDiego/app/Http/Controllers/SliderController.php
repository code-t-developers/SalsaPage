<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = DB::table('sliders')->where('status','A')
        ->get();
        return view('admin.sliders.index')->with('slider',$slider);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.create');
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
        $file = $request->file('imagen');
        $name = time();
        $extension = $file->getClientOriginalExtension();
        $filename = 'img'.$name.'.'.$extension;
        $file = Image::make($request->file('imagen'))->save('img/'.$filename, 90);
        $data['slider'] = $filename;
        $data['status'] = 'A';
        DB::table('sliders')->insert($data);
        return redirect('/admin/slider/create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('sliders')->where('id', '=', $id)->update(['status' => 'I']);
        return redirect('/admin/sliders');
    }
}
