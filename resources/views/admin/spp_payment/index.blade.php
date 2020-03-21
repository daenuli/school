@extends('admin.layouts.app')

@section('content')
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary card-header-icon">
          <div class="card-icon">
            <i class="material-icons">assignment</i>
          </div>
          <h4 class="card-title">Spp Santri
            <a href="{{route('student.index')}}" class="btn btn-sm btn-danger pull-right">Kembali</a>
            <a href="" class="btn btn-sm btn-info pull-right">Print</a>
            <button type="button" class="btn btn-sm btn-primary pull-right" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Data</button>
          </h4>
        </div>
        <div class="card-body">
          <div class="material-datatables">
            <table id="datatable" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kategori</th>
                  <th>Total</th>
                  <th>Bayar Bulan</th>
                  <th>Tanggal Bayar</th>
                  <th>Status</th>
                  <th class="disabled-sorting text-right">Actions</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
          @include('admin.sppStudents.create')
          {{-- @include('admin.sppStudents.edit') --}}
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
          paging: false,
          searching: false,
          ajax: '{{$ajax}}',
          order: [[1,'desc']],
          columns: [
              { data: 'id', searchable: false, orderable: false},
              { data: 'category', searchable: false, orderable: false},
              { data: 'total', searchable: true, orderable: true},
              { data: 'name', searchable: false, orderable: false},
              { data: 'pay_date', searchable: true, orderable: true},
              { data: 'status', searchable: true, orderable: true},
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
@endsection
