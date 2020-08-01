<!DOCTYPE html>
<html>
<head>

    <style>

        /*Profile Card CSS*/

        .profile-card{
            background:radial-gradient( circle farthest-corner at 10% 20%, #F0F2F0 8.8%, darkolivegreen 74.7% );
            background-size: cover;
            width: 39%;
            min-height: 50px;
            border-radius: 30px;
            padding: 0px 0px;
            color: #fff;
            margin-bottom: 40px;
        }

        .profile-card img.profile-photo{
            border: 7px solid #fff;
            float: left;
            margin-right: 20px;
            position: relative;
            top: -30px;
            height: 70px;
            width: 70px;
            border-radius: 100%;

        }

        .profile-card h5 a{
            font-size: 15px;
        }

        .profile-card a{
            font-size: 12px;
        }

        /*Newsfeed Links CSS*/

        ul.nav-news-feed{
            padding-left: 20px;
            padding-right: 20px;
            margin: 0 0 40px 0;
            background:#FF000000;
            padding-top:0px;
        }

        ul.nav-news-feed li{
            list-style: none;
            display: block;
            padding: 15px 0;
        }

        ul.nav-news-feed li div{

            margin-left: 30px;
        }

        ul.nav-news-feed li div::after{
            content: "";
            width: 100%;
            height: 1px;
            border-top: 1px solid #f1f2f2;
            position: absolute;
            bottom: -15px;
            left: 0;
        }

        ul.nav-news-feed li a{color: #6d6e71;}

        ul.nav-news-feed li i{
            font-size: 18px;
            margin-right: 15px;
            float: left;
        }


    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Faculty Portal</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontastic.css')}}">
    <link rel="stylesheet" href="{{asset('css/grasp_mobile_progress_circle-1.0.0.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">


    <link href="{{asset('assets/css/popstyle.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/flexslider.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet"/>
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet"/>



@yield('css')
<!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">

    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('css/style.green.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</head>
<body>



<div class="side-navbar-wrapper">
    <div class="row">
        <div class="col-md-4 static">
            <div class="profile-card">
                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="user" class="profile-photo">
                <p><a class="text-white">{{Auth::guard()->user()->name}}</a></p>
                <a  class="text-white"><i class="fa fa-user"></i> Instructor</a>
            </div><!--profile card ends-->
            <ul class="nav-news-feed"  >
                <li ><i class="icon-home" ></i><div><a href="{{url('/faculty/dashboard')}}">Dashboard</a></div></li>
                <li><i class="icon-user"></i><div><a href="{{url('/FacultyPortal')}}">Profile</a></div></li>
                <li><i class=icon-check></i><div><a href="{{url('/ManageCourses')}}">Mark Attendance</a></div></li>
                <li><i class="fa fa-user"></i><div><a href="{{url('/password/change')}}">Change Pssword</a></div></li>
                <li><i class="fa fa-arrow-left"></i><div><a href="{{'faculty/logout'}}">Log Out</a></div></li>
            </ul><!--news-feed links ends-->

        </div>
    </div>
</div>

{{--<!-- Side Navbar -->--}}
{{--<nav class="side-navbar">--}}
{{--    <div class="side-navbar-wrapper">--}}
{{--        <!-- Sidebar Header    -->--}}
{{--        <div class="sidenav-header d-flex align-items-center justify-content-center">--}}
{{--            <!-- User Info-->--}}
{{--            <div class="sidenav-header-inner text-center"><img src="{{asset('img/default-avatar.png')}}" alt="person"--}}
{{--                                                               class="img-fluid rounded-circle">--}}
{{--              <span>  <h2 class="h5">{{Auth::guard('admin')->user()->name}}</h2></span>--}}
{{--            </div>--}}
{{--            <!-- Small Brand information, appears on minimized sidebar-->--}}
{{--            <div class="sidenav-header-logo"><a href="index.blade.php" class="brand-small text-center">--}}
{{--                    <strong>B</strong><strong class="text-primary">D</strong></a></div>--}}
{{--        </div>--}}
{{--        <!-- Sidebar Navigation Menus-->--}}
{{--        <div class="main-menu">--}}
{{--            <h5 class="sidenav-heading">Main</h5>--}}
{{--            <ul id="side-main-menu" class="side-menu list-unstyled">--}}
{{--                <li id="homeNav"><a href="{{url('/admin/dashboard')}}"> <i class="icon-home"></i>Home </a></li>--}}
{{--                <li id="profileNav"><a href="{{url('/admin/profile')}}"> <i class="icon-user"></i>Profile </a></li>--}}
{{--                <li id="facultyNav"><a href="{{url('faculty/view')}}"> <i class="fa fa-user-circle"></i>Faculty Manage--}}
{{--                <li id="studentNav"><a href="{{url('admin/student/view')}}"> <i class="fa fa-user-circle-o"></i>Student Manage--}}
{{--                <li id="courseNav"><a href="{{url('/course/view')}}"> <i class="fa fa-bookmark"></i>Course Manage</a>--}}
{{--                <li id="sectionNav"><a href="{{url('view/section')}}"> <i class="fa fa-asterisk"></i>Section Manage</a>--}}
{{--                <li id="sectionNav"><a href="{{'/admin/logout'}}"> <i class="fa fa-arrow-left"></i>Log Out</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}

<div class="page">

    @yield('content')




    <footer class="main-footer">
        <div class="">
            <div class="row">
                <div class="col-sm-6">
                    <p>FA16 FYP COMSATS LAHORE &copy; 2016-2020</p>
                </div>

            </div>
        </div>
    </footer>

</div>



<!-- JavaScript files-->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/popper.js/umd/popper.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/grasp_mobile_progress_circle-1.0.0.min.js')}}"></script>
<script src="{{asset('js/sweetalert2.all.min.js')}}"></script>
<script src="{{asset('vendor/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('js/bootstrap-datepicker.js')}}"></script>


@yield('script')


</body>
</html>