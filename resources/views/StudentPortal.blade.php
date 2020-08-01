@extends('layouts.master-layout');
@section('css')
    <style>
        .inputDnD .form-control-file {
            position: relative;
            width: 100%;
            height: 100%;
            min-height: 6em;
            outline: none;
            visibility: hidden;
            cursor: pointer;
            background-color: #c61c23;
            box-shadow: 0 0 5px solid currentColor;
        }

        .inputDnD .form-control-file:before {
            content: attr(data-title);
            position: absolute;
            top: 0.5em;
            left: 0;
            width: 100%;
            min-height: 6em;
            line-height: 2em;
            padding-top: 1.5em;
            opacity: 1;
            visibility: visible;
            text-align: center;
            border: 0.25em dashed currentColor;
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            overflow: hidden;
        }

        .inputDnD .form-control-file:hover:before {
            border-style: solid;
            box-shadow: inset 0px 0px 0px 0.25em currentColor;
        }

        .modal-body {
            position: relative;
            padding: 0px;
        }

        .close {
            position: absolute;
            right: -30px;
            top: 0;
            z-index: 999;
            font-size: 2rem;
            font-weight: normal;
            color: #fff;
            opacity: 1;
        }

        .modal-dialog {
            max-width: 800px;
            margin: 30px auto;
            margin-top: 8rem;
        }

    </style>
@endsection

@section('content')

    <div id="course-sec" class="container set-pad">
        <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">Student Portal</h1>
            </div>
        </div>
        <!--/.HEADER LINE END-->

        <!--/.BREADCRUMB END-->
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="row set-row-pad">
            <div class="col-lg-10 col-md-9 col-sm-9 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.5s">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a href="#collapse1"><b>Basic Information </b><span></span></a>
                        </h3>
                        <button  type="button" class = "btn btn-default" name="editinfo"><a
                                    href="{{url('/EditBasicInfo')}}">Edit</a></button>
                    </div>

                    <div class="panel-body"><b>Name: </b><span>{{Auth::user()->name}}</span></div>
                    <div class="panel-footer"><b>University ID: </b><span>{{Auth::user()->S_UID}}</span></div>
                    <div class="panel-body"><b>Phone: </b><span>{{Auth::user()->S_phone}}</span></div>
                    <div class="panel-footer"><b>Gender: </b><span>{{Auth::user()->S_gender}}</span></div>
                    <div class="panel-body"><b>DOB: </b><span>{{Auth::user()->S_dob}}</span></div>
                    <div class="panel-footer"><b>Department: </b><span>{{Auth::user()->department()}}</span></div>
                    <div class="panel-body"><b>E-mail: </b><span>{{Auth::user()->email}}</span></div>

                </div>
            </div>
{{--            <div class="col-lg-6 col-md-6 col-sm-6 " data-scroll-reveal="enter from the bottom after 0.4s">--}}
{{--                <img class="img-responsive" src="assets/img/student-portal.png" width="400" height="400"/>--}}
{{--            </div>--}}
        </div>
        <!-- INFO SECTION END-->

        <hr>

