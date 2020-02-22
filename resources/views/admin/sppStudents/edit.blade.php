@extends('admin.layouts.app')

@section('content')
  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-rose card-header-icon">
        <div class="card-icon">
          <i class="material-icons">contacts</i>
        </div>
        <h4 class="card-title">Input Data Guru
          <a href="{{URL::previous()}}" class="btn btn-sm btn-danger pull-right">Kembali</a>
        </h4>
      </div>
      <div class="card-body ">
        <form method="post" action="{{route('sppStudent.sppupdt', $spps->id)}}" class="form-horizontal">
          @csrf
          <input type="hidden" name="student_id" value="{{$spps->student_id}}">
          {{-- <input type="hidden" name="user_id" value="{{auth()->user()->id}}"> --}}
          <div class="row">
            <label class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-8">
              <select class="form-control" name="spp_id">
                <option value="" selected>- Pilih Kategori SPP-</option>
                @foreach ($spp as $value)
                  <option value="{{$value->id}}" {{$spps->spp_id == $value->id ? 'selected' : '' }}>{{$value->name}} : {{$value->total}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="row">
            <label class="col-sm-2 col-form-label label-checkbox">Status</label>
            <div class="col-sm-8 checkbox-radios">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="status" value="{{$spps->status}}" {{$spps->status == 1 ? 'checked' : ''}}> Lunas
                  <span class="circle">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="status" value="{{$spps->status}}" {{$spps->status == 0 ? 'checked' : ''}}> Belum Lunas
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
