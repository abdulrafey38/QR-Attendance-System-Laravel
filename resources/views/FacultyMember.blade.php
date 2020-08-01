@extends('layouts.master-layout');
@section('css')
    <style>

    </style>
@endsection


@section('content')

    <div id="course-sec" class="container set-pad">
        <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">{{$faculty->name}}</h1>
            </div>
        </div>
        <!--/.HEADER LINE END-->

        <ul class="breadcrumb" data-scroll-reveal="enter from the bottom after 0.4s">
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href=''>Faculty</a></li>
            <li>Faculty Member</li>
        </ul>
        <!--/.BREADCRUMB END-->

        <div class="row set-row-pad">
            <div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.5s">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a href="#collapse1"><b>Basic Information </b><span></span></a>
                        </h3>
                    </div>
                    <div class="panel-body"><b>Gender: </b><span>{{$faculty->I_gender}}</span></div>
                    <div class="panel-footer"><b>Department: </b><span>{{$faculty->department()}}</span></div>
                    <div class="panel-body"><b>E-mail: </b><span>{{$faculty->email}}</span></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 " data-scroll-reveal="enter from the bottom after 0.4s">
                <img src="{{asset('assets/img/21.jpg')}}" class="img-thumbnail"/>
            </div>
        </div>
        <!-- INFO SECTION END-->

        <hr>

        <div id="faculty-se">
            <div class="container set-pad">
                <div class="row text-center">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                        <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">Courses
                            Teaching</h1>
                    </div>
                </div>
                <!--/.HEADER LINE END-->

                <div class="row">
                    <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                        <div class="faculty-div">
                            @forelse($faculty->courses as $course)
                                <div class="" style="padding-bottom: 1.3rem">
                                    <a href="{{url('Course/'.$course->id)}}"> {{$course->name}}<h4></h4></a>
                                </div>
                            @empty
                                <p>No courses assigned yet</p>
                            @endforelse

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>

    </script>
@endsection