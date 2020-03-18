@extends('admin.layouts.app')

@section('style')
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
<style>
  .select2-container .select2-selection--single {
    height: 35px !important;
  }
</style>
@endsection

@section('content')
<div class="col-md-12 mr-auto ml-auto">
  <div class="wizard-container" id="app">
    <div class="card card-wizard" data-color="rose" id="wizardProfile">
      <form action="{{ route('student.store') }}" class="form-horizontal" method="POST" id="TypeValidation" enctype="multipart/form-data">
      @csrf
      <div class="card-header text-center">
        <h3 class="card-title">
          Input Data Santri
        </h3>
      </div>
      <div class="wizard-navigation">
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link active" href="#santri" data-toggle="tab" role="tab">
              Data Santri
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#sekolah" data-toggle="tab" role="tab">
              Sekolah Sebelumnya
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#ortu" data-toggle="tab" role="tab">
              Data Orang Tua
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#penyakit" data-toggle="tab" role="tab">
              Riwayat Penyakit
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#profil" data-toggle="tab" role="tab">
              Profil
            </a>
          </li>
        </ul>
      </div>
      <div class="card-body">
        <div class="tab-content">
          
          <div class="tab-pane active" id="santri">
            <h5 class="info-text"> Masukan biodata santri</h5>
            <div class="row">
              <label class="col-sm-2 col-form-label">NIK</label>
              <div class="col-sm-8">
                <div class="form-group">
                  <input type="text" class="form-control" name="nik" />
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">NISN</label>
              <div class="col-sm-8">
                <div class="form-group">
                  <input type="text" class="form-control" name="nisn">
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">Nama Lengkap</label>
              <div class="col-sm-8">
                <div class="form-group">
                  <input type="text" class="form-control" name="name">
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">Tempat Lahir</label>
              <div class="col-sm-8">
                <div class="form-group">
                  <input type="text" class="form-control" name="birth_place">
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
              <div class="col-sm-8">
                <div class="form-group">
                  <input type="text" class="form-control datepicker" name="birth_date">
                </div>
              </div>
            </div>
            <div class="row d-flex align-items-end">
              <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
              <div class="col-sm-8 d-flex flex-row">
                <div class="form-check m-0">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="gender" value="1"> Laki - Laki
                    <span class="circle">
                      <span class="check"></span>
                    </span>
                  </label>
                </div>
                <div class="form-check m-0">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="gender" value="0"> Perempuan
                    <span class="circle">
                      <span class="check"></span>
                    </span>
                  </label>
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">Anak ke</label>
              <div class="col-sm-4">
                <div class="form-group">
                  <input type="text" class="form-control" name="position">
                </div>
              </div>
              <label class="col-sm-1 col-form-label">Dari</label>
              <div class="col-sm-3">
                <div class="form-group">
                  <input type="text" class="form-control" name="sibling" placeholder="... bersaudara">
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">Lanjut Ke Jenjang</label>
              <div class="col-sm-8">
                <div class="form-group">
                  <select class="selectpicker" name="level" data-style="btn btn-primary" title="Pilih Jenjang">
                    <option value="smp">SMP</option>
                    <option value="sma">MA</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row d-flex align-items-end">
              <label class="col-sm-2 col-form-label">Status Anak</label>
              <div class="col-sm-8 d-flex flex-row">
                <div class="form-check m-0">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="child_status" value="1"> Yatim
                    <span class="circle">
                      <span class="check"></span>
                    </span>
                  </label>
                </div>
                <div class="form-check m-0">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="child_status" value="0"> Non-Yatim
                    <span class="circle">
                      <span class="check"></span>
                    </span>
                  </label>
                </div>
                <i>(Bagi yatim dibuktikan dengan surat keterangan dari kepala desa)</i>
              </div>
            </div>
            <div class="row d-flex align-items-end mt-3">
              <label class="col-sm-2 col-form-label">Provinsi</label>
              <div class="col-sm-8">
                <select class="select2 provinsi" title="Pilih Provinsi" style="width: 100%" id="provinsi_id" name="provinsi_id">
                  <option value="" selected="selected">- Please Select -</option>
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
                  <option value="" selected="selected">- Please Select -</option>
                </select>
              </div>
            </div>
            <div class="row d-flex align-items-end mt-3">
              <label class="col-sm-2 col-form-label">Kecamatan</label>
              <div class="col-sm-8">
                <select class="select2 kecamatan" title="Pilih Kecamatan" style="width: 100%" id="kecamatan_id" name="kecamatan_id">
                  <option value="" selected="selected">- Please Select -</option>
                </select>
              </div>
            </div>
            <div class="row mt-2">
              <label class="col-sm-2 col-form-label">Alamat</label>
              <div class="col-sm-8">
                <div class="form-group">
                  <input type="text" class="form-control" name="street">
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">Status Santri</label>
              <div class="col-sm-8">
                <div class="form-group">
                  <select class="selectpicker" name="status" data-style="btn btn-primary" title="Pilih Status">
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
                    @foreach ($spp as $data)
                      <option value="{{ $data->id }}">{{ $data->name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
          </div>
          
          <div class="tab-pane" id="sekolah">
            <h5 class="info-text"> Masukan data sekolah sebelumnya</h5>
            <div class="row">
              <label class="col-sm-2 col-form-label">Nama Sekolah</label>
              <div class="col-sm-8">
                <div class="form-group">
                  <input type="text" name="school_name" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">Tahun Lulus</label>
              <div class="col-sm-8">
                <div class="form-group">
                  <input type="text" class="form-control graduate" name="school_graduate">
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">No Peserta UN</label>
              <div class="col-sm-8">
                <div class="form-group">
                  <input type="text" class="form-control" name="school_exam_number">
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">NPSN</label>
              <div class="col-sm-8">
                <div class="form-group">
                  <input type="text" class="form-control" name="school_npsn">
                </div>
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">Alamat Sekolah</label>
              <div class="col-sm-8">
                <div class="form-group">
                  <input type="text" class="form-control" name="school_street">
                </div>
              </div>
            </div>
            <div class="row d-flex align-items-end mt-3">
              <label class="col-sm-2 col-form-label">Provinsi</label>
              <div class="col-sm-8">
                <select class="select2 provinsi2" title="Pilih Provinsi" style="width: 100%" id="provinsi_id2" name="school_provinsi_id">
                  <option value="" selected="selected">- Please Select -</option>
                  @foreach ($provinsi as $data)
                    <option value="{{ $data->id }}">{{ $data->nama }}</option>
                  @endforeach                
                </select>
              </div>
            </div>
            <div class="row d-flex align-items-end mt-3">
              <label class="col-sm-2 col-form-label">Kabupaten</label>
              <div class="col-sm-8">
                <select class="select2 kabupaten2" title="Pilih Kabupaten" style="width: 100%" id="kabupaten_id2" name="school_kabupaten_id">
                  <option value="" selected="selected">- Please Select -</option>
                </select>
              </div>
            </div>
            <div class="row d-flex align-items-end mt-3">
              <label class="col-sm-2 col-form-label">Kecamatan</label>
              <div class="col-sm-8">
                <select class="select2 kecamatan2" title="Pilih Kecamatan" style="width: 100%" id="kecamatan_id2" name="school_kecamatan_id">
                  <option value="" selected="selected">- Please Select -</option>
                </select>
              </div>
            </div>
          </div>
          
          <div class="tab-pane" id="ortu">
            <h5 class="info-text">Masukan data orang tua</h5>
            <div class="row">
              <div class="col-md-12 d-flex justify-content-end">
                <button type="button" class="btn btn-rose btn-sm" @click="addparent()">Tambah</button>
              </div>
            </div>
            <div class="mb-5" v-for="(parent, index) in parent" :key="index">
              <div class="row">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-8">
                  <div class="form-group">
                    <input type="text" class="form-control" name="parent_name[]">
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-8">
                  <div class="form-group">
                    <input type="text" class="form-control {{-- datepicker --}}" placeholder="YYYY-MM-DD" name="parent_birth_date[]">
                  </div>
                </div>
              </div>
              <div class="row d-flex align-items-end">
                <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-8 d-flex flex-row">
                  <div class="form-check m-0">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" :name="numbParentGender(index)" value="1"> Laki - Laki
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                  <div class="form-check m-0">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" :name="numbParentGender(index)" value="0"> Perempuan
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
                    <select class="{{-- selectpicker --}}" style="width: 100%" name="parent_last_education[]" data-style="btn btn-primary" title="Pilih Pendidikan">
                      <option value="">Pilih Jenjang</option>
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
                    <input type="text" class="form-control" name="parent_job[]">
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">Penghasilan Perbulan</label>
                <div class="col-sm-8">
                  <div class="form-group">
                    <input type="text" class="form-control {{-- money --}}" name="parent_salary[]">
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">No. HP/Telepon</label>
                <div class="col-sm-8">
                  <div class="form-group">
                    <input type="text" class="form-control" name="parent_phone[]">
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-8">
                  <div class="form-group">
                    <select class="{{-- selectpicker --}}" style="width: 100%" name="parent_role[]" data-style="btn btn-primary" title="Pilih Status">
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
                      <input class="form-check-input" type="radio" :name="numbParentStatus(index)" value="1"> Yes
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                  <div class="form-check m-0">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" :name="numbParentStatus(index)" value="0"> No
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="tab-pane" id="penyakit">
            <h5 class="info-text">Masukan data riwayat penyakit</h5>
            <div class="row">
              <div class="col-md-12 d-flex justify-content-end">
                <button type="button" class="btn btn-rose btn-sm" @click="addillness()">Tambah</button>
              </div>
            </div>
            <div v-for="(illness, index) in illness" :key="index" class="mb-3">
              <div class="row">
                <label class="col-sm-2 col-form-label">Nama Penyakit</label>
                <div class="col-sm-8">
                  <div class="form-group">
                    <input type="text" class="form-control" name="illness_name[]" placeholder="Nama penyakit yang diderita">
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">Waktu Kambuh</label>
                <div class="col-sm-8">
                  <div class="form-group">
                    <input type="text" class="form-control" name="illness_total[]" placeholder="Perulangan Sakit Dalam 1 Tahun Terakhir">
                  </div>
                </div>
                <div class="col-sm-2 d-flex justify-content-center">
                  <h5>@{{ doMathIllness(index) }}</h5>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">Terapi</label>
                <div class="col-sm-8">
                  <div class="form-group">
                    <input type="text" class="form-control" name="illness_therapy[]" placeholder="Terapi yang sering diterima">
                  </div>
                </div>
                <div class="col-sm-2 d-flex justify-content-center align-items-center">
                  <button type="button" class="btn btn-primary btn-sm" @click="delillness()">Hapus</button>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane" id="profil">
            <h5 class="info-text">Set-up profil bio siswa</h5>
            <div class="row justify-content-center">
              <div class="col-sm-4">
                <div class="picture-container">
                  <div class="picture">
                    <img src="{{ asset('material/assets/img/default-avatar.png') }}" class="picture-src" id="wizardPicturePreview" title="" />
                    <input type="file" id="wizard-picture" name="avatar">
                  </div>
                  <h6 class="description">Pilih Foto</h6>
                </div>
              </div>
              <div class="col-lg-10 mt-3">
                <div class="input-group form-control-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">email</i>
                    </span>
                  </div>
                  <div class="form-group">
                    <label for="exampleInput1" class="bmd-label-floating">Email (required)</label>
                    <input type="email" class="form-control" id="exampleemalil" name="email" required>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="card-footer">
        <div class="mr-auto">
          <input type="button" class="btn btn-previous btn-fill btn-default btn-wd disabled" name="previous" value="Previous">
        </div>
        <div class="ml-auto">
          <input type="button" class="btn btn-next btn-fill btn-rose btn-wd" name="next" value="Next">
          <input type="submit" class="btn btn-finish btn-fill btn-rose btn-wd" name="finish" value="Finish" style="display: none;">
        </div>
        <div class="clearfix"></div>
      </div>
    </form>
    </div>
  </div>
</div>
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script src="{{ asset('priceFormat/jquery.priceformat.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script> // type validation
  function setFormValidation(id) {
    $(id).validate({
      highlight: function(element) {
        $(element).closest('.form-group').removeClass('has-success').addClass('has-danger');
        $(element).closest('.form-check').removeClass('has-success').addClass('has-danger');
      },
      success: function(element) {
        $(element).closest('.form-group').removeClass('has-danger').addClass('has-success');
        $(element).closest('.form-check').removeClass('has-danger').addClass('has-success');
      },
      errorPlacement: function(error, element) {
        $(element).closest('.form-group').append(error);
      },
    });
  }

  $(document).ready(function() {
    setFormValidation('#RegisterValidation');
    setFormValidation('#TypeValidation');
    setFormValidation('#LoginValidation');
    setFormValidation('#RangeValidation');
  });
</script>
<script> // card wizard
  $(document).ready(function() {
    // Initialise the wizard
    demo.initMaterialWizard();
    setTimeout(function() {
      $('.card.card-wizard').addClass('active');
    }, 600);
  });
</script>
<script> // select2 setting
  $(document).ready(function() {
      $('.select2').select2({
        width: 'resolve',
      });
  });
</script>
<script> // vue setting illness
  new Vue({
      el: '#app',
      data: {
          illness: 1,
          parent: 1,
      },
      methods:{
        addillness(){
          this.illness++;
        },
        delillness(){
          if (this.illness > 1) {
              this.illness--;
          }
        },
        addparent(){
          this.parent++;
        },
        delparent(){
          if (this.parent > 1) {
              this.parent--;
          }
        },
        doMathIllness: function (index) {
          return index+1
        },
        numbParentGender: function (index) {
          return 'parent_gender'+index
        },
        numbParentStatus: function (index) {
          return 'parent_is_guardian'+index
        }
      }
  })
</script>
<script> // price format
  $('.money').priceFormat({
      prefix: '',
      centsSeparator: '.',
      thousandsSeparator: '.',
      centsLimit: 0,
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
<script type="text/javascript">
  $(function () {
    $('.datepicker').datetimepicker({
      format: 'YYYY-MM-DD',
    });
    $('.graduate').datetimepicker({
      format: 'YYYY',
    });
  });
</script>
@endsection
