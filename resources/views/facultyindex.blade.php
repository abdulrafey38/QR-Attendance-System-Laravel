<div class="row d-flex justify-content-center mt-100">
    <div class="col-md-6">
        <h2 class="text-center">Loading...</h2>
        <div class="progress">
            <div class="progress-bar">
                <div class="progress-shadow"></div>
            </div>
        </div>
    </div>
</div>
@extends('layouts.master-layout')
<head>
    <style>

        body {
            background-color: #E0E0E0
        }

        .text-center {
            text-align: center
        }

        .mt-100 {
            margin-top: 20%
        }

        .progress {
            background-color: #e5e9eb;
            height: 0.45em;
            position: relative;
            margin-left: 10px;
            margin-right: 10px
        }

        .progress-bar {
            -webkit-animation-duration: 1.3s;
            -webkit-animation-name: width;
            background: linear-gradient(to right, #4cd964, #5ac8fa, #007aff, #34aadc, #5856d6, #ff2d55);
            background-size: 24em 0.25em;
            height: 100%;
            position: relative
        }

        .progress-shadow {
            background-image: linear-gradient(to bottom, #eaecee, transparent);
            height: 100%;
            position: absolute;
            top: 100%;
            transform: skew(45deg);
            transform-origin: 0 0;
            width: 100%
        }

        @keyframes width {

            0%,
            100% {
                transition-timing-function: cubic-bezier(1, 0, 0.65, 0.85)
            }

            0% {
                width: 0
            }

            100% {
                width: 100%
            }
        }

        @-webkit-keyframes width {

            0%,
            100% {
                transition-timing-function: cubic-bezier(1, 0, 0.65, 0.85)
            }

            0% {
                width: 0
            }

            100% {
                width: 100%
            }
        }
        @import url("https://fonts.googleapis.com/css?family=Pacifico");
        @import url("https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700");
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        *::before,
        *::after {
            content: '';
            position: absolute;

        }

        body {
            background:transparent;
            min-height: 100vh;
            width: 100vw;
            margin: 0;
            padding: 0;
            font-family: 'Pacifico', cursive;
        }

        .title {
            padding: 10px 20px;
        }
        .title span {
            font-size: 20px;
            font-weight: bold;
            color: rgba(0, 0, 0, 0.5);
        }

        .hidden {
            display: none;
        }

        .half-transparent {
            color: rgba(255, 255, 255, 0.3);
        }

        .bold {
            font-weight: bold;
        }

        .year-block {
            font-size: 5vmin;
            font-weight: bold;
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .date-block {
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
        .date-block__month {
            font-size: 3vmin;
            font-weight: bold;
        }
        .date-block__date {
            font-size: 6vmin;
            font-weight: bold;
        }
        .date-block__day {
            font-size: 3vmin;
            color: rgba(255, 255, 255, 0.5);
        }

        .calendar {
            width: 110vmin;
            height: 70vmin;
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            background: #CA3644;
            display: -webkit-box;
            display: flex;
            flex-wrap: wrap;
            box-shadow: -1vmin 1vmin 2vmin rgba(0, 0, 0, 0.5);
        }
        .calendar__days {
            display: -webkit-box;
            display: flex;
            flex-wrap: wrap;
            margin-top: 1vmin;
        }
        .calendar__day {
            font-size: 1.4vmin;
            display: inline-block;
            width: 14.2857142857%;
            height: 2vmin;
        }
        .calendar__month {
            font-family: 'Open Sans Condensed', sans-serif;
            width: 20%;
            height: 33.33333%;
            display: block;
            color: black;
            text-transform: uppercase;
            text-align: center;
            padding: 2vmin;
            position: relative;
        }
        .calendar__month .title {
            font-weight: bold;
            font-size: 2vmin;
        }
        .calendar__month:nth-child(4n+1) {
            background: #1AA1AF;
        }
        .calendar__month:nth-child(4n+2) {
            background: #E86948;
        }
        .calendar__month:nth-child(4n+3) {
            background: #EBC85B;
        }
        .calendar__month:nth-child(4n+4) {
            background: #CA3644;
        }

        .clock {
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            width: 90%;
            height: 90%;
            border-radius: 100%;
            background: white;
        }
        .clock__container {
            width: 100%;
            height: 100%;
            position: absolute;
            top: auto;
            left: auto;
            bottom: auto;
            right: auto;
        }
        .clock__dot {
            width: 5%;
            height: 5%;
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            background: yellow;
        }
        .clock__hour {
            width: 100%;
            height: 100%;
            position: absolute;
            top: auto;
            left: auto;
            bottom: auto;
            right: auto;
            -webkit-animation: rotate 43200s infinite linear;
            animation: rotate 43200s infinite linear;
        }
        .clock__hour__container {
            width: 100%;
            height: 100%;
            position: absolute;
            top: auto;
            left: auto;
            bottom: auto;
            right: auto;
        }
        .clock__hour::before {
            width: 3%;
            height: 30%;
            top: 20%;
            left: 50%;
            -webkit-transform: translatex(-50%);
            transform: translatex(-50%);
            background: black;
        }
        .clock__minute {
            width: 100%;
            height: 100%;
            position: absolute;
            top: auto;
            left: auto;
            bottom: auto;
            right: auto;
            -webkit-animation: rotate 3600s infinite linear;
            animation: rotate 3600s infinite linear;
        }
        .clock__minute__container {
            width: 100%;
            height: 100%;
            position: absolute;
            top: auto;
            left: auto;
            bottom: auto;
            right: auto;
        }
        .clock__minute::before {
            width: 2%;
            height: 40%;
            top: 10%;
            left: 50%;
            -webkit-transform: translatex(-50%);
            transform: translatex(-50%);
            background: black;
        }
        .clock__second {
            width: 100%;
            height: 100%;
            position: absolute;
            top: auto;
            left: auto;
            bottom: auto;
            right: auto;
            -webkit-animation: rotate 60s infinite steps(60);
            animation: rotate 60s infinite steps(60);
        }
        .clock__second__container {
            width: 100%;
            height: 100%;
            position: absolute;
            top: auto;
            left: auto;
            bottom: auto;
            right: auto;
        }
        .clock__second::before {
            width: 1%;
            height: 45%;
            top: 5%;
            left: 50%;
            -webkit-transform: translatex(-50%);
            transform: translatex(-50%);
            background: red;
        }

        @-webkit-keyframes rotate {
            100% {
                -webkit-transform: rotateZ(360deg);
                transform: rotateZ(360deg);
            }
        }

        @keyframes rotate {
            100% {
                -webkit-transform: rotateZ(360deg);
                transform: rotateZ(360deg);
            }
        }

    </style>




    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

@section('content')

    <div  class="calendar">

        <div class="calendar__month calendar__empty--1"><span class="title"></span>
            <div class="year-block hidden">2017</div>
            <div class="clock hidden">
                <div class="clock__hour__container">
                    <div class="clock__hour"></div>
                </div>
                <div class="clock__minute__container">
                    <div class="clock__minute"></div>
                </div>
                <div class="clock__second__container">
                    <div class="clock__second"></div>
                </div>
                <div class="clock__dot"></div>
            </div>
            <div class="date-block hidden">
                <div class="date-block__month">Jan</div>
                <div class="date-block__date">12</div>
                <div class="date-block__day">Wed</div>

            </div>
        </div>
        <div class="calendar__month calendar__month--0"><strong >jan</strong>
            <div class="calendar__days"><span class="calendar__day calendar__day__0">0</span><span class="calendar__day calendar__day__1">1</span><span class="calendar__day calendar__day__2">2</span><span class="calendar__day calendar__day__3">3</span><span class="calendar__day calendar__day__4">4</span><span class="calendar__day calendar__day__5">5</span><span class="calendar__day calendar__day__6">6</span><span class="calendar__day calendar__day__7">7</span><span class="calendar__day calendar__day__8">8</span><span class="calendar__day calendar__day__9">9</span><span class="calendar__day calendar__day__10">10</span><span class="calendar__day calendar__day__11">11</span><span class="calendar__day calendar__day__12">12</span><span class="calendar__day calendar__day__13">13</span><span class="calendar__day calendar__day__14">14</span><span class="calendar__day calendar__day__15">15</span><span class="calendar__day calendar__day__16">16</span><span class="calendar__day calendar__day__17">17</span><span class="calendar__day calendar__day__18">18</span><span class="calendar__day calendar__day__19">19</span><span class="calendar__day calendar__day__20">20</span><span class="calendar__day calendar__day__21">21</span><span class="calendar__day calendar__day__22">22</span><span class="calendar__day calendar__day__23">23</span><span class="calendar__day calendar__day__24">24</span><span class="calendar__day calendar__day__25">25</span><span class="calendar__day calendar__day__26">26</span><span class="calendar__day calendar__day__27">27</span><span class="calendar__day calendar__day__28">28</span><span class="calendar__day calendar__day__29">29</span><span class="calendar__day calendar__day__30">30</span><span class="calendar__day calendar__day__31">31</span><span class="calendar__day calendar__day__32">32</span><span class="calendar__day calendar__day__33">33</span><span class="calendar__day calendar__day__34">34</span><span class="calendar__day calendar__day__35">35</span><span class="calendar__day calendar__day__36">36</span><span class="calendar__day calendar__day__37">37</span><span class="calendar__day calendar__day__38">38</span><span class="calendar__day calendar__day__39">39</span><span class="calendar__day calendar__day__40">40</span><span class="calendar__day calendar__day__41">41</span>
            </div>
        </div>
        <div class="calendar__month calendar__month--1"><strong >feb</strong>
            <div class="calendar__days"><span class="calendar__day calendar__day__0">0</span><span class="calendar__day calendar__day__1">1</span><span class="calendar__day calendar__day__2">2</span><span class="calendar__day calendar__day__3">3</span><span class="calendar__day calendar__day__4">4</span><span class="calendar__day calendar__day__5">5</span><span class="calendar__day calendar__day__6">6</span><span class="calendar__day calendar__day__7">7</span><span class="calendar__day calendar__day__8">8</span><span class="calendar__day calendar__day__9">9</span><span class="calendar__day calendar__day__10">10</span><span class="calendar__day calendar__day__11">11</span><span class="calendar__day calendar__day__12">12</span><span class="calendar__day calendar__day__13">13</span><span class="calendar__day calendar__day__14">14</span><span class="calendar__day calendar__day__15">15</span><span class="calendar__day calendar__day__16">16</span><span class="calendar__day calendar__day__17">17</span><span class="calendar__day calendar__day__18">18</span><span class="calendar__day calendar__day__19">19</span><span class="calendar__day calendar__day__20">20</span><span class="calendar__day calendar__day__21">21</span><span class="calendar__day calendar__day__22">22</span><span class="calendar__day calendar__day__23">23</span><span class="calendar__day calendar__day__24">24</span><span class="calendar__day calendar__day__25">25</span><span class="calendar__day calendar__day__26">26</span><span class="calendar__day calendar__day__27">27</span><span class="calendar__day calendar__day__28">28</span><span class="calendar__day calendar__day__29">29</span><span class="calendar__day calendar__day__30">30</span><span class="calendar__day calendar__day__31">31</span><span class="calendar__day calendar__day__32">32</span><span class="calendar__day calendar__day__33">33</span><span class="calendar__day calendar__day__34">34</span><span class="calendar__day calendar__day__35">35</span><span class="calendar__day calendar__day__36">36</span><span class="calendar__day calendar__day__37">37</span><span class="calendar__day calendar__day__38">38</span><span class="calendar__day calendar__day__39">39</span><span class="calendar__day calendar__day__40">40</span><span class="calendar__day calendar__day__41">41</span>
            </div>
        </div>
        <div class="calendar__month calendar__month--2"><strong >mar</strong>
            <div class="calendar__days"><span class="calendar__day calendar__day__0">0</span><span class="calendar__day calendar__day__1">1</span><span class="calendar__day calendar__day__2">2</span><span class="calendar__day calendar__day__3">3</span><span class="calendar__day calendar__day__4">4</span><span class="calendar__day calendar__day__5">5</span><span class="calendar__day calendar__day__6">6</span><span class="calendar__day calendar__day__7">7</span><span class="calendar__day calendar__day__8">8</span><span class="calendar__day calendar__day__9">9</span><span class="calendar__day calendar__day__10">10</span><span class="calendar__day calendar__day__11">11</span><span class="calendar__day calendar__day__12">12</span><span class="calendar__day calendar__day__13">13</span><span class="calendar__day calendar__day__14">14</span><span class="calendar__day calendar__day__15">15</span><span class="calendar__day calendar__day__16">16</span><span class="calendar__day calendar__day__17">17</span><span class="calendar__day calendar__day__18">18</span><span class="calendar__day calendar__day__19">19</span><span class="calendar__day calendar__day__20">20</span><span class="calendar__day calendar__day__21">21</span><span class="calendar__day calendar__day__22">22</span><span class="calendar__day calendar__day__23">23</span><span class="calendar__day calendar__day__24">24</span><span class="calendar__day calendar__day__25">25</span><span class="calendar__day calendar__day__26">26</span><span class="calendar__day calendar__day__27">27</span><span class="calendar__day calendar__day__28">28</span><span class="calendar__day calendar__day__29">29</span><span class="calendar__day calendar__day__30">30</span><span class="calendar__day calendar__day__31">31</span><span class="calendar__day calendar__day__32">32</span><span class="calendar__day calendar__day__33">33</span><span class="calendar__day calendar__day__34">34</span><span class="calendar__day calendar__day__35">35</span><span class="calendar__day calendar__day__36">36</span><span class="calendar__day calendar__day__37">37</span><span class="calendar__day calendar__day__38">38</span><span class="calendar__day calendar__day__39">39</span><span class="calendar__day calendar__day__40">40</span><span class="calendar__day calendar__day__41">41</span>
            </div>
        </div>
        <div class="calendar__month calendar__month--3"><strong>apr</strong>
            <div class="calendar__days"><span class="calendar__day calendar__day__0">0</span><span class="calendar__day calendar__day__1">1</span><span class="calendar__day calendar__day__2">2</span><span class="calendar__day calendar__day__3">3</span><span class="calendar__day calendar__day__4">4</span><span class="calendar__day calendar__day__5">5</span><span class="calendar__day calendar__day__6">6</span><span class="calendar__day calendar__day__7">7</span><span class="calendar__day calendar__day__8">8</span><span class="calendar__day calendar__day__9">9</span><span class="calendar__day calendar__day__10">10</span><span class="calendar__day calendar__day__11">11</span><span class="calendar__day calendar__day__12">12</span><span class="calendar__day calendar__day__13">13</span><span class="calendar__day calendar__day__14">14</span><span class="calendar__day calendar__day__15">15</span><span class="calendar__day calendar__day__16">16</span><span class="calendar__day calendar__day__17">17</span><span class="calendar__day calendar__day__18">18</span><span class="calendar__day calendar__day__19">19</span><span class="calendar__day calendar__day__20">20</span><span class="calendar__day calendar__day__21">21</span><span class="calendar__day calendar__day__22">22</span><span class="calendar__day calendar__day__23">23</span><span class="calendar__day calendar__day__24">24</span><span class="calendar__day calendar__day__25">25</span><span class="calendar__day calendar__day__26">26</span><span class="calendar__day calendar__day__27">27</span><span class="calendar__day calendar__day__28">28</span><span class="calendar__day calendar__day__29">29</span><span class="calendar__day calendar__day__30">30</span><span class="calendar__day calendar__day__31">31</span><span class="calendar__day calendar__day__32">32</span><span class="calendar__day calendar__day__33">33</span><span class="calendar__day calendar__day__34">34</span><span class="calendar__day calendar__day__35">35</span><span class="calendar__day calendar__day__36">36</span><span class="calendar__day calendar__day__37">37</span><span class="calendar__day calendar__day__38">38</span><span class="calendar__day calendar__day__39">39</span><span class="calendar__day calendar__day__40">40</span><span class="calendar__day calendar__day__41">41</span>
            </div>
        </div>
        <div class="calendar__month calendar__month--4"><strong>may</strong>
            <div class="calendar__days"><span class="calendar__day calendar__day__0">0</span><span class="calendar__day calendar__day__1">1</span><span class="calendar__day calendar__day__2">2</span><span class="calendar__day calendar__day__3">3</span><span class="calendar__day calendar__day__4">4</span><span class="calendar__day calendar__day__5">5</span><span class="calendar__day calendar__day__6">6</span><span class="calendar__day calendar__day__7">7</span><span class="calendar__day calendar__day__8">8</span><span class="calendar__day calendar__day__9">9</span><span class="calendar__day calendar__day__10">10</span><span class="calendar__day calendar__day__11">11</span><span class="calendar__day calendar__day__12">12</span><span class="calendar__day calendar__day__13">13</span><span class="calendar__day calendar__day__14">14</span><span class="calendar__day calendar__day__15">15</span><span class="calendar__day calendar__day__16">16</span><span class="calendar__day calendar__day__17">17</span><span class="calendar__day calendar__day__18">18</span><span class="calendar__day calendar__day__19">19</span><span class="calendar__day calendar__day__20">20</span><span class="calendar__day calendar__day__21">21</span><span class="calendar__day calendar__day__22">22</span><span class="calendar__day calendar__day__23">23</span><span class="calendar__day calendar__day__24">24</span><span class="calendar__day calendar__day__25">25</span><span class="calendar__day calendar__day__26">26</span><span class="calendar__day calendar__day__27">27</span><span class="calendar__day calendar__day__28">28</span><span class="calendar__day calendar__day__29">29</span><span class="calendar__day calendar__day__30">30</span><span class="calendar__day calendar__day__31">31</span><span class="calendar__day calendar__day__32">32</span><span class="calendar__day calendar__day__33">33</span><span class="calendar__day calendar__day__34">34</span><span class="calendar__day calendar__day__35">35</span><span class="calendar__day calendar__day__36">36</span><span class="calendar__day calendar__day__37">37</span><span class="calendar__day calendar__day__38">38</span><span class="calendar__day calendar__day__39">39</span><span class="calendar__day calendar__day__40">40</span><span class="calendar__day calendar__day__41">41</span>
            </div>
        </div>
        <div class="calendar__month calendar__month--5"><strong>june</strong>
            <div class="calendar__days"><span class="calendar__day calendar__day__0">0</span><span class="calendar__day calendar__day__1">1</span><span class="calendar__day calendar__day__2">2</span><span class="calendar__day calendar__day__3">3</span><span class="calendar__day calendar__day__4">4</span><span class="calendar__day calendar__day__5">5</span><span class="calendar__day calendar__day__6">6</span><span class="calendar__day calendar__day__7">7</span><span class="calendar__day calendar__day__8">8</span><span class="calendar__day calendar__day__9">9</span><span class="calendar__day calendar__day__10">10</span><span class="calendar__day calendar__day__11">11</span><span class="calendar__day calendar__day__12">12</span><span class="calendar__day calendar__day__13">13</span><span class="calendar__day calendar__day__14">14</span><span class="calendar__day calendar__day__15">15</span><span class="calendar__day calendar__day__16">16</span><span class="calendar__day calendar__day__17">17</span><span class="calendar__day calendar__day__18">18</span><span class="calendar__day calendar__day__19">19</span><span class="calendar__day calendar__day__20">20</span><span class="calendar__day calendar__day__21">21</span><span class="calendar__day calendar__day__22">22</span><span class="calendar__day calendar__day__23">23</span><span class="calendar__day calendar__day__24">24</span><span class="calendar__day calendar__day__25">25</span><span class="calendar__day calendar__day__26">26</span><span class="calendar__day calendar__day__27">27</span><span class="calendar__day calendar__day__28">28</span><span class="calendar__day calendar__day__29">29</span><span class="calendar__day calendar__day__30">30</span><span class="calendar__day calendar__day__31">31</span><span class="calendar__day calendar__day__32">32</span><span class="calendar__day calendar__day__33">33</span><span class="calendar__day calendar__day__34">34</span><span class="calendar__day calendar__day__35">35</span><span class="calendar__day calendar__day__36">36</span><span class="calendar__day calendar__day__37">37</span><span class="calendar__day calendar__day__38">38</span><span class="calendar__day calendar__day__39">39</span><span class="calendar__day calendar__day__40">40</span><span class="calendar__day calendar__day__41">41</span>
            </div>
        </div>
        <div class="calendar__month calendar__empty--2"><strong></strong>
            <div class="year-block hidden">2017</div>
            <div class="clock hidden">
                <div class="clock__hour__container">
                    <div class="clock__hour"></div>
                </div>
                <div class="clock__minute__container">
                    <div class="clock__minute"></div>
                </div>
                <div class="clock__second__container">
                    <div class="clock__second"></div>
                </div>
                <div class="clock__dot"></div>
            </div>
            <div class="date-block hidden">
                <div class="date-block__month">Jan</div>
                <div class="date-block__date">12</div>
                <div class="date-block__day">Wed</div>
            </div>
        </div>
        <div class="calendar__month calendar__month--6"><strong>july</strong>
            <div class="calendar__days"><span class="calendar__day calendar__day__0">0</span><span class="calendar__day calendar__day__1">1</span><span class="calendar__day calendar__day__2">2</span><span class="calendar__day calendar__day__3">3</span><span class="calendar__day calendar__day__4">4</span><span class="calendar__day calendar__day__5">5</span><span class="calendar__day calendar__day__6">6</span><span class="calendar__day calendar__day__7">7</span><span class="calendar__day calendar__day__8">8</span><span class="calendar__day calendar__day__9">9</span><span class="calendar__day calendar__day__10">10</span><span class="calendar__day calendar__day__11">11</span><span class="calendar__day calendar__day__12">12</span><span class="calendar__day calendar__day__13">13</span><span class="calendar__day calendar__day__14">14</span><span class="calendar__day calendar__day__15">15</span><span class="calendar__day calendar__day__16">16</span><span class="calendar__day calendar__day__17">17</span><span class="calendar__day calendar__day__18">18</span><span class="calendar__day calendar__day__19">19</span><span class="calendar__day calendar__day__20">20</span><span class="calendar__day calendar__day__21">21</span><span class="calendar__day calendar__day__22">22</span><span class="calendar__day calendar__day__23">23</span><span class="calendar__day calendar__day__24">24</span><span class="calendar__day calendar__day__25">25</span><span class="calendar__day calendar__day__26">26</span><span class="calendar__day calendar__day__27">27</span><span class="calendar__day calendar__day__28">28</span><span class="calendar__day calendar__day__29">29</span><span class="calendar__day calendar__day__30">30</span><span class="calendar__day calendar__day__31">31</span><span class="calendar__day calendar__day__32">32</span><span class="calendar__day calendar__day__33">33</span><span class="calendar__day calendar__day__34">34</span><span class="calendar__day calendar__day__35">35</span><span class="calendar__day calendar__day__36">36</span><span class="calendar__day calendar__day__37">37</span><span class="calendar__day calendar__day__38">38</span><span class="calendar__day calendar__day__39">39</span><span class="calendar__day calendar__day__40">40</span><span class="calendar__day calendar__day__41">41</span>
            </div>
        </div>
        <div class="calendar__month calendar__month--7"><strong>aug</strong>
            <div class="calendar__days"><span class="calendar__day calendar__day__0">0</span><span class="calendar__day calendar__day__1">1</span><span class="calendar__day calendar__day__2">2</span><span class="calendar__day calendar__day__3">3</span><span class="calendar__day calendar__day__4">4</span><span class="calendar__day calendar__day__5">5</span><span class="calendar__day calendar__day__6">6</span><span class="calendar__day calendar__day__7">7</span><span class="calendar__day calendar__day__8">8</span><span class="calendar__day calendar__day__9">9</span><span class="calendar__day calendar__day__10">10</span><span class="calendar__day calendar__day__11">11</span><span class="calendar__day calendar__day__12">12</span><span class="calendar__day calendar__day__13">13</span><span class="calendar__day calendar__day__14">14</span><span class="calendar__day calendar__day__15">15</span><span class="calendar__day calendar__day__16">16</span><span class="calendar__day calendar__day__17">17</span><span class="calendar__day calendar__day__18">18</span><span class="calendar__day calendar__day__19">19</span><span class="calendar__day calendar__day__20">20</span><span class="calendar__day calendar__day__21">21</span><span class="calendar__day calendar__day__22">22</span><span class="calendar__day calendar__day__23">23</span><span class="calendar__day calendar__day__24">24</span><span class="calendar__day calendar__day__25">25</span><span class="calendar__day calendar__day__26">26</span><span class="calendar__day calendar__day__27">27</span><span class="calendar__day calendar__day__28">28</span><span class="calendar__day calendar__day__29">29</span><span class="calendar__day calendar__day__30">30</span><span class="calendar__day calendar__day__31">31</span><span class="calendar__day calendar__day__32">32</span><span class="calendar__day calendar__day__33">33</span><span class="calendar__day calendar__day__34">34</span><span class="calendar__day calendar__day__35">35</span><span class="calendar__day calendar__day__36">36</span><span class="calendar__day calendar__day__37">37</span><span class="calendar__day calendar__day__38">38</span><span class="calendar__day calendar__day__39">39</span><span class="calendar__day calendar__day__40">40</span><span class="calendar__day calendar__day__41">41</span>
            </div>
        </div>
        <div class="calendar__month calendar__month--8"><strong>sep</strong>
            <div class="calendar__days"><span class="calendar__day calendar__day__0">0</span><span class="calendar__day calendar__day__1">1</span><span class="calendar__day calendar__day__2">2</span><span class="calendar__day calendar__day__3">3</span><span class="calendar__day calendar__day__4">4</span><span class="calendar__day calendar__day__5">5</span><span class="calendar__day calendar__day__6">6</span><span class="calendar__day calendar__day__7">7</span><span class="calendar__day calendar__day__8">8</span><span class="calendar__day calendar__day__9">9</span><span class="calendar__day calendar__day__10">10</span><span class="calendar__day calendar__day__11">11</span><span class="calendar__day calendar__day__12">12</span><span class="calendar__day calendar__day__13">13</span><span class="calendar__day calendar__day__14">14</span><span class="calendar__day calendar__day__15">15</span><span class="calendar__day calendar__day__16">16</span><span class="calendar__day calendar__day__17">17</span><span class="calendar__day calendar__day__18">18</span><span class="calendar__day calendar__day__19">19</span><span class="calendar__day calendar__day__20">20</span><span class="calendar__day calendar__day__21">21</span><span class="calendar__day calendar__day__22">22</span><span class="calendar__day calendar__day__23">23</span><span class="calendar__day calendar__day__24">24</span><span class="calendar__day calendar__day__25">25</span><span class="calendar__day calendar__day__26">26</span><span class="calendar__day calendar__day__27">27</span><span class="calendar__day calendar__day__28">28</span><span class="calendar__day calendar__day__29">29</span><span class="calendar__day calendar__day__30">30</span><span class="calendar__day calendar__day__31">31</span><span class="calendar__day calendar__day__32">32</span><span class="calendar__day calendar__day__33">33</span><span class="calendar__day calendar__day__34">34</span><span class="calendar__day calendar__day__35">35</span><span class="calendar__day calendar__day__36">36</span><span class="calendar__day calendar__day__37">37</span><span class="calendar__day calendar__day__38">38</span><span class="calendar__day calendar__day__39">39</span><span class="calendar__day calendar__day__40">40</span><span class="calendar__day calendar__day__41">41</span>
            </div>
        </div>
        <div class="calendar__month calendar__month--9"><strong>oct</strong>
            <div class="calendar__days"><span class="calendar__day calendar__day__0">0</span><span class="calendar__day calendar__day__1">1</span><span class="calendar__day calendar__day__2">2</span><span class="calendar__day calendar__day__3">3</span><span class="calendar__day calendar__day__4">4</span><span class="calendar__day calendar__day__5">5</span><span class="calendar__day calendar__day__6">6</span><span class="calendar__day calendar__day__7">7</span><span class="calendar__day calendar__day__8">8</span><span class="calendar__day calendar__day__9">9</span><span class="calendar__day calendar__day__10">10</span><span class="calendar__day calendar__day__11">11</span><span class="calendar__day calendar__day__12">12</span><span class="calendar__day calendar__day__13">13</span><span class="calendar__day calendar__day__14">14</span><span class="calendar__day calendar__day__15">15</span><span class="calendar__day calendar__day__16">16</span><span class="calendar__day calendar__day__17">17</span><span class="calendar__day calendar__day__18">18</span><span class="calendar__day calendar__day__19">19</span><span class="calendar__day calendar__day__20">20</span><span class="calendar__day calendar__day__21">21</span><span class="calendar__day calendar__day__22">22</span><span class="calendar__day calendar__day__23">23</span><span class="calendar__day calendar__day__24">24</span><span class="calendar__day calendar__day__25">25</span><span class="calendar__day calendar__day__26">26</span><span class="calendar__day calendar__day__27">27</span><span class="calendar__day calendar__day__28">28</span><span class="calendar__day calendar__day__29">29</span><span class="calendar__day calendar__day__30">30</span><span class="calendar__day calendar__day__31">31</span><span class="calendar__day calendar__day__32">32</span><span class="calendar__day calendar__day__33">33</span><span class="calendar__day calendar__day__34">34</span><span class="calendar__day calendar__day__35">35</span><span class="calendar__day calendar__day__36">36</span><span class="calendar__day calendar__day__37">37</span><span class="calendar__day calendar__day__38">38</span><span class="calendar__day calendar__day__39">39</span><span class="calendar__day calendar__day__40">40</span><span class="calendar__day calendar__day__41">41</span>
            </div>
        </div>
        <div class="calendar__month calendar__month--10"><strong >nov</strong>
            <div class="calendar__days"><span class="calendar__day calendar__day__0">0</span><span class="calendar__day calendar__day__1">1</span><span class="calendar__day calendar__day__2">2</span><span class="calendar__day calendar__day__3">3</span><span class="calendar__day calendar__day__4">4</span><span class="calendar__day calendar__day__5">5</span><span class="calendar__day calendar__day__6">6</span><span class="calendar__day calendar__day__7">7</span><span class="calendar__day calendar__day__8">8</span><span class="calendar__day calendar__day__9">9</span><span class="calendar__day calendar__day__10">10</span><span class="calendar__day calendar__day__11">11</span><span class="calendar__day calendar__day__12">12</span><span class="calendar__day calendar__day__13">13</span><span class="calendar__day calendar__day__14">14</span><span class="calendar__day calendar__day__15">15</span><span class="calendar__day calendar__day__16">16</span><span class="calendar__day calendar__day__17">17</span><span class="calendar__day calendar__day__18">18</span><span class="calendar__day calendar__day__19">19</span><span class="calendar__day calendar__day__20">20</span><span class="calendar__day calendar__day__21">21</span><span class="calendar__day calendar__day__22">22</span><span class="calendar__day calendar__day__23">23</span><span class="calendar__day calendar__day__24">24</span><span class="calendar__day calendar__day__25">25</span><span class="calendar__day calendar__day__26">26</span><span class="calendar__day calendar__day__27">27</span><span class="calendar__day calendar__day__28">28</span><span class="calendar__day calendar__day__29">29</span><span class="calendar__day calendar__day__30">30</span><span class="calendar__day calendar__day__31">31</span><span class="calendar__day calendar__day__32">32</span><span class="calendar__day calendar__day__33">33</span><span class="calendar__day calendar__day__34">34</span><span class="calendar__day calendar__day__35">35</span><span class="calendar__day calendar__day__36">36</span><span class="calendar__day calendar__day__37">37</span><span class="calendar__day calendar__day__38">38</span><span class="calendar__day calendar__day__39">39</span><span class="calendar__day calendar__day__40">40</span><span class="calendar__day calendar__day__41">41</span>
            </div>
        </div>
        <div class="calendar__month calendar__month--11"><strong>dec</strong>
            <div class="calendar__days"><span class="calendar__day calendar__day__0">0</span><span class="calendar__day calendar__day__1">1</span><span class="calendar__day calendar__day__2">2</span><span class="calendar__day calendar__day__3">3</span><span class="calendar__day calendar__day__4">4</span><span class="calendar__day calendar__day__5">5</span><span class="calendar__day calendar__day__6">6</span><span class="calendar__day calendar__day__7">7</span><span class="calendar__day calendar__day__8">8</span><span class="calendar__day calendar__day__9">9</span><span class="calendar__day calendar__day__10">10</span><span class="calendar__day calendar__day__11">11</span><span class="calendar__day calendar__day__12">12</span><span class="calendar__day calendar__day__13">13</span><span class="calendar__day calendar__day__14">14</span><span class="calendar__day calendar__day__15">15</span><span class="calendar__day calendar__day__16">16</span><span class="calendar__day calendar__day__17">17</span><span class="calendar__day calendar__day__18">18</span><span class="calendar__day calendar__day__19">19</span><span class="calendar__day calendar__day__20">20</span><span class="calendar__day calendar__day__21">21</span><span class="calendar__day calendar__day__22">22</span><span class="calendar__day calendar__day__23">23</span><span class="calendar__day calendar__day__24">24</span><span class="calendar__day calendar__day__25">25</span><span class="calendar__day calendar__day__26">26</span><span class="calendar__day calendar__day__27">27</span><span class="calendar__day calendar__day__28">28</span><span class="calendar__day calendar__day__29">29</span><span class="calendar__day calendar__day__30">30</span><span class="calendar__day calendar__day__31">31</span><span class="calendar__day calendar__day__32">32</span><span class="calendar__day calendar__day__33">33</span><span class="calendar__day calendar__day__34">34</span><span class="calendar__day calendar__day__35">35</span><span class="calendar__day calendar__day__36">36</span><span class="calendar__day calendar__day__37">37</span><span class="calendar__day calendar__day__38">38</span><span class="calendar__day calendar__day__39">39</span><span class="calendar__day calendar__day__40">40</span><span class="calendar__day calendar__day__41">41</span>
            </div>
        </div>
        <div class="calendar__month calendar__empty--3"><span class="title"></span>
            <div class="year-block hidden">2017</div>
            <div class="clock hidden">
                <div class="clock__hour__container">
                    <div class="clock__hour"></div>
                </div>
                <div class="clock__minute__container">
                    <div class="clock__minute"></div>
                </div>
                <div class="clock__second__container">
                    <div class="clock__second"></div>
                </div>
                <div class="clock__dot"></div>
            </div>
            <div class="date-block hidden">
                <div class="date-block__month">Jan</div>
                <div class="date-block__date">12</div>
                <div class="date-block__day">Wed</div>
            </div>
        </div>
    </div>


@endsection

@section('script')

    <script>
        $(() => {
            const currentDate = new Date();
            const weekDays = ['sun', 'mon', 'tue', 'wed', 'thu', 'fri', 'sat'];
            const months = ['jan', 'feb', 'mar', 'apr', 'may', 'june', 'july', 'aug', 'sep', 'oct', 'nov', 'dec'];

            $('.date-block__day').text(weekDays[currentDate.getDay()]);
            $('.date-block__date').text(currentDate.getDate());
            $('.date-block__month').text(months[currentDate.getMonth()]);
            $('.year-block').text(currentDate.getFullYear());

            $('.calendar__empty--1 .date-block').removeClass('hidden');
            $('.calendar__empty--2 .clock').removeClass('hidden');
            $('.calendar__empty--3 .year-block').removeClass('hidden');

            for (let i=0; i<12; i++) {
                const year = currentDate.getYear(),
                    month = i,
                    daysCount = daysInMonth(month + 1, year),
                    prevMonthDaysCount = daysInMonth(month, year),
                    firstDay = new Date(year, month, 1),
                    firstDayOfWeek = (firstDay.getDay() + 1);
                let j;
                for (j=0; j<firstDayOfWeek; j++) {
                    let $e = $('.calendar__month--' + i +' .calendar__day__' + j);
                    $e.text(prevMonthDaysCount - firstDayOfWeek + j + 1);
                    $e.addClass('half-transparent');
                    addBold($e, j);
                }
                for (;j<42 && j<firstDayOfWeek+daysCount;j++) {
                    let $e = $('.calendar__month--' + i +' .calendar__day__' + j);
                    $e.text(j - firstDayOfWeek + 1);
                    addBold($e, j);
                }
                for (let k=0;j<42;k++,j++) {
                    let $e = $('.calendar__month--' + i +' .calendar__day__' + j);
                    $e.text(k + 1);
                    $e.addClass('half-transparent');
                    addBold($e, j);
                }
            }

            initLocalClocks();
        });

        const daysInMonth = (m, y) => /8|3|5|10/.test(--m)?30:m==1?(!(y%4)&&y%100)||!(y%400)?29:28:31;

        const addBold = ($e, i) => {
            if (i % 7 == 5 || i % 7 == 6) {
                $e.addClass('bold');
            }
        }

        function initLocalClocks() {
            const date = new Date();
            const seconds = date.getSeconds();
            const minutes = date.getMinutes();
            const hours = date.getHours();

            const hands = [
                {
                    hand: 'clock__hour__container',
                    angle: (hours * 30) + (minutes / 2)
                },
                {
                    hand: 'clock__minute__container',
                    angle: (minutes * 6) + (seconds / 10)
                },
                {
                    hand: 'clock__second__container',
                    angle: (seconds * 6)
                }
            ];
            hands.forEach((hand) => {
                const elements = document.querySelectorAll('.' + hand.hand);
                Array.from(elements).forEach((element) => {
                    element.style.transform = `rotateZ(${ hand.angle }deg)`;
                });
            });
        }
    </script>
@endsection