@extends('Admin.board')
@section('title','Edit Slider')
@section('style')
    <style>
        .form-control{
            width: 50%;
        }
    </style>
@endsection
@section('content')
<div class="mb-4">
    <h2 class="text-center py-2"
        style="width: 100%;height:40px; background:#1f1e2e;color:whitesmoke;  font-family: Arial, Helvetica, sans-serif;">
        {{__('lang.EditSliders')}}
    </h2>
</div>
<form id="edit-slider" method="post" action="{{asset("slider/".$slider->id)}}">
    @csrf
    @method("put")
    <div class="row">
        <div class="form-group col-md-12">
            <div class="card">
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                      <label for="title">{{__('lang.Name')}}</label>
                      <input type="text" name="title"  value="{{ $slider->title }}" class="col-md-5 form-control" id="title" placeholder="Please enter title">
                    </blockquote>
                    <br>
                    <blockquote class="blockquote mb-0">
                        <label for="word">{{__('lang.Description')}}</label>
                        <textarea id="mytextarea" class="form-control col-md-5" name="word">{{$slider->word}}</textarea>
                    </blockquote>
                    <br>
                    <blockquote>
                        <div class="col-md-5">
                            <label for="image">{{__('lang.image')}}</label>
                            <input id="image" type="file" name="image" value="{{ old('image') }}"
                                onchange="loadFile(event)">
                        </div>
                        <div class="col-md-5">
                            <img class="card-img-top" id="out" style="width:70%">
                        </div>
                    </blockquote>
                    <br>
                    <blockquote class="blockquote mb-0">
                      <label for="link">{{__('lang.link')}}</label>
                      <input type="text" name="link"  value="{{ $slider->link }}" class="col-md-5 form-control" id="title" placeholder="Please enter title">
                    </blockquote>
                    <br>
                    <div class="form-group">
                        <button style="width:442px" type="submit" class="col-md-2 btn btn-success" id="btn-send">{{__('lang.submit')}}</button>
                        <a class='col-md-2 btn btn-light' href='{{ route('slider.index') }}'>{{__('lang.cancel')}}</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</form>
@endsection

