@extends('admin.layouts.app')

@section('style')
<style>
	.profile-title {
		font-weight: bold;
	}
</style>
@endsection

@section('content')
<div class="col-md-8">
	<div class="card">
		<div class="card-header card-header-icon card-header-rose">
			<div class="card-icon">
				<i class="material-icons">perm_identity</i>
			</div>
			<h4 class="card-title">Informasi Pribadi</h4>
		</div>
		<div class="card-body">
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
				  			<td class="profile-title">Nama</td>
				  			<td>{{ $student->name }}</td>
				  		</tr>
				  		<tr>
				  			<td class="profile-title">NIK</td>
				  			<td>{{ $student->nik }}</td>
				  		</tr>
				  		<tr>
				  			<td class="profile-title">NISN</td>
				  			<td>{{ $student->nisn }}</td>
				  		</tr>
				  		<tr>
				  			<td class="profile-title">TTL</td>
				  			<td>{{ $student->birth_place }}, {{ date('d F Y', strtotime($student->birth_date)) }}</td>
				  		</tr>
				  		<tr>
				  			<td class="profile-title">Anak Ke</td>
				  			<td>{{ $student->position }} <b class="profile-title">dari</b> {{ $student->sibling }} bersaudara</td>
				  		</tr>
				  		<tr>
				  			<td class="profile-title">Lanjut ke Jenjang</td>
				  			<td>{{ strtoupper($student->level) }}</td>
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
				  			<td>{{ $student->phone }}</td>
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
				  			<td>{{ $student->street }}, {{ $student->kecamatan->nama }}, {{ $student->kabupaten->nama }}, {{ $student->provinsi->nama }} </td>
				  		</tr>
				  		{{-- <tr>
				  			<td colspan="2">
				  				<b class="profile-title">Dibuat pada :</b> {{ date('d F Y', strtotime($student->created_at)) }} (Diubah pada : {{ date('d F Y', strtotime($student->updated_at)) }})
				  			</td>
				  		</tr> --}}
				  	</tbody>
		  		</table>
			</div>
		</div>
	   <div class="card-footer d-flex justify-content-end">
	    	<button class="btn btn-sm btn-rose">Update</button>
	   </div>
  	</div>
</div>

<div class="col-md-4">
  <div class="card card-profile">
    <div class="card-avatar">
         @if ($student->avatar)
			<img alt="image" class="img" src="{{Storage::url($student->avatar)}}">
		@else
        	<img alt="image" class="img" src="{{Avatar::create($student->name)->toBase64()}}">
        @endif
    </div>
    <div class="card-body">
      <h4 class="card-title">{{ $student->name }}</h4>
      <h6 class="card-category text-gray">
		@if ($student->status = 1)
			<span class='badge badge-pill badge-success'>Aktif</span>
		@endif
      </h6>
      <div class="table-responsive">
        <table class="table" style="text-align: left;">
        	<tbody>
        		<tr>
        			<td>Email</td>
        			<td>{{ $student->email }}</td>
        		</tr>
        		<tr>
        			<td>NIS</td>
        			<td>{{ $student->nis }}</td>
        		</tr>
        	</tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="col-md-6">
		<div class="card">
			<div class="card-header card-header-icon card-header-rose">
				<div class="card-icon">
					<i class="material-icons">supervised_user_circle</i>
				</div>
				<h4 class="card-title">Data Ayah</h4>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table">
					  	<tbody>
					  		<tr>
					  			<td width="30%" class="profile-title">Nama</td>
					  			<td>{{ $father->name }}</td>
					  		</tr>
					  		<tr>
					  			<td class="profile-title">Tanggal Lahir</td>
					  			<td>{{ date('d F Y', strtotime($father->birth_date)) }}</td>
					  		</tr>
					  		<tr>
					  			<td class="profile-title">Pendidikan</td>
					  			<td>{{ strtoupper($father->last_education) }}</td>
					  		</tr>
					  		<tr>
					  			<td class="profile-title">Pekerjaan</td>
					  			<td>{{ $father->job }}</td>
					  		</tr>
					  		<tr>
					  			<td class="profile-title">Gaji</td>
					  			<td>Rp {{ number_format($father->salary,0,",",".") }}</td>
					  		</tr>
					  		<tr>
					  			<td class="profile-title">HP/Telepon</td>
					  			<td>{{ $father->phone }}</td>
					  		</tr>
					  	</tbody>
			  		</table>
				</div>
			</div>
		   <div class="card-footer d-flex justify-content-end">
		    	<button class="btn btn-sm btn-rose">Update</button>
		   </div>
	  	</div>
</div>
<div class="col-md-6">
		<div class="card">
			<div class="card-header card-header-icon card-header-rose">
				<div class="card-icon">
					<i class="material-icons">supervised_user_circle</i>
				</div>
				<h4 class="card-title">Data Ibu</h4>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table">
					  	<tbody>
					  		<tr>
					  			<td width="30%" class="profile-title">Nama</td>
					  			<td>{{ $mother->name }}</td>
					  		</tr>
					  		<tr>
					  			<td class="profile-title">Tanggal Lahir</td>
					  			<td>{{ date('d F Y', strtotime($mother->birth_date)) }}</td>
					  		</tr>
					  		<tr>
					  			<td class="profile-title">Pendidikan</td>
					  			<td>{{ strtoupper($mother->last_education) }}</td>
					  		</tr>
					  		<tr>
					  			<td class="profile-title">Pekerjaan</td>
					  			<td>{{ $mother->job }}</td>
					  		</tr>
					  		<tr>
					  			<td class="profile-title">Gaji</td>
					  			<td>Rp {{ number_format($mother->salary,0,",",".") }}</td>
					  		</tr>
					  		<tr>
					  			<td class="profile-title">HP/Telepon</td>
					  			<td>{{ $mother->phone }}</td>
					  		</tr>
					  	</tbody>
			  		</table>
				</div>
			</div>
		   <div class="card-footer d-flex justify-content-end">
		    	<button class="btn btn-sm btn-rose">Update</button>
		   </div>
	  	</div>
</div>

<div class="col-md-12">
		<div class="card">
			<div class="card-header card-header-icon card-header-rose">
				<div class="card-icon">
					<i class="material-icons">supervised_user_circle</i>
				</div>
				<h4 class="card-title">Data Riwayat Penyakit</h4>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table">
						<thead>
							<th>Nama Penyakit</th>
							<th>Perulangan Selama Setahun</th>
							<th>Terapi yang dilakukan</th>
						</thead>
					  	<tbody>
					  		@foreach ($illness as $data)
						  		<tr>
						  			<td>{{ $data->name }}</td>
						  			<td>{{ $data->total }}</td>
						  			<td>{{ $data->therapy }}</td>
						  		</tr>
					  		@endforeach
					  	</tbody>
			  		</table>
				</div>
			</div>
		   <div class="card-footer d-flex justify-content-end">
		    	<button class="btn btn-sm btn-rose">Update</button>
		   </div>
	  	</div>
</div>
@endsection