<?php

namespace App\Http\Controllers;

use App\AkunModel;
use App\SubgolModel;
use Illuminate\Http\Request;

class AkunController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
   {
    $varakuns= AkunModel::all();

    return view('fakuns.index',compact('varakuns'))
    ->with('i');
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $varsubgol = SubgolModel::all();
        return view('fakuns.create',compact('varsubgol'))
        ->with('i');
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
      'subgol_id' => 'required',
      'akun_nama' => 'required',
      'akun_js' => '',
      'akun_ap' => '',
  ]);

     AkunModel::create($request->all());

     return redirect()->route('akuns.index')
     ->with('success','Data berhasil ditambah');
 }

    /**
     * Display the specified resource.
     *
     * @param  \App\AkunModel  $akunModel
     * @return \Illuminate\Http\Response
     */
    public function show(AkunModel $akun)
    {
      return view('fakuns.show',compact('akun'));
  }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AkunModel  $akunModel
     * @return \Illuminate\Http\Response
     */
    public function edit(AkunModel $akun)
    {
        $varsubgol = SubgolModel::all();
        return view('fakuns.edit',compact('varsubgol','akun'))
        ->with('i');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AkunModel  $akunModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AkunModel $akun)
    {
     $request->validate([
       'subgol_id' => 'required',
       'akun_nama' => 'required',
       'akun_js' => '',
       'akun_ap' => '',
    ]);

     $akun->update($request->all());

     return redirect()->route('akuns.index')
     ->with('success','Data telah dirubah');
 }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AkunModel  $akunModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(AkunModel $akun)
    {
     $akun->delete();

     return redirect()->route('akuns.index')
     ->with('success','Data telah dihapus');
 }
}
