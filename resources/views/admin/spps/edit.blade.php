@extends('admin.layouts.app')

@section('content')
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header card-header-rose card-header-icon">
        <div class="card-icon">
          <i class="material-icons">contacts</i>
        </div>
        <h4 class="card-title">Edit Data SPP</h4>
      </div>
      <div class="card-body ">
        <form method="post" action="{{route('spp.update', $data->id)}}" class="form-horizontal">
          @csrf
          @method('PUT')
          <div class="row">
            <label class="col-sm-2 col-form-label">Nama Santri</label>
            <div class="col-sm-8">
              <select class="form-control" name="students_id">
                <option disabled selected>Single Option</option>
                  @foreach ($student as $santri)
                    <option value="{{$santri->id}}" {{$santri->id == $data->students_id ? 'selected' : ''}}>{{$santri->name}}</option>
                  @endforeach
              </select>
            </div>
          </div>
          <div class="row">
            <label class="col-sm-2 col-form-label">Total</label>
            <div class="col-sm-8">
              <div class="form-group">
                <input type="number" class="form-control" name="total" value="{{$data->total}}">
              </div>
            </div>
          </div>
          <div class="row">
            <label class="col-sm-2 col-form-label label-checkbox">Status</label>
            <div class="col-sm-8 checkbox-radios">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="status" value="{{$data->status}}" {{$data->status == 1 ? 'checked' : ''}}> Lunas
                  <span class="circle">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="status" value="{{$data->status}}" {{$data->status == 0 ? 'checked' : ''}}> Belum Lunas
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
