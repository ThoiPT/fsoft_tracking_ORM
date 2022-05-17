@extends('home')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- SEARCH -->
                <form action="" method="GET">
                @csrf
                <div class="card-header">
                    <h3 class="card-title">Skill List</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="name" id="name" class="form-control float-right" placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" name="search" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                <!-- SEARCH -->
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Status</th>
                            <th>Skill Name</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th style="width: 100px">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($list as $item)
                        <tr>
                            <td>{{ $item -> id }}</td>
                            @if($item ->status == 1)
                                <td>
                                    <small class="badge badge-success">
                                        <i class="far fa-check-square"></i> ON
                                    </small>
                                </td>
                            @else($item ->status == 2)
                                <td>
                                    <small class="badge badge-danger"> OFF</small>
                                </td>
                            @endif
                            <td>{{ $item -> name }}</td>
                            <td>{{ $item -> created_at }}</td>
                            <td>{{ $item -> updated_at }}</td>

                            <td>
                                <a href="/skill/update/{{$item->id}}"  class="btn btn-success">Update</a>
                                <a href="/skill/delete/{{$item->id}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                        <br>{{ $list ->links() }}
                    </table>
                </div>
                <!-- /.card-body -->
            </div>

            <!-- /.card -->
        </div>
    </div>
@endsection
