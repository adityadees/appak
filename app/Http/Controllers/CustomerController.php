<?php

namespace App\Http\Controllers;

use App\CustomerModel;
use Illuminate\Http\Request;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $varcustomers = CustomerModel::all();
     return view('fcustomers.index',compact('varcustomers'))
     ->with('i');
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('fcustomers.create');
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
      'customer_nama' => 'required',
      'customer_tel' => 'required',
      'customer_email' => 'required',
      'customer_alamat' => 'required',
    ]);

     CustomerModel::create($request->all());

     return redirect()->route('customers.index')
     ->with('success','Data berhasil ditambah');
   }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerModel $customer)
    {
      return view('fcustomers.show',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerModel $customer)
    {
      return view('fcustomers.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomerModel $customer)
    {
      $request->validate([
        'customer_nama' => 'required',
        'customer_tel' => 'required',
        'customer_email' => 'required',
        'customer_alamat' => 'required',
      ]);

      $customer->update($request->all());

      return redirect()->route('customers.index')
      ->with('success','Data telah dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerModel $customer)
    {
     $customer->delete();

     return redirect()->route('customers.index')
     ->with('success','Data telah dihapus');
   }
 }
