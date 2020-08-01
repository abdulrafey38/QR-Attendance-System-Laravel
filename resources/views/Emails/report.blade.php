<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>


    <style type="text/css">
        * {
            font-family: 'Lato', sans-serif !important;
        }

        body {
            padding: 0;
            margin: 0;
        }

        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        *:before,
        *:after {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        html {
            -webkit-text-size-adjust: none;
            -ms-text-size-adjust: none;
        }

        @media only screen and (max-device-width: 680px), only screen and (max-width: 680px) {
            *[class="table_width_100"] {
                width: 96% !important;
            }

            *[class="border-right_mob"] {
                border-right: 1px solid #dddddd;
            }

            *[class="mob_100"] {
                width: 100% !important;
            }

            *[class="mob_center"] {
                text-align: center !important;
            }

            *[class="mob_center_bl"] {
                float: none !important;
                display: block !important;
                margin: 0px auto;
            }

            .iage_footer a {
                text-decoration: none;
                color: #929ca8;
            }

            img.mob_display_none {
                width: 0px !important;
                height: 0px !important;
                display: none !important;
            }

            img.mob_width_50 {
                width: 40% !important;
                height: auto !important;
            }
        }

        .table_width_100 {
            width: 680px;
        }

        .overlay img {
            margin: 0 !important;
            width: 75px !important;
        }

        .overlay {
            position: absolute;
            top: 0%;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
        }

        .overlay-image {
            position: relative;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.10);
        }

        .overlay-image img {
            width: 100%;
            padding: 10px;
            cursor: pointer
        }

        .overlay-image:hover .overlay {
            opacity: 1;
        }

        .overlay-image .overlay {
            background: rgba(86, 193, 123, 0.5);
            border-radius: 4px;
            top: 10px;
            left: 10px;
            width: calc(100% - 20px);
            height: calc(100% - 20px);
        }

        .video {
            padding-top: 75px;
            padding-bottom: 5px;
        }
    </style>
</head>
<body>

<div id="mailsub" class="notification" align="center">

    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="min-width: 320px;">
        <tr>
            <td align="center" bgcolor="#eff3f8">

                <table border="0" cellspacing="0" cellpadding="0" class="table_width_100" width="100%"
                       style="max-width: 680px; min-width: 300px;">
                    <tr>
                        <td>
                            <div style="height: 80px; line-height: 80px; font-size: 10px;"> </div>
                        </td>
                    </tr>
                    <!--header -->
                    <tr>
                        <td align="center" bgcolor=""
                            style="background-image: linear-gradient(to right, #849e93 , #dcdcdc);">
                            <table width="90%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td align="center">
                                        <div class="mob_center_bl" style="display: inline-block;">
                                            <table class="mob_center" width="115" border="0" cellspacing="0"
                                                   cellpadding="0" align="left" style="border-collapse: collapse;">
                                                <tr>
                                                    <td align="center" valign="middle">
                                                        <table width="115" border="0" cellspacing="0" cellpadding="0">
                                                            <tr>
                                                                <td align="center" valign="top" class="mob_center">
                                                                    <a href="http://comsats.edu.pk" target="_blank"
                                                                       style="color: #596167; font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
                                                                        <img src="{{asset('img/logo_with_text.png')}}"
                                                                             alt="img missing" border="0" style=""/>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" bgcolor=""
                            style="background-image: linear-gradient(to right, #849e93 , #dcdcdc);">
                            <table width="90%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td align="center">
                                        <div style="text-align: center; padding-top: 10px;">
					<span style="font-family: lato!important; font-size: 20px; color: #fff; font-weight: bold;">
						{{\Carbon\Carbon::now()->toFormattedDateString()}} {{$course->name}} Attendance Report
					</span>
                                        </div>
                                        <div style="height: 10px;"> </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!--content 2 -->
                    <tr style="border-top: 1px solid #eff2f4; margin-top: 3rem!important;">
                        <td align="center" bgcolor="#ffffff"
                            style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #eff2f4;">
                            <table width="94%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td align="center">

                                        <div class="mob_100" style="float: left; display: inline-block; width: 100%;">
                                            <table class="mob_100" width="100%" border="0" cellspacing="0"
                                                   cellpadding="0" align="left"
                                                   style="border-collapse: collapse; width: 100%; margin-top: 2rem!important;">
                                                <thead>
                                                <tr>
                                                    <th style="width: 4rem; text-align: left!important;">#</th>
                                                    <th style="text-align: left!important;">Attendance</th>
                                                    <th style="text-align: left!important;">Registration #</th>
                                                    <th style="text-align: left!important;">Student Name</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @php $count = 1; @endphp
                                                @forelse($attendances as $attendance)
                                                    <tr>
                                                        <td>{{$count++}}</td>
                                                        <td>{{$attendance->attendance}}</td>
                                                        <td>{{$attendance->student->S_UID}}</td>
                                                        <td>{{$attendance->student->name}}</td>
                                                    </tr>
                                                @empty
                                                @endforelse
                                                <tr>

                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div style="height: 20px; line-height: 80px; font-size: 10px;"> </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!--footer -->
                    <tr>
                        <td class="iage_footer" align="center" bgcolor="#ffffff">
                            <div style="height: 20px;"> </div>

                            <table width="100%" border="0" cellspacing="0" cellpadding="0">

                                <tr>
                                    <td align="center">
				<span style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #96a5b5;">
					Email send by Qr System <br>
					https://comsats.edu.pk
				</span>
                                    </td>
                                </tr>
                            </table>

                            <div style="height: 30px; line-height: 30px; font-size: 10px;"> </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div style="height: 20px;"> </div>
                        </td>
                    </tr>
                </table>

            </td>
        </tr>
    </table>
</div>

</body>
</html>
