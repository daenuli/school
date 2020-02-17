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
			<h4 class="card-title">Update Riwayat Sekolah</h4>
		</div>
		<form action="{{ route('school.update', $student->id) }}" method="POST">
		@csrf
		@method('PUT')
		<div class="card-body">
			<div class="row">
			  <label class="col-sm-2 col-form-label">Nama Sekolah</label>
			  <div class="col-sm-8">
			    <div class="form-group">
			      <input type="text" name="school_name" class="form-control" value="{{ $school->name }}">
			      <input type="hidden" name="school_id" class="form-control" value="{{ $school->id }}">
			    </div>
			  </div>
			</div>
			<div class="row">
			  <label class="col-sm-2 col-form-label">Tahun Lulus</label>
			  <div class="col-sm-8">
			    <div class="form-group">
			      <input type="text" class="form-control graduate" name="school_graduate" value="{{ $school->graduate }}">
			    </div>
			  </div>
			</div>
			<div class="row">
			  <label class="col-sm-2 col-form-label">No Peserta UN</label>
			  <div class="col-sm-8">
			    <div class="form-group">
			      <input type="text" class="form-control" name="school_exam_number" value="{{ $school->nasional_exam_number }}">
			    </div>
			  </div>
			</div>
			<div class="row">
			  <label class="col-sm-2 col-form-label">NPSN</label>
			  <div class="col-sm-8">
			    <div class="form-group">
			      <input type="text" class="form-control" name="school_npsn" value="{{ $school->npsn }}">
			    </div>
			  </div>
			</div>
			<div class="row d-flex align-items-end mt-3">
			  <label class="col-sm-2 col-form-label">Provinsi</label>
			  <div class="col-sm-8">
			    <select class="select2 provinsi" title="Pilih Provinsi" style="width: 100%" id="provinsi_id" name="school_provinsi_id">
			      <option value="{{ $school->provinsi_id ? $school->provinsi_id : '' }}" selected="selected">
			        {{ $school->provinsi_id ? $school->provinsi->nama : '- Please Select -' }}
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
			    <select class="select2 kabupaten" title="Pilih Kabupaten" style="width: 100%" id="kabupaten_id" name="school_kabupaten_id">
			      <option value="{{ $school->kabupaten_id ? $school->kabupaten_id : '' }}" selected="selected">
			        {{ $school->kabupaten_id ? $school->kabupaten->nama : '- Please Select -' }}
			      </option>
			    </select>
			  </div>
			</div>
			<div class="row d-flex align-items-end mt-3">
			  <label class="col-sm-2 col-form-label">Kecamatan</label>
			  <div class="col-sm-8">
			    <select class="select2 kecamatan" title="Pilih Kecamatan" style="width: 100%" id="kecamatan_id" name="school_kecamatan_id">
			      <option value="{{ $school->kecamatan_id ? $school->kecamatan_id : '' }}" selected="selected">
			        {{ $school->kecamatan_id ? $school->kecamatan->nama : '- Please Select -' }}
			      </option>
			    </select>
			  </div>
			</div>
			<div class="row mt-2">
			  <label class="col-sm-2 col-form-label">Alamat</label>
			  <div class="col-sm-8">
			    <div class="form-group">
			      <input type="text" class="form-control" name="school_street" value="{{ $school->street }}">
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
<script> //ajax provinsi
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