@extends('layouts.template')
@section('cssforpage')
<link rel="stylesheet" href="{{ asset('backend/nodemod/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" />
@endsection
@section('title','Pembelian')

@section('content')
<div class="card">
  <div class="card-body">
    <h4 class="card-title">
      Pembelian
      <div class="pull-right">
        <div class="d-flex table-responsive">
          <div class="btn-group mr-2">
            <a class="btn btn-sm btn-info" href="{{ route('pembelians.create') }}"><i class="mdi mdi-plus-circle-outline"></i> Add Pembelian</a>
          </div>
        </div>
      </div>
    </h4>
    <div class="row">

      <div class="col-12">

        <div class="table-responsive">

          @if ($message = Session::get('success'))
          <div class="alert alert-success">
            <p>{{ $message }}</p>
          </div>
          @endif
          <table id="order-listing" class="table">
            <thead>
              <tr>
                <th>Invoice</th>
                <th>Supplier</th>
                <th>Total</th>
                <th>Tanggal</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($varpembelians as $pembelian)
              <tr>
                <td>{{ $pembelian->pembelian_kode }}</td>
                <td>{{ $pembelian->supplier->supplier_nama }}</td>
                <td>{{ "Rp ".number_format($pembelian->pembelian_total) }}</td>
                <td>{{ date('d-m-Y H:i:s',strtotime($pembelian->created_at)) }}</td>
                <td>
                  <form action="{{ route('pembelians.destroy',$pembelian->pembelian_kode) }}" method="POST">
                   <!--  <a class="btn btn-info" href="{{ route('pembelians.show',$pembelian->pembelian_kode) }}"><i class="fa fa-eye btn-"></i> </a> -->
                   <a class="btn btn-primary" href="{{ route('pembelians.edit',$pembelian->pembelian_kode) }}"><i class="fa fa-pencil"></i> </a>
                   @csrf
                   @method('DELETE')
                   <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> </button>
                 </form>
               </td>
             </tr>
             @endforeach
           </tbody>
         </table>                    
       </div>
     </div>
   </div>
 </div>
</div>
@endsection


@section('jsforpage')
<script src="{{ asset('backend/js/data-table.js') }}"></script>

<script src="{{ asset('backend/nodemod/datatables.net/js/jquery.dataTables.js') }}"></script>
<script src="{{ asset('backend/nodemod/datatables.net-bs4/js/dataTables.bootstrap4.js') }}"></script>
@endsection



