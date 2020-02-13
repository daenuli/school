@extends('admin.layouts.app')

@section('content')
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header card-header-rose card-header-icon">
        <div class="card-icon">
          <i class="material-icons">contacts</i>
        </div>
        <h4 class="card-title">Edit Data SPP
          <a href="{{ route('spp.index') }}" class="btn btn-sm btn-danger pull-right">Kembali</a>
        </h4>
      </div>
      <div class="card-body ">
        <form method="post" action="{{route('spp.update', $data->id)}}" class="form-horizontal">
          @csrf
          @method('PUT')
          <div class="row">
            <label class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-8">
              <div class="form-group">
                <input type="text" class="form-control" name="name" value="{{$data->name}}">
              </div>
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
