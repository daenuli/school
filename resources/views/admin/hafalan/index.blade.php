@extends('admin.layouts.app')

@section('script')
    <script type="text/javascript">
      var table;
      $(function() {
        table = $('#datatables').DataTable({
          processing: true,
          serverSide: true,
          ajax: 'hafalan/dbtb',
          aaSorting: [[0, 'desc']],
          columns: [
          { data: 'id', name: 'id', searchable: false, orderable: false},
          { data: 'user_id', name: 'user_id', searchable: true, orderable: true},
          { data: 'student_id', name: 'student_id', searchable: true, orderable: true},
          { data: 'juz', name: 'juz', searchable: true, orderable: true},
          { data: 'surah_id', name: 'surah_id', searchable: true, orderable: true},
          { data: 'ayat_start', name: 'ayat_start', searchable: false, orderable: false},
          { data: 'ayat_end', name: 'ayat_end', searchable: false, orderable: false},
          { data: 'note', name: 'note', searchable: false, orderable: false},
          { data: 'action', name: 'action', searchable: false, orderable: false,}
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
          <h4 class="card-title">Daftar {{$title}} Santri</h4>
          <a href="{{$create}}" class="btn btn-sm btn-info pull-right"><i class="material-icons">add_circle</i>Create</a>
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
                  <th>Nomor</th>
                  <th>Musyrif</th>
                  <th>Santri</th>
                  <th>Juz</th>
                  <th>Surah</th>
                  <th>Mulai Ayat</th>
                  <th>Akhir Ayat</th>
                  <th>Catatan</th>
                  <th class="disabled-sorting text-right">Actions</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Nomor</th>
                  <th>Musyrif</th>
                  <th>Santri</th>
                  <th>Juz</th>
                  <th>Surah</th>
                  <th>Mulai Ayat</th>
                  <th>Akhir Ayat</th>
                  <th>Catatan</th>
                  <th class="disabled-sorting text-right">Actions</th>
                </tr>
              </tfoot>
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
