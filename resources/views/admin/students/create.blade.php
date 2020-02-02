@extends('admin.layouts.app')

@section('content')
<div class="col-md-12">
  <div class="card ">
    <div class="card-header card-header-rose card-header-icon">
      <div class="card-icon">
        <i class="material-icons">contacts</i>
      </div>
      <h4 class="card-title">Input Data Santri</h4>
    </div>
    <div class="card-body ">
      <form method="get" action="/" class="form-horizontal">
        <div class="row">
          <label class="col-sm-2 col-form-label">Nama Lengkap</label>
          <div class="col-sm-10">
            <div class="form-group">
              <input type="text" class="form-control" name="name">
            </div>
          </div>
        </div>
        <div class="row">
          <label class="col-sm-2 col-form-label">Tempat Lahir</label>
          <div class="col-sm-10">
            <div class="form-group">
              <input type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="row">
          <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
          <div class="col-sm-10">
            <div class="form-group">
              <input type="text" class="form-control datepicker" value="10/06/2018">
            </div>
          </div>
        </div>
        <div class="row">
          <label class="col-sm-2 col-form-label label-checkbox">Checkboxes and radios</label>
          <div class="col-sm-10 checkbox-radios">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" value=""> First Checkbox
                <span class="form-check-sign">
                  <span class="check"></span>
                </span>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" value=""> Second Checkbox
                <span class="form-check-sign">
                  <span class="check"></span>
                </span>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="exampleRadios" value="option2" checked> First Radio
                <span class="circle">
                  <span class="check"></span>
                </span>
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="exampleRadios" value="option1"> Second Radio
                <span class="circle">
                  <span class="check"></span>
                </span>
              </label>
            </div>
          </div>
        </div>
        <div class="row">
          <label class="col-sm-2 col-form-label label-checkbox">Inline checkboxes</label>
          <div class="col-sm-10 checkbox-radios">
            <div class="form-check form-check-inline">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" value=""> a
                <span class="form-check-sign">
                  <span class="check"></span>
                </span>
              </label>
            </div>
            <div class="form-check form-check-inline">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" value=""> b
                <span class="form-check-sign">
                  <span class="check"></span>
                </span>
              </label>
            </div>
            <div class="form-check form-check-inline">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" value=""> c
                <span class="form-check-sign">
                  <span class="check"></span>
                </span>
              </label>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
  $(function () {
    $('.datepicker').datetimepicker({
      format: 'LT',
    });
  });
</script>
@endsection