@extends('layouts.template')
@section('title','Edit Sub-Golongan')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Sub-Golongan</h4>

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

        <form action="{{ route('subgols.update',$subgol->subgol_id) }}" method="POST">
          @csrf
          @method('PUT')
          <fieldset>
            <div class="form-group">
              <strong>Golongan:</strong>
              <select name="gol_id" class="form-control">
                @foreach ($vargolongan as $gol)
                <option value="{{$gol->gol_id}}" {{ $gol->gol_id == $subgol->gol_id ? 'selected="selected"' : '' }} >{{ $gol->gol_nama }}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
             <strong>Name:</strong>
             <input type="text" name="subgol_nama" maxlength="50" id="defaultconfig-3" value="{{ $subgol->subgol_nama }}" class="form-control" placeholder="Nama">
           </div>
           <div class="form-group">
            <strong>Jenis Saldo:</strong>
            <select name="subgol_js" class="form-control">
              <option value="" {{ $subgol->subgol_js == '' ? 'selected="selected"' : '' }}>Pilih Jenis Saldo</option>
              <option value="debit" {{ $subgol->subgol_js == 'debit' ? 'selected="selected"' : '' }}>Debit</option>
              <option value="kredit" {{ $subgol->subgol_js == 'kredit' ? 'selected="selected"' : '' }}>Kredit</option>
            </select>
          </div>
          <div class="form-group">
            <strong>Akun Pembayaran:</strong>
            <select name="subgol_ap" class="form-control">
              <option value="" {{ $subgol->subgol_ap == '' ? 'selected="selected"' : '' }}>Pilih Jenis Saldo</option>
              <option value="ya" {{ $subgol->subgol_ap == 'ya' ? 'selected="selected"' : '' }}>Ya</option>
              <option value="tidak" {{ $subgol->subgol_ap == 'tidak' ? 'selected="selected"' : '' }}>Tidak</option>
            </select>
          </div>
          <a class="btn btn-danger" href="{{ route('subgols.index') }}"> Back</a>
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
