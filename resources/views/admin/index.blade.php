@extends('layouts.admin-layout')
<head>

    <style>
        body{
            margin-top:20px;
            background:#FAFAFA;
        }
        .order-card {
            color: #fff;
        }

        .bg-c-blue {
            background: linear-gradient(45deg, rgba(64, 153, 255, 0.26), #4018ff);
        }

        .bg-c-green {
            background: linear-gradient(45deg, rgba(44, 255, 250, 0.24),#59e0c5);
        }

        .bg-c-yellow {
            background: linear-gradient(45deg,#FFB64D, rgba(255, 175, 4, 0.29));
        }

        .bg-c-brown {
            background: linear-gradient(45deg,saddlebrown,#ffcb80);
        }
        .bg-c-pink {
            background: linear-gradient(45deg,#FF5370, rgba(255, 25, 102, 0.39));
        }


        .card {
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
            box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
            border: none;
            margin-bottom: 30px;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .card .card-block {
            padding: 20px;
        }

        .order-card i {
            font-size: 26px;
        }

        .f-left {
            float: left;
        }

        .f-right {
            float: right;
        }

    </style>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <!-- Counts Section -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css
">


    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.1/Chart.min.js"></script>

</head>

@section('content')

{{--    <div class="card-body">--}}
{{--        <div class="row w-120">--}}
{{--            <div class="col-md-3">--}}
{{--                <div class="card border-info mx-sm-1 p-3">--}}
{{--                    <div class="" ><span class="fa fa-user" aria-hidden="true"></span></div>--}}
{{--                    <div class="text-info text-center mt-3"><h4>Total Instructors</h4></div>--}}
{{--                    <div class="text-info text-center mt-2"><h1>{{\App\Instructor::all()->count()}}</h1></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-3">--}}
{{--                <div class="card border-success mx-sm-1 p-3">--}}
{{--                    <div class=""><span class="fa fa-user-md" aria-hidden="true"></span></div>--}}
{{--                    <div class="text-success text-center mt-3"><h4>Total Students</h4></div>--}}
{{--                    <div class="text-success text-center mt-2"><h1>{{\App\User::all()->count()}}</h1></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-3">--}}
{{--                <div class="card border-danger mx-sm-1 p-3">--}}
{{--                    <div class="" ><span class="fa fa-book" aria-hidden="true"></span></div>--}}
{{--                    <div class="text-danger text-center mt-3"><h4>Total Courses</h4></div>--}}
{{--                    <div class="text-danger text-center mt-2"><h1>{{\App\Course::all()->count()}}</h1></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-3">--}}
{{--                <div class="card border-warning mx-sm-1 p-3">--}}
{{--                    <div class="" ><span class="fa fa-building" aria-hidden="true"></span></div>--}}
{{--                    <div class="text-warning text-center mt-3"><h4>Total Sections</h4></div>--}}
{{--                    <div class="text-warning text-center mt-2"><h1>{{\App\SectionCourse::all()->count()}}</h1></div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
<br>
    <br>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-blue order-card">
                    <div class="card-block">
                        <br>
                        <h6 class="m-b-20">Total Instructors</h6>
                        <h2 class="text-right"><i class="fa fa-user f-left"></i><span>{{\App\Instructor::all()->count()}}</span></h2>
                        <br>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-green order-card">
                    <div class="card-block">
                        <br>
                        <h6 class="m-b-20">Total Students</h6>
                        <h2 class="text-right"><i class="fa fa-user-circle-o f-left"></i><span>{{\App\User::all()->count()}}</span></h2>
                        <br>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-yellow order-card">
                    <div class="card-block">
                        <br>
                        <h6 class="m-b-20">Total Courses</h6>
                        <h2 class="text-right"><i class="fa fa-book f-left"></i><span>{{\App\Course::all()->count()}}</span></h2>
                        <br>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-pink order-card">
                    <div class="card-block">
                        <br>
                        <h6 class="m-b-20">Total Sections</h6>
                        <h2 class="text-right"><i class="fa fa-building-o-o f-left"></i><span>{{\App\SectionCourse::all()->count()}}</span></h2>
                        <br>
                    </div>
                </div>
            </div>

            </div>
        <br>
        <br>
        <div class="wrapper" align="center">
            <canvas id='c'></canvas>
            <div class="label">Information of <strong>System</strong></div>
        </div>
    </div>



@endsection

@section('script')

    <script>
        var label = document.querySelector(".label");
        var c = document.getElementById("c");
        var ctx = c.getContext("2d");
        var cw = c.width = 1100;
        var ch = c.height = 400;
        var cx = cw / 2,
            cy = ch / 2;
        var rad = Math.PI / 180;
        var frames = 0;

        ctx.lineWidth = 1;
        ctx.strokeStyle = "green";
        ctx.fillStyle = "black";
        ctx.font = "14px monospace";

        var grd = ctx.createLinearGradient(0, 0, 0, cy);
        grd.addColorStop(0, "hsl(355,74%,53%)");
        grd.addColorStop(1, "hsla(167,72%,60%,0.09)");

        var oData = {
            "Instructors": {{\App\Instructor::all()->count()}},
            "Students": {{\App\User::all()->count()}},
            "Sections": {{\App\SectionCourse::all()->count()}},
            "Courses": {{\App\Course::all()->count()}},
            "Departments": {{\App\Department::all()->count()}}
        };

        var valuesRy = [];
        var propsRy = [];
        for (var prop in oData) {

            valuesRy.push(oData[prop]);
            propsRy.push(prop);
        }


        var vData = 4;
        var hData = valuesRy.length;
        var offset = 50.5; //offset chart axis
        var chartHeight = ch - 2 * offset;
        var chartWidth = cw - 2 * offset;
        var t = 1 / 7; // curvature : 0 = no curvature
        var speed = 2; // for the animation

        var A = {
            x: offset,
            y: offset
        }
        var B = {
            x: offset,
            y: offset + chartHeight
        }
        var C = {
            x: offset + chartWidth,
            y: offset + chartHeight
        }

        /*
              A  ^
                |  |
                + 25
                |
                |
                |
                + 25
              |__|_________________________________  C
              B
        */

        // CHART AXIS -------------------------
        ctx.beginPath();
        ctx.moveTo(A.x, A.y);
        ctx.lineTo(B.x, B.y);
        ctx.lineTo(C.x, C.y);
        ctx.stroke();

        // vertical ( A - B )
        var aStep = (chartHeight - 50) / (vData);

        var Max = Math.ceil(arrayMax(valuesRy) / 10) * 10;
        var Min = Math.floor(arrayMin(valuesRy) / 10) * 10;
        var aStepValue = (Max - Min) / (vData);
        console.log("aStepValue: " + aStepValue); //8 units
        var verticalUnit = aStep / aStepValue;

        var a = [];
        ctx.textAlign = "right";
        ctx.textBaseline = "middle";
        for (var i = 0; i <= vData; i++) {

            if (i == 0) {
                a[i] = {
                    x: A.x,
                    y: A.y + 25,
                    val: Max
                }
            } else {
                a[i] = {}
                a[i].x = a[i - 1].x;
                a[i].y = a[i - 1].y + aStep;
                a[i].val = a[i - 1].val - aStepValue;
            }
            drawCoords(a[i], 3, 0);
        }

        //horizontal ( B - C )
        var b = [];
        ctx.textAlign = "center";
        ctx.textBaseline = "hanging";
        var bStep = chartWidth / (hData + 1);

        for (var i = 0; i < hData; i++) {
            if (i == 0) {
                b[i] = {
                    x: B.x + bStep,
                    y: B.y,
                    val: propsRy[0]
                };
            } else {
                b[i] = {}
                b[i].x = b[i - 1].x + bStep;
                b[i].y = b[i - 1].y;
                b[i].val = propsRy[i]
            }
            drawCoords(b[i], 0, 3)
        }

        function drawCoords(o, offX, offY) {
            ctx.beginPath();
            ctx.moveTo(o.x - offX, o.y - offY);
            ctx.lineTo(o.x + offX, o.y + offY);
            ctx.stroke();

            ctx.fillText(o.val, o.x - 2 * offX, o.y + 2 * offY);
        }
        //----------------------------------------------------------

        // DATA
        var oDots = [];
        var oFlat = [];
        var i = 0;

        for (var prop in oData) {
            oDots[i] = {}
            oFlat[i] = {}

            oDots[i].x = b[i].x;
            oFlat[i].x = b[i].x;

            oDots[i].y = b[i].y - oData[prop] * verticalUnit - 25;
            oFlat[i].y = b[i].y - 25;

            oDots[i].val = oData[b[i].val];

            i++
        }



        ///// Animation Chart ///////////////////////////
        //var speed = 3;
        function animateChart() {
            requestId = window.requestAnimationFrame(animateChart);
            frames += speed; //console.log(frames)
            ctx.clearRect(60, 0, cw, ch - 60);

            for (var i = 0; i < oFlat.length; i++) {
                if (oFlat[i].y > oDots[i].y) {
                    oFlat[i].y -= speed;
                }
            }
            drawCurve(oFlat);
            for (var i = 0; i < oFlat.length; i++) {
                ctx.fillText(oDots[i].val, oFlat[i].x, oFlat[i].y - 25);
                ctx.beginPath();
                ctx.arc(oFlat[i].x, oFlat[i].y, 3, 0, 2 * Math.PI);
                ctx.fill();
            }

            if (frames >= Max * verticalUnit) {
                window.cancelAnimationFrame(requestId);

            }
        }
        requestId = window.requestAnimationFrame(animateChart);

        /////// EVENTS //////////////////////
        c.addEventListener("mousemove", function(e) {
            label.innerHTML = "";
            label.style.display = "none";
            this.style.cursor = "default";

            var m = oMousePos(this, e);
            for (var i = 0; i < oDots.length; i++) {

                output(m, i);
            }

        }, false);

        function output(m, i) {
            ctx.beginPath();
            ctx.arc(oDots[i].x, oDots[i].y, 20, 0, 2 * Math.PI);
            if (ctx.isPointInPath(m.x, m.y)) {
                //console.log(i);
                label.style.display = "block";
                label.style.top = (m.y + 10) + "px";
                label.style.left = (m.x + 10) + "px";
                label.innerHTML = "<strong>" + propsRy[i] + "</strong>: " + valuesRy[i] + "%";
                c.style.cursor = "pointer";
            }
        }

        // CURVATURE
        function controlPoints(p) {
            // given the points array p calculate the control points
            var pc = [];
            for (var i = 1; i < p.length - 1; i++) {
                var dx = p[i - 1].x - p[i + 1].x; // difference x
                var dy = p[i - 1].y - p[i + 1].y; // difference y
                // the first control point
                var x1 = p[i].x - dx * t;
                var y1 = p[i].y - dy * t;
                var o1 = {
                    x: x1,
                    y: y1
                };

                // the second control point
                var x2 = p[i].x + dx * t;
                var y2 = p[i].y + dy * t;
                var o2 = {
                    x: x2,
                    y: y2
                };

                // building the control points array
                pc[i] = [];
                pc[i].push(o1);
                pc[i].push(o2);
            }
            return pc;
        }

        function drawCurve(p) {

            var pc = controlPoints(p); // the control points array

            ctx.beginPath();
            //ctx.moveTo(p[0].x, B.y- 25);
            ctx.lineTo(p[0].x, p[0].y);
            // the first & the last curve are quadratic Bezier
            // because I'm using push(), pc[i][1] comes before pc[i][0]
            ctx.quadraticCurveTo(pc[1][1].x, pc[1][1].y, p[1].x, p[1].y);

            if (p.length > 2) {
                // central curves are cubic Bezier
                for (var i = 1; i < p.length - 2; i++) {
                    ctx.bezierCurveTo(pc[i][0].x, pc[i][0].y, pc[i + 1][1].x, pc[i + 1][1].y, p[i + 1].x, p[i + 1].y);
                }
                // the first & the last curve are quadratic Bezier
                var n = p.length - 1;
                ctx.quadraticCurveTo(pc[n - 1][0].x, pc[n - 1][0].y, p[n].x, p[n].y);
            }

            //ctx.lineTo(p[p.length-1].x, B.y- 25);
            ctx.stroke();
            ctx.save();
            ctx.fillStyle = grd;
            ctx.fill();
            ctx.restore();
        }

        function arrayMax(array) {
            return Math.max.apply(Math, array);
        };

        function arrayMin(array) {
            return Math.min.apply(Math, array);
        };

        function oMousePos(canvas, evt) {
            var ClientRect = canvas.getBoundingClientRect();
            return { //objeto
                x: Math.round(evt.clientX - ClientRect.left),
                y: Math.round(evt.clientY - ClientRect.top)
            }
        }
    </script>
@endsection