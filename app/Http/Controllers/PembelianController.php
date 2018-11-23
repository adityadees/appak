<?php

namespace App\Http\Controllers;

use App\PembelianModel;
use App\BarangModel;
use App\SupplierModel;
use Illuminate\Http\Request;


class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $varpembelians = PembelianModel::all();
      return view('fpembelians.index',compact('varpembelians'))
      ->with('i');
  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     $varbarang = BarangModel::all();
     $varsupplier = SupplierModel::all();
     return view('fpembelians.create',compact('varbarang','varsupplier'))
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
          'pembelian_kode' => 'required',
          'pembelian_nama' => 'required',
          'pembelian_harga' => 'required',
          'pembelian_qty' => 'required',
          'supplier_id' => 'required',
      ]);

        PembelianModel::create($request->all());

        return redirect()->route('pembelians.index')
        ->with('success','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PembelianModel  $pembelianModel
     * @return \Illuminate\Http\Response
     */
    public function show(PembelianModel $pembelianModel)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PembelianModel  $pembelianModel
     * @return \Illuminate\Http\Response
     */
    public function edit(PembelianModel $pembelianModel)
    {
       return view('fpembelians.edit',compact('pembelian'));
   }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PembelianModel  $pembelianModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PembelianModel $pembelianModel)
    {
      $request->validate([
       'pembelian_kode' => 'required',
       'pembelian_nama' => 'required',
       'pembelian_harga' => 'required',
       'pembelian_qty' => 'required',
       'supplier_id' => 'required',
   ]);

      $pembelian->update($request->all());

      return redirect()->route('pembelians.index')
      ->with('success','Data telah dirubah');
  }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PembelianModel  $pembelianModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(PembelianModel $pembelianModel)
    {
       $pembelian->delete();

       return redirect()->route('pembelians.index')
       ->with('success','Data telah dihapus');
   }
}
