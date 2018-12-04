@extends('layouts.template')
@section('content')

<div class="row">
  <div class="col-lg-12">
    <div class="card px-2">
      <div class="card-body">
        <div class="container-fluid">
          <h3 class="text-right my-5">Kode&nbsp;&nbsp;#{{$jurnal->jurnals_kode}}</h3>
          <hr>
        </div>
        <div class="container-fluid d-flex justify-content-between">
          <div class="col-lg-3 pl-0">
            <p class="mt-5 mb-2"><b>Date : {{date('d M Y',strtotime($jurnal->created_at))}}</b></p>
          </div>
        </div>
        <div class="container-fluid mt-5 d-flex justify-content-center w-100">
          <div class="table-responsive w-100">
            <table class="table">
              <thead>
                <tr class="bg-dark text-white">
                 <th>Akun</th>
                 <th>Keterangan</th>
                 <th>Debit</th>
                 <th>Kredit</th>
               </tr>
             </thead>
             <tbody>
               <?php $cid=0; $tdebit=0;$tkredit=0;?>
               @foreach ($vardetail as $jtemp)
               <?php 
               $cid++;
               ?>
               <tr>
                <td>{{$jtemp->akun_kode." - ".$jtemp->akun->akun_nama}}</td>
                <td>{{$jtemp->jd_ket}}</td>
                <td>
                  <?php 
                  if($jtemp->jd_jenis=='debit'){
                    $tdebit+=$jtemp->jd_total;
                    echo "Rp. ".number_format($jtemp->jd_total);
                  } else { echo "0";}
                  ?>
                </td>
                <td>
                  <?php 
                  if($jtemp->jd_jenis=='kredit'){
                    $tkredit+=$jtemp->jd_total;
                    echo "Rp. ".number_format($jtemp->jd_total);
                  } else { echo "Rp. 0";}
                  ?>
                </td>

              </tr>
              @endforeach
              <tr>
                <td></td>
                <td></td>
                <td>Rp. {{number_format($tdebit)}}</td>
                <td>Rp. {{number_format($tkredit)}}</td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
     <!--    <div class="container-fluid w-100">
            <a href="#" class="btn btn-primary float-right mt-4 ml-2"><i class="mdi mdi-printer mr-1"></i>Print</a>
            <a href="#" class="btn btn-success float-right mt-4"><i class="mdi mdi-telegram mr-1"></i>Send Invoice</a>
          </div> -->
        </div>
      </div>
    </div>
  </div>
  @endsection