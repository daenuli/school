<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-rose card-header-icon">
            <div class="card-icon">
              <i class="material-icons">contacts</i>
            </div>
            <h4 class="card-title">Input Pelanggara Santri
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
            </h4>
          </div>
          <div class="card-body ">
            <form method="post" action="{{route('student_fault.store', $id)}}" class="form-horizontal">
              @csrf
              <input type="hidden" name="student_id" value="{{$id}}">
              <div class="row">
                <label class="col-sm-3 col-form-label">Nama Pelanggaran</label>
                <div class="col-sm-8">
                  <div class="form-group">
                    <input type="text" class="form-control" name="name">
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-3 col-form-label label-checkbox">Type Pelanggaran</label>
                <div class="col-sm-8 checkbox-radios">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="type" value="1" > Ringan
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="type" value="2"> Sedang
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="type" value="3" > Berat
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-3 col-form-label">Description</label>
                <div class="col-sm-8">
                  <div class="form-group">
                    <input type="text" class="form-control" name="description">
                  </div>
                </div>
              </div>
              <div class="form-group pull-left">
                <button class="btn btn-default" data-dismiss="modal" aria-label="Close">Cencel</button>
              </div>
              <div class="form-group pull-right">
                <button type="submit" name="button" class="btn btn-rose">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
