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

                    <!-- Xem User thuoc id Department nao trong bang Department -->
                    <input hidden name="group_id" value="{{optional(\App\Models\User::find(\Illuminate\Support\Facades\Auth::id())->department)->id }}">
                    <div class="form-group">
                        <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i>
                            Request Title
                        </label>
                        <input type="text" class="form-control success" name="title" id="inputSuccess" placeholder="Request Title">
                        <span style="color: red">@error('title')* {{$message}}@enderror</span>
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
                        <input type="text" class="form-control success" name="experience" id="inputSuccess" placeholder="Experience">
                        <span style="color: red">@error('experience')* {{$message}}@enderror</span>
                    </div>


                    <div class="form-group">
                        <label class="col-form-label" for="inputSuccess">
                            Slot Recruits
                        </label>
                        <input type="number" class="form-control success" name="numRecruit" id="inputSuccess" placeholder="Slot">
                        <span style="color: red">@error('numRecruit')* {{$message}}@enderror</span>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="inputSuccess">
                            Level
                        </label>
                        <input type="text" class="form-control success" name="level" id="inputSuccess" placeholder="EX: Internship, Junior">
                        <span style="color: red">@error('level')* {{$message}}@enderror</span>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="inputSuccess">
                            Open Date
                        </label>
                        <input type="date" class="form-control success" name="open" id="inputSuccess" placeholder="EX: Internship, Junior">
                        <span style="color: red">@error('open')* {{$message}}@enderror</span>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="inputSuccess">
                            Close Date
                        </label>
                        <input type="date" class="form-control success" name="close" id="inputSuccess" placeholder="EX: Internship, Junior">
                        <span style="color: red">@error('close')* {{$message}}@enderror</span>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="inputSuccess">
                            Description
                        </label>
                        <textarea name="description" id="editor"></textarea>
                        <span style="color: red">@error('description')* {{$message}}@enderror</span>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group clearfix">
                            <div class="icheck-success d-inline">
                                <input type="radio" name="status"  value="1" id="radioSuccess1">
                                <label for="radioSuccess1">
                                    ON
                                </label>
                            </div><br>
                            <div class="icheck-danger d-inline">
                                <input type="radio" name="status" value="0" id="radioSuccess3">
                                <label for="radioSuccess3">
                                    OFF
                                </label>
                            </div>
                        </div>
                        <span style="color: red">@error('status')* {{$message}}@enderror</span>
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



