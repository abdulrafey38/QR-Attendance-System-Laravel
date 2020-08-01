@extends('layouts.master-layout');
@section('css')
    <style>

    </style>
@endsection


@section('content')

    <div id="course-sec" class="container set-pad">
        <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">Course Announcement</h1>
            </div>
        </div>
        <!--/.HEADER LINE END-->

        <ul class="breadcrumb" data-scroll-reveal="enter from the bottom after 0.4s">
            <li>Portal</li>
            <li>Course</li>
            <li>Course Announcement</li>
        </ul>
        <!--/.BREADCRUMB END-->

        <div id="Student-sect1">
            <div class="container set-pad">
                <div class="row text-center">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                        <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">Quizes</h1>
                    </div>
                </div>
                <!--/.HEADER LINE END-->

                <div class="row" data-scroll-reveal="enter from the bottom after 0.4s">
                    <a style="width:50px; " class="btn btn-primary" type="button" name="editinfo"
                       href="{{url('UpdateCourseAnnouncement1/'.$course_id)}}">Add
                    </a>
                    <table class="table table-striped" data-scroll-reveal="enter from the bottom after 0.3s">
                        <thead>

                        <tr>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Semester</th>
                            <th>Course</th>
                            <th>Description</th>
                            <th>Deadline</th>
                            <th>File</th>
                            <th>Modify</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $value1)

                            @if(!strcmp($value1->CA_type,"Quiz"))
                                <tr>
                                    <td>{{$value1->CA_Name}}</td>
                                    <td>{{$value1->CA_type}}</td>
                                    <td>{{$value1->course->semester->name}}</td>
                                    <td>{{$value1->course->name}}</td>
                                    <td>{{$value1->CA_des}}</td>
                                    <td>{{\Carbon\Carbon::parse($value1->created_at)->toFormattedDateString()}}</td>
                                    <td><a href="{{asset($value1->CA_file)}}" style="width:80px;"
                                           class="fa fa-file"></a></td>
                                    <td>
                                        <a onclick="deleteConfirm('{{url('/DeleteCourseAnnouncement/'.$value1->CA_ID)}}')"
                                           style="width:80px;"
                                           class="btn btn-danger">Delete</a>
                                        <a href="{{url('edit_CA/'.$value1->CA_ID)}}" style="width:80px;"
                                           class="btn btn-info">Edit</a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Quiz SECTION END-->

        <hr>
        <div id="Student-sect2">
            <div class="container set-pad">
                <div class="row text-center">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                        <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">Assignments</h1>
                    </div>
                </div>
                <!--/.HEADER LINE END-->

                <div class="row" data-scroll-reveal="enter from the bottom after 0.4s">
                    <a style="width:50px; " class="btn btn-primary" type="button" name="editinfo"
                       href="{{url('UpdateCourseAnnouncement1/'.$course_id)}}">Add
                    </a>
                    <table class="table table-striped" data-scroll-reveal="enter from the bottom after 0.3s">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Semester</th>
                            <th>Course</th>
                            <th>Description</th>
                            <th>Deadline</th>
                            <th>File</th>
                            <th>Modify</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $value1)


                            @if(!strcmp($value1->CA_type,"Assignment"))
                                <tr>
                                    <td>{{$value1->CA_Name}}</td>
                                    <td>{{$value1->CA_type}}</td>
                                    <td>{{$value1->course->semester->name}}</td>
                                    <td>{{$value1->course->name}}</td>
                                    <td>{{$value1->CA_des}}</td>
                                    <td>{{\Carbon\Carbon::parse($value1->created_at)->toFormattedDateString()}}</td>
                                    <td><a href="{{asset($value1->CA_file)}}" style="width:80px;"
                                           class="fa fa-file"></a></td>
                                    <td>
                                        <a onclick="deleteConfirm('{{url('/DeleteCourseAnnouncement/'.$value1->CA_ID)}}')"
                                           style="width:80px;"
                                           class="btn btn-danger">Delete</a>
                                        <a href="{{url('edit_CA/'.$value1->CA_ID)}}" style="width:80px;"
                                           class="btn btn-info">Edit</a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- ASSIGNMENT SECTION END-->

        <hr>

        <div id="Student-sect3">
            <div class="container set-pad">
                <div class="row text-center">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                        <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">Miscellaneous</h1>
                    </div>
                </div>
                <!--/.HEADER LINE END-->

                <div class="row" data-scroll-reveal="enter from the bottom after 0.4s">
                    <a style="width:50px; " class="btn btn-primary" type="button" name="editinfo"
                       href="{{url('UpdateCourseAnnouncement1'.$course_id)}}">Add
                    </a>
                    <table class="table table-striped" data-scroll-reveal="enter from the bottom after 0.3s">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Semester</th>
                            <th>Course</th>
                            <th>Description</th>
                            <th>Deadline</th>
                            <th>File</th>
                            <th>Modify</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $value1)

                            @if(!strcmp($value1->CA_type,"Miscellaneous"))
                                <tr>
                                    <td>{{$value1->CA_Name}}</td>
                                    <td>{{$value1->CA_type}}</td>
                                    <td>{{$value1->course->semester->name}}</td>
                                    <td>{{$value1->course->name}}</td>
                                    <td>{{$value1->CA_des}}</td>
                                    <td>{{\Carbon\Carbon::parse($value1->created_at)->toFormattedDateString()}}</td>
                                    <td><a href="{{asset($value1->CA_file)}}" style="width:80px;"
                                           class="fa fa-file"></a></td>
                                    <td>
                                        <a onclick="deleteConfirm('{{url('/DeleteCourseAnnouncement/'.$value1->CA_ID)}}')"
                                           style="width:80px;"
                                           class="btn btn-danger">Delete</a>
                                        <a href="{{url('edit_CA/'.$value1->CA_ID)}}" style="width:80px;"
                                           class="btn btn-info">Edit</a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>

        function deleteConfirm(url) {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'delete it!'
            }).then(function (result) {
                if (result.value) {
                    window.location.href = url;
                }
            })
        }
    </script>
@endsection