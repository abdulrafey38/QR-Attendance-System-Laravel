@extends('layouts.admin-layout')

@section('content')
    <main style="margin: 4rem">
        @include('admin.alert')
        <div class="row">
            <div class="col-md-2 m-auto mb-3">
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample"
                        aria-expanded="false" aria-controls="collapseExample">
                    Add New Course
                </button>
            </div>
        </div>
        <div class="collapse mt-3" id="collapseExample">
            <div class="card card-body">
                <br>
                <div class="col-md-8 m-auto">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h4>Add Course</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{url('/course/store')}}">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Enter Name" required
                                           class="form-control" pattern="[A-Za-z\s]+"
                                           title="Name only contain alphabetics">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="credit_hour" required placeholder="Credit hour"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="course_code" required placeholder="Course code"
                                           class="form-control">
                                </div>
                                @php $depts = \App\Semester::all() @endphp
                                <div class="form-group">
                                    <select name="semester" class="form-control">
                                        <option disabled selected>Select Semester</option>
                                        @forelse($depts as $dept)
                                            <option value="{{$dept->id}}">{{$dept->name.'/'.$dept->program()}}</option>
                                        @empty
                                            <p>No Semester to choose</p>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="form-group mt-5">
                                    <button type="submit" class="btn btn-primary btn-block">Add Course</button>
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
                        <h4>All Courses</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Code</th>
                                    <th>Semester</th>
                                    <th>Program</th>
                                    <th>Credit Hour</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                @php $count = 0; @endphp
                                <tbody>
                                @forelse($courses as $course)
                                    <tr>
                                        <th scope="row">{{ ++$count }}</th>
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->course_code}}</td>
                                        <td>{{$course->semester()->first()->name}}</td>
                                        <td>{{$course->semester->program()}}</td>
                                        <td>{{$course->credit_hour}}</td>
                                        <td>
                                            <a href="#"
                                               onclick="deleteConfirm('{{url('/delete/course/'.$course->id)}}')"><i
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
            $('#courseNav').addClass('active')
        })

    </script>
@endsection