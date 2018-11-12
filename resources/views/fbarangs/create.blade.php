@extends('layouts.template')
@section('title','Tambah Barang')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambah Barang</h4>

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

        <form action="{{ route('barangs.store') }}" method="POST">
          @csrf


          <fieldset>

            @php
            $kd="BRG";
            $tgl=date('dym');
            $ran1=rand(0,999);
            $ran2=rand(0,99);
            $barang_kode=$kd.$tgl.$ran1.$ran2;
            @endphp
            <div class="form-group">
             <strong>Kode Barang:</strong>
             <input type="text" name="barang_kode" value="{{$barang_kode}}"  class="form-control" readonly>
           </div>
           <div class="form-group">
             <strong>Nama Barang:</strong>
             <input type="text" name="barang_nama" maxlength="50" id="defaultconfig-3"  class="form-control" placeholder="Nama">
           </div>
           <div class="form-group">
             <strong>Jenis:</strong>
             <input type="text" name="barang_jenis" maxlength="50" id="defaultconfig-2" class="form-control" placeholder="Ex: pcs, kg, meter">
           </div>
           <div class="form-group">
            <strong>Harga Beli:</strong>
            <input type="text" name="barang_hbeli" maxlength="50"  class="form-control" placeholder="Harga Beli">
          </div>
          <div class="form-group">
            <strong>Harga Jual:</strong>
            <input type="text"  name="barang_hjual" maxlength="50"  class="form-control" placeholder="Harga Jual">
          </div>
          <a class="btn btn-danger" href="{{ route('barangs.index') }}"> Back</a>
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