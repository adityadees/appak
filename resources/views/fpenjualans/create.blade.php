@extends('layouts.template')
@section('title','Tambah Penjualan')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Form Penjualan</h4>

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

        <form action="{{ route('penjualans.store') }}" method="POST">
          @csrf

          <?php 
          $kd="PJL";
          $tgl=date('ymd');
          $r1=rand(0,999);
          $r2=rand(0,10);
          $kode=$kd.$tgl.$r1.$r2;
          ?>
          <fieldset>
            <div class="row">
              <div class="col-md-12"> 
                <div class="form-group row">
                  <strong class="col-sm-3 col-form-label">Kode Penjualan</strong>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="penjualan_kode" value="{{$kode}}" readonly="" />
                  </div>
                </div>
              </div>
              <div class="col-md-12"> 
                <div class="form-group row">
                  <strong class="col-sm-3 col-form-label">Tanggal</strong>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" value="{{date('d-m-Y')}}" readonly="" />
                  </div>
                </div>
              </div>
              <div class="col-md-12"> 
                <div class="form-group row">
                  <strong class="col-sm-3 col-form-label">Customer</strong>
                  <div class="col-sm-9">
                    <select name="customer_id" class="form-control">
                      @foreach ($varcustomer as $cus)
                      <option value="{{$cus->customer_id}}">{{ $cus->customer_nama }}</option>
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
                      <th class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $total=0; $cid=0;?>
                    @foreach ($varcart as $cart)
                    <?php 
                    $cid++;
                    $subtot = $cart->cart_qty*$cart->barang->barang_hjual; 
                    $total +=$subtot;
                    ?>
                    <tr>
                      <td>
                        <input type="hidden" name="barang_kode[]" value="{{ $cart->barang->barang_kode }}">
                        {{ $cart->barang->barang_nama }}
                      </td>
                      <td>{{ $cart->barang->barang_jenis }}</td>
                      <td>
                        <input type="hidden" name="cid[]" value="{{$cid}}">
                        <input type="hidden" name="penjualan_qty[]" value="{{ $cart->cart_qty }}">
                        {{ $cart->cart_qty }}
                      </td>
                      <td>Rp. {{ number_format($cart->barang->barang_hjual) }}</td>
                      <td>Rp. {{ number_format($subtot) }}</td>
                      <td class="text-center"><a href="{{ action('CartController@destroy', ['cart_id' => $cart->cart_id]) }}" ><i class="fa fa-trash"></i></a></td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <td>Total</td>
                    <input type="hidden" name="penjualan_total" value="{{$total}}">
                    <td colspan="5" style="text-align: right;">Rp. {{number_format($total)}}</td>
                  </tfoot>
                </table>
              </div>
            </div>
            <br>

            <div class="row">
              <div class="col-md-12"> 
                <a class="btn btn-danger" href="{{ route('penjualans.index') }}"> Back</a>
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
        {{ Form::open(['route' => 'cartsj.store']) }}
        <div class="col-md-12"> 
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Kode Barang</label>
            <div class="col-sm-9">
              <select class="form-control" name="barang_kode" id="barangs">
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
              <input type="text" class="form-control" name="cart_qty"/>
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
</div>

@endsection



@section('jsforpage')
<script src="{{ asset('backend/nodemod/jquery-validation/dist/jquery.validate.min.js') }}"></script>
<script src="{{ asset('backend/nodemod/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
<script src="{{ asset('backend/js/form-validation.js') }}"></script>
<script src="{{ asset('backend/js/bt-maxLength.js') }}"></script>
<script type="text/javascript">
  $('#barangs').on('change', function(e){
    console.log(e);
    var barang_kode = e.target.value;
    $.get('/appak/public/penjualans/create/json-regencies?barang_kode=' + barang_kode,function(data) {
      console.log(data);
      $('#regencies').empty();
      $.each(data, function(index, regenciesObj){
        $('#regencies').append('<div class="col-md-12"><div class="form-group row"><label class="col-sm-3 col-form-label">Nama Barang</label><div class="col-sm-9"><input type="text" class="form-control" name="barang_nama" value="'+ regenciesObj.barang_nama +'" readonly ></div></div></div>');
        $('#regencies').append('<div class="col-md-12"><div class="form-group row"><label class="col-sm-3 col-form-label">Unit</label><div class="col-sm-9"><input type="text" name="barang_jenis"  class="form-control" value="'+ regenciesObj.barang_jenis +'" readonly ></div></div></div>');
        $('#regencies').append('<div class="col-md-12"><div class="form-group row"><label class="col-sm-3 col-form-label">Harga Barang</label><div class="col-sm-9"><input type="text" name="barang_hjual"  class="form-control" value="'+ regenciesObj.barang_hjual +'" readonly ></div></div></div>');
      })
    });
  });


</script>
@endsection