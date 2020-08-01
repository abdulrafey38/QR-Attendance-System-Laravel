@extends('layouts.master-layout')




<html>
<head>

    <title>Report Issue</title>


    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>

        .invalid-feedback {
            display: block;
        }

    </style>


</head>


@section('content')
<body>

        <div class="container set-pad" >
            <div class="row text-center">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                    <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">Report Issue to Admin </h1>
                </div>
            </div>
            <!--/.HEADER LINE END-->

            <div class="row set-row-pad" data-scroll-reveal="enter from the bottom after 0.5s">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <form action="{{url('/contact_us/form')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" required="required"
                                   placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control " name="email" required="required"
                                   placeholder="Your Email"/>
                        </div>

                        @auth('instructor')
                            <div class="form-group">
                                <input type="text" class="form-control " name="user_id" required="required"
                                       placeholder="Your Faculty ID"/>
                            </div>
                        @else
                            <div class="form-group">
                                <input type="text" class="form-control " name="user_id" required="required"
                                       placeholder="Your Student ID"/>
                            </div>
                        @endauth
                        <div class="form-group">
                                <textarea name="message" required class="form-control" style="min-height: 150px;"
                                          placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block btn-lg">Submit Request</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

{{--<div class="container" style="margin-top: 30px">--}}


{{--    <div class="col-md-12" style="height:200px; width:100%; background-color:lightblue">--}}


{{--        <h1 style="color:white">--}}
{{--            <center><u>Contact Us </u></center>--}}
{{--        </h1>--}}

{{--    </div>--}}

{{--    <div class="col-md-4" style="margin-top: 20px">--}}

{{--        @if(Session::has('flash_message'))--}}

{{--            <div class="alert alert-success">{{Session::get('flash_message')}}}</div>--}}
{{--        @endif--}}

{{--        <form method="post" action="{{route("Contact.store")}}">--}}

{{--            {{csrf_field()}}--}}

{{--            <div class="form-group">--}}
{{--                <label> Full Name </label>--}}
{{--                <input type="text" class="form-control" name="name" placeholder="Enter your name here">--}}
{{--                @if($errors->has('name'))--}}
{{--                    <small class="form-text invalid-feedback">{{ $errors->first('name')}}</small>--}}
{{--                @endif--}}

{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <label> Email </label>--}}
{{--                <input type="text" class="form-control" name="Email" placeholder="Enter your email here">--}}
{{--                @if($errors->has('Email'))--}}
{{--                    <small class="form-text invalid-feedback">{{ $errors->first('Email') }}</small>--}}
{{--                @endif--}}


{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <label> Phone </label>--}}
{{--                <input type="text" class="form-control" name="Phone" placeholder="Enter your phone number here">--}}
{{--                @if($errors->has('Phone'))--}}
{{--                    <small class="form-text invalid-feedback">{{ $errors->first('Phone') }}</small>--}}
{{--                @endif--}}

{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <label> Message </label>--}}
{{--                <textarea class="form-control" name="message" placeholder="Message"> </textarea>--}}
{{--                @if($errors->has('message'))--}}
{{--                    <small class="form-text invalid-feedback">{{ $errors->first('message') }}</small>--}}
{{--                @endif--}}

{{--            </div>--}}

{{--            <input type="submit" value="submit" class="btn btn-primary">--}}

{{--        </form>--}}

{{--    </div>--}}
{{--</div>--}}
</body>
</html>