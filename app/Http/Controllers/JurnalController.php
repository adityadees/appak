<?php

namespace App\Http\Controllers;

use App\JurnalModel;
use App\AkunModel;
use App\JurnalTempModel;
use App\JurnalDetailModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;


class JurnalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $varjurnals = JurnalModel::all();
      return view('fjurnals.index',compact('varjurnals'))
      ->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     $varakun = AkunModel::all();
     $varjtemp = JurnalTempModel::all();
     return view('fjurnals.create',compact('varakun','varjtemp'))
     ->with('i');
   }

   public function ajax(){
    $akun_id = Input::get('akun_id');
    $ajax = AkunModel::where('akun_id', '=', $akun_id)->get();
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
        'jurnals_kode' => 'required',
        'akun_id' => 'required',
        'jd_jenis' => 'required',
        'jd_total' => 'required',
        'jd_ket' => 'required',
        'jurnals_ket' => 'required',
      ]);

      $cid = Input::POST('cid');
      $jurnals_kode = Input::POST('jurnals_kode');
      $akun_id = Input::POST('akun_id');
      $jd_ket = Input::POST('jd_ket');
      $jd_total = Input::POST('jd_total');
      $jd_jenis = Input::POST('jd_jenis');
      $cg = JurnalModel::create($request->all());

      if($cg){

        for($count = 0; $count < sizeof($cid); $count++){
          $data=[
            'jurnals_kode'=>$jurnals_kode,
            'akun_kode'=>$akun_id[$count],
            'jd_ket'=>$jd_ket[$count],
            'jd_total'=>$jd_total[$count],
            'jd_jenis'=>$jd_jenis[$count],
          ];
          DB::table('jurnal_details')->insert($data);
          DB::table('jurnals_temp')->where('akun_kode', $akun_id[$count])->delete();
        }


      }
      return redirect()->route('jurnals.index')
      ->with('success','Data berhasil ditambah');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JurnalModel  $jurnalModel
     * @return \Illuminate\Http\Response
     */
    public function show(JurnalModel $jurnal)
    {
     $vardetail = JurnalDetailModel::where('jurnals_kode',$jurnal['jurnals_kode'])->get();
     return view('fjurnals.show',compact('vardetail','jurnal'))
     ->with('i');
   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JurnalModel  $jurnalModel
     * @return \Illuminate\Http\Response
     */
    public function edit(JurnalModel $jurnalModel)
    {
     return view('fjurnals.edit',compact('jurnal'));
   }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JurnalModel  $jurnalModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JurnalModel $jurnalModel)
    {
      $request->validate([
       'jurnals_kode' => 'required',
       'jurnals_ket' => 'required',
       'jurnals_ref' => 'required',
     ]);

      $jurnal->update($request->all());

      return redirect()->route('jurnals.index')
      ->with('success','Data telah dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JurnalModel  $jurnalModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(JurnalModel $jurnalModel)
    {
     $jurnal->delete();

     return redirect()->route('jurnals.index')
     ->with('success','Data telah dihapus');
   }
 }
