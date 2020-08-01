@extends('layouts.master-layout');
@section('css')
    <style>

    </style>
@endsection


@section('content')
    <div id="course-sec" class="container set-pad">

        <!--/.BREADCRUMB END-->

        <div id="Student-sect">
            <div class="container set-pad">
                <div class="row text-center">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                        <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">Select Course</h1>
                    </div>
                </div>
                <!--/.HEADER LINE END-->

                <div class="row" data-scroll-reveal="enter from the bottom after 0.4s">
                    <table id="datatables" class="table table-bordered table-active"
                           data-scroll-reveal="enter from the bottom after 0.3s">
                        <thead>
                        <tr>
                            <th>Course Name</th>

                            <th>Section</th>
                            <th></th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $value)
                            <tr>
                                <td>{{$value->course->name}}</td>
                                <td>
                                    <form action="" id="markForm{{$value->id}}" method="get">
                                        <div class="input-container form-group">
                                            <label for="fa{{$value->id}}"></label>
                                            <select name="section_id" id="fa{{$value->id}}" class="form-control"
                                                    required>
                                                {{--<option selected disabled>Select Section</option>--}}
                                                <option selected  value="{{$value->id}}">{{$value->sectionName->name}}</option>
                                            </select>
                                        </div>
                                        <input type="hidden" name="course_id" value="{{$value->course_id}}">
                                    </form>
                                </td>
                                <td></td>
                                <td>
                                    <button class="btn btn-success btn-sm"
                                            onclick="$('#markForm{{$value->id}}').attr('action','mark-attendance');
                                                    if($('#fa{{$value->id}}').val() == null) {alert('Please select Section'); return false}
                                                    $('#markForm{{$value->id}}').submit();  "
                                    >Mark Attendance
                                    </button>
                                    <button class="btn btn-info btn-sm"
                                            onclick="$('#markForm{{$value->id}}').attr('action','view-attendance');
                                                    if($('#fa{{$value->id}}').val() == null) {alert('Please select Section'); return false}
                                                    $('#markForm{{$value->id}}').submit();  ">View Students
                                    </button>
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
    <script src="{{asset('js/year-select.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#datatables').DataTable({
                ordering: false,
            });
        });

        @if (session('successMark'))
        swal(
            'Done',
            'Attendance Mark successfully.',
            'success'
        );
        @endif
    </script>
@endsection