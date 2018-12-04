<?php

namespace App\Http\Controllers;

use App\JurnalTempModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;


class JurnalTempController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
         'akun_kode' => 'required',
         'jt_jenis' => 'required',
         'jt_total' => 'required',
         'jt_ket' => 'required',
     ]);

      JurnalTempModel::create($request->all());
      return redirect()->route('jurnals.create')
      ->with('success','Data berhasil ditambah');

  }



    /**
     * Display the specified resource.
     *
     * @param  \App\CartModel  $cartModel
     * @return \Illuminate\Http\Response
     */
    public function show(CartModel $cartModel)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CartModel  $cartModel
     * @return \Illuminate\Http\Response
     */
    public function edit(CartModel $cartModel)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CartModel  $cartModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CartModel $cartModel)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CartModel  $cartModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($jt_id)
    {
      JurnalTempModel::destroy($jt_id);
      return redirect()->back();
  }
}
