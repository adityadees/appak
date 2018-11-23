@extends('layouts.template')
@section('title','Edit Barangs')
@section('content')
<div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Edit Barang</h4>

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

        <form action="{{ route('barangs.update',$barang->barang_kode) }}" method="POST">
            @csrf
            @method('PUT')
            <fieldset>
              <div class="form-group">
               <strong>Nama Barang:</strong>
               <input type="text" name="barang_nama" maxlength="50" id="defaultconfig-3" value="{{ $barang->barang_nama }}" class="form-control" placeholder="Nama">
           </div>
           <div class="form-group">
             <strong>Jenis:</strong>
             <input type="text" name="barang_jenis" maxlength="12" id="defaultconfig-2" value="{{ $barang->barang_jenis }}" class="form-control" placeholder="Jenis">
         </div>
         <div class="form-group">
            <strong>Harga Beli:</strong>
            <input type="text" name="barang_hbeli" maxlength="50"  value="{{ $barang->barang_hbeli }}" class="form-control" placeholder="Harga Beli">
        </div>
         <div class="form-group">
            <strong>Harga Jual:</strong>
            <input type="text" name="barang_hjual" maxlength="50"  value="{{ $barang->barang_hjual }}" class="form-control" placeholder="Harga Jual">
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
  <script src="{{ asset('backend/nodemod/jquery-validation/dist/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('backend/nodemod/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
  <script src="{{ asset('backend/js/form-validation.js') }}"></script>
  <script src="{{ asset('backend/js/bt-maxLength.js') }}"></script>
@endsection
