@extends('layouts.master-layout')
@section('css')
    <style>

    </style>
@endsection


@section('content')

    <div id="course-sec" class="container set-pad">
        <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">Faculty Portal</h1>
            </div>
        </div>
        <!--/.HEADER LINE END-->


        <!--/.BREADCRUMB END-->
        @php $user  =Auth::guard('instructor')->user(); @endphp
        <div class="row set-row-pad">
            <div class="col-lg-10 col-md-9 col-sm-9 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.5s">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <b>Basic Information </b>
                        </h3>
                        <button style="width:50px; " class="btn btn-outline-success" type="button" name="editinfo"><a
                        href="{{url('/EditBasicInfo')}}">Edit</a></button>
                    </div>
                    <div class="panel-body"><b>Name: </b><span>{{$user->name}}</span></div>
                    <div class="panel-footer"><b>University ID: </b><span>{{$user->I_SID}}</span></div>
                    <div class="panel-body"><b>Phone: </b><span>{{$user->I_phone}}</span></div>
                    <div class="panel-footer"><b>Gender: </b><span>{{$user->I_gender}}</span></div>
                    <div class="panel-body"><b>DOB: </b><span>{{$user->I_dob}}</span></div>
                    <div class="panel-footer"><b>Department: </b><span>{{$user->department()}}</span></div>
                    <div class="panel-body"><b>E-mail: </b><span>{{$user->email}}</span></div>
                </div>
            </div>
{{--            <div class="col-lg-6 col-md-6 col-sm-6 " data-scroll-reveal="enter from the bottom after 0.4s">--}}
{{--                <img class="img-responsive" src="assets/img/faculty-portal.png" width="400" height="400"/>--}}
{{--            </div>--}}
        </div>
        <!-- INFO SECTION END-->
        <hr>

{{--        <div id="faculty-se">--}}
{{--            <div class="container set-pad">--}}
{{--                <div class="row text-center">--}}
{{--                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">--}}
{{--                        <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">Courses--}}
{{--                            Teaching</h1>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--/.HEADER LINE END-->--}}
{{--                @php $courses = Auth::guard('instructor')->user()->courses()->get() @endphp--}}
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
{{--        <!-- FACULTY SECTION END-->--}}
{{--    </div>--}}

    </div>
        @endsection

@section('script')
    <script>
        @if (session('success'))
        swal(
            'Done',
            'Profile updated successfully.',
            'success'
        );
        @endif


    </script>
@endsection