@extends('admin.layouts.app')
@section('script')
    <script type="text/javascript">
      var table;
      $(function() {
        table = $('#datatables').DataTable({
          processing: true,
          serverSide: true,
          ajax: 'grade/dbtb',
          aaSorting: [[0, 'desc']],
          columns: [
          { data: 'id', name: 'id', searchable: false, orderable: false},
          { data: 'teacher_id', name: 'teacher_id', searchable: true, orderable: true},
          { data: 'name', name: 'name', searchable: true, orderable: true},
          { data: 'action', name: 'action', searchable: true, orderable: true},
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

@section('content')
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary card-header-icon">
          <div class="card-icon">
            <i class="material-icons">assignment</i>
          </div>
          <h4 class="card-title">Daftar {{$title ?? 'title'}}</h4>
          <a href="{{$create}}" class="btn btn-sm btn-primary pull-right">Tambah Data</a>
        </div>
        <div class="card-body">
          <div class="toolbar">
            <!--        Here you can write extra buttons/actions for the toolbar              -->
          </div>
          @if (session('Success'))
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="material-icons">close</i>
              </button>
              <span>
                <b> {{ session('Success') }} </b></span>
            </div>
          @endif


          <div class="material-datatables">
            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Wali Kelas</th>
                  <th>Kelas</th>
                  <th class="disabled-sorting text-center"></th>
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
