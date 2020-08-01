@extends('layouts.admin-layout')

@section('content')
    <main style="margin: 4rem">
        @include('admin.alert')
        <div class="row">
            <div class="col-md-2 m-auto mb-3">
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample"
                        aria-expanded="false" aria-controls="collapseExample">
                    Add New Program
                </button>
            </div>
        </div>
        <div class="collapse mt-3" id="collapseExample">
            <div class="card card-body">
                <br>
                <div class="col-md-8 m-auto">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h4>Add Program</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{url('/program/store')}}">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Enter Name" required
                                           class="form-control">
                                </div>

                                <div class="form-group">
                                    <select name="department_id" class="form-control">
                                        <option disabled selected>Select Department</option>
                                        @forelse($departments as $dept)
                                            <option value="{{$dept->id}}">{{$dept->name}}</option>
                                        @empty
                                            <p>No Department to choose</p>
                                        @endforelse
                                    </select>

                                </div>

                                <div class="form-group mt-5">
                                    <button type="submit" class="btn btn-primary btn-block">Add Program</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row mt-5">
            <div class="col-md-12 m-auto">

                <div class="card">
                    <div class="card-header">
                        <h4>All Program</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Department</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                @php $count = 0;
                                $program = \App\Program::all();
                                @endphp
                                <tbody>
                                @forelse($program as $pro)
                                    <tr>
                                        <th scope="row">{{ ++$count }}</th>
                                        <td>{{$pro->name}}</td>
                                        <td>{{$pro->department()->first()->name}}</td>

                                        <td>
                                            <a href="#"
                                               onclick="deleteConfirm('{{url('/delete/program/'.$pro->id)}}')"><i
                                                        class="fa fa-close text-danger"></i></a>
                                        </td>


                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7"> No Programs found</td>
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


@endsection

@section('script')
    <script>

        function deleteConfirm(url) {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
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
            $('#courseNav').addClass('active')
        })

    </script>
@endsection