@extends('layouts.template')
@section('title','Edit Customers')
@section('content')
<div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Edit Customer</h4>

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

        <form action="{{ route('customers.update',$customer->customer_id) }}" method="POST">
            @csrf
            @method('PUT')
            <fieldset>
              <div class="form-group">
               <strong>Name:</strong>
               <input type="text" name="customer_nama" maxlength="50" id="defaultconfig-3" value="{{ $customer->customer_nama }}" class="form-control" placeholder="Nama">
           </div>
           <div class="form-group">
             <strong>Telepon:</strong>
             <input type="tel" name="customer_tel" maxlength="12" id="defaultconfig-2" value="{{ $customer->customer_tel }}" class="form-control" placeholder="Telepon">
         </div>
         <div class="form-group">
            <strong>Email:</strong>
            <input type="email" id="cemail" name="customer_email" maxlength="50"  value="{{ $customer->customer_email }}" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
            <strong>Alamat:</strong>
            <textarea class="form-control" style="height:100px" maxlength="100" id="maxlength-textarea"  name="customer_alamat" placeholder="Alamat">{{ $customer->customer_alamat }}</textarea>
        </div>
        <a class="btn btn-danger" href="{{ route('customers.index') }}"> Back</a>
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
