@extends('layouts.master-layout');
@section('css')
    <style>

    </style>
@endsection


@section('content')


    <div id="course-sec" class="container set-pad">
        <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">Faculty</h1>
            </div>
        </div>
        <!--/.HEADER LINE END-->

        <ul class="breadcrumb" data-scroll-reveal="enter from the bottom after 0.4s">
            <li><a href="{{url('/')}}">Home</a></li>
            <li>Faculty</li>
        </ul>
        <!--/.BREADCRUMB END-->

        <div id="course-se" class="container set-pad">
            <div class="row text-center">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                    <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">Departments</h1>
                </div>
            </div>
            <!--/.HEADER LINE END-->


            <div class="row set-row-pad">
                <div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                    <div class="panel-group" id="accordion">
                        <div class="panel-group" id="accordion">
                            @php $depats = \App\Department::with('programs')->with('faculty')->get() @endphp
                            @forelse( $depats as $dept)
                                <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.5s">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion"
                                               href="#collapse{{$dept->id}}"
                                               class="collapsed">
                                                {{$dept->name}}
                                                <span class="caret"></span></a>
                                        </h4>
                                    </div>
                                    <div id="collapse{{$dept->id}}" class="panel-collapse collapse"
                                         style="height: 0px;">
                                        <div class="panel-body">
                                            @forelse($dept->faculty as $faculty)
                                                <a href="{{url('FacultyMember/'.$faculty->id)}}">
                                                    <button class="btn btn-default"
                                                            type="button">{{$faculty->name}}</button>
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

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 " data-scroll-reveal="enter from the bottom after 0.4s">
                    <img src="{{asset('assets/img/20.png')}}" class="img-thumbnail"/>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>

    </script>
@endsection