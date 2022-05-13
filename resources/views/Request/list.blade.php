{{--@extends('home')--}}
{{--@section('content')--}}
{{--    <div class="row">--}}
{{--        <div class="col-12">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">--}}
{{--                    <h3 class="card-title">Expandable Table</h3>--}}
{{--                </div>--}}
{{--                <!-- ./card-header -->--}}
{{--                <div class="card-body">--}}
{{--                    <table class="table table-bordered table-hover">--}}
{{--                        <thead>--}}
{{--                        <tr>--}}
{{--                            <th>#</th>--}}
{{--                            <th style="width: 95px">Status</th>--}}
{{--                            <th>Title</th>--}}
{{--                            <th>Skill - Job</th>--}}
{{--                            <th>Other</th>--}}
{{--                            <th>Account</th>--}}
{{--                            <th style="width: 165px">Action</th>--}}
{{--                            <th style="width: 100px">ADD CV</th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        @foreach($data as $item)--}}
{{--                        <tr data-widget="expandable-table" aria-expanded="false">--}}
{{--                            <td>{{ $item->id }}</td>--}}
{{--                            <td>--}}
{{--                                <small class="badge badge-warning">--}}
{{--                                    <i class="fa flag-icon-er"></i>Status Error--}}
{{--                                </small>--}}
{{--                            </td>--}}
{{--                            <td>{{ $item->title }}</td>--}}
{{--                            <td></td>--}}
{{--                            <td></td>--}}
{{--                            <td></td>--}}
{{--                            <td><a href="/request/edit/" class="btn btn-danger">UPDATE STATUS</a></td>--}}
{{--                            <td><a class="btn btn-success">ADD CV</a></td>--}}
{{--                        </tr>--}}
{{--                        @endforeach--}}

{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--                <!--_____________________________________________________________-->--}}
{{--            </div>--}}
{{--            <!-- /.card -->--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}


@foreach($data2 as $d)
    {{ $d -> title}}
@endforeach

