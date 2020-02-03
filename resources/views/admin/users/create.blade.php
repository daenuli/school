@extends('admin.layouts.app')

@section('content')
<div class="col-md-12">
    {!! form_start($form, ['class' => 'form-horizontal']) !!}
    <div class="card ">
      <div class="card-header card-header-rose card-header-icon">
        <div class="card-icon">
          <i class="material-icons">contacts</i>
        </div>
        <h4 class="card-title">Input Data User</h4>
      </div>

      {{-- <div class="card-header card-header-rose card-header-text">
        <div class="card-text">
          <h4 class="card-title">Create User</h4>
        </div>
      </div> --}}
      <div class="card-body">
        {!! form_rest($form) !!}
      </div>
      <div class="card-footer ml-auto">
        <a href="{{$back}}" class="btn btn-default">Cancel</a>
        <button type="submit" class="btn btn-fill btn-rose pull-right">Sign in</button>
      </div>
    </div>
    {!! form_end($form) !!}
</div>
@endsection
