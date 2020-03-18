@extends('admin.layouts.app')

@section('content')
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header card-header-rose card-header-icon">
        <div class="card-icon">
          <i class="material-icons">contacts</i>
        </div>
        <h4 class="card-title">Edit Pelanggara Santri
        </h4>
      </div>
      <div class="card-body ">
        <form method="post" action="{{route('student_fault.update', $id)}}" class="form-horizontal">
          @csrf
          @method('PUT')
          <input type="hidden" name="student_id" value="{{$student->student_id}}">
          <div class="row">
            <label class="col-sm-3 col-form-label">Nama Pelanggaran</label>
            <div class="col-sm-8">
              <div class="form-group">
                <input type="text" class="form-control" name="name" value="{{$student->name}}">
              </div>
            </div>
          </div>
          <div class="row">
            <label class="col-sm-3 col-form-label label-checkbox">Type Pelanggaran</label>
            <div class="col-sm-8 checkbox-radios">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="type" value="1" 
                    @if ($student->type == 1)
                    checked 
                    @endif
                  > Ringan
                  <span class="circle">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="type" value="2"
                  @if ($student->type == 2)
                    checked 
                    @endif
                  > Sedang
                  <span class="circle">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="type" value="3" 
                    @if ($student->type == 3)
                    checked 
                    @endif
                  > Berat
                  <span class="circle">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
            </div>
          </div>
          <div class="row">
            <label class="col-sm-3 col-form-label">Description</label>
            <div class="col-sm-8">
              <div class="form-group">
                <input type="text" class="form-control" name="description" value="{{$student->description}}">
              </div>
            </div>
          </div>
          <div class="form-group pull-left">
            <a href="{{route('student_fault.fault', $student->student_id)}}" class="btn btn-default">Kembali</a>
          </div>
          <div class="form-group pull-right">
            <button type="submit" name="button" class="btn btn-rose">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
