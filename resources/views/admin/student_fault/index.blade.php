@extends('admin.layouts.app')

@section('content')
    <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">emoji_people</i>
            </div>
            <h4 class="card-title">Data Santri
              <a href="{{route('student.index')}}" class="btn btn-sm btn-danger pull-right">Kembali</a>
            </h4>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                    <tbody>
                      <tr>
                        <td class="profile-title" width="15%">Nama</td>
                        <td>
                          @if ($student->name)
                            {{ $student->name }}
                          @else
                            <i>Data belum ditambahkan</i>
                          @endif
                        </td>
                      </tr>
                        <tr>
                          <td class="profile-title" width="15%">Jumlah Poin</td>
                          <td>
                            @if ($point)
                              {{ $point }}
                            @else
                              <i>Data belum ditambahkan</i>
                            @endif
                          </td>
                        </tr>
                    </tbody>
                  </table>
              </div>
          </div>
          <!-- end content-->
        </div>
      <div class="card">
        <div class="card-header card-header-primary card-header-icon">
          <div class="card-icon">
            <i class="material-icons">assignment</i>
          </div>
          <h4 class="card-title">Catatan Pelanggaran Santri
            <button type="button" class="btn btn-sm btn-primary pull-right" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Data</button>
          </h4>
        </div>
        <div class="card-body">
          <div class="material-datatables">
            <table id="datatable" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Pelanggaran</th>
                  <th>Tipe</th>
                  <th>Poin</th>
                  <th>Keterangan</th>
                  <th class="disabled-sorting text-right"></th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
          @include('admin.student_fault.create')
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
          aaSorting: [[3, 'desc']],
          columns: [
              { data: 'id', searchable: false, orderable: false},
              { data: 'name', searchable: true, orderable: false},
              { data: 'type', searchable: false, orderable: true},
              { data: 'point', searchable: false, orderable: true},
              { data: 'description', searchable: false, orderable: false},
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
