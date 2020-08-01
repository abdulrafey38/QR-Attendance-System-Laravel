@extends('layouts.admin-layout')

@section('content')
    <main style="margin: 4rem">

        <div class=" mt-3">
            <div class="card card-body">
                <br>
                <div class="col-md-8 m-auto">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h4>Update Student</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{url('/student/store/'.$user->id)}}"
                                  enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <input type="text" name="name" value="{{$user->name}}" placeholder="Enter Name"
                                           required
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" value="{{$user->S_UID}}" name="u_id" required
                                           placeholder="Enter ID ,must be FA**-***-" class="form-control">
                                </div>
                                <div class="form-group">
                                </div>
                                <div class="form-group">
                                    <input type="email" value="{{$user->email}}" name="email" required
                                           placeholder="Enter Email"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="number" name="phone_number" value="{{$user->S_phone}}" required
                                           placeholder="Enter Phone Number"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="number" name="badge"
                                           value="{{$user->badge}}"
                                           required placeholder="Student badge"
                                           class="form-control yearselect">
                                </div>
                                <div class="form-group">
                                    <select name="gender" class="form-control">
                                        <option @if($user->U_gender==='MALE') selected @endif value="MALE">MALE
                                        </option>
                                        <option @if($user->U_gender==='FEMALE') selected @endif VALUE="FEMALE">FEMALE
                                        </option>
                                    </select>
                                </div>
                                @php $depts = \App\Department::all() @endphp
                                <div class="form-group">
                                    <select name="department" class="form-control">
                                        <option disabled>Select Department</option>
                                        @forelse($depts as $dept)
                                            <option @if($dept->id=== $user->U_Dep) selected
                                                    @endif     value="{{$dept->id}}">{{$dept->name}}</option>
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
                                                                       @foreach($user->courses() as $cs)
                                                                       @if($cs->id === $course->id)
                                                                       checked
                                                                       @endif
                                                                       @endforeach
                                                                       type="checkbox" value="{{$course->id}}"
                                                                       class="form-control-custom">
                                                                <label for="{{$course->id}}">{{$course->name}}</label>
                                                            </div>

                                                            <select name="courses[{{$key}}][section_id]"
                                                                    class="form-control"
                                                                    style="margin-left: 2rem">
                                                                <option disabled selected>Select Section</option>
                                                                @forelse($course->sectionsEnrolled as $section)
                                                                    <option @foreach($user->sections as $c)
                                                                            @if($c->id === $section->id && $course->id === $c->course_id)
                                                                            selected
                                                                            @endif
                                                                            @endforeach value="{{$section->id}}">{{$section->sectionName->name}}</option>
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
                                    <input type="file" name="image" placeholder="Select image"
                                           class="form-control">
                                </div>
                                <div class="form-group mt-5">
                                    <button type="submit" class="btn btn-primary btn-block">Update Student</button>
                                </div>
                            </form>
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

        $('.yearselect').yearselect({
            start: 2010,
            end: 2022

        });

    </script>
@endsection