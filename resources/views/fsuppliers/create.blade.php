@extends('layouts.template')
@section('title','Tambah Suppliers')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambah Supplier</h4>

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

        <form action="{{ route('suppliers.store') }}" method="POST">
          @csrf

          <fieldset>
            <div class="form-group">
             <strong>Nama:</strong>
             <input type="text" name="supplier_nama" maxlength="50" id="defaultconfig-3"  class="form-control" placeholder="Nama">
           </div>
            <div class="form-group">
             <strong>Toko / Perusahaan:</strong>
             <input type="text" name="supplier_toko" maxlength="50" id="defaultconfig-1"  class="form-control" placeholder="Toko">
           </div>
           <div class="form-group">
             <strong>Telepon:</strong>
             <input type="tel" name="supplier_tel" maxlength="12" id="defaultconfig-2" class="form-control" placeholder="Telepon">
           </div>
           <div class="form-group">
            <strong>Email:</strong>
            <input type="email" id="cemail" name="supplier_email" maxlength="50"  class="form-control" placeholder="Email">
          </div>
          <div class="form-group">
            <strong>Alamat:</strong>
            <textarea class="form-control" style="height:100px" maxlength="100" id="maxlength-textarea"  name="supplier_alamat" placeholder="Alamat"></textarea>
          </div>
          <a class="btn btn-danger" href="{{ route('suppliers.index') }}"> Back</a>
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