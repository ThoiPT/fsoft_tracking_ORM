@extends('home')
@section('content')
    <div class="col-md-6" style="max-width: 100%">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">New Department</h3>
            </div>
            <!-- form start -->

            <form action="{{ route('post.department.create') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Department Name</label>
                        <input type="text" class="form-control" name="name" id="exampleInputSkill" placeholder="Enter name">
                        <span style="color: red">@error('name')* {{$message}}@enderror</span>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="inputSuccess">
                            Description
                        </label>
                        <textarea name="description" id="editor"></textarea>
                        <span style="color: red">@error('description')* {{$message}}@enderror</span>
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
@endsection


