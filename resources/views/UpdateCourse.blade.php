@extends('layouts.master-layout');
@section('css')
    <style>

    </style>
@endsection


@section('content')

    <div id="course-sec" class="container set-pad">
        <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">Update Courses</h1>
            </div>
        </div>
        <!--/.HEADER LINE END-->

        <ul class="breadcrumb" data-scroll-reveal="enter from the bottom after 0.4s">
            <li>Portal</li>
            <li>Manage Courses</li>
            <li>Update Courses</li>
        </ul>
        <!--/.BREADCRUMB END-->
        @php $cs = \App\Course::all() @endphp

        <div id="Student-sect">
            <div class="container set-pad">

                <div class="row" data-scroll-reveal="enter from the bottom after 0.4s">
                    <form style="width:800px; padding-left:350px;" method="post"
                          action="{{url('student/course/upload')}}">
                        {{csrf_field()}}
                        <div class="form-group">
                        </div>
                        <div class="form-group">
                            <label for="Course">Course: </label>
                            <select id="Select" name="course" class="form-control">
                                @forelse($cs as $c)
                                    <option value="{{$c->id}}">{{$c->name}}</option>
                                @empty
                                @endforelse

                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block btn-lg">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        @if (session('success'))
        swal(
            'Done',
            'Course selected successfully.',
            'success'
        );
        @endif
    </script>
@endsection