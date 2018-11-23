@extends('layouts.template')
@section('title','Tambah Pembelian')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Form Pembelian</h4>

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

        <form action="{{ route('pembelians.store') }}" method="POST">
          @csrf

          <fieldset>
            <div class="row">

              <div class="col-md-12"> 
                <div class="form-group row">
                  <strong class="col-sm-3 col-form-label">Kode Pembelian</strong>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" />
                  </div>
                </div>
              </div>
              <div class="col-md-12"> 
                <div class="form-group row">
                  <strong class="col-sm-3 col-form-label">Tanggal</strong>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" />
                  </div>
                </div>
              </div>
              <div class="col-md-12"> 
                <div class="form-group row">
                  <strong class="col-sm-3 col-form-label">Supplier</strong>
                  <div class="col-sm-9">
                    <select name="supplier_id" class="form-control">
                      @foreach ($varsupplier as $sup)
                      <option value="{{$sup->supplier_id}}">{{ $sup->supplier_nama }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12"> 
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#favoritesModal">
                  Tambah Data Barang
                </button>
              </div>
            </div>
            <br>

            <div class="row">
              <div class="table-responsive">
                <table class="table table-bordered table-hovered  table-striped">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Unit</th>
                      <th>Qty</th>
                      <th>Harga</th>
                      <th>Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tbody>
                  <tfoot>
                    <td>Total</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tfoot>
                </table>
              </div>
            </div>
            <br>

            <div class="row">
              <div class="col-md-12"> 
                <a class="btn btn-danger" href="{{ route('pembelians.index') }}"> Back</a>
                <input class="btn btn-primary" type="submit" value="Submit">
              </div>
            </div>

          </fieldset>

        </form>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="favoritesModal"  tabindex="-1" role="dialog"  aria-labelledby="favoritesModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"   id="favoritesModalLabel">Input Barang</h4>
        <button type="button" class="close"  data-dismiss="modal"  aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{ Form::open(['route' => 'pembelians.store']) }}
        <div class="col-md-12"> 
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Kode Barang</label>
            <div class="col-sm-9">
              <select class="form-control" name="provinces" id="provinces">
                <option value="0" disable="true" selected="true">=== Select Item ===</option>
                @foreach ($varbarang as $key => $value)
                <option value="{{$value->barang_kode}}">{{ $value->barang_kode }}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>

        <div id="regencies">

        </div> 

        <div class="col-md-12"> 
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Qty</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="barang_qty"/>
            </div>
          </div>
        </div>


        <div class="modal-footer">
          <button type="button"   class="btn btn-default"   data-dismiss="modal">Close</button>
          <span class="pull-right">
            <button type="submit" class="btn btn-primary">
              Add to List
            </button>
          </span>
        </div>
        {{ Form::close() }}
      </div>
    </div>
  </div>

  @endsection



  @section('jsforpage')
  <script src="{{ asset('backend/nodemod/jquery-validation/dist/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('backend/nodemod/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
  <script src="{{ asset('backend/js/form-validation.js') }}"></script>
  <script src="{{ asset('backend/js/bt-maxLength.js') }}"></script>
    <script type="text/javascript">
    $('#provinces').on('change', function(e){
      console.log(e);
      var barang_kode = e.target.value;
      $.get('/appak/public/pembelians/create/json-regencies?barang_kode=' + barang_kode,function(data) {
        console.log(data);
        $('#regencies').empty();
        $.each(data, function(index, regenciesObj){
          $('#regencies').append('<div class="col-md-12"><div class="form-group row"><label class="col-sm-3 col-form-label">Nama Barang</label><div class="col-sm-9"><input type="text" class="form-control" name="barang_nama" value="'+ regenciesObj.barang_nama +'" readonly ></div></div></div>');
          $('#regencies').append('<div class="col-md-12"><div class="form-group row"><label class="col-sm-3 col-form-label">Unit</label><div class="col-sm-9"><input type="text" name="barang_jenis"  class="form-control" value="'+ regenciesObj.barang_jenis +'" readonly ></div></div></div>');
          $('#regencies').append('<div class="col-md-12"><div class="form-group row"><label class="col-sm-3 col-form-label">Harga Barang</label><div class="col-sm-9"><input type="text" name="barang_hbeli"  class="form-control" value="'+ regenciesObj.barang_hbeli +'" readonly ></div></div></div>');
        })
      });
    });


  </script>
  @endsection