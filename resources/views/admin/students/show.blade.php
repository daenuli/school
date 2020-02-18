@extends('admin.layouts.app')

@section('style')
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
<style>
	.profile-title {
		font-weight: bold;
	}
	.modal .modal-dialog {
		max-width: 800px !important;
		margin-top: 50px;
	}
	.modal .modal-dialog .modal-content .modal-body .card {
		border: none;
		box-shadow: none;
		margin: 0px;
		padding: 0px;
	}
</style>
@endsection

@section('content')
<div class="col-md-12">
	<div class="card">
		<div class="card-header card-header-icon card-header-rose">
			<div class="card-icon">
				<i class="material-icons">perm_identity</i>
			</div>
			<h4 class="card-title">Informasi Pribadi
				<a href="" class="btn btn-sm btn-primary pull-right">Luluskan</a>
			</h4>
		</div>
		<div class="card-body">
			<div class="card-avatar d-flex justify-content-center">
				<form action="{{ route('student.updateava', $student->id) }}" method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="fileinput fileinput-new text-center" data-provides="fileinput">
					  <div class="fileinput-new thumbnail img-circle">
					    <img src="{{ $student->avatar ? Storage::url($student->avatar) : Avatar::create($student->name)->toBase64() }}" alt="...">
					  </div>
					  <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
					  <div>
					    <span class="btn btn-round btn-rose btn-sm btn-file">
					    	@isset ($student->avatar)
					    	  <span class="fileinput-new">Ganti Photo</span>
					    	@else
					    	  <span class="fileinput-new">Tambah Photo</span>
					    	@endisset
					      <span class="fileinput-exists">Ganti Photo</span>
					      <input type="file" name="avatar"/>
					    </span>
					    <br />
					    <a href="#pablo" class="btn btn-danger btn-sm btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
					    <button href="#pablo" class="btn btn-primary btn-sm btn-round fileinput-exists"><i class="fa fa-save"></i> Submit</button>
					  </div>
					</div>
				</form>
		   </div>
			<div class="card-category d-flex align-items-center justify-content-center flex-column">
				<h4>{{ $student->name }}</h4>
				@if ($student->status = 1)
			   	<span class='badge badge-pill badge-success'>Aktif</span>
			   @else
			   	<span class='badge badge-pill badge-danger'>Tidak Aktif</span>
			   @endif
			</div>
			<div class="table-responsive">
				<table class="table">
					<thead>
				  		<tr>
				  			<td width="30%"></td>
				  			<td></td>
				  		</tr>
		  			</thead>
				  	<tbody>
				  		<tr>
				  			<td class="profile-title">NIS</td>
				  			<td>
				  				@if ($student->nis)
					  				{{ $student->nis }}
					  			@else
					  				<i>Data belum ditambahkan</i>
					  			@endif
				  			</td>
				  		</tr>
				  		<tr>
				  			<td class="profile-title">NIK</td>
				  			<td>
				  				@if ($student->nik)
					  				{{ $student->nik }}
					  			@else
					  				<i>Data belum ditambahkan</i>
					  			@endif
				  			</td>
				  		</tr>
				  		<tr>
				  			<td class="profile-title">NISN</td>
				  			<td>
				  				@if ($student->nisn)
					  				{{ $student->nisn }}
					  			@else
					  				<i>Data belum ditambahkan</i>
					  			@endif
				  			</td>
				  		</tr>
				  		<tr>
				  			<td class="profile-title">TTL</td>
				  			<td>
				  				@if ($student->birth_date && $student->birth_place)
				  					{{ $student->birth_place }}, {{ date('d F Y', strtotime($student->birth_date)) }}
					  			@else
					  				<i>Data belum ditambahkan</i>
					  			@endif
				  			</td>
				  		</tr>
				  		<tr>
				  			<td class="profile-title">Anak Ke</td>
				  			<td>
				  				@if ($student->position && $student->sibling)
				  					{{ $student->position }} <b class="profile-title">dari</b> {{ $student->sibling }} bersaudara
					  			@else
					  				<i>Data belum ditambahkan</i>
					  			@endif
				  			</td>
				  		</tr>
				  		<tr>
				  			<td class="profile-title">Lanjut ke Jenjang</td>
				  			<td>
				  				@if ($student->level)
				  					{{ strtoupper($student->level) }}
					  			@else
					  				<i>Data belum ditambahkan</i>
					  			@endif
				  			</td>
				  		</tr>
				  		<tr>
				  			<td class="profile-title">Status Anak</td>
				  			<td>
				  				@isset ($student->child_status)
				  					@if ($student->child_status == 0)
				  						<span class='badge badge-pill badge-primary'>Non-Yatim</span>
				  					@else
				  						<span class='badge badge-pill badge-success'>Yatim</span>
				  					@endif
				  				@else
				  					<i>Data belum ditambahkan</i>
				  				@endif
				  			</td>
				  		</tr>
				  		<tr>
				  			<td class="profile-title">HP/Telepon</td>
				  			<td>
				  				@if ($student->phone)
					  				{{ $student->phone }}
					  			@else
					  				<i>Data belum ditambahkan</i>
					  			@endif
				  			</td>
				  		</tr>
				  		<tr>
				  			<td class="profile-title">HP/Telepon</td>
				  			<td>
				  				@if ($student->email)
					  				{{ $student->email }}
					  			@else
					  				<i>Data belum ditambahkan</i>
					  			@endif
				  			</td>
				  		</tr>
				  		<tr>
				  			<td class="profile-title">Jenis Kelamin</td>
				  			<td>
				  				@isset ($student->gender)
				  					@if ($student->gender == 0)
				  						<span class='badge badge-pill badge-primary'>Perempuan</span>
				  					@else
				  						<span class='badge badge-pill badge-success'>Laki Laki</span>
				  					@endif
				  				@else
				  					<i>Data belum ditambahkan</i>
				  				@endif
				  			</td>
				  		</tr>
				  		<tr>
				  			<td class="profile-title">Alamat</td>
				  			<td>
				  				@if ($student->street)
				  					{{ $student->street }},
				  					{{ $student->kecamatan->nama }},
				  					{{ $student->kabupaten->nama }},
				  					{{ $student->provinsi->nama }}
					  			@else
					  				<i>Data belum ditambahkan</i>
					  			@endif
				  			</td>
				  		</tr>
				  	</tbody>
		  		</table>
			</div>
		</div>
	   <div class="card-footer d-flex justify-content-end">
	    	<a href="{{ route('student.edit', $student->id) }}" class="btn btn-sm btn-rose">Update</a>
	   </div>
  	</div>
