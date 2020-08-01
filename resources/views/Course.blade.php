@extends('layouts.master-layout')
@section('content')
    <div id="course-sec" class="container set-pad">
        <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">
                    {{$course->name}}
                </h1>
            </div>
        </div>
        <!--/.HEADER LINE END-->


        <!--/.BREADCRUMB END-->

        <div >
            <div >
                <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.5s">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a href="#collapse1"><b>Course Information </b><span></span></a>
                        </h3>
                    </div>
                    <div class="panel-body"><b>Level: </b><span>Basic</span></div>
                    <div class="panel-footer"><b>Credit hr.: </b><span>{{$course->credit_hour}}</span></div>
                    <div class="panel-body"><b>Course Code: </b><span>{{$course->course_code}}</span></div>
                </div>
            </div>
{{--            <div class="col-lg-6 col-md-6 col-sm-6 " data-scroll-reveal="enter from the bottom after 0.4s">--}}
{{--                <img src="{{asset('assets/img/19.jpg')}}" class="img-thumbnail"/>--}}
{{--            </div>--}}
        </div>
        <!-- INFO SECTION END-->
        <hr>
        @auth('instructor')
{{--            <div id="faculty-mng">--}}
{{--                <div class="container set-pad">--}}
{{--                    <div class="row text-center">--}}
{{--                        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">--}}
{{--                            <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">Manage Course--}}
{{--                                Material</h1>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!--/.HEADER LINE END-->--}}

{{--                    <div class="row">--}}

{{--                        <div class="col-lg-12  col-md-12 col-sm-12"--}}
{{--                             data-scroll-reveal="enter from the bottom after 0.4s">--}}

{{--                            <div style="padding-left:380px;">--}}
{{--                                <a style="width:180px;" class="btn btn-success" href="{{'/CRM/'.$course->id}}">Course--}}
{{--                                    Related--}}
{{--                                    Material--}}
{{--                                </a>--}}
{{--                                <a style="width:180px;" class="btn btn-success" href="{{'/CA/'.$course->id}}">Course--}}
{{--                                    Announcement--}}
{{--                                </a>--}}
{{--                            </div>--}}

{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        @endauth
    </div>
@endsection

@section('script')
    <script>

    </script>
@endsection