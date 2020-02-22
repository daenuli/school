@extends('admin.layouts.app')

@section('style')
<style>
    .ct-chart .ct-series-b .ct-slice-pie, .ct-chart .ct-series-b .ct-slice-donut-solid, .ct-chart .ct-series-b .ct-area {
        fill: #00bcd4;
        stroke: #00bcd4;
    }
    .ct-chart .ct-series-a .ct-slice-pie, .ct-chart .ct-series-a .ct-slice-donut-solid, .ct-chart .ct-series-a .ct-area {
        fill: #ff9800;
        stroke: #ff9800;
    }
    .ct-chart {
        margin: auto;
        width: 250px;
        height: 250px;
    }
    .ct-chart .ct-label {
        font-weight: bold;
    }
</style>
@endsection

@section('content')
<div class="col-lg-3 col-md-6 col-sm-6">
  <div class="card card-stats">
    <div class="card-header card-header-warning card-header-icon">
      <div class="card-icon">
        <i class="material-icons">emoji_people</i>
      </div>
      <p class="card-category">Santri</p>
      <h4 class="card-title">{{ count($student) }} orang</h4>
    </div>
    <div class="card-footer">
      <div class="stats">
        <i class="material-icons text-info">search</i>
        <a href="{{ route('student.index') }}">Selengkapnya...</a>
      </div>
    </div>
  </div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
  <div class="card card-stats">
    <div class="card-header card-header-rose card-header-icon">
      <div class="card-icon">
        <i class="material-icons">how_to_reg</i>
      </div>
      <p class="card-category">Pengajar</p>
      <h4 class="card-title">{{ count($teacher) }} orang</h4>
    </div>
    <div class="card-footer">
      <div class="stats">
        <i class="material-icons text-info">search</i>
        <a href="{{ route('teacher.index') }}">Selengkapnya...</a>
      </div>
    </div>
  </div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
  <div class="card card-stats">
    <div class="card-header card-header-info card-header-icon">
      <div class="card-icon">
        <i class="material-icons">school</i>
      </div>
      <p class="card-category">Kelas</p>
      <h4 class="card-title">{{ count($grade) }} kelas</h4>
    </div>
    <div class="card-footer">
      <div class="stats">
        <i class="material-icons text-info">search</i>
        <a href="{{ route('grade.index') }}">Selengkapnya...</a>
      </div>
    </div>
  </div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
  <div class="card card-stats">
    <div class="card-header card-header-success card-header-icon">
      <div class="card-icon">
        <i class="material-icons">group</i>
      </div>
      <p class="card-category">User</p>
      <h4 class="card-title">{{ count($user) }} orang</h4>
    </div>
    <div class="card-footer">
      <div class="stats">
        <i class="material-icons text-info">search</i>
        <a href="{{ route('users.index') }}">Selengkapnya...</a>
      </div>
    </div>
  </div>
</div>
<div class="col-md-6">
  <div class="card card-chart">
    <div class="card-header card-header-icon card-header-danger">
      <div class="card-icon">
        <i class="material-icons">pie_chart</i>
      </div>
      <h4 class="card-title">Presentase Santri</h4>
    </div>
    <div class="card-body">
      <div id="chartstudent" class="ct-chart"></div>
    </div>
    <div class="card-footer">
      <div class="row" style="width: 100%;">
        <div class="col-md-12">
          <h6 class="card-category">Ket :</h6>
        </div>
        <div class="col-md-12 pr-0">
          <p class="mb-0"><i class="fa fa-circle text-info"></i> Laki - Laki : {{ $studentGender['lk'] }} orang
          <a href="{{ route('student.index') }}" class="btn btn-sm btn-rose pull-right">Selengkapnya</a></p>
          <p><i class="fa fa-circle text-warning"></i> Perempuan : {{ $studentGender['pr'] }} orang</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-md-6">
  <div class="card card-chart">
    <div class="card-header card-header-icon card-header-danger">
      <div class="card-icon">
        <i class="material-icons">pie_chart</i>
      </div>
      <h4 class="card-title">Presentase Pengajar</h4>
    </div>
    <div class="card-body">
      <div id="chartteacher" class="ct-chart"></div>
    </div>
    <div class="card-footer">
      <div class="row" style="width: 100%;">
        <div class="col-md-12">
          <h6 class="card-category">Ket :</h6>
        </div>
        <div class="col-md-12 pr-0" >
          <p class="mb-0"><i class="fa fa-circle text-info"></i> Laki - Laki : {{ $teacherGender['lk'] }} orang
          <a href="{{ route('teacher.index') }}" class="btn btn-sm btn-rose pull-right">Selengkapnya</a></p>
          <p><i class="fa fa-circle text-warning"></i> Perempuan : {{ $teacherGender['pr'] }} orang</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
<script>
  $(document).ready(function() {
    var data = {
      series: [
            {{ $studentGender['pr'] }},
            {{ $studentGender['lk'] }}
        ]
    };

    var sum = function(a, b) { return a + b };

    new Chartist.Pie('#chartstudent', data, {
      labelInterpolationFnc: function(value) {
        return Math.round(value / data.series.reduce(sum) * 100) + '%';
      }
    });
  });
</script>
<script>
  $(document).ready(function() {
    var data = {
      series: [
            {{ $teacherGender['pr'] }},
            {{ $teacherGender['lk'] }}
        ]
    };

    var sum = function(a, b) { return a + b };

    new Chartist.Pie('#chartteacher', data, {
      labelInterpolationFnc: function(value) {
        return Math.round(value / data.series.reduce(sum) * 100) + '%';
      }
    });
  });
</script>
@endsection