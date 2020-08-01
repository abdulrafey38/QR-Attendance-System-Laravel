@extends('layouts.admin-layout')
@section('css')

    <style>

    </style>
@endsection


@section('content')
    <main style="margin: 4rem">
        @include('admin.alert')
        <div class="row mt-5">
            <div class="col-md-12 m-auto">

                <div class="card">
                    <div class="card-header">
                        <h4>MESSAGES FROM USERS</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>ID</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                @php $count = 0;
                                $contacts = \App\ContactUs::all();
                                @endphp
                                <tbody>
                                @forelse($contacts as $contact)
                                    <tr>
                                        <th scope="row">{{ ++$count }}</th>
                                        <td>{{$contact->name}}</td>
                                        <td>{{$contact->email}}</td>
                                        <td>{{$contact->user_id}}</td>
                                        <td>{{$contact->message}}</td>
                                        <td>
                                            <a href="#"
                                               onclick="deleteConfirm('{{url('/delete/request/'.$contact->id)}}')">
                                                <i class="fa fa-close text-danger"></i></a>
                                        </td>

                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5"> No Message found</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


{{--    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"--}}
{{--         aria-hidden="true">--}}
{{--        <div class="modal-dialog" role="document">--}}
{{--            <div class="modal-content">--}}

{{--                <div class="modal-body">--}}

{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                        <span aria-hidden="true">&times;</span>--}}
{{--                    </button>--}}
{{--                    <!-- 16:9 aspect ratio -->--}}
{{--                    <div class="embed-responsive embed-responsive-16by9">--}}
{{--                        <video id="media" width="400" controls>--}}
{{--                            <source id="videoSrc" src=""--}}
{{--                                    type="video/mp4">--}}
{{--                            Your browser does not support HTML5 video.--}}
{{--                        </video>--}}
{{--                    </div>--}}


{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection

@section('script')
    <script>

        function deleteConfirm(url) {
            swal({
                title: 'Are you sure?',
                text: "You want to delete this request!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes!'
            }).then(function (result) {
                if (result.value) {
                    window.location.href = url;
                }
            })
        }

        $(function () {
            $('#contactNav').addClass('active')
        })

    </script>
@endsection