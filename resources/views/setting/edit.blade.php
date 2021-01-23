@extends('Admin.board')
@section('title','Edit Social Links')
@section('style')
    <style>
        .form-control{
            width: 50%;
        }
        .card{
            padding: 50px;
        }
    </style>
@endsection
@section('content')
<div class="mb-4">
    <h2 class="text-center py-2"
        style="width: 100%;height:40px; background:#1f1e2e;color:whitesmoke;  font-family: Arial, Helvetica, sans-serif;">
        Edit Socil Links
    </h2>
</div>
<form id="edit-setting" method="post" action="{{asset("setting/".$setting->id)}}">
    @csrf
    @method("put")
    <div class="row">
        <div class="form-group col-md-12">
            <div class="card">
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                      <label for="facebook">facebook</label>
                      <input type="text" name="facebook"  value="{{ $setting->facebook }}" class="col-md-5 form-control" id="title" placeholder="Please enter title">
                    </blockquote>
                    <br>

                    <blockquote class="blockquote mb-0">
                        <label for="snapchat">snapchat</label>
                        <input type="text" name="snapchat"  value="{{ $setting->snapchat }}" class="col-md-5 form-control" id="snapchat" placeholder="Please enter title">
                      </blockquote>
                      <br>

                      <blockquote class="blockquote mb-0">
                        <label for="linkedin">linkedin</label>
                        <input type="text" name="linkedin"  value="{{ $setting->linkedin }}" class="col-md-5 form-control" id="linkedin" placeholder="Please enter title">
                      </blockquote>
                      <br>

                      <blockquote class="blockquote mb-0">
                        <label for="twitter">twitter</label>
                        <input type="text" name="twitter"  value="{{ $setting->twitter }}" class="col-md-5 form-control" id="twitter" placeholder="Please enter title">
                      </blockquote>
                      <br>

                      <blockquote class="blockquote mb-0">
                        <label for="youtube">youtube</label>
                        <input type="text" name="youtube"  value="{{ $setting->youtube }}" class="col-md-5 form-control" id="youtube" placeholder="Please enter title">
                      </blockquote>
                      <br>

                      <blockquote class="blockquote mb-0">
                        <label for="instagram">instagram</label>
                        <input type="text" name="instagram"  value="{{ $setting->instagram }}" class="col-md-5 form-control" id="instagram" placeholder="Please enter title">
                      </blockquote>
                      <br>

                    <div class="form-group" style="float: left">
                        <button style="width:442px" type="submit" class="col-md-5 btn btn-success" id="btn-send">Submit</button>
                        <a class='col-md-5 btn btn-light' href='{{ route('setting.index') }}'>Cancel</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</form>
@endsection

