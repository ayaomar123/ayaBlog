@extends('Admin.board')
@section('title', 'Create Slider')
@section('style')
    <style>
        .form-control {
            width: 50%;
        }

        .card {
            padding: 50px;
        }

    </style>
@endsection
@section('content')

    <div class="mb-4">
        <h2 class="text-center py-2"
            style="width: 100%;height:40px; background:#1f1e2e;color:whitesmoke;  font-family: Arial, Helvetica, sans-serif;">
            Create Slider
        </h2>
    </div>

    <form id="add-category" method="post" action="{{ url('slider') }}" name="formName" enctype="multipart/form-data">
        @csrf
        {{ csrf_field() }}
        <div class="row">
            <div class="form-group col-md-12">
                <div class="card">
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <label for="title">Slider Title</label>
                            <input type="text" value="{{ old('title') }}" name="title" class="form-control col-md-5"
                                id="title" placeholder="title">
                        </blockquote>
                        <br>
                        <blockquote class="blockquote mb-0">
                            <label for="word">Word</label>
                            <textarea class="form-control col-md-5 tinymce-editor" name="word" id="mytextarea"
                                placeholder="word">{{ old('word') }}</textarea>
                        </blockquote>
                        <br>
                        <blockquote>
                            <div class="col-md-5">
                                <label for="image">Choose Slider Image</label>
                                <input class="col-md-5" id="image" type="file" name="image" value="{{ old('image') }}">
                            </div>
                        </blockquote>
                        <br>
                        <blockquote class="blockquote mb-0">
                            <label for="link">Slider link</label>
                            <input type="text" value="{{ old('link') }}" name="link" class="form-control col-md-5" id="link"
                                placeholder="link">
                        </blockquote>
                        <br>
                        <div class="form-group">
                            <button style="" type="submit" class="btn btn-success col-md-2"
                                id="btn-send">{{ __('lang.submit') }}</button>
                            <a class='btn btn-light col-md-2' href='{{ route('slider.index') }}'>{{ __('lang.cancel') }}</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </form>
@endsection
