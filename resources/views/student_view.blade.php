@extends('layouts.master-layout');
@section('css')
    <style>
        h1:after {
            width: 250px !important;
        }
    </style>
@endsection


@section('content')
    <div id="course-sec" class="container set-pad" style="margin-bottom: 5rem!important;">
        <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line"> {{$course->name}}
                    - {{$section->sectionName->name}}</h1>
            </div>
        </div>

        <!--/.BREADCRUMB END-->

        <div id="Student-sect">
            <div class="container set-pad">
                <div class="row text-center">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                        <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">Select
                            Student</h1>
                    </div>
                </div>
                <!--/.HEADER LINE END-->

                <div class="row" data-scroll-reveal="enter from the bottom after 0.4s">

                    <table id="datatables" class="table-bordered table table-active"
                           data-scroll-reveal="enter from the bottom after 0.3s">
                        <thead>
                        <tr>
                            <th>Student</th>
                            <th>Email</th>
                            <th>Semester</th>
                            <th></th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($section->students as $value)
                            <tr>
                                <td>{{$value->name}}</td>
                                <td>{{$value->email}}</td>
                                <td>
                                    {{$course->semester->name}}
                                </td>
                                <td></td>
                                <td>
                                    <a href="{{url('student-attendance-show/'.$value->id.'/'
                                    .$section->course_id.'/'.$section->id)}}"
                                       class="btn btn-info btn-sm">View Attendance
                                    </a>
                                </td>
                            </tr>
                        @empty
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="{{asset('js/year-select.js')}}"></script>
    <script>
        $('.yearselect').yearselect({
            start: 2010,
            end: 2022
        });
        $(document).ready(function () {
            $('#datatables').DataTable({
                ordering: false,
            });
        });
    </script>
@endsection