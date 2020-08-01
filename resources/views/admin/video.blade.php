@extends('layouts.admin-layout');
@section('css')

    <style>
        .inputDnD .form-control-file {
            position: relative;
            width: 100%;
            height: 100%;
            min-height: 6em;
            outline: none;
            visibility: hidden;
            cursor: pointer;
            background-color: #c61c23;
            box-shadow: 0 0 5px solid currentColor;
        }

        .inputDnD .form-control-file:before {
            content: attr(data-title);
            position: absolute;
            top: 0.5em;
            left: 0;
            width: 100%;
            min-height: 6em;
            line-height: 2em;
            padding-top: 1.5em;
            opacity: 1;
            visibility: visible;
            text-align: center;
            border: 0.25em dashed currentColor;
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            overflow: hidden;
        }

        .inputDnD .form-control-file:hover:before {
            border-style: solid;
            box-shadow: inset 0px 0px 0px 0.25em currentColor;
        }

        .modal-body {
            position: relative;
            padding: 0px;
        }

        .close {
            position: absolute;
            right: -30px;
            top: 0;
            z-index: 999;
            font-size: 2rem;
            font-weight: normal;
            color: #fff;
            opacity: 1;
        }

        .modal-dialog {
            max-width: 800px;
            margin: 30px auto;
            margin-top: 8rem;
        }


    </style>
@endsection


@section('content')
    <main style="margin: 4rem">
        @include('admin.alert')
        @php $faculties = \App\Instructor::all() @endphp
        <div class="row m-b-1">
            <div class="col-sm-6 m-auto">
                <form action="{{url('/video/upload')}}" enctype="multipart/form-data" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <input type="text" name="title" placeholder="Enter Video title " required
                               class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <select class="btn btn-success btn-block" name="faculty_id" class="form-control">
                            <option disabled selected>Select Instructor</option>
                            @forelse($faculties as $faculty)
                                <option value="{{$faculty->id}}">{{$faculty->name}}</option>
                            @empty
                                <p>No Instructor found.</p>
                            @endforelse
                        </select>
                    </div>
                    <div class="form-group inputDnD">
                        <label class="sr-only" for="inputFile">Video Upload</label>
                        <input name="video" type="file" class="form-control-file text-success font-weight-bold"
                               id="inputFile"
                               accept="video/*" onchange="readUrl(this)" data-title="Drag and drop a Video">
                    </div>
                    <button type="submit" class="btn btn-success btn-block">upload Video
                    </button>
                </form>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12 m-auto">

                <div class="card">
                    <div class="card-header">
                        <h4>All Uploaded Videos</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Instructor</th>
                                    <th>Video</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                @php $count = 0; @endphp
                                <tbody>
                                @forelse($videos as $video)
                                    <tr>
                                        <th scope="row">{{ ++$count }}</th>
                                        <td>{{$video->title}}</td>

                                        <td>{{$video->faculty->name}}</td>
                                        <td>
                                            <a href="#" data-src="{{asset($video->file_path)}}"
                                               onclick="playVideo(this)"
                                            ><i class="fa fa-video-camera text-success"></i></a>
                                        </td>

                                        <td>
                                            <a href="#"
                                               onclick="deleteConfirm('{{url('/video/delete/'.$video->id)}}')">
                                                <i class="fa fa-close text-danger"></i></a>
                                        </td>

                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5"> No video found</td>
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
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-body">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <video id="media" width="400" controls>
                            <source id="videoSrc" src=""
                                    type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                    </div>


                </div>

            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>

        function playVideo(context) {
            var src = $(context).data('src');
            $("#videoSrc").attr('src', src);
            $("#media")[0].load();

            $('#myModal').modal('show');
        }

        $('#myModal').on('hidden.bs.modal', function (e) {
            $("#media")[0].pause();
        });


        function readUrl(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    var imgData = e.target.result;
                    var imgName = input.files[0].name;
                    input.setAttribute("data-title", imgName);
                    console.log(e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }

        }

        function deleteConfirm(url) {
            swal({
                title: 'Are you sure?',
                text: "You wont to delete this video!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then(function (result) {
                if (result.value) {
                    window.location.href = url;
                }
            })
        }

        $(function () {
            $('#videoNav').addClass('active')
        })

    </script>
@endsection