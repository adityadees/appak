@extends('layouts.template')
@section('title','Edit Akun')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Akun</h4>

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

        <form action="{{ route('akuns.update',$akun->akun_id) }}" method="POST">
          @csrf
          @method('PUT')
          <fieldset>
           <div class="form-group">
            <strong>Sub-Golongan:</strong>
            <select name="subgol_id" class="form-control">
              @foreach ($varsubgol as $subgol)
              <option value="{{$subgol->subgol_id}}" {{ $subgol->subgol_id == $akun->gol_id ? 'selected="selected"' : '' }} >{{ $subgol->subgol_nama }}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
           <strong>Name:</strong>
           <input type="text" name="akun_nama" maxlength="50" id="defaultconfig-3" value="{{ $akun->akun_nama }}" class="form-control" placeholder="Nama">
         </div>
         <div class="form-group">
          <strong>Jenis Saldo:</strong>
          <select name="akun_js" class="form-control">
            <option value="" {{ $akun->akun_js == '' ? 'selected="selected"' : '' }}>Pilih Jenis Saldo</option>
            <option value="debit" {{ $akun->akun_js == 'debit' ? 'selected="selected"' : '' }}>Debit</option>
            <option value="kredit" {{ $akun->akun_js == 'kredit' ? 'selected="selected"' : '' }}>Kredit</option>
          </select>
        </div>
        <div class="form-group">
          <strong>Akun Pembayaran:</strong>
          <select name="akun_ap" class="form-control">
            <option value="" {{ $akun->akun_ap == '' ? 'selected="selected"' : '' }}>Pilih Jenis Saldo</option>
            <option value="ya" {{ $akun->akun_ap == 'ya' ? 'selected="selected"' : '' }}>Ya</option>
            <option value="tidak" {{ $akun->akun_ap == 'tidak' ? 'selected="selected"' : '' }}>Tidak</option>
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
<script src="{{ asset('backend/node_modules/jquery-validation/dist/jquery.validate.min.js') }}"></script>
<script src="{{ asset('backend/node_modules/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
<script src="{{ asset('backend/js/form-validation.js') }}"></script>
<script src="{{ asset('backend/js/bt-maxLength.js') }}"></script>
@endsection
