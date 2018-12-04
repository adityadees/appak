@extends('layouts.template')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card px-2">
            <div class="card-body">
                <div class="container-fluid">
                    <h3 class="text-right my-5">Invoice&nbsp;&nbsp;#{{$penjualan->penjualan_kode}}</h3>
                    <hr>
                </div>
                <div class="container-fluid d-flex justify-content-between">
                    <div class="col-lg-3 pl-0">
                        <p class="mt-5 mb-2"><b>Invoice Date : {{date('d M Y',strtotime($penjualan->created_at))}}</b></p>
                    </div>
                    <div class="col-lg-3 pr-0">
                        <p class="mt-5 mb-2 text-right"><b>Invoice to</b></p>
                        <p class="text-right">{{$penjualan->customer->customer_nama}}</p>
                    </div>
                </div>
                <div class="container-fluid mt-5 d-flex justify-content-center w-100">
                    <div class="table-responsive w-100">
                        <table class="table">
                          <thead>
                            <tr class="bg-dark text-white">
                                <th>#</th>
                                <th>Kode</th>
                                <th>Nama Produk</th>
                                <th class="text-left">Unit</th>
                                <th class="text-left">Qty</th>
                                <th class="text-left">Price</th>
                                <th class="text-left">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $total=0;?>
                            @foreach ($vardetail as $k)
                            <?php 
                            $subtot = $k->pd_qty*$k->barang->barang_hjual; 
                            $total +=$subtot;
                            ?>
                            <tr class="text-right">
                              <td class="text-left">{{++$i}}</td>
                              <td class="text-left">{{$k->penjualan_kode}}</td>
                              <td class="text-left">{{$k->barang->barang_nama}}</td>
                              <td class="text-left">{{$k->barang->barang_jenis}}</td>
                              <td class="text-left">{{$k->pd_qty}}</td>
                              <td class="text-left">Rp. {{ number_format($k->barang->barang_hjual) }}</td>
                              <td class="text-left">Rp. {{ number_format($subtot) }}</td>
                          </tr>
                          @endforeach

                      </tbody>
                  </table>
              </div>
          </div>
          <div class="container-fluid mt-5 w-100">
            <h4 class="text-right mb-5">Total : Rp. {{number_format($total)}}</h4>
            <hr>
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