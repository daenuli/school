@extends('admin.layouts.app')

@section('content')
<div class="col-md-12">
	<div class="card">
		<div class="card-header card-header-icon card-header-rose">
			<div class="card-icon">
				<i class="material-icons">supervised_user_circle</i>
			</div>
			<h4 class="card-title">Detail Data Orang Tua</h4>
		</div>
		<div class="card-body">
			
		</div>
	   <div class="card-footer d-flex justify-content-between">
			<a href="{{ route('student.show', $student->id) }}" class="btn btn-rose btn-sm">Kembali</a>
	   </div>
  	</div>
</div>
@endsection