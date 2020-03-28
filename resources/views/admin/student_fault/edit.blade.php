@extends('admin.layouts.app')

@section('content')
  <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary card-header-icon">
          <div class="card-icon">
            <i class="material-icons">emoji_people</i>
          </div>
          <h4 class="card-title">Data Santri</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                  <tbody>
                    <tr>
                      <td class="profile-title" width="15%">Nama</td>
                      <td>
                        @if ($student->student->name)
                          {{ $student->student->name }}
                        @else
                          <i>Data belum ditambahkan</i>
                        @endif
                      </td>
                    </tr>
                  </tbody>
                </table>
            </div>
        </div>
        <!-- end content-->
      </div>
    <div class="card ">
      <div class="card-header card-header-primary card-header-icon">
        <div class="card-icon">
          <i class="material-icons">assignment</i>
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
            <label class="col-sm-3 col-form-label">Point</label>
            <div class="col-sm-8">
              <div class="form-group">
                <input type="number" class="form-control" name="point" value="{{$student->point}}">
              </div>
            </div>
          </div>
          <div class="row">
            <label class="col-sm-3 col-form-label">Keterangan</label>
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
