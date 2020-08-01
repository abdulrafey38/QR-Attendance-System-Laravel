<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Student Login</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Meta tag Keywords -->
    <!-- css files -->
    <link rel="stylesheet" href="{{asset('css/style-login.css')}}"
          type="text/css" media="all">

    <style>
        body {
            background-image:url("https://lahore.comsats.edu.pk/Images/gallery/Campus/2.jpg");
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>

</head>

<body>
<div class="main-content-agile" style="margin-top: -3rem!important;">

    <div class="sub-main-w3">
        <h2 class="text-center">Student Login</h2>
        <div class="avatar">
            <img width="100" class="logo" src="https://pngimage.net/wp-content/uploads/2018/05/default-avatar-png-9.png" alt="Logo" />
        </div>
        <br>
        <br>
        <form action="{{ url('user/login') }}" method="post">

            <div class="pom-agile">
                <span class="fa fa-user" aria-hidden="true"></span>
                <input placeholder="Your ID" name="S_UID" class="user" type="text" required="">
            </div>
            @csrf
            <div class="pom-agile">
                <span class="fa fa-key" aria-hidden="true"></span>
                <input placeholder="Your Password" name="password" class="pass" type="password" required="">
            </div>
            @if ($errors->has('password'))
                <p style="text-align: start; color: rgba(179,0,0,0.77)">{{ $errors->first('password') }}</p>
            @endif
            <div class="sub-w3l">
                <div class="sub-agile">
                    @if ($errors->has('S_UID'))
                        <p style="text-align: start; color: rgba(179,0,0,0.77)">{{ $errors->first('S_UID') }}</p>
                    @endif
                </div>
                <div class="clear"></div>
            </div>
            <div class="right-w3l">
                <input type="submit" value="Login">
            </div>

        </form>
        <br><br><br><br><br>
        <!--footer-->
        <div class="footer">
            <p>FA16 FYP COMSATS LAHORE ©2016-2020</p>
        </div>
        <!--//footer-->

        <!---728x90--->

    </div>
</div>
<!---728x90--->

<!--//main-->

</body>
</html>