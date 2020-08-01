@extends('layouts.master-layout');
@section('css')
    <style>
        .button {
            width: unset !important;
        }
    </style>
@endsection


@section('content')

    <div id="course-sec" class="container set-pad">
        <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">Course Related
                    Material</h1>
            </div>
        </div>
        <!--/.HEADER LINE END-->
        <ul class="breadcrumb" data-scroll-reveal="enter from the bottom after 0.4s">
            <li>Portal</li>
            <li>Course</li>
            <li>Course Related Material</li>
        </ul>
        <!--/.BREADCRUMB END-->

        <div id="Student-sect">
            <div class="container set-pad">
                <div class="row text-center">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                        <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">Slides</h1>
                    </div>
                </div>
                <!--/.HEADER LINE END-->

                <div class="row" data-scroll-reveal="enter from the bottom after 0.4s">
                    <a href="{{url('UpdateCourseRelatedMaterial/'.$course_id)}}" style="width:50px; "
                       class="btn btn-primary"
                       type="button" name="editinfo">Add
                    </a>
                    <table class="table table-striped" data-scroll-reveal="enter from the bottom after 0.3s">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Semester</th>
                            <th>Course</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>File</th>
                            <th>Modify</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data1 as $value1)

                            @if(!strcmp($value1->CRM_type,"Slides"))
                                <tr>
                                    <td>{{$value1->CRM_Name}}</td>
                                    <td>{{$value1->CRM_type}}</td>
                                    <td>{{$value1->course->semester->name}}</td>
                                    <td>{{$value1->course->name}}</td>
                                    <td>{{$value1->CRM_des}}</td>
                                    <td>{{\Carbon\Carbon::parse($value1->created_at)->toFormattedDateString()}}</td>
                                    <td><a href="{{asset($value1->CRM_file)}}" style="width:80px;"
                                           class="fa fa-file"></a></td>
                                    <td>
                                        <a onclick="deleteConfirm('{{url('crm/delete/'.$value1->CRM_ID)}}')"
                                           style="width:80px;"
                                           class="btn btn-danger">Delete</a>
                                        <a href="{{url('crm/edit/'.$value1->CRM_ID)}}" style="width:80px;"
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
        <!-- SLIDES SECTION END-->

        <hr>

        <div id="Student-sect1">
            <div class="container set-pad">
                <div class="row text-center">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                        <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">References</h1>
                    </div>
                </div>
                <!--/.HEADER LINE END-->

                <div class="row" data-scroll-reveal="enter from the bottom after 0.4s">
                    <a href="{{url('UpdateCourseRelatedMaterial/'.$course_id)}}" style="width:50px; "
                       class="btn btn-primary"
                       type="button" name="editinfo">Add
                    </a>
                    <table class="table table-striped" data-scroll-reveal="enter from the bottom after 0.3s">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Semester</th>
                            <th>Course</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>File</th>
                            <th>Modify</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data1 as $value1)
                            @if(!strcmp($value1->CRM_type,"References"))
                                <tr>
                                    <td>{{$value1->CRM_Name}}</td>
                                    <td>{{$value1->CRM_type}}</td>
                                    <td>{{$value1->course->semester->name}}</td>
                                    <td>{{$value1->course->name}}</td>
                                    <td>{{$value1->CRM_des}}</td>
                                    <td>{{\Carbon\Carbon::parse($value1->created_at)->toFormattedDateString()}}</td>
                                    <td><a href="{{asset($value1->CRM_file)}}" style="width:80px;"
                                           class="fa fa-file"></a></td>
                                    <td>
                                        <a onclick="deleteConfirm('{{url('crm/delete/'.$value1->CRM_ID)}}')"
                                           style="width:80px;"
                                           class="btn btn-danger">Delete</a>
                                        <a href="{{url('/crm/edit/'.$value1->CRM_ID)}}" style="width:80px;"
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
        <!-- REFERENCES SECTION END-->

        <hr>

        <div id="Student-sect2">
            <div class="container set-pad">
                <div class="row text-center">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                        <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">Books</h1>
                    </div>
                </div>
                <!--/.HEADER LINE END-->

                <div class="row" data-scroll-reveal="enter from the bottom after 0.4s">
                    <a href="{{url('UpdateCourseRelatedMaterial/'.$course_id)}}" style="width:50px; "
                       class="btn btn-primary"
                       type="button" name="editinfo"
                    >Add
                    </a>
                    <table class="table table-striped" data-scroll-reveal="enter from the bottom after 0.3s">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Semester</th>
                            <th>Course</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>File</th>
                            <th>Modify</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data1 as $value1)
                            @if(!strcmp($value1->CRM_type,"Books"))
                                <tr>
                                    <td>{{$value1->CRM_Name}}</td>
                                    <td>{{$value1->CRM_type}}</td>
                                    <td>{{$value1->course->semester->name}}</td>
                                    <td>{{$value1->course->name}}</td>
                                    <td>{{$value1->CRM_des}}</td>
                                    <td>{{\Carbon\Carbon::parse($value1->created_at)->toFormattedDateString()}}</td>
                                    <td><a href="{{asset($value1->CRM_file)}}" style="width:80px;"
                                           class="fa fa-file"></a></td>
                                    <td>
                                        <a onclick="deleteConfirm('{{url('crm/delete/'.$value1->CRM_ID)}}')"
                                           style="width:80px;"
                                           class="btn btn-danger">Delete</a>
                                        <a href="{{url('/crm/edit/'.$value1->CRM_ID)}}" style="width:80px;"
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
        <!-- BOOKS SECTION END-->

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
                    <a href="{{url('UpdateCourseRelatedMaterial/'.$course_id)}}" style="width:50px; "
                       class="btn btn-primary"
                       type="button" name="editinfo">Add
                    </a>
                    <table class="table table-striped" data-scroll-reveal="enter from the bottom after 0.3s">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Semester</th>
                            <th>Course</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>File</th>
                            <th>Modify</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($data1 as $value1)

                            @if(!strcmp($value1->CRM_type,"Miscellaneous"))
                                <tr>
                                    <td>{{$value1->CRM_Name}}</td>
                                    <td>{{$value1->CRM_type}}</td>
                                    <td>{{$value1->course->semester->name}}</td>
                                    <td>{{$value1->course->name}}</td>
                                    <td>{{$value1->CRM_des}}</td>
                                    <td>{{\Carbon\Carbon::parse($value1->created_at)->toFormattedDateString()}}</td>
                                    <td><a href="{{asset($value1->CRM_file)}}" style="width:80px;"
                                           class="fa fa-file"></a></td>
                                    <td>
                                        <a onclick="deleteConfirm('{{url('crm/delete/'.$value1->CRM_ID)}}')"
                                           style="width:80px;"
                                           class="btn btn-danger">Delete</a>
                                        <a href="{{url('/crm/edit/'.$value1->CRM_ID)}}" style="width:80px;"
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
        <!-- MISCELLANEOUS SECTION END-->
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