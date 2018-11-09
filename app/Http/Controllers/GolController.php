<?php

namespace App\Http\Controllers;

use App\GolModel;
use App\KelompokModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class GolController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {

/*      $vargols = GolModel::join('kelompoks', 'kelompoks.kelompok_id', '=', 'gols.kelompok_id')
      ->get();
*/
      $vargols= GolModel::all();

      return view('fgols.index',compact('vargols'))
      ->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $varkelompok = KelompokModel::all();
      return view('fgols.create',compact('varkelompok'))
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
      'kelompok_id' => 'required',
      'gol_nama' => 'required',
    ]);

     GolModel::create($request->all());

     return redirect()->route('gols.index')
     ->with('success','Data berhasil ditambah');
   }

    /**
     * Display the specified resource.
     *
     * @param  \App\GolModel  $golModel
     * @return \Illuminate\Http\Response
     */
    public function show(GolModel $gol)
    {
      return view('fgols.show',compact('gol'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GolModel  $golModel
     * @return \Illuminate\Http\Response
     */
    public function edit(GolModel $gol)
    {
     $varkelompok = KelompokModel::all();
     return view('fgols.edit',compact('varkelompok','gol'))
     ->with('i');
   }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GolModel  $golModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GolModel $gol)
    {
     $request->validate([
      'kelompok_id' => 'required',
      'gol_nama' => 'required',
    ]);

     $gol->update($request->all());

     return redirect()->route('gols.index')
     ->with('success','Data telah dirubah');
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GolModel  $golModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(GolModel $gol)
    {
     $gol->delete();

     return redirect()->route('gols.index')
     ->with('success','Data telah dihapus');
   }
 }
