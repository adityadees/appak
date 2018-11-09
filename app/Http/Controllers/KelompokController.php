<?php

namespace App\Http\Controllers;

use App\KelompokModel;
use Illuminate\Http\Request;

class KelompokController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $varkelompoks = KelompokModel::all();
        return view('fkelompoks.index',compact('varkelompoks'))
        ->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('fkelompoks.create');
  }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
          'kelompok_nama' => 'required',
      ]);

       KelompokModel::create($request->all());

       return redirect()->route('kelompoks.index')
       ->with('success','Data berhasil ditambah');
   }

    /**
     * Display the specified resource.
     *
     * @param  \App\KelompokModel  $kelompokModel
     * @return \Illuminate\Http\Response
     */
    public function show(KelompokModel $kelompok)
    {
      return view('fkelompoks.show',compact('kelompok'));
  }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KelompokModel  $kelompokModel
     * @return \Illuminate\Http\Response
     */
    public function edit(KelompokModel $kelompok)
    {
      return view('fkelompoks.edit',compact('kelompok'));
  }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KelompokModel  $kelompokModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KelompokModel $kelompok)
    {
       $request->validate([
        'kelompok_nama' => 'required',
    ]);

       $kelompok->update($request->all());

       return redirect()->route('kelompoks.index')
       ->with('success','Data telah dirubah');
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KelompokModel  $kelompokModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(KelompokModel $kelompok)
    {
       $kelompok->delete();

       return redirect()->route('kelompoks.index')
       ->with('success','Data telah dihapus');
   }
}
