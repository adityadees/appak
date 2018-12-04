@extends('layouts.template')
@section('cssforpage')
<link rel="stylesheet" href="{{ asset('backend/nodemod/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" />
@endsection
@section('title','Jurnal')

@section('content')
<div class="card">
  <div class="card-body">
    <h4 class="card-title">
      Jurnal
      <div class="pull-right">
        <div class="d-flex table-responsive">
          <div class="btn-group mr-2">
            <a class="btn btn-sm btn-info" href="{{ route('jurnals.create') }}"><i class="mdi mdi-plus-circle-outline"></i> Add Jurnal</a>
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
                <th>Kode</th>
                <th>Deskripsi</th>
                <th>Ref</th>
                <th>Tanggal</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($varjurnals as $jurnal)
              <tr>
                <td><a href="{{ route('jurnals.show',$jurnal->jurnals_kode) }}">{{ $jurnal->jurnals_kode }}</a></td>
                <td>{{$jurnal->jurnals_ket }}</td>
                <td>{{$jurnal->jurnals_ref }}</td>
                <td>{{ date('d-m-Y H:i:s',strtotime($jurnal->created_at)) }}</td>
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



