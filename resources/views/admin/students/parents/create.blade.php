@extends('admin.layouts.app')

@section('content')
<div class="col-md-12">
	<div class="card">
		<div class="card-header card-header-icon card-header-rose">
			<div class="card-icon">
				<i class="material-icons">supervised_user_circle</i>
			</div>
			<h4 class="card-title">Tambah Data Orang Tua</h4>
		</div>
		<form action="{{ route('parent.store') }}" method="POST">
			@csrf
		<div class="card-body">
			<div class="row">
			  <label class="col-sm-2 col-form-label">Nama</label>
			  <div class="col-sm-8">
			    <div class="form-group">
			      <input type="text" class="form-control" name="parent_name">
			      <input type="hidden" class="form-control" name="student_id" value="{{ $student->id }}">
			    </div>
			  </div>
			</div>
			<div class="row">
			  <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
			  <div class="col-sm-8">
			    <div class="form-group">
					<input type="text" class="form-control datepicker" placeholder="YYYY-MM-DD" name="parent_birth_date">
			    </div>
			  </div>
			</div>
			<div class="row d-flex align-items-end">
			  <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
			  <div class="col-sm-8 d-flex flex-row">
			    <div class="form-check m-0">
			      <label class="form-check-label">
			        <input class="form-check-input" name="parent_gender" type="radio" value="1"> Laki - Laki
			        <span class="circle">
			          <span class="check"></span>
			        </span>
			      </label>
			    </div>
			    <div class="form-check m-0">
			      <label class="form-check-label">
			        <input class="form-check-input" name="parent_gender" type="radio" value="0"> Perempuan
			        <span class="circle">
			          <span class="check"></span>
			        </span>
			      </label>
			    </div>
			  </div>
			</div>
			<div class="row mt-2">
			  <label class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
			  <div class="col-sm-8">
			    <div class="form-group">
			      <select class="selectpicker" style="width: 100%" name="parent_last_education" data-style="btn btn-primary" title="Pilih Pendidikan">
			        <option value="">Pilih Pendidikan</option>
			        <option value="sd">SD</option>
			        <option value="smp">SMP</option>
			        <option value="sma">SMA</option>
			        <option value="sarjana">Sarjana</option>
			      </select>
			    </div>
			  </div>
			</div>
			<div class="row">
			  <label class="col-sm-2 col-form-label">Pekerjaan</label>
			  <div class="col-sm-8">
			    <div class="form-group">
			      <input type="text" class="form-control" name="parent_job">
			    </div>
			  </div>
			</div>
			<div class="row">
			  <label class="col-sm-2 col-form-label">Penghasilan Perbulan</label>
			  <div class="col-sm-8">
			    <div class="form-group">
			      <input type="text" class="form-control {{-- money --}}" name="parent_salary">
			    </div>
			  </div>
			</div>
			<div class="row">
			  <label class="col-sm-2 col-form-label">No. HP/Telepon</label>
			  <div class="col-sm-8">
			    <div class="form-group">
			      <input type="text" class="form-control" name="parent_phone">
			    </div>
			  </div>
			</div>
			<div class="row">
			  <label class="col-sm-2 col-form-label">Status</label>
			  <div class="col-sm-8">
			    <div class="form-group">
			      <select class="selectpicker" style="width: 100%" name="parent_role" data-style="btn btn-primary" title="Pilih Status">
			        <option value="">Pilih Status</option>
			        <option value="1">Ayah</option>
			        <option value="2">Ibu</option>
			        <option value="3">Wali</option>
			      </select>
			    </div>
			  </div>
			</div>
			<div class="row d-flex align-items-end">
			  <label class="col-sm-2 col-form-label">Sebagai Wali Santri</label>
			  <div class="col-sm-8 d-flex flex-row">
			    <div class="form-check m-0">
			      <label class="form-check-label">
			        <input class="form-check-input" name="parent_is_guardian" type="radio" value="1"> Yes
			        <span class="circle">
			          <span class="check"></span>
			        </span>
			      </label>
			    </div>
			    <div class="form-check m-0">
			      <label class="form-check-label">
			        <input class="form-check-input" name="parent_is_guardian" type="radio" value="0"> No
			        <span class="circle">
			          <span class="check"></span>
			        </span>
			      </label>
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

@section('script')
<script type="text/javascript">
  $(function () {
    $('.datepicker').datetimepicker({
      format: 'YYYY-MM-DD',
    });
  });
</script>
@endsection