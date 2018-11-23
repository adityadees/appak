@extends('layouts.template')
@section('cssforpage')
<link rel="stylesheet" href="{{ asset('backend/nodemod/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" />
@endsection
@section('title','Akun')

@section('content')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">
          Akun
          <div class="pull-right">
              <div class="d-flex table-responsive">
                <div class="btn-group mr-2">
                  <a class="btn btn-sm btn-info" href="{{ route('akuns.create') }}"><i class="mdi mdi-plus-circle-outline"></i> Add Akun</a>
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
                <th>No</th>
                <th>Sub-Gol</th>
                <th>Akun</th>
                <th>Jenis Saldo</th>
                <th>Akun Pembayaran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($varakuns as $akun)
            <tr>
              <td>{{ ++$i }}</td>
              <td>{{ $akun->subgol->subgol_nama }}</td>
              <td>{{ $akun->akun_nama }}</td>
              <td>{{ $akun->akun_js }}</td>
              <td>{{ $akun->akun_ap }}</td>
              <td>
                <form action="{{ route('akuns.destroy',$akun->akun_id) }}" method="POST">
                   <!--  <a class="btn btn-info" href="{{ route('akuns.show',$akun->akun_id) }}"><i class="fa fa-eye btn-"></i> </a> -->
                    <a class="btn btn-primary" href="{{ route('akuns.edit',$akun->akun_id) }}"><i class="fa fa-pencil"></i> </a>
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



