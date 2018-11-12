<?php

namespace App\Http\Controllers;

use App\BarangModel;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $varbarangs = BarangModel::all();
        return view('fbarangs.index',compact('varbarangs'))
        ->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fbarangs.create');
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
            'barang_kode',
            'barang_nama',
            'barang_jenis',
            'barang_hbeli',
            'barang_hjual',
            'barang_stok',
        ]);

        BarangModel::create($request->all());
        return redirect()->route('barangs.index')
        ->with('success','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BarangModel  $barangModel
     * @return \Illuminate\Http\Response
     */
    public function show(BarangModel $barang)
    {
        return view('fbarangs.index',compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BarangModel  $barangModel
     * @return \Illuminate\Http\Response
     */
    public function edit(BarangModel $barang)
    {
      return view('fbarangs.edit',compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BarangModel  $barangModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BarangModel $barang)
    {
       $request->validate([
        'barang_kode',
        'barang_nama',
        'barang_jenis',
        'barang_hbeli',
        'barang_hjual',
        'barang_stok',
    ]);

       $barang->update($request->all());
       return redirect()->route('barangs.index')
       ->with('success','Data berhasil ditambah');
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BarangModel  $barangModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(BarangModel $barang)
    {
       $barang->delete();

       return redirect()->route('barangs.index')
       ->with('success','Data telah dihapus');
   }
}
