@extends('layouts.template')
@section('title','Tambah Akun')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambah Akun</h4>

        @if ($errors->any())
        <div class="alert alert-danger">
          <strong>Whoops!</strong> There were some problems with your input.<br><br>
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif

        <form action="{{ route('akuns.store') }}" method="POST">
          @csrf

          <fieldset>
           <div class="form-group">
            <strong>Sub-Golongan:</strong>
            <select name="subgol_id" class="form-control">
              @foreach ($varsubgol as $subgol)
              <option value="{{$subgol->subgol_id}}">{{ $subgol->subgol_nama }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
           <strong>Nama:</strong>
           <input type="text" name="akun_nama" maxlength="50" id="defaultconfig-3"  class="form-control" placeholder="Nama Akun">
         </div>
         <div class="form-group">
          <strong>Jenis Saldo:</strong>
          <select name="akun_js" class="form-control">
            <option value="">Pilih Jenis Saldo</option>
            <option value="debit">Debit</option>
            <option value="kredit">Kredit</option>
          </select>
        </div>
        <div class="form-group">
          <strong>Akun Pembayaran:</strong>
          <select name="akun_ap" class="form-control">
            <option value="">Pilih Jenis Saldo</option>
            <option value="ya">Ya</option>
            <option value="tidak">Tidak</option>
          </select>
        </div>
        <a class="btn btn-danger" href="{{ route('akuns.index') }}"> Back</a>
        <input class="btn btn-primary" type="submit" value="Submit">
      </fieldset>

    </form>
  </div>
</div>
</div>
</div>
@endsection



@section('jsforpage')
<script src="{{ asset('backend/nodemod/jquery-validation/dist/jquery.validate.min.js') }}"></script>
<script src="{{ asset('backend/nodemod/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
<script src="{{ asset('backend/js/form-validation.js') }}"></script>
<script src="{{ asset('backend/js/bt-maxLength.js') }}"></script>
@endsection