</div>

<div class="col-md-12">
	<div class="card">
		<div class="card-header card-header-icon card-header-rose">
			<div class="card-icon">
				<i class="material-icons">supervised_user_circle</i>
			</div>
			<h4 class="card-title">Data Orang Tua</h4>
		</div>
		<div class="card-body">
			@foreach ($parents as $parent)
				<div class="row mt-4">
					<div class="col-md-12">
							<h4>
								Data 
								  	@if ($parent->role == 1)
										Ayah
						  			@elseif($parent->role == 2)
						  				Ibu
						  			@else
						  				Wali
						  			@endif
						  			<form action="{{ route('parent.destroy', $parent->id) }}" method="POST" class="pull-right">
					  					@csrf
					  					@method('DELETE')
						  				<a href="{{ route('parent.edit', $parent->id) }}" class="btn btn-sm btn-rose">Update</a>
					  					<button type="submit" class="btn btn-sm btn-danger px-2"><i class="material-icons">delete</i></button>
					  				</form>
							</h4>
							<div class="table-responsive">
								<table class="table">
								  	<tbody>
								  		<tr>
								  			<td width="30%" class="profile-title">Nama</td>
								  			<td>
								  				@isset ($parent->name)
								  					{{ $parent->name }}
								  				@else
								  					<i>Data belum ditambahkan</i>
								  				@endif
								  			</td>
								  		</tr>
								  		<tr>
								  			<td class="profile-title">Tanggal Lahir</td>
								  			<td>
								  				@isset ($parent->birth_date)
								  					{{ date('d F Y', strtotime($parent->birth_date)) }}
								  				@else
								  					<i>Data belum ditambahkan</i>
								  				@endif
								  			</td>
								  		</tr>
								  		<tr>
								  			<td class="profile-title">Pendidikan</td>
								  			<td>
								  				@isset ($parent->last_education)
								  					{{ strtoupper($parent->last_education) }}
								  				@else
								  					<i>Data belum ditambahkan</i>
								  				@endif
								  			</td>
								  		</tr>
								  		<tr>
								  			<td class="profile-title">Pekerjaan</td>
								  			<td>
								  				@isset ($parent->job)
								  					{{ $parent->job }}
								  				@else
								  					<i>Data belum ditambahkan</i>
								  				@endif
								  			</td>
								  		</tr>
								  		<tr>
								  			<td class="profile-title">Gaji</td>
								  			<td>
								  				@isset ($parent->salary)
								  					Rp {{ number_format($parent->salary,0,",",".") }}
								  				@else
								  					<i>Data belum ditambahkan</i>
								  				@endif
								  			</td>
								  		</tr>
								  		<tr>
								  			<td class="profile-title">HP/Telepon</td>
								  			<td>
								  				@isset ($parent->phone)
								  					{{ $parent->phone }}
								  				@else
								  					<i>Data belum ditambahkan</i>
								  				@endif
								  			</td>
								  		</tr>
								  	</tbody>
						  		</table>
							</div>
					</div>
				</div>
			@endforeach
		</div>
	   <div class="card-footer d-flex justify-content-end">
	   	<a href="{{ route('parent.createParent', $student->id) }}" class="btn btn-primary btn-sm">Tambah</a>
	   </div>
  	</div>
