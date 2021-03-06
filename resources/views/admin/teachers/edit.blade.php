@extends('admin.layouts.app')

@section('content')
<div class="col-md-12">
  <div class="card ">
    <div class="card-header card-header-rose card-header-icon">
      <div class="card-icon">
        <i class="material-icons">contacts</i>
      </div>
      <h4 class="card-title">Edit Data Guru
        <a href="{{route('teacher.index')}}" class="btn btn-sm btn-danger pull-right">Kembali</a>
      </h4>
    </div>
    <div class="card-body ">
      <form method="post" action="{{route('teacher.update', $data->id)}}" class="form-horizontal">
        @csrf
        @method('PUT')
        <div class="row">
          <label class="col-sm-2 col-form-label">NIK</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="nik" value="{{$data->nik}}">
          </div>
        </div>
        <div class="row">
          <label class="col-sm-2 col-form-label">Nama Guru</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="name" value="{{$data->name}}">
          </div>
        </div>
        <div class="row">
          <label class="col-sm-2 col-form-label label-checkbox">Jenis Kelamin</label>
          <div class="col-sm-8 checkbox-radios">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="gender" value="{{$data->gender}}" {{$data->gender == 1 ? 'checked' : ''}}> Laki-laki
                <span class="circle">
                  <span class="check"></span>
                </span>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="gender" value="{{$data->gender}}" {{$data->gender == 0 ? 'checked' : ''}}> Perempuan
                <span class="circle">
                  <span class="check"></span>
                </span>
              </label>
            </div>
          </div>
        </div>
        <div class="row">
          <label class="col-sm-2 col-form-label">Jabatan</label>
          <div class="col-sm-8">
            <select class="form-control" name="department_id">
              @foreach ($departement as $value)
                <option value="{{$value->id}}" {{$data->department_id == $value->id ? 'selected' : ''}}>{{$value->name}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="row">
          <label class="col-sm-2 col-form-label">Phone</label>
          <div class="col-sm-8">
            <div class="form-group">
              <input type="text" class="form-control" name="phone" value="{{$data->phone}}">
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
