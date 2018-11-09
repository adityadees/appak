<?php

namespace App\Http\Controllers;

use App\SubgolModel;
use App\GolModel;
use Illuminate\Http\Request;

class SubgolController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function index()
      {
        $varsubgols= SubgolModel::all();

        return view('fsubgols.index',compact('varsubgols'))
        ->with('i');
      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $vargolongan = GolModel::all();
      return view('fsubgols.create',compact('vargolongan'))
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
      'gol_id' => 'required',
      'subgol_nama' => 'required',
      'subgol_js' => '',
      'subgol_ap' => '',
    ]);

     SubgolModel::create($request->all());

     return redirect()->route('subgols.index')
     ->with('success','Data berhasil ditambah');
   }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubgolModel  $subgolModel
     * @return \Illuminate\Http\Response
     */
    public function show(SubgolModel $subgol)
    {
      return view('fsubgols.show',compact('subgol'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubgolModel  $subgolModel
     * @return \Illuminate\Http\Response
     */
    public function edit(SubgolModel $subgol)
    {
      $vargolongan = GolModel::all();
      return view('fsubgols.edit',compact('vargolongan','subgol'))
      ->with('i');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubgolModel  $subgolModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubgolModel $subgol)
    {
     $request->validate([
       'gol_id' => 'required',
       'subgol_nama' => 'required',
       'subgol_js' => '',
       'subgol_ap' => '',
     ]);

     $subgol->update($request->all());

     return redirect()->route('subgols.index')
     ->with('success','Data telah dirubah');
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubgolModel  $subgolModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubgolModel $subgol)
    {
     $subgol->delete();

     return redirect()->route('subgols.index')
     ->with('success','Data telah dihapus');
   }
 }
