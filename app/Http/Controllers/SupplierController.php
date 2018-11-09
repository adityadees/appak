<?php

namespace App\Http\Controllers;

use App\SupplierModel;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $varsuppliers = SupplierModel::all();
        return view('fsuppliers.index',compact('varsuppliers'))
        ->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('fsuppliers.create');
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
          'supplier_nama' => 'required',
          'supplier_toko' => 'required',
          'supplier_tel' => 'required',
          'supplier_email' => 'required',
          'supplier_alamat' => 'required',
      ]);

       SupplierModel::create($request->all());

       return redirect()->route('suppliers.index')
       ->with('success','Data berhasil ditambah');
   }

    /**
     * Display the specified resource.
     *
     * @param  \App\SupplierModel  $supplierModel
     * @return \Illuminate\Http\Response
     */
    public function show(SupplierModel $supplier)
    {
      return view('fsuppliers.show',compact('supplier'));
  }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SupplierModel  $supplierModel
     * @return \Illuminate\Http\Response
     */
    public function edit(SupplierModel $supplier)
    {
      return view('fsuppliers.edit',compact('supplier'));
  }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SupplierModel  $supplierModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SupplierModel $supplier)
    {
       $request->validate([
        'supplier_nama' => 'required',
        'supplier_toko' => 'required',
        'supplier_tel' => 'required',
        'supplier_email' => 'required',
        'supplier_alamat' => 'required',
    ]);

       $supplier->update($request->all());

       return redirect()->route('suppliers.index')
       ->with('success','Data telah dirubah');
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SupplierModel  $supplierModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(SupplierModel $supplier)
    {
       $supplier->delete();

       return redirect()->route('suppliers.index')
       ->with('success','Data telah dihapus');
   }
}
