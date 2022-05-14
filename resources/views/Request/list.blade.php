@extends('home')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Request List</h3>
                </div>
                <!-- ./card-header -->
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th style="width: 40px">#</th>
                            <th style="width: 95px">Status</th>
                            <th>Title</th>
                            <th>Skill - Job</th>
                            <th>Description</th>
{{--                            <th>Other</th>--}}
{{--                            <th>Account</th>--}}
                            <th style="width: 186px">Action</th>
                            <th style="width: 100px">ADD CV</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                        <tr data-widget="expandable-table" aria-expanded="false">
                            <td>{{ $item->id }}</td>
                            <td>
                                @if($item->status == 1)
                                    <small class="badge badge-success">
                                        <i class="fa flag-icon-er"></i>Request Open
                                    </small>
                                @elseif($item -> status == 2)
                                    <small class="badge badge-danger">
                                        <i class="fa flag-icon-er"></i>Request Close
                                    </small>
                                    @else
                                    <small class="badge badge-warning">
                                        <i class="fa flag-icon-er"></i>Status Error
                                    </small>
                                @endif
                            </td>

                            <td>{{ $item->title }}</td>
                            <td>{{ $item->skill->name }}</td>
                            <td>{!!$item->description !!}</td>
{{--                            <td></td>--}}
{{--                            <td></td>--}}
                            <td>
                                <a href="/request/update/{{$item->id}}" class="btn btn-warning">UPDATE</a>
                                <a href="/request/delete/{{$item->id}}" class="btn btn-danger">DELETE</a>
                            </td>
                            <td><a class="btn btn-success">ADD CV</a></td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                <!--_____________________________________________________________-->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection




