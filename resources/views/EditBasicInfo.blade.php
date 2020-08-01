@extends('layouts.master-layout')
@section('css')
    <style>

    </style>
@endsection


@section('content')

    <div id="course-sec" class="container set-pad">
        <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">Portal</h1>
            </div>
        </div>
    </div>
    <!--/.HEADER LINE END-->
    @auth('instructor')
        <div class="row set-row-pad">
            <div class="col-lg-10 col-md-9 col-sm-9 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                <div class=" panel-default" data-scroll-reveal="enter from the bottom after 0.5s">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a href="#collapse1"><b> Profile </b><span></span></a>
                        </h3>
                    </div>
                    <form method="post" action="{{url('/editinfo')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="Name">Name: </label>
                            <input name="Name" value="{{$user->name}}" type="text" class="form-control "
                                   required="required"
                                   pattern="[A-Za-z\s]+" title="Name only contain alphabetics"
                                   placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <label for="Phone">Phone: </label>
                            <input name="Phone" value="{{$user->I_phone}}" type="number" class="form-control "
                                   required="required"
                                   placeholder="Your Phone"/>
                        </div>

                        <div class="form-group">
                            <label for="DOB">DOB: </label>
                            <input name="DOB" value="{{$user->I_dob}}" type="date" class="form-control "
                                   required="required"
                                   placeholder="Your Date"/>
                        </div>

                        <div class="form-group">
                            <label for="Email">E-mail: </label>
                            <input name="E-mail" value="{{$user->email}}" type="email" class="form-control "
                                   required="required"
                                   placeholder="Your Email"/>
                        </div>


                        <div class="form-group">
                            <input type="file" name="image" required placeholder="Select image"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block btn-lg">Submit</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    @else
        <div class="row set-row-pad">
            <div class="col-lg-10 col-md-9 col-sm-9 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                <div class="panel-default" data-scroll-reveal="enter from the bottom after 0.5s">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a href="#collapse1"><b> Profile </b><span></span></a>
                        </h3>
                    </div>
                    <form method="post" action="{{url('/editinfo')}}">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="Name">Name: </label>
                            <input name="Name" value="{{$user->name}}" type="text" class="form-control "
                                   required="required"
                                   placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <label for="Phone">Phone: </label>
                            <input name="Phone" value="{{$user->S_phone}}" type="tel" class="form-control "
                                   required="required"
                                   placeholder="Your Phone"/>
                        </div>

                        <div class="form-group">
                            <label for="DOB">DOB: </label>
                            <input name="DOB" value="{{$user->S_dob}}" type="date" class="form-control "
                                   required="required"
                                   placeholder="Your Date"/>
                        </div>

                        <div class="form-group">
                            <label for="Email">E-mail: </label>
                            <input name="E-mail" value="{{$user->email}}" type="email" class="form-control "
                                   required="required"
                                   placeholder="Your Email"/>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block btn-lg">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    @endauth
@endsection

@section('script')
    <script>


    </script>
@endsection