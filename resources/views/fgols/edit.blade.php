@extends('layouts.template')
@section('title','Edit Golongan')
@section('content')

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Golongan</h4>

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

        <form action="{{ route('gols.update',$gol->gol_id) }}" method="POST">
          @csrf
          @method('PUT')
          <fieldset>
            <div class="form-group">
             <strong>Kelompok:</strong>
             <select name="kelompok_id" class="form-control">
              @foreach ($varkelompok as $kel)
              <option value="{{$kel->kelompok_id}}"  {{ $gol->kelompok_id == $kel->kelompok_id ? 'selected="selected"' : '' }} >{{ $kel->kelompok_nama }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <strong>Golongan:</strong>
            <input type="text" name="gol_nama" maxlength="50" id="defaultconfig-3" value="{{ $gol->gol_nama }}" class="form-control" placeholder="Nama">
          </div>
          <a class="btn btn-danger" href="{{ route('gols.index') }}"> Back</a>
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
