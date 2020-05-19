  <!-- Vertically Centered Modal-->
    <div class="modal fade" id="modalCentered" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Create Products</h4>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
          <form action="{{route('admin.create')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
              <label class="col-2 col-form-label" for="text-input">Enter Title</label>
              <div class="col-10">
                <input class="form-control" type="text" id="text-input" name="title">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-2 col-form-label" for="textarea-input">Enter Description</label>
              <div class="col-10">
                <textarea class="form-control" name="description" id="textarea-input" rows="5"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-2 col-form-label" for="file-input">Enter Image(s)</label>
              <div class="col-10">
                <div class="custom-file">
                  <input class="custom-file-input" name="image[]" type="file" multiple id="file-input">
                  <label class="custom-file-label" id="file-input-label" for="file-input"></label>
                </div>
              </div>
            </div>
            <button class="btn btn-outline-secondary btn-sm" type="button" data-dismiss="modal">Close</button>
            <button class="btn btn-primary btn-sm" type="submit">Save</button>
          </form>
          </div>
        </div>
      </div>
    </div>
