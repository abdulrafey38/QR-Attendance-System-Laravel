@extends('layouts.master-layout');
@section('css')
    <style>

    </style>
@endsection


@section('content')
     testing



@endsection

@section('script')
    <script src="https://js.pusher.com/4.2/pusher.min.js"></script>
    <script>
        var pusher = new Pusher('2536485dc36d05e71007', {
            cluster: 'ap2',
            encrypted: true
        });


        var channel = pusher.subscribe('att');
        channel.bind('event', function (message) {
            console.log(message)
            alert('event')
        });
    </script>
@endsection