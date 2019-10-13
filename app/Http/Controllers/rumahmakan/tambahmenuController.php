<?php

namespace App\Http\Controllers\rumahmakan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\menumakan;
use File;

class tambahmenuController extends Controller
{
   
    public function index()
    {
        $menu=menumakan::orderBy('created_at','DESC')->get();
        $data=[
            'menu' => $menu,
        ];
        return view('rumahmakan.melihatmenu', $data);
    }

    public function create(Request $request)
    {
        return view('rumahmakan.tambahmenu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('foto');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('assets/images'),$imageName);
        $menu = new menumakan();
        $menu->name = $request->get('name');
        $menu->harga = $request->get('harga');
        $menu->tot_kalori = $request->get('tot_kalori');
        $menu->keterangan = $request->get('keterangan');
        $menu->foto = $imageName;

        $menu->save();
        return redirect()->route('rumahMakan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu=menumakan::WHERE('id',$id)->orderBy('created_at','DESC')->get();
        $data=[
            'menu' => $menu,
        ];
        return view('rumahmakan.editmenu', $data);
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

        $menu=menumakan::WHERE('id',$id)->first();
        $image = $request->file('foto');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('assets/images'),$imageName);
        $menu->name = $request->get('name');
        $menu->harga = $request->get('harga');
        $menu->tot_kalori = $request->get('tot_kalori');
        $menu->keterangan = $request->get('keterangan');
        $menu->foto = $imageName;

        $menu->save();
        return redirect()->route('rumahMakan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = menumakan::WHERE('id',$id)->first();
        $hapus->delete();
        return redirect()->route('rumahMakan.index');
    }
}