{{--        <div id="Student-sec">--}}
{{--            <div class="container set-pad">--}}
{{--                <div class="row text-center">--}}
{{--                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">--}}
{{--                        <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">Announcements</h1>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--/.HEADER LINE END-->--}}

{{--                <div class="row" data-scroll-reveal="enter from the bottom after 0.4s">--}}
{{--                    <table class="table table-striped" data-scroll-reveal="enter from the bottom after 0.3s">--}}
{{--                        <thead>--}}
{{--                        <tr>--}}
{{--                            <th>Title</th>--}}
{{--                            <th>Type</th>--}}
{{--                            <th>Semester</th>--}}
{{--                            <th>Course</th>--}}
{{--                            <th>Teacher</th>--}}
{{--                            <th>File</th>--}}
{{--                            <th>Deadline</th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        @forelse($courses as $course)--}}
{{--                            @forelse($course->ca as $ca)--}}
{{--                                <tr>--}}
{{--                                    <td>{{$ca->CA_Name}}</td>--}}
{{--                                    <td>{{$ca->CA_type}}</td>--}}
{{--                                    <td>{{$course->semester->name }}</td>--}}
{{--                                    <td>{{ $course->name}}</td>--}}
{{--                                    <td>--}}
{{--                                        <table>--}}
{{--                                            @php $count = 0; @endphp--}}
{{--                                            @forelse($course->faculty as $faculty)--}}
{{--                                                <tr>--}}
{{--                                                    <td>{{ ++$count }}.</td>--}}
{{--                                                    <td>  {{$faculty->name}} </td>--}}
{{--                                                </tr>--}}
{{--                                            @empty--}}
{{--                                            @endforelse--}}

{{--                                        </table>--}}
{{--                                    </td>--}}
{{--                                    <td><a href="{{asset($ca->CRM_file)}}" style="width:80px;"--}}
{{--                                           class="fa fa-file"></a></td>--}}
{{--                                    <td>{{\Carbon\Carbon::parse($ca->created_at)->toFormattedDateString()}}</td>--}}
{{--                                </tr>--}}
{{--                            @empty--}}
{{--                            @endforelse--}}
{{--                        @empty--}}
{{--                        @endforelse--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- ANNOUNCEMENT SECTION END-->--}}


{{--        <hr>--}}

{{--        <div id="Student-sect">--}}
{{--            <div class="container set-pad">--}}
{{--                <div class="row text-center">--}}
{{--                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">--}}
{{--                        <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">Course Related--}}
{{--                            Material</h1>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--/.HEADER LINE END-->--}}

{{--                <div class="row" data-scroll-reveal="enter from the bottom after 0.4s">--}}
{{--                    <table class="table table-striped" data-scroll-reveal="enter from the bottom after 0.3s">--}}
{{--                        <thead>--}}
{{--                        <tr>--}}
{{--                            <th>Title</th>--}}
{{--                            <th>Type</th>--}}
{{--                            <th>Semester</th>--}}
{{--                            <th>Course</th>--}}
{{--                            <th>Teacher</th>--}}
{{--                            <th>File</th>--}}
{{--                            <th>Date</th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}


{{--                        <tbody>--}}
{{--                        @forelse($courses as $course)--}}
{{--                            @forelse($course->crm as $crm)--}}
{{--                                <tr>--}}
{{--                                    <td>{{$crm->CRM_Name}}</td>--}}
{{--                                    <td>{{$crm->CRM_type}}</td>--}}
{{--                                    <td>{{$course->semester->name }}</td>--}}
{{--                                    <td>{{ $course->name}}</td>--}}
{{--                                    <td>--}}
{{--                                        <table>--}}
{{--                                            @php $count = 0; @endphp--}}
{{--                                            @forelse($course->faculty as $faculty)--}}
{{--                                                <tr>--}}
{{--                                                    <td>{{ ++$count }}.</td>--}}
{{--                                                    <td>  {{$faculty->name}} </td>--}}
{{--                                                </tr>--}}
{{--                                            @empty--}}
{{--                                            @endforelse--}}

{{--                                        </table>--}}
{{--                                    </td>--}}
{{--                                    <td><a href="{{asset($crm->CRM_file)}}" style="width:80px;"--}}
{{--                                           class="fa fa-file"></a></td>--}}
{{--                                    <td>{{\Carbon\Carbon::parse($crm->created_at)->toFormattedDateString()}}</td>--}}
{{--                                </tr>--}}
{{--                            @empty--}}
{{--                            @endforelse--}}
{{--                        @empty--}}
{{--                        @endforelse--}}
{{--                        </tbody>--}}

{{--                    </table>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- COURSERELATEDMATERIAL SECTION END-->--}}

{{--        <hr>--}}

{{--        <div id="VIDEO-sec">--}}
{{--            <div class="container set-pad">--}}
{{--                <div class="row text-center">--}}
{{--                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">--}}
{{--                        <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">University--}}
{{--                            News</h1>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--/.HEADER LINE END-->--}}

{{--                <div class="row">--}}
{{--                    @forelse(\App\Video::orderBy('created_at')->take(6)->get() as $video)--}}
{{--                        <div class="col-md-4 col-sm-4 " style="text-align: center"--}}
{{--                             data-scroll-reveal="enter from the bottom after 0.4s">--}}
{{--                            <a style="cursor: pointer" data-src="{{asset($video->file_path)}}"--}}
{{--                               onclick="playVideo(this)"> <img src="assets/img/video.png" class="img-rounded"--}}
{{--                                                               height="120" width="120"/>--}}
{{--                                <h3 style="text-align: center">{{$video->title}}</h3></a>--}}
{{--                            <br>--}}
{{--                        </div>--}}
{{--                    @empty--}}
{{--                    @endforelse--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- VIDEO SECTION END-->--}}

{{--        <hr>--}}

{{--        <div id="Student-se">--}}
{{--            <div class="container set-pad">--}}
{{--                <div class="row text-center">--}}
{{--                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">--}}
{{--                        <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">Courses--}}
{{--                            Studing</h1>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--/.HEADER LINE END-->--}}

{{--                <div class="row" data-scroll-reveal="enter from the bottom after 0.4s">--}}

{{--                    <table class="table table-striped" data-scroll-reveal="enter from the bottom after 0.3s">--}}
{{--                        <thead>--}}
{{--                        <tr>--}}
{{--                            <th>Course Name</th>--}}
{{--                            <th>Semester</th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        @forelse($courses as $course)--}}
{{--                            <tr>--}}
{{--                                <td><a href="{{url('Course/'.$course->id)}}"><h4>{{$course->name}}</h4></a></td>--}}
{{--                                <td>{{$course->semester->name}}</td>--}}
{{--                            </tr>--}}
{{--                        @empty--}}
{{--                            <p>No courses assigned yet</p>--}}
{{--                        @endforelse--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"--}}
{{--         aria-hidden="true">--}}
{{--        <div class="modal-dialog" role="document">--}}
{{--            <div class="modal-content">--}}

{{--                <div class="modal-body">--}}

{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                        <span aria-hidden="true">&times;</span>--}}
{{--                    </button>--}}
{{--                    <!-- 16:9 aspect ratio -->--}}
{{--                    <div class="embed-responsive embed-responsive-16by9">--}}
{{--                        <video id="media" width="400" controls>--}}
{{--                            <source id="videoSrc" src=""--}}
{{--                                    type="video/mp4">--}}
{{--                            Your browser does not support HTML5 video.--}}
{{--                        </video>--}}
{{--                    </div>--}}


{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
    </div>
@endsection

@section('script')
    <script>
        function playVideo(context) {
            var src = $(context).data('src');
            $("#videoSrc").attr('src', src);
            $("#media")[0].load();

            $('#myModal').modal('show');
        }

        $('#myModal').on('hidden.bs.modal', function (e) {
            $("#media")[0].pause();
        });


        @if (session('success'))
        swal(
            'Done',
            'Profile updated successfully.',
            'success'
        );
        @endif
    </script>
@endsection