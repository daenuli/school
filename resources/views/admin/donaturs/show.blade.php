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
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary card-header-icon">
          <div class="card-icon">
            <i class="material-icons">assignment</i>
          </div>
          <h4 class="card-title">Detail Donatur
            <a href="{{route('donatur.index')}}" class="btn btn-sm btn-danger pull-right">Kembali</a>
            <a href="{{ route('donatur.createStudent', $id) }}" class="btn btn-sm btn-primary pull-right">Tambah Data</a>
          </h4>
        </div>
        <div class="card-body">
          <h5 class="badge badge-info">Tentang Donatur</h5>
          <div class="material-datatables">
            @foreach ($donatur as $value)
              <table class="table table-no-bordered">
                <tr>
                  <td>NIK</td>
                  <td>{{$value->nik}}</td>
                </tr>
                <tr>
                  <td>Nama</td>
                  <td>{{$value->name}}</td>
                </tr>
                <tr>
                  <td>Tanggal lahir</td>
                  <td>{{date('d F Y', strtotime($value->date_birth))}}</td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td>{{$value->email}}</td>
                </tr>
                <tr>
                  <td>Alamat</td>
                  <td>{{$value->street}}, {{$value->kecamatan->nama}}, {{$value->kabupaten->nama}}, {{$value->provinsi->nama}}</td>
                </tr>
              </table>
            @endforeach
          </div>
          <div class="mt-4"></div>
          <h5 class="badge badge-success">Santri Tanggungan</h5>
          <div class="material-datatables">
            <table id="datatable" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>NIS</th>
                  <th>Nama</th>
                  <th class="disabled-sorting text-right">Actions</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
        <!-- end content-->
      </div>
      <!--  end card  -->
    </div>
@endsection

@section('script')
<script type="text/javascript">
  var table;
  $(function() {
      table = $('#datatable').DataTable({
          processing: true,
          serverSide: true,
          ajax: '{{$ajax}}',
          order: [],
          columns: [
              { data: 'id', searchable: false, orderable: false},
              { data: 'nis', searchable: true, orderable: false},
              { data: 'student_id', searchable: true, orderable: false},
              { data: 'action', searchable: false, orderable: false}
          ],
          columnDefs: [{
            "targets": 0,
            "searchable": false,
            "orderable": false,
            "data": null,
            "title": 'No',
            "render": function (data, type, full, meta) {
                return meta.settings._iDisplayStart + meta.row + 1;
            }
          }],
      });
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script> // select2 setting
  $(document).ready(function() {
      $('.select2').select2({
        width: 'resolve',
      });
  });
</script>
@endsection
