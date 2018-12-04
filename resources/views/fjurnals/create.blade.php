@extends('layouts.template')
@section('title','Tambah Jurnal')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Form Jurnal</h4>

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

        <form action="{{ route('jurnals.store') }}" method="POST">
          @csrf

          <?php 
          $kd="JRN";
          $tgl=date('dm');
          $yr=date('y');
          $r1=rand(0,999);
          $r2=rand(0,99);
          $nkd=$r2.$r1.$kd.$tgl.$yr;
          ?>
          <fieldset>
            <div class="row">
              <div class="col-md-12"> 
                <div class="form-group row">
                  <strong class="col-sm-3 col-form-label">Kode Jurnal</strong>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="jurnals_kode" value="{{$nkd}}" readonly="" />
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
                  <strong class="col-sm-3 col-form-label">Keterangan</strong>
                  <div class="col-sm-9">
                    <textarea class="form-control" name="jurnals_ket"></textarea>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12"> 
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#favoritesModal">
                  Tambah Data 
                </button>
              </div>
            </div>
            <br>

            <div class="row">
              <div class="table-responsive">
                <table class="table table-bordered table-hovered  table-striped">
                  <thead>
                    <tr>
                      <th>Akun</th>
                      <th>Keterangan</th>
                      <th>Debit</th>
                      <th>Kredit</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $cid=0; $tdebit=0;$tkredit=0;?>
                    @foreach ($varjtemp as $jtemp)
                    <?php 
                    $cid++;
                    ?>
                    <tr>
                      <input type="hidden" name="cid[]" value="{{ $cid }}">
                      <input type="hidden" name="akun_id[]" value="{{ $jtemp->akun->akun_id }}">
                      <input type="hidden" name="jd_ket[]" value="{{ $jtemp->jt_ket }}">
                      <input type="hidden" name="jd_total[]" value="{{ $jtemp->jt_total }}">
                      <input type="hidden" name="jd_jenis[]" value="{{ $jtemp->jt_jenis }}">
                      <td>{{$jtemp->akun_kode." - ".$jtemp->akun->akun_nama}}</td>
                      <td>{{$jtemp->jt_ket}}</td>
                      <td>
                        <?php 
                        if($jtemp->jt_jenis=='debit'){
                          $tdebit+=$jtemp->jt_total;
                          echo "Rp. ".number_format($jtemp->jt_total);
                        } else { echo "0";}
                        ?>
                      </td>
                      <td>
                        <?php 
                        if($jtemp->jt_jenis=='kredit'){
                          $tkredit+=$jtemp->jt_total;
                          echo "Rp. ".number_format($jtemp->jt_total);
                        } else { echo "Rp. 0";}
                        ?>
                      </td>
                      
                      <td class="text-center"><a href="{{ action('JurnalTempController@destroy', ['jt_id' => $jtemp->jt_id]) }}" ><i class="fa fa-trash"></i></a></td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <td>Total</td>
                    <td></td>
                    <td>{{$tdebit}}</td>
                    <td>{{$tkredit}}</td>
                    <td></td>
                  </tfoot>
                </table>
              </div>
            </div>
            <br>

            <div class="row">
              <div class="col-md-12"> 
                <a class="btn btn-danger" href="{{ route('jurnals.index') }}"> Back</a>
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
        <h4 class="modal-title"   id="favoritesModalLabel">Input Akun</h4>
        <button type="button" class="close"  data-dismiss="modal"  aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{ Form::open(['route' => 'jtemps.store']) }}
        <div class="col-md-12"> 
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Kode Akun</label>
            <div class="col-sm-9">
              <select class="form-control" name="akun_kode" id="akuns">
                <option value="0" disable="true" selected="true">=== Select Item ===</option>
                @foreach ($varakun as $key => $value)
                <option value="{{$value->akun_id}}">{{ $value->akun_id }}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>

        <div id="regencies">

        </div> 

        <div class="col-md-12"> 
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Jenis</label>
            <div class="col-sm-9">
              <select name="jt_jenis" class="form-control">
                <option name="debit">Debit</option>
                <option name="kredit">Kredit</option>
              </select>
            </div>
          </div>
        </div>


        <div class="col-md-12"> 
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Jumlah</label>
            <div class="col-sm-9">
              <input type="text" name="jt_total" class="form-control">
            </div>
          </div>
        </div>


        <div class="col-md-12"> 
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Keterangan</label>
            <div class="col-sm-9">
              <textarea class="form-control" name="jt_ket"></textarea>
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
  $('#akuns').on('change', function(e){
    console.log(e);
    var akun_id = e.target.value;
    $.get('/appak/public/jurnals/create/json-regencies?akun_id=' + akun_id,function(data) {
      console.log(data);
      $('#regencies').empty();
      $.each(data, function(index, regenciesObj){
        $('#regencies').append('<div class="col-md-12"><div class="form-group row"><label class="col-sm-3 col-form-label">Nama Akun</label><div class="col-sm-9"><input type="text" class="form-control" name="akun_nama" value="'+ regenciesObj.akun_nama +'" readonly ></div></div></div>');
      })
    });
  });


</script>
@endsection