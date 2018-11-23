@extends('layouts.template')
@section('cssforpage')
<link rel="stylesheet" href="{{ asset('backend/nodemod/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" />
@endsection
@section('title','Sub-Golongan')

@section('content')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">
          Subgol
          <div class="pull-right">
              <div class="d-flex table-responsive">
                <div class="btn-group mr-2">
                  <a class="btn btn-sm btn-info" href="{{ route('subgols.create') }}"><i class="mdi mdi-plus-circle-outline"></i> Add Sub-Golongan</a>
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
                <th>Golongan</th>
                <th>Sub-Golongan</th>
                <th>Jenis Saldo</th>
                <th>Akun Pembayaran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($varsubgols as $subgol)
            <tr>
              <td>{{ ++$i }}</td>
              <td>{{ $subgol->golongan->gol_nama }}</td>
              <td>{{ $subgol->subgol_nama }}</td>
              <td>{{ $subgol->subgol_js }}</td>
              <td>{{ $subgol->subgol_ap }}</td>
              <td>
                <form action="{{ route('subgols.destroy',$subgol->subgol_id) }}" method="POST">
                   <!--  <a class="btn btn-info" href="{{ route('subgols.show',$subgol->subgol_id) }}"><i class="fa fa-eye btn-"></i> </a> -->
                    <a class="btn btn-primary" href="{{ route('subgols.edit',$subgol->subgol_id) }}"><i class="fa fa-pencil"></i> </a>
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



