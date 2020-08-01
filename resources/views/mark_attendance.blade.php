@extends('layouts.master-layout');


<html>
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>


@section('content')
<body >

<div  class="container-fluid">
    <div class="row">
        <div class="col-md-10 m-auto" >

            <div class="row mt-4" style="margin-bottom: 4rem">
                <div class="col-md-6 text-center">
                    <h3>Scan Qr Code
                        <button data-toggle="modal" data-target="#modal12" class="btn btn-sm btn-success">Full Screen
                        </button>
                    </h3>
                    {!! QrCode::size(500)->color(0,0,128)->generate($qr_value); !!}

                    <div>
                    <h5>Attendance Marked:<div id="count">{{$attendances->count()}}</div></h5>
                    </div>

                </div>
                <div id = "refresh" class="col-md-6">
                    <form id="rr" action="{{url('mark-student-attendance/'.$section->id.'/'.$section->course_id)}}"
                          method="post">
                        {{csrf_field()}}
                        <table id="datatables" class="table table-active"
                               data-scroll-reveal="enter from the bottom after 0.3s">
                            <thead>
                            <tr>
                                <th>Mark</th>
                                <th>Registration #</th>
                                <th>Name</th>
                            </tr>
                            </thead>
                            <tbody id="body12">
                            @forelse($section->students as $key =>  $student)
                                <tr>
                                    <td>
                                        <input type="hidden" name="student[{{$key}}][id]" value="{{$student->id}}">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="student[{{$key}}][present]"
                                                   value="{{$student->id}}"
                                                   @if(in_array($student->id, $attendances->pluck('student_id')->toArray())) checked
                                                   @endif
                                                   class="custom-control-input" id="std{{$student->id}}">
                                            <label class="custom-control-label" for="std{{$student->id}}"></label>
                                        </div>
                                    </td>

                                    <td>{{$student->S_UID}}</td>
                                    <td>{{$student->name}}</td>
                                </tr>
                            @empty
                            @endforelse
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="report" value="yes"
                                           class="custom-control-input" id="markAttt">
                                    <label class="custom-control-label" for="markAttt">Send Report</label>
                                </div>
                            </div>

                            <div class="col-md-8 m-auto">
                            <a class="btn btn-danger fa fa-refresh btn-block" onclick="up();">QR Check</a>
                            </div>
                            <div class="col-md-8 m-auto">
                                <button  class="btn btn-success btn-block mt-2">Update</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="modal12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Scan QR Code</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body m-auto">
                {!! QrCode::size(500)->color(0,0,128)->generate($qr_value); !!}
            </div>
        </div>
    </div>
</div>

@endsection

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="https://js.pusher.com/4.1/pusher.min.js"></script>



<script>
    function up()
    {
        $( "#rr" ).load(window.location.href + " #rr" );
        $( "#count" ).load(window.location.href + " #count" );
    }
</script>


<script>
    $(function() {
        $("#Brefresh").click(function(evt) {
            $("#refresh").load("index.php")
            evt.preventDefault();
        })
    })
</script>

<script>

    Pusher.logToConsole = true;
    var pusher = new Pusher('a97e38309ec8de234ce7', {
        cluster: 'ap2',
        forcedTLS: true,
        encrypted:true

    });
    console.log('{{$qr_value}}')

    var channel = pusher.subscribe('{{$qr_value}}');
    channel.bind('event', function (data) {
        var id = '#std' + data.id;
        $(id).click();

    });

    $('input[type=checkbox]').change(function () {
        console.log(this.id)
        if (this.id !== 'markAttt') {
            if (this.checked) {
                $('#count').text(Number($('#count').text()) + 1)
            } else {
                $('#count').text(Number($('#count').text()) - 1)
            }
        }
    });
</script>

</body>
</html>


