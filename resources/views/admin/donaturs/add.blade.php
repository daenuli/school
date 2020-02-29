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
      <h4 class="card-title">Tambah Data Santri Donatur
        <a href="{{ route('donatur.show', $id) }}" class="btn btn-sm btn-danger pull-right">Kembali</a>
      </h4>
    </div>
    <div class="card-body ">
      <form method="post" action="{{route('donatur.storeStudent', $id)}}" class="form-horizontal">
        @csrf
        <input type="hidden" name="donatur_id" value="{{$id}}">
        <div class="row d-flex align-items-end">
          <label class="col-sm-2 col-form-label">Santri</label>
          <div class="col-sm-8">
            <select class="select2 student form-control" title="Pilih Santri" name="student_id" style="width: 100%" id="student_id">
              <option value="" selected="selected">- Please Select -</option>
              @foreach ($student as $value)
                <option value="{{$value->id}}">{{$value->name}}</option>
              @endforeach
            </select>
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
<script> // select2 setting
  $(document).ready(function() {
      $('.select2').select2({
        width: 'resolve',
      });
  });
</script>
@endsection
