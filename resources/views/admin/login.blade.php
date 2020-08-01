<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        body {
            background-image:url("https://lahore.comsats.edu.pk/Images/gallery/Campus/2.jpg");
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;

            /*background: -webkit-radial-gradient(center, ellipse cover,  #141e30 1%, #243b55 100%); !* Chrome10+,Safari5.1+ *!*/
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0264d6', endColorstr='#1c2b5a',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
            height:calc(100vh);
            width:100%;
        }
        .form-control {
            font-size: 16px;
            background: white;
            box-shadow: none !important;
            border-color: transparent;
        }
        .form-control:focus {
            border-color: #d3d3d3;
        }
        .form-control, .btn {
            border-radius: 2px;
        }
        .login-form {
            width: 380px;
            margin: 0 auto;
        }
        .login-form h2 {
            margin: 0;
            padding: 30px 0;
            font-size: 34px;
        }
        .login-form .avatar {
            margin: 0 auto 30px;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            z-index: 9;
            background: rgba(0,0,0,0.5);
            padding: 15px;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
        }
        .login-form .avatar img {
            width: 100%;
        }
        .login-form form {
            color: #7a7a7a;
            border-radius: 4px;
            margin-bottom: 15px;
            background:rgba(0,0,0,0.5);

            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }
        .login-form .btn {
            font-weight: bold;
            background: green;
            border: none;
            margin-bottom: 20px;
        }
        .login-form .btn:hover, .login-form .btn:focus {
            background: darkgreen;
            outline: none !important;
        }
        .login-form a {
            color: red;
        }
        .login-form form a {
            color: #ef3b3a;
        }
        .login-form a:hover, .login-form form a:hover {
            text-decoration: underline;
        }
        .hint-text {
            color: #999;
            text-align: center;
        }
        .form-footer {
            padding-bottom: 15px;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="login-form">
    <h2 class="text-center">Admin Login</h2>
    <form method="post" action="{{url('/login/form')}}" class="text-left ">

                <div class="avatar">
                    <img  src="https://pngimage.net/wp-content/uploads/2018/05/default-avatar-png-9.png" />
                </div>


        {{csrf_field()}}
        <div class="form-group">
            <label for="login-username" class="label-material">Email</label>
            <input id="login-username" type="email" class="form-control input-lg" name="email" placeholder="Email" required="required">

        </div>
        <div class="form-group">
            <label for="login-password" class="label-material">Password</label>
            <input  id="login-password" type="password" class="form-control input-lg" name="password" placeholder="Password" required="required">

        </div>
        <div class="form-group text-center">
            <button class="btn btn-primary btn-block">Login</button>
        </div>

        <p class="hint-text">Visit => <a href="https://lahore.comsats.edu.pk/default.aspx">COMSATS</a></p>

    </form>

    @if(session('error'))
        <div class="alert alert-danger ">
            <p style="color: black!important;"> {{session('error')}}</p>
        </div>
    @endif
</body>

<!--footer-->
<div class="form-footer">
    <p style="color:white"; >FA16 FYP COMSATS LAHORE ©2016-2020</p>
</div>
<!--//footer-->

</html>