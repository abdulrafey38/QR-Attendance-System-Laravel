@extends('layouts.master-layout')
@section('css')
    <style>

    </style>
@endsection


@section('content')
    <div id="course-sec" class="container set-pad">
{{--        <div class="row text-center">--}}
{{--            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">--}}
{{--                <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">Enrolled Courses</h1>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!--/.HEADER LINE END-->

        <!--/.BREADCRUMB END-->

        <div id="Student-sect">
            <div class="container set-pad">
                <div class="row text-center">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                        <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">Select
                            Courses</h1>
                    </div>
                </div>
                <!--/.HEADER LINE END-->

                <div class="row" data-scroll-reveal="enter from the bottom after 0.4s">
                    {{--<a style="width:50px; " class="btn btn-primary" type="button" name="editinfo"--}}
                    {{--href="{{url('UpdateCourse')}}">Add--}}
                    {{--</a>--}}
                    <table class="table table-striped" data-scroll-reveal="enter from the bottom after 0.3s">
                        <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Semester</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user->courses() as $value)
                            <tr>
                                <td>{{$value->name}}</td>
                                <td>{{$value->semester->name}}</td>
                                <td><a style="width:80px;" href="{{url('student-check-attendance/'.$value->id)}}"
                                       class="btn btn-success btn-sm">View</a>

                                </td>
                            </tr>
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

        @if (session('deleted'))
        swal(
            'Done',
            'Course deleted successfully.',
            'success'
        );
        @endif
    </script>
@endsection