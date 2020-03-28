@extends('admin.layouts.app')

@section('content')
<div class="col-md-12">
	<div class="card">
		<div class="card-header card-header-icon card-header-rose">
			<div class="card-icon">
				<i class="material-icons">supervised_user_circle</i>
			</div>
			<h4 class="card-title">Edit Pembayaran SPP
                <a href="{{ $back }}" class="btn btn-sm btn-info pull-right">Kembali</a>
            </h4>
		</div>
        <form action="{{ $update }}" method="POST">
          @csrf
          @method('PUT')
            <div class="card-body">
                <div class="row">
                    <label class="col-sm-2 col-form-label">Jumlah Pembayaran</label>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <input type="text" class="form-control payment" name="payment" value="{{ $spp->total }}">
                            <input type="hidden" class="form-control" name="student" value="{{ $students }}">
                            <input type="hidden" class="form-control" name="month" value="{{ $months }}">
                            <input type="hidden" class="form-control" name="year" value="{{ $years }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-sm-2"></div>
                  <div class="col-sm-8">
                    <div class="form-group">
                      <button type="submit" name="button" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </div>
            </div>
        </form>
      </div>
</div>
@endsection


@section('script')
    <script type="text/javascript">
    $('.payment').priceFormat({
        prefix: '',
        thousandsSeparator: '.',
        clearPrefix:true,
        centsLimit: 0,
    });
    </script>
@endsection
