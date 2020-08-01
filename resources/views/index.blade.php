@extends('layouts.master-layout');
@section('css')
    <style>
        .btn-width {
            width: 20rem !important;
            text-align: start;
        }
    </style>
@endsection
@section('content')
    <div class="home-sec" id="home">
        <div class="overlay">
            <div class="container">
                <div class="row text-center ">
                    <div class="col-lg-12  col-md-12 col-sm-12">
                        <div class="flexslider set-flexi" id="main-section">
                            <ul class="slides move-me">
                                <li>
                                    <h3>Each and Every Course</h3>
                                    <h1>Courses with Details</h1>
                                </li>
                                <li>
                                    <h3>Course Related Material/Announcements</h3>
                                    <h1>Faculity Semantic Approach</h1>
                                </li>
                                <li>
                                    <h3>Awesome Faculty/Student Portal</h3>
                                    <h1>Portal</h1>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--HOME SECTION END-->
    <div class="tag-line">
        <div class="container">
            <div class="row  text-center">
                <div class="col-lg-12  col-md-12 col-sm-12">
                    <h2 data-scroll-reveal="enter from the bottom after 0.1s">
                        <i class="fa fa-circle-o-notch"></i> WELCOME TO QR System<i
                                class="fa fa-circle-o-notch"></i></h2>
                </div>
            </div>
        </div>
    </div>
    <!--HOME SECTION TAG LINE END-->

    <div id="features-sec" class="container set-pad">
        <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                <h1 data-scroll-reveal="enter from the bottom after 0.2s" class="header-line">Feature List</h1>
            </div>
        </div>
        <!--/.HEADER LINE END-->

        <div class="row">
            <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                <div class="about-div">
                    <i class="fa fa-paper-plane-o fa-4x icon-round-border fa-align-center"></i>
                    <h3>Courses with Details</h3>
                    <hr/>
                    <hr/>
                    <p>All the details about courses are avalible here. No need to search anything about your
                        course.</p>
                    <a @auth('instructor') href="{{url('Program/1')}}" @else  href="{{url('Program/1')}}"
                       @endauth class="btn btn-primary btn-set">See More</a>
                </div>
            </div>
            <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.5s">
                <div class="about-div">
                    <i class="fa fa-bolt fa-4x icon-round-border"></i>
                    <h3>Faculity Approach</h3>
                    <hr/>
                    <hr/>
                    <p>Teacher Start Teaching the Courses that Administrative have Assigned.</p>
                    <a @auth('instructor') href="{{url('/ManageCourses')}}" @else  href="{{url('/manage/course')}}"
                       @endauth class="btn btn-primary btn-set">See
                        More</a>
                </div>
            </div>
            <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
                <div class="about-div">
                    <i class="fa fa-magic fa-4x icon-round-border"></i>
                    <h3>Portal</h3>
                    <hr/>
                    <hr/>
                    <p>Students and Faculty can have all their video lectures on a single website. With awesome
                        portal.</p>
                    <a @auth('instructor') href="{{url('/FacultyPortal')}}" @else  href="{{url('/StudentPortal')}}"
                       @endauth class="btn btn-primary btn-set">See
                        More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- FEATURES SECTION END-->
    <div id="faculty-sec">
        <div class="container set-pad">
            <div class="row text-center">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                    <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">Faculty</h1>
                </div>
            </div>
            <!--/.HEADER LINE END-->

            @php $faculties = \App\Instructor::take(3)->get() @endphp
            <div class="row">
                @forelse($faculties as $faculty)
                    <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
                        <div class="faculty-div">
                            <img src="{{asset($faculty->image)}}" class="img-rounded" height="300" width="250"/>
                            <h3>{{$faculty->name}}</h3>
                            <hr/>
                            <h4><strong>Department: </strong> {{$faculty->department()}}</h4>
                            <p><strong>Email: </strong> {{$faculty->email}}</p>
                        </div>
                    </div>
                @empty
                    <h3>NO Faculty to show.</h3>
                @endforelse
            </div>
            <div class="nav navbar-right" data-scroll-reveal="enter from the bottom after 0.6s">
                <button class="btn btn-primary" type="button"><a href="{{url('FacultyList')}}"
                                                                 style="color:rgba(255,255,255,1.00)"><span
                                class="fa fa-list"> Complete Faculty</span></a></button>
            </div>
        </div>
    </div>
    <!-- FACULTY SECTION END-->

    <div id="course-sec" class="container set-pad">
        <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">Departments</h1>
            </div>
        </div>
        <!--/.HEADER LINE END-->
        <div class="row set-row-pad">
            <div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                <div class="panel-group" id="accordion">
                    @php $depats = \App\Department::with('programs')->get() @endphp
                    @forelse( $depats as $dept)
                        <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.5s">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$dept->id}}"
                                       class="collapsed">
                                        {{$dept->name}}
                                        <span class="caret"></span></a>
                                </h4>
                            </div>
                            <div id="collapse{{$dept->id}}" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    @forelse($dept->programs as $program)
                                        <a href="{{url('Program/'.$program->id)}}">
                                            <button class="btn btn-default btn-width" type="button">{{$program->name}}</button>
                                        </a><br>
                                    @empty
                                        <h5>No program to show.</h5>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    @empty
                        <h3> No Department found</h3>
                    @endforelse
                </div>
                <div class="alert btn-lightbrown" data-scroll-reveal="enter from the bottom after 1.1s">
                       <span style="font-size:40px;">
                          <strong> 80+ </strong>
                           <hr/>
                           Courses
                       </span>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 " data-scroll-reveal="enter from the bottom after 0.4s">
                <img src="{{asset('assets/img/20.png')}}" class="img-thumbnail"/>
            </div>
        </div>
    </div>
    <!-- PROGRAMS SECTION END-->

    <div id="contact-sec">
        <div class="overlay">
            <div class="container set-pad">
                <div class="row text-center">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                        <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">Contact Us </h1>
                    </div>
                </div>
                <!--/.HEADER LINE END-->

                <div class="row set-row-pad" data-scroll-reveal="enter from the bottom after 0.5s">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                        <form action="{{url('/contact_us/form')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" required="required"
                                       placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control " name="email" required="required"
                                       placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control " name="user_id" required="required"
                                       placeholder="Your Registration no/SAP"/>
                            </div>
                            <div class="form-group">
                                <textarea name="message" required class="form-control" style="min-height: 150px;"
                                          placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block btn-lg">Submit Request</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACT US SECTION END-->
@endsection

@section('script')
    <script>
        @if (session('success'))
        swal(
            'Done',
            'Your Request Submitted',
            'success'
        );
        @endif
        @if (session('pSuccess'))
        swal(
            'Done',
            'Password change successfully.',
            'success'
        );
        @endif

    </script>
@endsection