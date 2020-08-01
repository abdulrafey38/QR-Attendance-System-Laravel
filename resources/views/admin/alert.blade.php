@if (session('success'))
    <div class="row " style="margin-top:  -3rem">
        <div class="col-md-10 m-auto">

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
@endif
@if (session('error'))
    <div class="row " style="margin-top:  -3rem">
        <div class="col-md-10 m-auto">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
@endif

@if(count($errors) > 0)
    <div class="row " style="margin-top:  -3rem">
        <div class="col-md-10 m-auto">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                @foreach ($errors->all() as $error)
                    <strong class="form-inline">
                        {{$error}}  </strong>
                @endforeach
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
@endif