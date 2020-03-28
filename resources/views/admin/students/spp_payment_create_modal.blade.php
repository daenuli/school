<div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
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
                  <label class="col-sm-3 col-form-label">Jumlah</label>
                  <div class="col-sm-7">
                      <div class="form-group">
                          <input type="text" class="form-control payment" name="payment" autocomplete="off">
                      </div>
                  </div>
              </div>
              <div class="row">
                  <label class="col-sm-3 col-form-label">Tahun SPP</label>
                  <div class="col-sm-7">
                      <div class="form-group">
                          <select class="selectpicker" name="pay_month_year" data-style="btn btn-primary">
                            @foreach (range($start_year[0], date('Y')) as $key => $value)
                                <option value="{{$value}}" {{($year == $value)?'selected':''}}>{{$value}}</option>
                            @endforeach
                          </select>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <label class="col-sm-3 col-form-label">Bulan SPP</label>
                  <div class="col-sm-7">
                      <div class="form-group">
                          <select class="selectpicker" name="pay_month_month" data-style="btn btn-primary">
                              @for ($i=1; $i <=12; $i++)
                                  @php
                                      $bulan = (strlen($i)==1)?'0'.$i:$i;
                                  @endphp
                                  <option value="{{$bulan}}">{{month($bulan)}}</option>
                              @endfor
                          </select>
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
