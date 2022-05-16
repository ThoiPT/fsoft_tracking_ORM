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
                <form action="/cv/update/{{$cvitaes -> id}}" method="POST">
                    @csrf
{{--                                        <input name="user_id" hidden value="{{ auth()->user()->id }}">--}}
                    <div class="form-group" data-select2-id="74">
                        <label>Add to</label>
                        <select name="request_id" class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" aria-hidden="true">
                            @foreach($cvData as $cvd)

                            <option selected="selected" value="{{ $cvitaes -> id }}"> {{ $cvd->request->title ?? 'None' }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="inputSuccess">
                            Full Name
                        </label>
                        <input  type="text" class="form-control success" name="name" id="inputSuccess" value="{{ $cvitaes -> name }}">
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="inputSuccess">
                            Phone Number
                        </label>
                        <input type="text" class="form-control success" name="phone" id="inputSuccess"value="{{ $cvitaes -> phone }}">
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="inputSuccess">
                            Address
                        </label>
                        <input type="text" class="form-control success" name="address" id="inputSuccess" value="{{ $cvitaes -> address }}">
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="inputSuccess">
                            File
                        </label>
                        <input  type="text" class="form-control success" name="file" id="inputSuccess" value="{{ $cvitaes -> file }}">
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="inputSuccess">
                            Status: 0 = New, 1 = Interview, 2 = Offer, 3 = Onboard
                        </label>
                        <input type="number" class="form-control success" name="status" id="inputSuccess" value="{{ $cvitaes->status }}">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-danger"style="color: white">Confirm</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection

