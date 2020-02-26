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
      <h4 class="card-title">Input Data Donatur
        <a href="{{route('donatur.index')}}" class="btn btn-sm btn-danger pull-right">Kembali</a>
      </h4>
    </div>
    <div class="card-body ">
      <form method="post" action="{{route('donatur.store')}}" class="form-horizontal">
        @csrf
        <div class="row">
          <label class="col-sm-2 col-form-label">NIK</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="nik">
          </div>
        </div>
        <div class="row mt-3">
          <label class="col-sm-2 col-form-label">Nama Donatur</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="name">
          </div>
        </div>
        <div class="row mt-3">
          <label class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="email">
          </div>
        </div>
        <div class="row mt-3">
          <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
          <div class="col-sm-8">
            <input type="text" class="form-control datepicker" name="date_birth">
          </div>
        </div>
        <div class="row d-flex align-items-end mt-3">
          <label class="col-sm-2 col-form-label">Kecamatan</label>
          <div class="col-sm-8">
            <select class="select2 kecamatan form-control" title="Pilih Kecamatan" name="kecamatan_id" style="width: 100%" id="kecamatan_id">
              <option value="" selected="selected">- Please Select -</option>
              @foreach ($kec as $value)
                <option value="{{$value->id}}">{{$value->nama}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="row d-flex align-items-end mt-3">
          <label class="col-sm-2 col-form-label">Kabupaten</label>
          <div class="col-sm-8">
            <select class="select2 kabupaten form-control" title="Pilih Kabupaten" name="kabupaten_id" style="width: 100%" id="kabupaten_id">
              <option value="" selected="selected">- Please Select -</option>
              @foreach ($kab as $value)
                <option value="{{$value->id}}">{{$value->nama}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="row d-flex align-items-end mt-3">
          <label class="col-sm-2 col-form-label">Provinsi</label>
          <div class="col-sm-8">
            <select class="select2 provinsi form-control" title="Pilih Provinsi" name="provinsi_id" style="width: 100%" id="provinsi_id">
              <option value="" selected="selected">- Please Select -</option>
              @foreach ($prov as $value)
                <option value="{{$value->id}}">{{$value->nama}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="row mt-3">
          <label class="col-sm-2 col-form-label">Alamat</label>
          <div class="col-sm-8">
            <div class="form-group">
              <input type="text" class="form-control" name="street">
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
@endsection
