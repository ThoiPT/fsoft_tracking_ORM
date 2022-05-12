@extends('home')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Skill List</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Skill Name</th>
                            <th>Created At</th>
                            <th>Status</th>
                            <th style="width: 100px">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($list as $item)
                        <tr>
                            <td>{{ $item -> id }}</td>
                            <td>{{ $item -> name }}</td>
                            <td>{{ $item -> created_at }}</td>
                            @if($item ->status == 1)
                                <td>
                                    <small class="badge badge-success">
                                        <i class="far fa-check-square"></i>ON
                                    </small>
                                </td>
                            @else($item ->status == 2)
                                <td>
                                    <small class="badge badge-danger"> OFF</small>
                                </td>
                            @endif
                            <td>
                                <a href="/skill/update/{{$item->id}}" class="btn btn-success">Update</a>
                                <a href="/skill/delete/" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
