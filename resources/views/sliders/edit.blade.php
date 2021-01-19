@extends('Admin.board')
@section('title','Edit Slider')
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
        Edit Slider
    </h2>
</div>
<form id="edit-slider" method="PUT" action="{{route('slider.update',[$slider->id])}}">
    @csrf
    <input type="hidden" name="id" class="form-control" value="{{ $slider->id }}" id="formGroupExampleInput">

    <div class="row">
        <div class="form-group col-md-12">
            <div class="card">
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                      <label for="title">Title</label>
                      <input type="text" name="name"  value="{{ $slider->title }}" class="col-md-5 form-control" id="title" placeholder="Please enter title">
                    </blockquote>
                    <br>
                    <blockquote class="blockquote mb-0">
                        <label for="word">Word</label>
                        <textarea class="form-control col-md-5" name="description">{{$slider->word}}</textarea>
                    </blockquote>
                    <br>
                    <blockquote>
                        <div class="col-md-5">
                            <label for="image">Choose slider Image</label>
                            <input id="image" type="file" name="image" value="{{ old('image') }}"
                                onchange="loadFile(event)">
                        </div>
                        <div class="col-md-5">
                            <img class="card-img-top" id="out" style="width:70%">
                        </div>
                    </blockquote>
                    <br>
                    <blockquote class="blockquote mb-0">
                      <label for="link">link</label>
                      <input type="text" name="name"  value="{{ $slider->link }}" class="col-md-5 form-control" id="title" placeholder="Please enter title">
                    </blockquote>
                    <br>
                    <div class="form-group" style="float: left">
                        <button style="width:442px" type="submit" class="col-md-5 btn btn-success" id="btn-send">Submit</button>
                        <a class='col-md-5 btn btn-light' href='{{ route('slider.index') }}'>Cancel</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</form>
@endsection

@section('script')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: '#mytextarea',
        width: 900,
        height: 300
    });
</script>
@endsection
