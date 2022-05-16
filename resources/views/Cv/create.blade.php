@extends('home')
@section('content')
    <div class="col-md-6" style="max-width: 100%">
        <!-- general form elements disabled -->
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">ADD Curriculum Vitae</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="/cv/create" method="POST">
                    @csrf
{{--                    <input name="user_id" hidden value="{{ auth()->user()->id }}">--}}

                    <div class="form-group" data-select2-id="74">
                        <label>Add to</label>
                        <select name="request_id" class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" aria-hidden="true">
                            @foreach($request as $re)
                                <option selected="selected" value="{{ $re -> id }}">{{ $re -> title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="inputSuccess">
                            Full Name
                        </label>
                        <input type="text" class="form-control success" name="name" id="inputSuccess" placeholder="Full Name">
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="inputSuccess">
                            Phone Number
                        </label>
                        <input type="text" class="form-control success" name="phone" id="inputSuccess" placeholder="Phone Number">
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="inputSuccess">
                            Address
                        </label>
                        <input type="text" class="form-control success" name="address" id="inputSuccess" placeholder="Address">
                    </div>

                    <div hidden class="form-group">
                        <label class="col-form-label" for="inputSuccess">
                            Status
                        </label>
                        <input type="number" class="form-control success" name="status" id="inputSuccess" value="0">
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="inputSuccess">
                            File
                        </label>
                        <input type="text" class="form-control success" name="file" id="inputSuccess" placeholder="File">
                    </div>

{{--                    <div class="form-group">--}}
{{--                        <label for="exampleInputFile">File input</label>--}}
{{--                        <div class="input-group">--}}
{{--                            <div class="custom-file">--}}
{{--                                <input type="file" class="custom-file-input" id="exampleInputFile">--}}
{{--                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>--}}
{{--                            </div>--}}
{{--                            <div class="input-group-append">--}}
{{--                                <span class="input-group-text">Upload</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group" data-select2-id="74">--}}
{{--                        <label>Select Skill</label>--}}
{{--                        <select name="skill_id" class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">--}}
{{--                            @foreach($data as $item)--}}
{{--                                <option selected="selected" value="{{ $item->id }}">{{ $item -> name }}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </div>--}}


{{--                    <div class="form-group">--}}
{{--                        <label class="col-form-label" for="inputSuccess">--}}
{{--                            Status--}}
{{--                        </label>--}}
{{--                        <input type="number" class="form-control success" name="status" id="inputSuccess" placeholder="0:OFF - 1:ON">--}}
{{--                    </div>--}}

                    <div class="form-group">
                        <button type="submit" class="btn btn-danger"style="color: white">Confirm</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection

