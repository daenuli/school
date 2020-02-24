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
        {!! form_row($form->teacher_id) !!}
        {!! form_row($form->name) !!}
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
        $('.js-example-basic-single').select2();
        $("#count").bind("keypress", function(e){
            var keyCode = e.which ? e.which : e.keyCode;
            if (!(keyCode >= 45 && keyCode <= 57)) {
                return false;
            }else {
                return true;
            }
        });
    });
</script>
@endsection
