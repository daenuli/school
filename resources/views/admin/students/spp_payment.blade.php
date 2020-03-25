@extends('admin.layouts.app')

@section('content')
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary card-header-icon">
          <div class="card-icon">
            <i class="material-icons">assignment</i>
          </div>
          <h4 class="card-title">Spp Santri
              <form class="" action="" method="get">
                  <select class="form-control" name="year" onchange="this.form.submit()">
                      @foreach (range($start_year[0], date('Y')) as $key => $value)
                          <option value="{{$value}}" {{($year == $value)?'selected':''}}>{{$value}}</option>
                      @endforeach
                  </select>
              </form>
            <a href="{{route('student.index')}}" class="btn btn-sm btn-danger pull-right">Kembali</a>
            <a href="#" class="btn btn-sm btn-primary pull-right" data-toggle="modal" data-target="#exampleModal">Tambah Data</a>
          </h4>
        </div>
        <div class="card-body">
          <div class="material-datatables">
            <table id="datatable" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Bulan</th>
                  <th>Total Bayar</th>
                  <th>Kekurangan</th>
                  <th>Tanggal Bayar</th>
                  <th>Status</th>
                  <th class="disabled-sorting text-right"></th>
                </tr>
              </thead>
              <tbody>
                  @php
                      $no = 1;
                  @endphp
                  @foreach ($data as $key => $value)
                      <tr>
                          <td>{{$no++}}</td>
                          <td>{{$value['month']}}</td>
                          <td>{{$value['total']}}</td>
                          <td>{{$value['minus']}}</td>
                          <td>{{$value['payment_date']}}</td>
                          <td>{{$value['status']}}</td>
                          <td>
                              <a href="{{$value['url']}}" class="btn btn-success btn-sm">Detail</a>
                          </td>
                      </tr>
                  @endforeach
                  {{-- {{print_r($data)}} --}}
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
    <div class="modal" tabindex="-1" role="dialog" id="exampleModal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Bayar SPP</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form id="myForm" action="{{$store_all}}" method="post">
                  @csrf
                  <div class="row">
                      <label class="col-sm-2 col-form-label">Jumlah</label>
                      <div class="col-sm-8">
                          <div class="form-group">
                              <input type="text" class="form-control" name="payment" autocomplete="off">
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <label class="col-sm-2 col-form-label">Bulan SPP</label>
                      <div class="col-sm-8">
                          <div class="form-group">
                              <input type="text" class="form-control" name="pay_month" autocomplete="off">
                          </div>
                      </div>
                  </div>
              </form>
          </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-primary" value="Submit" form="myForm"/>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
@endsection