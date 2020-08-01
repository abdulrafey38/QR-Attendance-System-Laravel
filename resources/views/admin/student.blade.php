@extends('layouts.admin-layout')

@section('content')
    <main style="margin: 4rem">
        @include('admin.alert')
        <div class="row">
            <div class="col-md-2 m-auto mb-3">
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample"
                        aria-expanded="false" aria-controls="collapseExample">
                    Add New Student
                </button>
            </div>
        </div>
        <div class="collapse mt-3" id="collapseExample">
            <div class="card card-body">
                <br>
                <div class="col-md-8 m-auto">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h4>Add Student</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{url('/student/store')}}" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Enter Name" required
                                           class="form-control" pattern="[A-Za-z\s]+"
                                           title="Name only contain alphabetics">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="s_id" required placeholder="Enter ID, must be FA**-***-"
                                           class="form-control">
                                </div>
                                <div class="form-group">

                                    <input type="password" name="password" required placeholder="Enter Password"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" required placeholder="Enter Email"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="number" name="phone_number" required placeholder="Enter Phone Number"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="number" name="badge"
                                           value="2018"
                                           required placeholder="Student badge"
                                           class="form-control yearselect">
                                </div>
                                <div class="form-group">
                                    <input name="DOB"  type="date" class="form-control "required placeholder="Enter DOB"
                                           required="required"
                                           placeholder="Your Date"/>
                                </div>

                                <div class="form-group">
                                    <select name="gender" class="form-control">
                                        <option disabled selected>Choose Gender</option>
                                        <option value="MALE">MALE</option>
                                        <option VALUE="FEMALE">FEMALE</option>
                                    </select>
                                </div>
                                @php $depts = \App\Department::all() @endphp
                                <div class="form-group">
                                    <select name="department" class="form-control">
                                        <option disabled selected>Select Department</option>
                                        @forelse($depts as $dept)
                                            <option value="{{$dept->id}}">{{$dept->name}}</option>
                                        @empty
                                            <p>NO COURSE to choose</p>
                                        @endforelse
                                    </select>
                                </div>
                                @php $courses = \App\Course::all() @endphp

                                <div class="form-group">
                                    <button class="btn btn-default btn-block" type="button" data-toggle="collapse"
                                            data-target="#collapseExample2"
                                            aria-expanded="false" aria-controls="collapseExample2">
                                        Select Course for Student
                                    </button>
                                </div>
                                <div class="form-group">
                                    <div class="collapse mt-3" id="collapseExample2">
                                        <div class="card card-body">
                                            <div class="form-group row">
                                                <div class="col-sm-10">
                                                    @forelse($courses as $key => $course)
                                                        <div class="i-checks" style="display: flex!important;">
                                                            <div class="form-group"
                                                                 style="width: 50%;margin-bottom: 1.5rem">
                                                                <input id="{{$course->id}}" name="courses[{{$key}}][id]"
                                                                       type="checkbox" value="{{$course->id}}"
                                                                       class="form-control-custom">
                                                                <label for="{{$course->id}}">{{$course->name}}</label>
                                                            </div>

                                                            <select name="courses[{{$key}}][section_id]"
                                                                    class="form-control"
                                                                    style="margin-left: 2rem">
                                                                <option disabled selected>Select Section</option>
                                                                @forelse($course->sectionsEnrolled as $section)
                                                                    <option value="{{$section->id}}">{{$section->sectionName->name}}</option>
                                                                @empty
                                                                    <option disabled>No Section Assigned yet</option>
                                                                @endforelse
                                                            </select>
                                                        </div>
                                                    @empty
                                                        <p>NO COURSE to choose</p>
                                                    @endforelse
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="file" name="image"  required placeholder="Select image"
                                           class="form-control">
                                </div>

                                <div class="form-group mt-5">
                                    <button type="submit" class="btn btn-primary btn-block">Add Student</button>
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
                        <h4>All Student</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>ID</th>
                                    <th>Phone Number</th>
                                    <th>Gender</th>
                                    <th>Department</th>
                                    <th>Courses</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                @php $count = 0; @endphp
                                <tbody>
                                @forelse($students as $student)
                                    <tr>
                                        <th scope="row">{{ ++$count }}</th>
                                        <td>{{$student->name}}</td>
                                        <td>{{$student->email}}</td>
                                        <td>{{$student->S_UID}}</td>
                                        <td>{{$student->S_phone}}</td>
                                        <td>{{$student->S_gender}}</td>
                                        <td>{{$student->department()}}</td>
                                        <td><a class=" btn btn-success dropdown-toggle" href="#" role="button"
                                               id="dropdownMenuLink"
                                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                @foreach($student->courses() as $c)
                                                    <a class="dropdown-item" href="#">{{$c->name}}</a>
                                                @endforeach
                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{url('/edit/student/'.$student->id)}}"><i
                                                        class="fa fa-pencil text-success"></i></a>
                                            <a href="#"
                                               onclick="deleteConfirm('{{url('/delete/student/'.$student->id)}}')"><i
                                                        class="fa fa-close text-danger"></i></a>
                                        </td>

                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7"> No student found</td>
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
    <script src="{{asset('js/year-select.js')}}"></script>
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
            $('#studentNav').addClass('active')
        })

        $('.yearselect').yearselect({
            start: 2010,
            end: 2022
        });

    </script>
@endsection