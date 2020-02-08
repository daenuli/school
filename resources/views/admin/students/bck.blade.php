<div class="col-md-12">

  <div class="card pb-4">
    <div class="card-header card-header-rose card-header-icon">
      <div class="card-icon">
        <b class="mx-1">1</b>
      </div>
      <h4 class="card-title"> Data Santri</h4>
    </div>
    <div class="card-body">
        <div class="row">
          <label class="col-sm-2 col-form-label">NIK</label>
          <div class="col-sm-8">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="ex: 1050241708900001">
            </div>
          </div>
        </div>
        <div class="row">
          <label class="col-sm-2 col-form-label">NISN</label>
          <div class="col-sm-8">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="ex: 001234567">
            </div>
          </div>
        </div>
        <div class="row">
          <label class="col-sm-2 col-form-label">Nama Lengkap</label>
          <div class="col-sm-8">
            <div class="form-group">
              <input type="text" class="form-control" name="name" placeholder="ex: Suryo Widiyanto Gumelar">
            </div>
          </div>
        </div>
        <div class="row">
          <label class="col-sm-2 col-form-label">Tempat Lahir</label>
          <div class="col-sm-8">
            <div class="form-group">
              <input type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="row">
          <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
          <div class="col-sm-8">
            <div class="form-group">
              <input type="text" class="form-control datepicker">
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
              <input type="text" class="form-control">
            </div>
          </div>
          <label class="col-sm-1 col-form-label">Dari</label>
          <div class="col-sm-3">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="... bersaudara">
            </div>
          </div>
        </div>
        <div class="row">
          <label class="col-sm-2 col-form-label">Lanjut Ke Jenjang</label>
          <div class="col-sm-8">
            <div class="form-group">
              <select class="selectpicker" data-size="7" data-style="btn btn-primary" title="Pilih Jenjang">
                <option value="1">SMP</option>
                <option value="0">MA</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row d-flex align-items-end">
          <label class="col-sm-2 col-form-label">Status Anak</label>
          <div class="col-sm-8 d-flex flex-row">
            <div class="form-check m-0">
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="gender" value="1"> Yatim
                <span class="circle">
                  <span class="check"></span>
                </span>
              </label>
            </div>
            <div class="form-check m-0">
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="gender" value="0"> Non-Yatim
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
              <input type="text" class="form-control">
            </div>
          </div>
        </div>
    </div>
  </div>

  <div class="card pb-4">
    <div class="card-header card-header-rose card-header-icon">
      <div class="card-icon">
        <b class="mx-1">2</b>
      </div>
      <h4 class="card-title"> Data Sekolah Sebelumnya</h4>
    </div>
    <div class="card-body">
      <div class="row">
        <label class="col-sm-2 col-form-label">Nama Sekolah</label>
        <div class="col-sm-8">
          <div class="form-group">
            <input type="text" class="form-control">
          </div>
        </div>
      </div>
      <div class="row">
        <label class="col-sm-2 col-form-label">Tahun Lulus</label>
        <div class="col-sm-8">
          <div class="form-group">
            <input type="text" class="form-control graduate">
          </div>
        </div>
      </div>
      <div class="row">
        <label class="col-sm-2 col-form-label">No Peserta UN</label>
        <div class="col-sm-8">
          <div class="form-group">
            <input type="text" class="form-control">
          </div>
        </div>
      </div>
      <div class="row">
        <label class="col-sm-2 col-form-label">NPSN</label>
        <div class="col-sm-8">
          <div class="form-group">
            <input type="text" class="form-control">
          </div>
        </div>
      </div>
      <div class="row">
        <label class="col-sm-2 col-form-label">Alamat Sekolah</label>
        <div class="col-sm-8">
          <div class="form-group">
            <input type="text" class="form-control">
          </div>
        </div>
      </div>
      <div class="row d-flex align-items-end mt-3">
        <label class="col-sm-2 col-form-label">Provinsi</label>
        <div class="col-sm-8">
          <select class="select2 provinsi2" title="Pilih Provinsi" style="width: 100%" id="provinsi_id2" name="provinsi_id">
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
          <select class="select2 kabupaten2" title="Pilih Kabupaten" style="width: 100%" id="kabupaten_id2" name="kabupaten_id">
            <option value="" selected="selected">- Please Select -</option>
          </select>
        </div>
      </div>
      <div class="row d-flex align-items-end mt-3">
        <label class="col-sm-2 col-form-label">Kecamatan</label>
        <div class="col-sm-8">
          <select class="select2 kecamatan2" title="Pilih Kecamatan" style="width: 100%" id="kecamatan_id2" name="kecamatan_id">
            <option value="" selected="selected">- Please Select -</option>
          </select>
        </div>
      </div>

    </div>
  </div>

  <div class="card pb-4">
    <div class="card-header card-header-rose card-header-icon">
      <div class="card-icon">
        <b class="mx-1">3</b>
      </div>
      <h4 class="card-title"> Data Ayah Kandung</h4>
    </div>
    <div class="card-body">
      <div class="row">
        <label class="col-sm-2 col-form-label">Nama Ayah</label>
        <div class="col-sm-8">
          <div class="form-group">
            <input type="text" class="form-control">
          </div>
        </div>
      </div>
      <div class="row">
        <label class="col-sm-2 col-form-label">Tempat Lahir</label>
        <div class="col-sm-8">
          <div class="form-group">
            <input type="text" class="form-control">
          </div>
        </div>
      </div>
      <div class="row">
        <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-8">
          <div class="form-group">
            <input type="text" class="form-control datepicker">
          </div>
        </div>
      </div>
      <div class="row">
        <label class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
        <div class="col-sm-8">
          <div class="form-group">
            <input type="text" class="form-control">
          </div>
        </div>
      </div>
      <div class="row">
        <label class="col-sm-2 col-form-label">Pekerjaan</label>
        <div class="col-sm-8">
          <div class="form-group">
            <input type="text" class="form-control">
          </div>
        </div>
      </div>
      <div class="row">
        <label class="col-sm-2 col-form-label">Penghasilan Perbulan</label>
        <div class="col-sm-8">
          <div class="form-group">
            <input type="text" class="form-control money">
          </div>
        </div>
      </div>
      <div class="row">
        <label class="col-sm-2 col-form-label">No. HP/Telepon</label>
        <div class="col-sm-8">
          <div class="form-group">
            <input type="text" class="form-control">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card pb-4">
    <div class="card-header card-header-rose card-header-icon">
      <div class="card-icon">
        <b class="mx-1">4</b>
      </div>
      <h4 class="card-title"> Data Ibu Kandung</h4>
    </div>
    <div class="card-body">
      <div class="row">
        <label class="col-sm-2 col-form-label">Nama Ibu</label>
        <div class="col-sm-8">
          <div class="form-group">
            <input type="text" class="form-control">
          </div>
        </div>
      </div>
      <div class="row">
        <label class="col-sm-2 col-form-label">Tempat Lahir</label>
        <div class="col-sm-8">
          <div class="form-group">
            <input type="text" class="form-control">
          </div>
        </div>
      </div>
      <div class="row">
        <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-8">
          <div class="form-group">
            <input type="text" class="form-control datepicker">
          </div>
        </div>
      </div>
      <div class="row">
        <label class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
        <div class="col-sm-8">
          <div class="form-group">
            <input type="text" class="form-control">
          </div>
        </div>
      </div>
      <div class="row">
        <label class="col-sm-2 col-form-label">Pekerjaan</label>
        <div class="col-sm-8">
          <div class="form-group">
            <input type="text" class="form-control">
          </div>
        </div>
      </div>
      <div class="row">
        <label class="col-sm-2 col-form-label">Penghasilan Perbulan</label>
        <div class="col-sm-8">
          <div class="form-group">
            <input type="text" class="form-control money">
          </div>
        </div>
      </div>
      <div class="row">
        <label class="col-sm-2 col-form-label">No. HP/Telepon</label>
        <div class="col-sm-8">
          <div class="form-group">
            <input type="text" class="form-control">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card pb-4">
    <div class="card-header card-header-rose card-header-icon">
      <div class="card-icon">
        <b class="mx-1">5</b>
      </div>
      <h4 class="card-title"> Data Wali (optional)</h4>
    </div>
    <div class="card-body">
      <div class="row">
        <label class="col-sm-2 col-form-label">Nama Wali</label>
        <div class="col-sm-8">
          <div class="form-group">
            <input type="text" class="form-control">
          </div>
        </div>
      </div>
      <div class="row">
        <label class="col-sm-2 col-form-label">Tempat Lahir</label>
        <div class="col-sm-8">
          <div class="form-group">
            <input type="text" class="form-control">
          </div>
        </div>
      </div>
      <div class="row">
        <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-8">
          <div class="form-group">
            <input type="text" class="form-control datepicker">
          </div>
        </div>
      </div>
      <div class="row">
        <label class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
        <div class="col-sm-8">
          <div class="form-group">
            <input type="text" class="form-control">
          </div>
        </div>
      </div>
      <div class="row">
        <label class="col-sm-2 col-form-label">Pekerjaan</label>
        <div class="col-sm-8">
          <div class="form-group">
            <input type="text" class="form-control">
          </div>
        </div>
      </div>
      <div class="row">
        <label class="col-sm-2 col-form-label">Penghasilan Perbulan</label>
        <div class="col-sm-8">
          <div class="form-group">
            <input type="text" class="form-control money">
          </div>
        </div>
      </div>
      <div class="row">
        <label class="col-sm-2 col-form-label">No. HP/Telepon</label>
        <div class="col-sm-8">
          <div class="form-group">
            <input type="text" class="form-control">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card pb-4">
    <div class="card-header card-header-rose card-header-icon">
      <div class="card-icon">
        <b class="mx-1">6</b>
      </div>
      <h4 class="card-title"> Riwayat Penyakit</h4>
    </div>
    <div class="card-body">
      <div class="row">
        <label class="col-sm-2 col-form-label">Nama Penyakit</label>
        <div class="col-sm-8">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Nama penyakit yang diderita">
          </div>
        </div>
      </div>
      <div class="row">
        <label class="col-sm-2 col-form-label">Waktu Kambuh</label>
        <div class="col-sm-8">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Perulangan Sakit Dalam 1 Tahun Terakhir">
          </div>
        </div>
      </div>
      <div class="row">
        <label class="col-sm-2 col-form-label">Terapi</label>
        <div class="col-sm-8">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Terapi yang sering diterima">
          </div>
        </div>
      </div>
    </div>
  </div>

</div>