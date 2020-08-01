@extends('layouts.master-layout');
@section('css')
    <style>
        .btn-width {
            width: 20rem !important;
            text-align: start;
        }
    </style>
@endsection


@section('content')

    <div id="course-sec" class="container set-pad">
        <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                <h1 data-scroll-reveal="enter from the bottom after 0.1s"
                    class="header-line">{{$program->department->name}}</h1>
            </div>
        </div>
        <!--/.HEADER LINE END-->

        <ul class="breadcrumb" data-scroll-reveal="enter from the bottom after 0.4s">
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="">Department</a></li>
            <li>Program</li>
        </ul>
        <!--/.BREADCRUMB END-->

        <div class="row set-row-pad">
            <div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                <div class="panel-group" id="accordion">
                    @forelse($program->semesters as $semester)
                        <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.5s">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$semester->id}}"
                                       class="collapsed">{{$semester->name}} <span class="caret"></span></a>
                                </h4>
                            </div>
                            <div id="collapse{{$semester->id}}" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    @forelse($semester->courses as $course)
                                        <a href="{{url('Course/'.$course->id)}}">
                                            <button class="btn btn-default btn btn-width" type="button">
                                                <strong>{{$course->name}}</strong>
                                                - ({{$course->course_code}})
                                            </button>
                                        </a><br>
                                    @empty
                                        <p>No Course</p>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>No Semester</p>
                    @endforelse

                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 " data-scroll-reveal="enter from the bottom after 0.4s">
                <img src="{{asset('assets/img/19.jpg')}}" class="img-thumbnail"/>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>

    </script>
@endsection