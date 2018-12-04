<?php

namespace App\Http\Controllers;

use App\PembelianModel;
use App\BarangModel;
use App\SupplierModel;
use App\CartModel;
use App\PembelianDetailModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;


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
     $varcart = CartModel::all();
     return view('fpembelians.create',compact('varbarang','varsupplier','varcart'))
     ->with('i');
   }

   public function ajax(){
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
        'pembelian_kode' => 'required',
        'barang_kode' => 'required',
        'pembelian_total' => 'required',
        'pembelian_qty' => 'required',
        'supplier_id' => 'required',
      ]);

      $cid = Input::POST('cid');
      $pembelian_kode = Input::POST('pembelian_kode');
      $barang_kode = Input::POST('barang_kode');
      $pembelian_total = Input::POST('pembelian_total');
      $pembelian_qty = Input::POST('pembelian_qty');
      $supplier_id = Input::POST('supplier_id');
      $cg = PembelianModel::create($request->all());

      if($cg){

        for($count = 0; $count < sizeof($cid); $count++){
          $data=[
            'pembelian_kode'=>$pembelian_kode,
            'barang_kode'=>$barang_kode[$count],
            'pd_qty'=>$pembelian_qty[$count],
          ];
          $datax=[
            'barang_stok'=>$pembelian_qty[$count],
          ];
          
          $upprod =  DB::table('barangs')->where('barang_kode', $barang_kode[$count])->update($datax);
          DB::table('pembelian_details')->insert($data);
          DB::table('carts')->where('barang_kode', $barang_kode[$count])->delete();
        }

        $gsup = DB::table('suppliers')->where('supplier_id',$supplier_id)->get();

        foreach ($gsup as $key => $value) {
          $newlist = $value->supplier_nama;
        }
        $kd="PBN";
        $tgl=date('dm');
        $yr=date('y');
        $r1=rand(0,999);
        $r2=rand(0,99);
        $nkd=$r2.$r1.$kd.$tgl.$yr;

        $ndata=[
          'jurnals_kode' => $nkd,
          'jurnals_ket' => "Pembayaran Invoice ".$pembelian_kode." Pada ".$newlist,
          'jurnals_ref' => $pembelian_kode
        ];
        DB::table('jurnals')->insert($ndata);


        $nddata = [
          'akun_kode' => "33",
          'jurnals_kode' => $nkd,
          'jd_jenis' => "debit",
          'jd_total' => $pembelian_total,
          'jd_ket' => "Pembayaran Invoice ".$pembelian_kode." Pada ".$newlist,
        ];

        DB::table('jurnal_details')->insert($nddata);


        $nddata1 = [
          'akun_kode' => "2",
          'jurnals_kode' => $nkd,
          'jd_jenis' => "kredit",
          'jd_total' => $pembelian_total,
          'jd_ket' => "Pembayaran Invoice ".$pembelian_kode." Pada ".$newlist,
        ];

        DB::table('jurnal_details')->insert($nddata1);

      }
      return redirect()->route('pembelians.index')
      ->with('success','Data berhasil ditambah');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PembelianModel  $pembelianModel
     * @return \Illuminate\Http\Response
     */
    public function show(PembelianModel $pembelian)
    {
     $vardetail = PembelianDetailModel::where('pembelian_kode',$pembelian['pembelian_kode'])->get();
     return view('fpembelians.show',compact('vardetail','pembelian'))
     ->with('i');
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
