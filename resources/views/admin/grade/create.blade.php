@extends('admin.layouts.app')

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
        {!! form_rest($form) !!}
      </div>
      <div class="card-footer ml-auto">
        <a href="{{$back}}" class="btn btn-default">Cancel</a>
        <button type="submit" class="btn btn-fill btn-rose pull-right">Submit</button>
      </div>
    </div>
    {!! form_end($form) !!}
</div>
@endsection
