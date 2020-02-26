<div class="modal" tabindex="-1" role="dialog" id="exampleModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="" action="index.html" method="post">
      <div class="modal-body">
          @csrf
          <div class="row">
            <label id="labelNames" class="col-md-3 col-form-label" for="student_id">Nama Siswa</label>
            <div class="col-md-9">
              <div class="form-group has-default">
                <select id="student_id" class="col-md-12 js-example-basic-multiple form-control" name="student_id[]" multiple>
                    @foreach ($std as $s)
                        <option value="{{$s->id}}">{{$s->name}}</option>
                    @endforeach
                </select>
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
  </div>
</div>
