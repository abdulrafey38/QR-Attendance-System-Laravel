@extends('layouts.master-layout');
@section('css')
    <style>

    </style>
@endsection


@section('content')

    <div id="course-sec" class="container set-pad">
        <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">Update Course
                    Announcement</h1>
            </div>
        </div>
        <!--/.HEADER LINE END-->

        <ul class="breadcrumb" data-scroll-reveal="enter from the bottom after 0.4s">
            <li>Portal</li>
            <li>Course</li>
            <li>Update Course Announcement</li>
        </ul>
        <!--/.BREADCRUMB END-->

        <div id="Student-sect">
            <div class="container set-pad">

                <div class="row" data-scroll-reveal="enter from the bottom after 0.4s">
                    <form method="POST" action="{{url('update_CA/'.$ca->CA_ID)}}"
                          style="width:800px; padding-left:350px;">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="Name">Name: </label>
                            <input name="name" value="{{$ca->CA_Name}}" type="text" class="form-control name"
                                   required="required"
                                   placeholder="Name of Course Related Material"/>
                        </div>
                        <div class="form-group">
                            <label for="Description">Description: </label>
                            <textarea name="Description" class="form-control" style="min-height: 150px;"
                                      placeholder="Description" maxlength="100">{{$ca->CA_des}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="date">Deadline: </label>
                            <input name="date" type="date" class="form-control " required="required" min="2018-01-02"/>
                        </div>
                        <div class="form-group">
                            <label for="file">File: </label>
                            <input name="file" type="file" class="form-control "/>
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

    </script>
@endsection