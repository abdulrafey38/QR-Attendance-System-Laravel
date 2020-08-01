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
                <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line"> {{$student->name}}
                </h1>
            </div>
        </div>
        @php $perce = 0; @endphp
         @if(!empty($attendances[0])) @php $perce = ($attendances->where('attendance','P')->count()/$attendances->count()) *100; @endphp
        @endif
        <div id="Student-sect">
            <div class="container set-pad" style="margin-top: 5rem!important; margin-bottom: 3rem!important;">
                <div class="row text-center" data-scroll-reveal="enter from the bottom after 0.1s">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                        <div class="progress">
                            <div class="progress-bar @if($perce <75) progress-bar-danger @else progress-bar-success @endif"
                                 role="progressbar" aria-valuenow="{{$perce}}"
                                 aria-valuemin="0" aria-valuemax="100" style="width:{{$perce}}%">
                                {{$perce}}%
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.HEADER LINE END-->

                <div class="row" data-scroll-reveal="enter from the bottom after 0.4s">

                    <table id="datatables" class="table table-active table-bordered "
                           data-scroll-reveal="enter from the bottom after 0.3s">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Attendance</th>
                            <th></th>
                            @auth('instructor')
                                <th>Action</th> @endauth
                        </tr>
                        </thead>
                        <tbody>
                        @php $count = 0; @endphp
                        @forelse($attendances as $value)
                            <tr>
                                <td>{{++$count}}</td>
                                <td>{{\Carbon\Carbon::parse($value->date)->format('d/m/y')}}</td>

                                <td>
                                    {{$value->attendance}}
                                </td>
                                <td></td>
                                @auth('instructor')
                                    <td>
                                        <a href="{{url('attendance/update/'.$value->id)}}"
                                           class="btn btn-info btn-sm"> @if($value->attendance ==='P') Mark Absent @else
                                                Mark Present @endif
                                        </a>
                                    </td> @endauth
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

        @if (session('pSuccess'))
        swal(
            'Done',
            'Attendance updated successfully.',
            'success'
        );
        @endif
    </script>
@endsection