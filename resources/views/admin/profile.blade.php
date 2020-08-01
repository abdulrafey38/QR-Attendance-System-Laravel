@extends('layouts.admin-layout')
@section('css')

    <style>
        #tabs {
            background: #007b5e;
            color: #eee;
        }

        #tabs h6.section-title {
            color: #eee;
        }

        #tabs .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
            color: #f3f3f3;
            background-color: transparent;
            border-color: transparent transparent #f3f3f3;
            border-bottom: 4px solid !important;
            font-size: 20px;
            font-weight: bold;
        }

        #tabs .nav-tabs .nav-link {
            border: 1px solid transparent;
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem;
            color: #eee;
            font-size: 20px;
        }
    </style>
@endsection


@section('content')
    <main style="margin: 4rem">

        @include('admin.alert')

        <div class="row">
            <div class="col-md-10 m-auto ">
                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                           role="tab" aria-controls="nav-home" aria-selected="true">Profile</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                           role="tab" aria-controls="nav-profile" aria-selected="false">Password</a>

                    </div>
                </nav>

                <div class="tab-content py-3 px-3 px-sm-0 card " id="nav-tabContent">
                    <div class="tab-pane fade show active card-body px-5" id="nav-home" role="tabpanel"
                         aria-labelledby="nav-home-tab">
                        <br>
                        <form method="POST" action="{{url('/admin/profile/update/')}}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <input type="text" name="name" value="{{$admin->name}}" placeholder="Enter Name"
                                       required
                                       class="form-control">
                            </div>

                            <div class="form-group">
                                <input type="email" value="{{$admin->email}}" name="email" required
                                       placeholder="Enter Email"
                                       class="form-control">
                            </div>
                            <div class="form-group mt-5">
                                <button type="submit" class="btn btn-primary btn-block">Update</button>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane fade card-body" id="nav-profile" role="tabpanel"
                         aria-labelledby="nav-profile-tab">
                        <br>
                        <form method="POST" action="{{url('/admin/password/change')}}">
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
                                <button type="submit" class="btn btn-primary btn-block">Change Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection

@section('script')
    <script>

        $(function () {
            $('#profileNav').addClass('active')
        })

    </script>
@endsection