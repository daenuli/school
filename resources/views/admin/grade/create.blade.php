@extends('admin.layouts.app')
@section('link')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')
<div class="col-md-12">
    {!! form_start($form, ['class' => 'form-horizontal']) !!}
    <div class="card ">
      <div class="card-header card-header-rose card-header-icon">
        <div class="card-icon">
          <i class="material-icons">contacts</i>
        </div>
        <h4 class="card-title">Input Data Kelas</h4>
      </div>
      <div class="card-body">
        <div class="row">
          <label id="labelName" class="col-md-2 col-form-label" for="school_year_id">Tahun Ajaran</label>
          <div class="col-md-8">
            <div class="form-group has-default">
              <select class="js-example-basic-multiple form-control" name="school_year_id">
                  @foreach ($years as $y)
                    <option>-- Pilih Tahun Ajaran --</option>
                    <option value="{{$y->id}}">{{$y->start_year}}/{{$y->end_year}}</option>
                  @endforeach
              </select>
            </div>
          </div>
        </div>
        {!! form_row($form->teacher_id) !!}
        {!! form_row($form->name) !!}
        {!! form_row($form->student_id) !!}
      </div>
      <div class="card-footer ml-auto">
        <a href="{{$back}}" class="btn btn-default">Cancel</a>
        {!! form_rest($form) !!}
      </div>
    </div>
    {!! form_end($form) !!}
</div>
@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('.js-example-basic-multiple').select2();
      $('.js-example-basic-single').select2();
    });
</script>
@endsection
