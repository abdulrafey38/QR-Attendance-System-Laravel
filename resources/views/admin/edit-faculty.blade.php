@extends('layouts.admin-layout')

@section('content')
    <main style="margin: 4rem">

        <div class=" mt-3">
            <div class="card card-body">
                <br>
                <div class="col-md-8 m-auto">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h4>Update Faculty</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{url('/faculty/edit/'.$faculty->id)}}"
                                  enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <input type="text" name="name" value="{{$faculty->name}}" placeholder="Enter Name"
                                           required
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" value="{{$faculty->I_SID}}" name="f_id" required
                                           placeholder="Enter ID, must be FAC-***" class="form-control">
                                </div>
                                <div class="form-group">
                                </div>
                                <div class="form-group">
                                    <input type="email" value="{{$faculty->email}}" name="email" required
                                           placeholder="Enter Email"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="number" name="phone_number" value="{{$faculty->I_phone}}" required
                                           placeholder="Enter Phone Number"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <select name="gender" class="form-control">
                                        <option @if($faculty->I_gender==='MALE') selected value="MALE">MALE
                                        </option>
                                        <option @else  selected @endif VALUE="FEMALE">FEMALE</option>
                                    </select>
                                </div>
                                @php $depts = \App\Department::all() @endphp
                                <div class="form-group">
                                    <select name="department" class="form-control">
                                        <option disabled>Select Department</option>
                                        @forelse($depts as $dept)
                                            <option @if($dept->id=== $faculty->I_Dep) selected
                                                    @endif     value="{{$dept->id}}">{{$dept->name}}</option>
                                        @empty
                                            <p>NO COURSE to choose</p>
                                        @endforelse
                                    </select>
                                </div>
                                @php $courses = \App\Course::all() @endphp

                                {{--<div class="form-group">--}}
                                    {{--<button class="btn btn-default btn-block" type="button" data-toggle="collapse"--}}
                                            {{--data-target="#collapseExample2"--}}
                                            {{--aria-expanded="false" aria-controls="collapseExample2">--}}
                                        {{--Select Course for Teacher--}}
                                    {{--</button>--}}
                                {{--</div>--}}
                                {{--<div class="form-group">--}}
                                    {{--<div class="collapse mt-3" id="collapseExample2">--}}
                                        {{--<div class="card card-body">--}}
                                            {{--<div class="form-group row">--}}
                                                {{--<div class="col-sm-10">--}}
                                                    {{--@forelse($courses as $course)--}}
                                                        {{--<div class="i-checks">--}}
                                                            {{--<input id="{{$course->id}}" name="courses[]"--}}
                                                                   {{--@foreach($faculty->courses as $cs)--}}
                                                                   {{--@if($cs->id === $course->id)--}}
                                                                   {{--checked--}}
                                                                   {{--@endif--}}
                                                                   {{--@endforeach--}}
                                                                   {{--type="checkbox" value="{{$course->id}}"--}}
                                                                   {{--class="form-control-custom">--}}
                                                            {{--<label for="{{$course->id}}">{{$course->name}}</label>--}}
                                                        {{--</div>--}}
                                                    {{--@empty--}}
                                                        {{--<p>NO COURSE to choose</p>--}}
                                                    {{--@endforelse--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <div class="form-group">
                                    <input type="file" name="image"  placeholder="Select image"
                                           class="form-control">
                                </div>
                                <div class="form-group mt-5">
                                    <button type="submit" class="btn btn-primary btn-block">Update Faculty</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection