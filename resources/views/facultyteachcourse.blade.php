@extends('layouts.master-layout')


@section('content')

    <hr>

<div id="faculty-se">
    <div class="container set-pad">
        <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">Courses
                    Teaching</h1>
            </div>
        </div>
        <!--/.HEADER LINE END-->
        @php $courses = Auth::guard('instructor')->user()->courses()->get() @endphp
        <div class="row" data-scroll-reveal="enter from the bottom after 0.4s">

            <table class="table table-bordered table-active" data-scroll-reveal="enter from the bottom after 0.3s">
                <thead>
                <tr>
                    <th>Course Name</th>
                    <th>Semester</th>
                </tr>
                </thead>
                <tbody>
                @forelse($courses as $course)
                    <tr>
                        <td><a style="color: lightcoral"; href="{{url('Course/'.$course->id)}}"><h4>{{$course->name}}</h4></a></td>
                        <td>{{$course->semester->name}}</td>
                    </tr>
                @empty
                    <p>No courses assigned yet</p>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

    @endsection