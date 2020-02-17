@extends('admin.layouts.app')

@section('content')
<div class="col-md-12">
	<div class="card">
		<div class="card-header card-header-icon card-header-rose">
			<div class="card-icon">
				<i class="material-icons">supervised_user_circle</i>
			</div>
			<h4 class="card-title">Update Data Penyakit</h4>
		</div>
		<form action="{{ route('illness.store', $student->id) }}" method="POST">
			@csrf
		<div class="card-body">
			<div class="row">
			  <label class="col-sm-2 col-form-label">Nama Penyakit</label>
			  <div class="col-sm-8">
			    <div class="form-group">
			      <input type="text" class="form-control" name="illness_name">
			      <input type="hidden" class="form-control" name="student_id" value="{{ $student->id }}">
			    </div>
			  </div>
			</div>
			<div class="row">
			  <label class="col-sm-2 col-form-label">Waktu Kambuh</label>
			  <div class="col-sm-8">
			    <div class="form-group">
			      <input type="text" class="form-control" name="illness_total">
			    </div>
			  </div>
			</div>
			<div class="row">
			  <label class="col-sm-2 col-form-label">Terapi</label>
			  <div class="col-sm-8">
			    <div class="form-group">
			      <input type="text" class="form-control" name="illness_therapy">
			    </div>
			  </div>
			</div>
		</div>
	   <div class="card-footer d-flex justify-content-between">
			<a href="{{ route('student.show', $student->id) }}" class="btn btn-rose btn-sm">Kembali</a>
	   		<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="">Submit</button>
	   </div>
	   </form>
  	</div>
</div>
@endsection