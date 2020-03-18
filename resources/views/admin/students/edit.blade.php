@extends('admin.layouts.app')

@section('style')
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
<div class="col-md-12">
	<div class="card">
		<div class="card-header card-header-icon card-header-rose">
			<div class="card-icon">
				<i class="material-icons">supervised_user_circle</i>
			</div>
			<h4 class="card-title">Update Informasi Pribadi Santri</h4>
		</div>
		<form action="{{ route('student.update', $student->id) }}" method="POST">
		@csrf
		@method('PUT')
		<div class="card-body">
			<div class="row">
			  <label class="col-sm-2 col-form-label">Nama Lengkap</label>
			  <div class="col-sm-8">
			    <div class="form-group">
			      <input type="text" class="form-control" name="name" value="{{ $student->name }}">
			    </div>
			  </div>
			</div>
			<div class="row">
			  <label class="col-sm-2 col-form-label">NIK</label>
			  <div class="col-sm-8">
			    <div class="form-group">
			      <input type="text" class="form-control" name="nik" value="{{ $student->nik }}">
			    </div>
			  </div>
			</div>
			<div class="row">
			  <label class="col-sm-2 col-form-label">NISN</label>
			  <div class="col-sm-8">
			    <div class="form-group">
			      <input type="text" class="form-control" name="nisn" value="{{ $student->nisn }}">
			    </div>
			  </div>
			</div>
			<div class="row">
			  <label class="col-sm-2 col-form-label">Tempat Lahir</label>
			  <div class="col-sm-8">
			    <div class="form-group">
			      <input type="text" class="form-control" name="birth_place" value="{{ $student->birth_place }}">
			    </div>
			  </div>
			</div>
			<div class="row">
			  <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
			  <div class="col-sm-8">
			    <div class="form-group">
			      <input type="text" class="form-control datepicker" name="birth_date" value="{{ $student->birth_date }}">
			    </div>
			  </div>
			</div>
			<div class="row d-flex align-items-end">
			  <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
			  <div class="col-sm-8 d-flex flex-row">
			    <div class="form-check m-0">
			      <label class="form-check-label">
			        <input class="form-check-input" type="radio" name="gender" value="1" 
			          @if ($student->gender == 1)
			            checked 
			          @endif
			        > Laki - Laki
			        <span class="circle">
			          <span class="check"></span>
			        </span>
			      </label>
			    </div>
			    <div class="form-check m-0">
			      <label class="form-check-label">
			        <input class="form-check-input" type="radio" name="gender" value="0"
			          @if ($student->gender == 0)
			            checked 
			          @endif
			        > Perempuan
			        <span class="circle">
			          <span class="check"></span>
			        </span>
			      </label>
			    </div>
			  </div>
			</div>
			<div class="row">
			  <label class="col-sm-2 col-form-label">Anak ke</label>
			  <div class="col-sm-8">
			    <div class="form-group">
			      <input type="text" class="form-control" name="position" value="{{ $student->position }}">
			    </div>
			  </div>
			</div>
			<div class="row">
			  <label class="col-sm-2 col-form-label">Dari</label>
			  <div class="col-sm-7">
			    <div class="form-group">
			      <input type="text" class="form-control" name="sibling" value="{{ $student->sibling }}">
			    </div>
			  </div>
			  <label class="col-sm-2 col-form-label" style="text-align: left;"><i>bersaudara</i></label>
			</div>
			<div class="row">
			  <label class="col-sm-2 col-form-label">Lanjut Ke Jenjang</label>
			  <div class="col-sm-8">
			    <div class="form-group">
			      <select class="selectpicker" name="level" data-style="btn btn-primary" title="Pilih Jenjang">
			        <option value="{{ $student->level }}" selected>{{ strtoupper($student->level) }}</option>
			        <option value="smp">SMP</option>
			        <option value="sma">SMA</option>
			      </select>
			    </div>
			  </div>
			</div>
			<div class="row d-flex align-items-end">
			  <label class="col-sm-2 col-form-label">Status Anak</label>
			  <div class="col-sm-8 d-flex flex-row">
			    <div class="form-check m-0">
			      <label class="form-check-label">
			        <input class="form-check-input" type="radio" name="child_status" value="1"
			          @if ($student->child_status == 1)
			            checked 
			          @endif
			        > Yatim
			        <span class="circle">
			          <span class="check"></span>
			        </span>
			      </label>
			    </div>
			    <div class="form-check m-0">
			      <label class="form-check-label">
			        <input class="form-check-input" type="radio" name="child_status" value="0"
			          @if ($student->child_status == 0)
			            checked 
			          @endif
			        > Non-Yatim
			        <span class="circle">
			          <span class="check"></span>
			        </span>
			      </label>
			    </div>
			  </div>
			</div>
			<div class="row d-flex align-items-end mt-3">
			  <label class="col-sm-2 col-form-label">Provinsi</label>
			  <div class="col-sm-8">
			    <select class="select2 provinsi" title="Pilih Provinsi" style="width: 100%" id="provinsi_id" name="provinsi_id">
			      <option value="{{ $student->provinsi_id ? $student->provinsi_id : '' }}" selected="selected">
			        {{ $student->provinsi_id ? $student->provinsi->nama : '- Please Select -' }}
			      </option>
			      @foreach ($provinsi as $data)
			        <option value="{{ $data->id }}">{{ $data->nama }}</option>
			      @endforeach                
			    </select>
			  </div>
			</div>
			<div class="row d-flex align-items-end mt-3">
			  <label class="col-sm-2 col-form-label">Kabupaten</label>
			  <div class="col-sm-8">
			    <select class="select2 kabupaten" title="Pilih Kabupaten" style="width: 100%" id="kabupaten_id" name="kabupaten_id">
			      <option value="{{ $student->kabupaten_id ? $student->kabupaten_id : '' }}" selected="selected">
			        {{ $student->kabupaten_id ? $student->kabupaten->nama : '- Please Select -' }}
			      </option>
			    </select>
			  </div>
			</div>
			<div class="row d-flex align-items-end mt-3">
			  <label class="col-sm-2 col-form-label">Kecamatan</label>
			  <div class="col-sm-8">
			    <select class="select2 kecamatan" title="Pilih Kecamatan" style="width: 100%" id="kecamatan_id" name="kecamatan_id">
			      <option value="{{ $student->kecamatan_id ? $student->kecamatan_id : '' }}" selected="selected">
			        {{ $student->kecamatan_id ? $student->kecamatan->nama : '- Please Select -' }}
			      </option>
			    </select>
			  </div>
			</div>
			<div class="row mt-2">
			  <label class="col-sm-2 col-form-label">Alamat</label>
			  <div class="col-sm-8">
			    <div class="form-group">
			      <input type="text" class="form-control" name="street" value="{{ $student->street }}">
			    </div>
			  </div>
			</div>
			<div class="row">
			  <label class="col-sm-2 col-form-label">Email</label>
			  <div class="col-sm-8">
			    <div class="form-group">
			      <input type="text" class="form-control" name="email" value="{{ $student->email }}">
			    </div>
			  </div>
			</div>
			<div class="row">
			  <label class="col-sm-2 col-form-label">Status Santri</label>
			  <div class="col-sm-8">
			    <div class="form-group">
			      <select class="selectpicker" name="status" data-style="btn btn-primary" title="Pilih Status">
			        <option value="{{ $student->status }}" selected>
			          @if ($student->status = 1)
			            Aktif
			          @else
			            Tidak Aktif
			          @endif
			        </option>
			        <option value="1">Aktif</option>
			        <option value="0">Tidak Aktif</option>
			      </select>
			    </div>
			  </div>
			</div>
			<div class="row">
			  <label class="col-sm-2 col-form-label">Status Keluarga</label>
			  <div class="col-sm-8">
			    <div class="form-group">
			      <select class="selectpicker" name="spp_id" data-style="btn btn-primary" title="Pilih Status">
			        <option value="{{ $student->spp_id }}" selected>{{ $student->spp->name }}</option>
			        <option value="1">Mampu</option>
			        <option value="2">Tidak Mampu</option>
			      </select>
			    </div>
			  </div>
			</div>
		</div>
	   	<div class="card-footer d-flex justify-content-between">
			<a href="{{ route('student.show', $student->id) }}" class="btn btn-rose btn-sm">Kembali</a>
	   		<button type="submit" class="btn btn-primary btn-sm">Simpan</button>
	   	</div>
	   	</form>
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
@endsection