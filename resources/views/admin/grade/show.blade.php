@extends('admin.layouts.app')
@section('content')
<div class="col-md-12">
    <div class="card ">
      <div class="card-header card-header-rose card-header-icon">
        <div class="card-icon">
          <i class="material-icons">contacts</i>
        </div>
        <h4 class="card-title">Informasi Kelas {{$kelas->name}}</h4>
      </div>
      <div class="card-body">
        <div class="row mt-3">
          <div class="col-12">
            <table class="table">
              <tbody>
                  <tr>
                    <th>Kelas</th>
                    <td style="border-top: 1px solid; border-color: #ddd">{{$kelas->name}}</td>
                  </tr>
                  <tr>
                    <th>Wali Kelas</th>
                    <td>
                      @isset($kelas->teacher->name)
                        {{$kelas->teacher->name}}
                      @endisset
                    </td>
                  </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="material-datatables">
          <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
            <thead>
              <tr>
                <th>Nomor</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Nomor</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Action</th>
              </tr>
            </tfoot>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer">
        <a href="{{$back}}" class="btn btn-default">Back</a>
      </div>
    </div>
</div>
@endsection
@section('script')
  <script type="text/javascript">
    var table;
    $(function() {
      table = $('#datatables').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{url('/std/dbtb/'.$kelas->id)}}',
        order: [[0, 'desc']],
        columns: [
        { data: 'id', name: 'id', searchable: true, orderable: true},
        { data: 'nis', name: 'nis', searchable: true, orderable: true},
        { data: 'name', name: 'name', searchable: true, orderable: true},
        { data: 'action', name: 'action', searchable: false, orderable: false},
        ],
        columnDefs: [{
          "targets": 0,
          "searchable": true,
          "orderable": true,
          "data": null,
          // "title": 'No.',
          "render": function (data, type, full, meta) {
              return meta.settings._iDisplayStart + meta.row + 1;
          }
        }],
      });
    });
  </script>
@endsection