</div>

<div class="col-md-12">		
	<div class="card">
		<div class="card-header card-header-icon card-header-rose">
			<div class="card-icon">
				<i class="material-icons">school</i>
			</div>
			<h4 class="card-title">Data Riwayat Sekolah</h4>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table">
					<tbody>
						<tr>
							<td class="profile-title">Nama</td>
							<td>
								@isset ($school->name)
									{{ $school->name }}
					  			@else
					  				<i>Data belum ditambahkan</i>
					  			@endif
							</td>
						</tr>
						<tr>
							<td class="profile-title">Tahun Lulus</td>
							<td>
								@isset ($school->graduate)
									{{ $school->graduate }}
					  			@else
					  				<i>Data belum ditambahkan</i>
					  			@endif
							</td>
						</tr>
						<tr>
							<td class="profile-title">Nomor UN</td>
							<td>
								@isset ($school->nasional_exam_number)
									{{ $school->nasional_exam_number }}
					  			@else
					  				<i>Data belum ditambahkan</i>
					  			@endif
							</td>
						</tr>
						<tr>
							<td class="profile-title">NPSN</td>
							<td>
								@isset ($school->npsn)
									{{ $school->npsn }}
					  			@else
					  				<i>Data belum ditambahkan</i>
					  			@endif
							</td>
						</tr>
						<tr>
							<td class="profile-title">Alamat</td>
							<td>
								@isset ($school->street)
				  					{{ $school->street }},
				  					{{ $school->kecamatan->nama }},
				  					{{ $school->kabupaten->nama }},
				  					{{ $school->provinsi->nama }}
					  			@else
					  				<i>Data belum ditambahkan</i>
					  			@endif
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="card-footer d-flex justify-content-end">
			<a href="{{ route('school.edit', $student->id) }}" class="btn btn-rose btn-sm">Update</a>
		</div>
	</div>
</div>

<div class="col-md-12">
	<div class="card">
		<div class="card-header card-header-icon card-header-rose">
			<div class="card-icon">
				<i class="material-icons">bug_report</i>
			</div>
			<h4 class="card-title">Data Riwayat Penyakit</h4>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Penyakit</th>
							<th>Perulangan Selama Setahun</th>
							<th>Terapi yang dilakukan</th>
							<th></th>
						</tr>
					</thead>
				  	<tbody>
				  		@foreach ($illness as $index => $data)
					  		<tr>
					  			<td>{{ $index+1 }}</td>
					  			<td>{{ $data->name }}</td>
					  			<td>{{ $data->total }}</td>
					  			<td>{{ $data->therapy }}</td>
					  			<td>
					  				<form action="{{ route('illness.destroy', $data->id) }}" method="POST" class="pull-right">
					  					@csrf
					  					@method('DELETE')
						  				<a href="{{ route('illness.edit', $data->id) }}" class="btn btn-sm btn-rose">Update</a>
					  					<button type="submit" class="btn btn-sm btn-danger px-2"><i class="material-icons">delete</i></button>
					  				</form>
					  			</td>
					  		</tr>
				  		@endforeach
				  	</tbody>
		  		</table>
			</div>
		</div>
	   <div class="card-footer d-flex justify-content-end">
	    	<a href="{{ route('illness.createIllness', $student->id) }}" class="btn btn-sm btn-primary">Tambah</a>
	   </div>
	</div>
</div>

@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script> // select2 setting
  $(document).ready(function() {
      $('.select2').select2({
        width: 'resolve',
      });
  });
</script>
<script> //ajax for data santri
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $(document).on('change', '.provinsi', function () {
    $('.kecamatan').html('<option value="0">- Please Select -</option>');
    $.post( '{{ route('wilayah.kabupaten') }}', {
      provinsi_id: $(this).val()
    }).done(function( data ) {
      $('.kabupaten').html(data);
    }).fail(function(data){
      console.log(data);
    });
  });
  $(document).on('change', '.kabupaten', function () {
    $.post( '{{ route('wilayah.kecamatan') }}', {
      kabupaten_id: $(this).val()
    }).done(function( data ) {
      $('.kecamatan').html(data);
    });
  });
</script>
<script> //ajax for data sekolah
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $(document).on('change', '.provinsi2', function () {
    $('.kecamatan2').html('<option value="0">- Please Select -</option>');
    $.post( '{{ route('wilayah.kabupaten') }}', {
      provinsi_id: $(this).val()
    }).done(function( data ) {
      $('.kabupaten2').html(data);
    }).fail(function(data){
      console.log(data);
    });
  });
  $(document).on('change', '.kabupaten2', function () {
    $.post( '{{ route('wilayah.kecamatan') }}', {
      kabupaten_id: $(this).val()
    }).done(function( data ) {
      $('.kecamatan2').html(data);
    });
  });
</script>
@endsection