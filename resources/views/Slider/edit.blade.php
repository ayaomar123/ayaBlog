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
        @if (count($errors) > 0)
            <div class = "alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form enctype="multipart/form-data" class="card" action="{{route('slider.update',[$slider->id])}}" method="PATCH">
         @csrf

            <div class="form-group">
                <label for="tilte">Title</label>
                <input type="text" class="form-control" id="tilte" value="{{ $slider->title }}" placeholder="Enter tilte">
              </div>

              <div class="form-group">
                  <label for="exampleFormControlFile1">Upload slider image</label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>

              <div class="form-group">
                <label for="word">Word</label>
                <textarea class="description" name="description">{{$slider->word}}</textarea>
              </div>

              <div class="form-group">
              <label for="link">Link</label>
              <input value="{{ $slider->link }}" type="text" class="form-control" id="link">
              </div>

              <button type="submit" class="btn btn-primary col-md-2">Submit</button>
        </form>

    </div>
@endsection

@section('script')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector:'textarea.description',
        width: 900,
        height: 300
    });
</script>
@endsection