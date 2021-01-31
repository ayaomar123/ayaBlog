@extends('Admin.board')
@section('title', 'Create Article')
@section('style')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection
@section('content')
    <div class="container mt-2 ">
        <div class="mb-4">
            <h2 class="text-center py-2"
                style="width: 100%;height:40px; background:#1f1e2e;color:whitesmoke;  font-family: Arial, Helvetica, sans-serif;">
                {{__('lang.Create_Article')}}
            </h2>
            <form enctype="multipart/form-data" id="add-article" method="post" action="{{ url('articles') }}">
                @csrf
                <div class="row">
                    <div class="form-group col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <blockquote  class="col-md-8 blockquote mb-0">
                                        <label for="formGroupExampleInput">{{__('lang.Article_Name')}}</label>
                                        <br>
                                        <input style="width:559px" name="name" type="text" name="name" class="form-control"
                                            id="formGroupExampleInput" placeholder="{{__('lang.Article_Name')}}">
                                    </blockquote>
                                </div>
                                <br>
                                <div class="row">
                                    <blockquote class="col-md-8 blockquote mb-0">
                                        <label  for="formGroupExampleInput">{{__('lang.Description')}}</label>
                                        <br>
                                        <textarea style="" class="" name="description"
                                            id="summernote" name="editordata"></textarea>
                                    </blockquote>
                                </div>
                                <br>
                                <div class="row">
                                <blockquote>
                                    <div class="col-md-5">
                                        <label  for="image">{{__('lang.image')}}</label>
                                        <br>
                                        <input class="" id="image" type="file" name="image"
                                            value="{{ old('image') }}" onchange="loadFile(event)">
                                    </div>
                                    <div>
                                        <br>
                                        <img id="out" style="height:150px;width:580px">
                                    </div>
                                </blockquote>
                                </div>
                                <br>
                                <div class="row">
                                <blockquote>
                                    <div class="col-md-5">
                                        <label  for="cover">{{__('lang.cover')}}</label>
                                        <br>
                                        <input class="" id="cover" type="file" name="cover"
                                            value="{{ old('cover') }}" onchange="loadFile2(event)">
                                    </div>
                                    <div>
                                        <br>
                                        <img class="" id="out2" style="height:150px;width:580px">
                                    </div>
                                </blockquote>
                                </div>
                                <br>
                                <div class="row">
                                <blockquote class="blockquote mb-0">
                                    <div class="slideOne">
                                        <input  type="checkbox" value="1" id="published" name="status"
                                            checked />
                                        <label  for="slideOne">{{__('lang.Active')}}</label>
                                    </div>

                                </blockquote>
                                </div>
                                <br> <br>

                                <div class="col-xs-12 col-sm-12 col-md-7 mb-5">
                                    <label  for="category">{{__('lang.Category')}}</label>
                                    <select name="category_id[]" id="category"
                                        class="form-control show-tick" data-live-search="true">
                                        <option selected>{{__('lang.OpenMenu')}}</option>
                                        @foreach ($categories as $category)
                                            <option style="text-align: center" value="{{ $category->id }}">
                                                {{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <button style="" type="submit" class="btn btn-success" id="btn-send">{{__('lang.submit')}}</button>
                                    <a class='btn btn-light ' href='{{ route('articles.index') }}'>{{__('lang.cancel')}}</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
@section('script')
    <script>
        var loadFile = function(event) {
            var out = document.getElementById('out');
            out.src = URL.createObjectURL(event.target.files[0]);
        };

        var loadFile2 = function(event) {
            var out2 = document.getElementById('out2');
            out2.src = URL.createObjectURL(event.target.files[0]);
        };

    </script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 200,
                focus: true,
            });

        });

    </script>
@endsection
