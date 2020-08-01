@extends('layouts.admin-layout')

@section('content')
    <main style="margin: 4rem">
        @include('admin.alert')
        <div class="row">
            <div class="col-md-2 m-auto mb-3">
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample"
                        aria-expanded="false" aria-controls="collapseExample">
                    Assign Teacher
                </button>
            </div>
        </div>
        <div class="collapse mt-3" id="collapseExample">
            <div class="card card-body">
                <br>
                <div class="col-md-8 m-auto">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h4>Assign Teacher</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{url('/add/section')}}">
                                {{csrf_field()}}

                                @php
                                    $sections = \App\Section::all();
                                    $courses = \App\Course::all();
                                    $faculties = \App\Instructor::all();
                                @endphp

                                <div class="form-group">
                                    <select name="section_id" class="form-control">
                                        <option disabled selected>Select Section</option>
                                        @forelse($sections as $section)
                                            <option value="{{$section->id}}">{{$section->name}}</option>
                                        @empty
                                            <p>No Section to choose</p>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="course_id" class="form-control">
                                        <option disabled selected>Select Course</option>
                                        @forelse($courses as $course)
                                            <option value="{{$course->id}}">{{$course->name}}</option>
                                        @empty
                                            <p>No Course to choose</p>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="faculty_id" class="form-control">
                                        <option disabled selected>Assign Teacher</option>
                                        @forelse($faculties as $faculty)
                                            <option value="{{$faculty->id}}">{{$faculty->name}}</option>
                                        @empty
                                            <p>No Faculty to choose</p>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="form-group mt-5">
                                    <button type="submit" class="btn btn-primary btn-block">Assign</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row mt-5">
            <div class="col-md-12 m-auto">

                <div class="card">
                    <div class="card-header">
                        <h4>Already Assigned</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Course</th>
                                    <th>Teacher</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                @php $count = 0;
                                $sections = \App\SectionCourse::all();
                                @endphp
                                <tbody>
                                @forelse($sections as $section)
                                    <tr>
                                        <th scope="row">{{ ++$count }}</th>
                                        <td>{{$section->sectionName->name}}</td>
                                        <td>{{$section->course->name}}</td>
                                        <td>@if($section->faculty){{$section->faculty->name}} @endif</td>
                                        <td>
                                        <a href="#"
                                        onclick="deleteConfirm('{{url('/delete/sectioncourse/'.$section->id)}}')"><i
                                        class="fa fa-close text-danger"></i></a>
                                        </td>

                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7"> No faculty found</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
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
                confirmButtonText: 'Yes, delete it!'
            }).then(function (result) {
                if (result.value) {
                    window.location.href = url;
                }
            })
        }

        $(function () {
            $('#sectionNav').addClass('active')
        })

    </script>
@endsection