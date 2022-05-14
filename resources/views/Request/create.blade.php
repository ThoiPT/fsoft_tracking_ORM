@extends('home')
@section('content')
    <div class="col-md-6" style="max-width: 100%">
        <!-- general form elements disabled -->
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">ADD REQUEST</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="/request/create" method="POST" id="frmAddRequest">
                    @csrf
                    <input name="user_id" hidden value="{{ auth()->user()->id }}">
                    <div class="form-group">
                        <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i>
                            Request Title
                        </label>
                        <input type="text" class="form-control success" name="title" id="inputSuccess" placeholder="Request Title">
                    </div>


                    <div class="form-group" data-select2-id="74">
                        <label>Select Skill</label>
                        <select name="skill_id" class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                            @foreach($data as $item)
                                <option selected="selected" value="{{ $item->id }}">{{ $item -> name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group" data-select2-id="120">
                        <label>Other Skill</label>
                        <div class="select2-purple" data-select2-id="119">
                            <select name="other_id[]" class="select2 select2-hidden-accessible" multiple data-placeholder="Select other skill" data-dropdown-css-class="select2-purple" style="width: 100%;" aria-hidden="true">
                                @foreach($data as $item)
                                    <option value="{{$item -> id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="inputSuccess">
                            Experience
                        </label>
                        <input type="text" class="form-control success" name="experience" id="inputSuccess" placeholder="Request Title">
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="inputSuccess">
                            Slot Recruits
                        </label>
                        <input type="number" class="form-control success" name="numRecruit" id="inputSuccess" placeholder="Request Title">
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="inputSuccess">
                            Level
                        </label>
                        <input type="text" class="form-control success" name="level" id="inputSuccess" placeholder="EX: Internship, Junior">
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="inputSuccess">
                            Open Date
                        </label>
                        <input type="date" class="form-control success" name="open" id="inputSuccess" placeholder="EX: Internship, Junior">
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="inputSuccess">
                            Close Date
                        </label>
                        <input type="date" class="form-control success" name="close" id="inputSuccess" placeholder="EX: Internship, Junior">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="inputSuccess">
                            Description
                        </label>
                        <textarea name="description" id="editor"></textarea>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="inputSuccess">
                            Status
                        </label>
                        <input type="number" class="form-control success" name="status" id="inputSuccess" placeholder="0:OFF - 1:ON">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-danger"style="color: white">ADD REQUEST</button>
                    </div>

                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection
