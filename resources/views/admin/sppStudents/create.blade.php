@extends('admin.layouts.app')

@section('content')
<div class="col-md-12">
  <div class="card ">
    <div class="card-header card-header-rose card-header-icon">
      <div class="card-icon">
        <i class="material-icons">contacts</i>
      </div>
      <h4 class="card-title">Input Data Guru
        <a href="{{route('student.index')}}" class="btn btn-sm btn-danger pull-right">Kembali</a>
      </h4>
    </div>
    <div class="card-body ">
      <form method="post" action="{{route('sppStudent.sppstr')}}" class="form-horizontal">
        @csrf
        <div class="row">
          <label class="col-sm-2 col-form-label">Jabatan</label>
          <div class="col-sm-8">
            <select class="form-control" name="departement_id">
              <option value="" selected>- Pilih Kategori SPP-</option>
              @foreach ($spp as $value)
                <option value="{{$value->id}}">{{$value->name}} : {{$value->total}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="row">
          <label class="col-sm-2 col-form-label label-checkbox">Status</label>
          <div class="col-sm-8 checkbox-radios">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="gender" value="1" checked> Lunas
                <span class="circle">
                  <span class="check"></span>
                </span>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="gender" value="0"> Belum Lunas
                <span class="circle">
                  <span class="check"></span>
                </span>
              </label>
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
<script type="text/javascript">
  $(function () {
    $('.datepicker').datetimepicker({
      format: 'LT',
    });
  });
</script>
@endsection
