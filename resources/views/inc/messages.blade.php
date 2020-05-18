@if (count($errors)>0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show text-center margin-bottom-1x"><span class="alert-close" data-dismiss="alert"></span><i class="icon-ban"></i>&nbsp;&nbsp;<strong>Error</strong> {{$error}}</div>
    @endforeach
@endif

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show text-center margin-bottom-1x">
        <span class="alert-close" data-dismiss="alert"></span><i class="icon-help"></i>&nbsp;&nbsp;<strong>Success</strong>{{session('success')}}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show text-center margin-bottom-1x">
        <span class="alert-close" data-dismiss="alert"></span>
        <i class="icon-ban"></i>&nbsp;&nbsp;<strong>Error</strong>{{session('error')->message}}
    </div>
@endif
