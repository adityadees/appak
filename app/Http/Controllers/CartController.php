<?php

namespace App\Http\Controllers;

use App\CartModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;


class CartController extends Controller
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
        'barang_kode' => 'required',
        'cart_qty' => 'required',
      ]);

      $barang_kode = Input::POST('barang_kode');
      $cart_qty = Input::POST('cart_qty');
      $cartlist = DB::table('carts')->where('barang_kode',  $barang_kode)->get();
      $cart_count = $cartlist->count();

      if($cart_count > 0 ){
        $glist = DB::table('carts')->where('barang_kode', '<=', $barang_kode)->first();
        foreach ($cartlist as $key => $value) {
          $newlist = $value->cart_qty+$cart_qty;
        }
        $data=[
          'cart_qty'=>$newlist,
        ];

        $cd = DB::table('carts')
        ->where('barang_kode', $barang_kode)
        ->update($data);
        if($cd){
          return redirect()->route('pembelians.create')
          ->with('success','Data berhasil ditambah');
        } else {

        }
      }
      else{
        CartModel::create($request->all());
        return redirect()->route('pembelians.create')
        ->with('success','Data berhasil ditambah');
      }
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
    public function destroy($cart_id)
    {
      CartModel::destroy($cart_id);
      return redirect()->back();
    }
  }
