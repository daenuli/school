@extends('admin.layouts.app')

@section('style')
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
<style>
  .select2-container .select2-selection--single {
    height: 35px !important;
  }
</style>
@endsection

@section('content')
<div class="col-md-12">
  <div class="card ">
    <div class="card-header card-header-rose card-header-icon">
      <div class="card-icon">
        <i class="material-icons">contacts</i>
      </div>
      <h4 class="card-title">Edit Data Donatur
        <a href="{{route('donatur.index')}}" class="btn btn-sm btn-danger pull-right">Kembali</a>
      </h4>
    </div>
    <div class="card-body ">
      <form method="post" action="{{route('donatur.update', $donatur->id)}}" class="form-horizontal">
        @csrf
        @method('PUT')
        <div class="row">
          <label class="col-sm-2 col-form-label">NIK</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="nik" value="{{$donatur->nik}}">
          </div>
        </div>
        <div class="row mt-3">
          <label class="col-sm-2 col-form-label">Nama Donatur</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="name" value="{{$donatur->name}}">
          </div>
        </div>
        <div class="row mt-3">
          <label class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="email" value="{{$donatur->email}}">
          </div>
        </div>
        <div class="row mt-3">
          <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
          <div class="col-sm-8">
            <input type="text" class="form-control datepicker" name="date_birth" value="{{$donatur->date_birth}}">
          </div>
        </div>
        <div class="row d-flex align-items-end mt-3">
  			  <label class="col-sm-2 col-form-label">Provinsi</label>
  			  <div class="col-sm-8">
  			    <select class="select2 provinsi" title="Pilih Provinsi" style="width: 100%" id="provinsi_id" name="provinsi_id">
  			      <option value="{{ $donatur->provinsi_id ? $donatur->provinsi_id : '' }}" selected="selected">
  			        {{ $donatur->provinsi_id ? $donatur->provinsi->nama : '- Please Select -' }}
  			      </option>
  			      @foreach ($provinsi as $data)
  			        <option value="{{ $data->id }}">{{ $data->nama }}</option>
  			      @endforeach
  			    </select>
  			  </div>
  			</div>
  			<div class="row d-flex align-items-end mt-3">
  			  <label class="col-sm-2 col-form-label">Kabupaten</label>
  			  <div class="col-sm-8">
  			    <select class="select2 kabupaten" title="Pilih Kabupaten" style="width: 100%" id="kabupaten_id" name="kabupaten_id">
  			      <option value="{{ $donatur->kabupaten_id ? $donatur->kabupaten_id : '' }}" selected="selected">
  			        {{ $donatur->kabupaten_id ? $donatur->kabupaten->nama : '- Please Select -' }}
  			      </option>
  			    </select>
  			  </div>
  			</div>
  			<div class="row d-flex align-items-end mt-3">
  			  <label class="col-sm-2 col-form-label">Kecamatan</label>
  			  <div class="col-sm-8">
  			    <select class="select2 kecamatan" title="Pilih Kecamatan" style="width: 100%" id="kecamatan_id" name="kecamatan_id">
  			      <option value="{{ $donatur->kecamatan_id ? $donatur->kecamatan_id : '' }}" selected="selected">
  			        {{ $donatur->kecamatan_id ? $donatur->kecamatan->nama : '- Please Select -' }}
  			      </option>
  			    </select>
  			  </div>
  			</div>
        <div class="row mt-3">
          <label class="col-sm-2 col-form-label">Alamat</label>
          <div class="col-sm-8">
            <div class="form-group">
              <input type="text" class="form-control" name="street" value="{{$donatur->street}}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-2">  </div>
          <div class="col-sm-8">
            <div class="form-group">
              <button type="submit" name="button" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script type="text/javascript">
  $(function () {
    $('.datepicker').datetimepicker({
      format: 'YYYY-MM-DD',
    });
  });
</script>
<script> // select2 setting
  $(document).ready(function() {
      $('.select2').select2({
        width: 'resolve',
      });
  });
</script>
<script> //ajax for data donatur
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $(document).on('change', '.provinsi', function () {
    $('.kecamatan').html('<option value="0">- Please Select -</option>');
    $.post( '{{ route('wilayah.kabupaten') }}', {
      provinsi_id: $(this).val()
    }).done(function( data ) {
      $('.kabupaten').html(data);
    }).fail(function(data){
      console.log(data);
    });
  });
  $(document).on('change', '.kabupaten', function () {
    $.post( '{{ route('wilayah.kecamatan') }}', {
      kabupaten_id: $(this).val()
    }).done(function( data ) {
      $('.kecamatan').html(data);
    });
  });
</script>
@endsection
