<div class="row">
    @if (count($errors)>0)
    @foreach ($errors->all() as $error)
        <div class="iziToast iziToast-danger">
              <div class="iziToast-body" style="padding-left: 33px;"><i class="iziToast-icon icon-ban"></i><strong>Danger</strong>
                <p>{{$error}}</p>
              </div>
              <button class="iziToast-close" data-dismiss="iziToast"></button>
            </div>
    @endforeach
@endif

@if (session('success'))
    <div class="col-sm-6">
                <div class="iziToast iziToast-success">
                  <div class="iziToast-body" style="padding-left: 33px;"><i class="iziToast-icon icon-circle-check"></i><strong>Success</strong>
                    <p>{{session('success')}}</p>
                  </div>
                  <button class="iziToast-close" data-dismiss="iziToast"></button>
                </div>
              </div>
@endif

@if (session('error'))
    <div class="iziToast iziToast-danger">
              <div class="iziToast-body" style="padding-left: 33px;"><i class="iziToast-icon icon-ban"></i><strong>Danger</strong>
                <p>{{session('error')->message}}</p>
              </div>
              <button class="iziToast-close" data-dismiss="iziToast"></button>
            </div>
@endif
</div>
