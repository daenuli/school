@extends('admin.layouts.app')

@section('content')
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary card-header-icon">
          <div class="card-icon">
            <i class="material-icons">assignment</i>
          </div>
          <h4 class="card-title">Daftar Santri
            <a href="" class="btn btn-sm btn-info pull-right">Print</a>
            <a href="{{ route('student.create') }}" class="btn btn-sm btn-primary pull-right">Tambah Data</a>
          </h4>
        </div>
        <div class="card-body">
          <div class="material-datatables">
            <table id="datatable" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>NIS</th>
                  <th>Nama</th>
                  <th>TTL</th>
                  <th>Gender</th>
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
          order: [[1,'desc']],
          columns: [
              { data: 'id', searchable: true, orderable: true},
              { data: 'nis', searchable: true, orderable: true},
              { data: 'name', searchable: true, orderable: true},
              { data: 'birth', searchable: true, orderable: true},
              { data: 'gender', searchable: true, orderable: true},
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
