@extends('layouts.master-layout')


@section('css')
    <style>

    </style>
@endsection

@section('content')
    <div class="container "
         style="margin-top: 10rem!important; margin-right:  10rem!important;margin-bottom:  6rem!important">
        <div class="row ">

            <div class="col-md-9 text-center">
                <h2>Update Password</h2>
            </div>
            <div class="col-md-8 m-auto" style="margin-left: 7rem !important;">
                <form method="POST" action="{{url('password/update')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <input type="password" name="old_password" required placeholder="Enter old Password"
                               class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" required placeholder="Enter new Password"
                               class="form-control">
                    </div>
                    <div class="form-group">

                        <input type="password" name="password_confirmation" required
                               placeholder="Re enter new Password"
                               class="form-control">
                    </div>
                    <div class="form-group mt-5">
                        <button type="submit" class="btn btn-danger btn-block">Change Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        @if (session('error'))
        swal(
            'error',
            'old password or confirm password not match.',
            'error'
        );
        @endif


    </script>
@endsection