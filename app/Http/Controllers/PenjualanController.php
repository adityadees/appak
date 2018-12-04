<?php

namespace App\Http\Controllers;

use App\PenjualanModel;
use App\BarangModel;
use App\CustomerModel;
use App\CartModel;
use App\PenjualanDetailModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;


class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $varpenjualans = PenjualanModel::all();
      return view('fpenjualans.index',compact('varpenjualans'))
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
     $varcustomer = CustomerModel::all();
     $varcart = CartModel::all();
     return view('fpenjualans.create',compact('varbarang','varcustomer','varcart'))
     ->with('i');
   }

   public function ajaxs(){
    $barang_kode = Input::get('barang_kode');
    $ajax = BarangModel::where('barang_kode', '=', $barang_kode)->get();
    return response()->json($ajax);
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
        'penjualan_kode' => 'required',
        'barang_kode' => 'required',
        'penjualan_total' => 'required',
        'penjualan_qty' => 'required',
        'customer_id' => 'required',
      ]);

      $cid = Input::POST('cid');
      $penjualan_kode = Input::POST('penjualan_kode');
      $barang_kode = Input::POST('barang_kode');
      $penjualan_total = Input::POST('penjualan_total');
      $penjualan_qty = Input::POST('penjualan_qty');
      $customer_id = Input::POST('customer_id');
      $cg = PenjualanModel::create($request->all());

      if($cg){

        for($count = 0; $count < sizeof($cid); $count++){
          $data=[
            'penjualan_kode'=>$penjualan_kode,
            'barang_kode'=>$barang_kode[$count],
            'pd_qty'=>$penjualan_qty[$count],
          ];
          DB::table('penjualan_details')->insert($data);
          DB::table('carts')->where('barang_kode', $barang_kode[$count])->delete();
        }

        $gcus = DB::table('customers')->where('customer_id',$customer_id)->get();

        foreach ($gcus as $key => $value) {
          $newlist = $value->customer_nama;
        }
        $kd="PJL";
        $tgl=date('d/m');
        $yr=date('y');
        $r1=rand(0,999);
        $r2=rand(0,99);
        $nkd=$r2.$r1.$kd.$tgl.$yr;

        $ndata=[
          'jurnals_kode' => $nkd,
          'jurnals_ket' => "Pembelian Barang :# ".$penjualan_kode." dari ".$newlist,
          'jurnals_ref' => $penjualan_kode
        ];
        DB::table('jurnals')->insert($ndata);


        $nddata = [
          'akun_kode' => "33",
          'jurnals_kode' => $nkd,
          'jd_jenis' => "debit",
          'jd_total' => $penjualan_total,
          'jd_ket' => "Pembelian Barang :# ".$penjualan_kode." dari ".$newlist,
        ];

        DB::table('jurnal_details')->insert($nddata);


        $nddata1 = [
          'akun_kode' => "2",
          'jurnals_kode' => $nkd,
          'jd_jenis' => "kredit",
          'jd_total' => $penjualan_total,
          'jd_ket' => "Pembelian Barang :# ".$penjualan_kode." dari ".$newlist,
        ];

        DB::table('jurnal_details')->insert($nddata1);

      }
      return redirect()->route('penjualans.index')
      ->with('success','Data berhasil ditambah');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PenjualanModel  $penjualanModel
     * @return \Illuminate\Http\Response
     */
    public function show(PenjualanModel $penjualan)
    {
     $vardetail = PenjualanDetailModel::where('penjualan_kode',$penjualan['penjualan_kode'])->get();
     return view('fpenjualans.show',compact('vardetail','penjualan'))
     ->with('i');
   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PenjualanModel  $penjualanModel
     * @return \Illuminate\Http\Response
     */
    public function edit(PenjualanModel $penjualanModel)
    {
     return view('fpenjualans.edit',compact('penjualan'));
   }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PenjualanModel  $penjualanModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PenjualanModel $penjualanModel)
    {
      $request->validate([
       'penjualan_kode' => 'required',
       'penjualan_nama' => 'required',
       'penjualan_harga' => 'required',
       'penjualan_qty' => 'required',
       'customer_id' => 'required',
     ]);

      $penjualan->update($request->all());

      return redirect()->route('penjualans.index')
      ->with('success','Data telah dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PenjualanModel  $penjualanModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(PenjualanModel $penjualanModel)
    {
     $penjualan->delete();

     return redirect()->route('penjualans.index')
     ->with('success','Data telah dihapus');
   }
 }
