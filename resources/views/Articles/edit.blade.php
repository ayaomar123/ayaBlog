@extends('Admin.board')
@section('title', 'Edit')
@section('style')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection
@section('content')

    <div class="container ">
        <div class="mb-4 mt-3">
            <h2 class="text-center py-2 " style="width: 100%;height:40px; background:#1F1E2E;color:whitesmoke">
                {{__('lang.editArticle')}}</h2>

            <form enctype="multipart/form-data" id="add-article" method="post"
                action="{{ route('articles.update', [$articles->id]) }}">
                @csrf
                <input type="hidden" name="id" class="form-control" value="{{ $articles->id }}" id="formGroupExampleInput">

                <div class="row">
                    <div class="form-group col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <blockquote class="col-md-8 blockquote mb-0">
                                    <label for="formGroupExampleInput">{{__('lang.Article_Name')}}</label>
                                    <br>
                                    <input style="width:559px" name="name" value="{{ $articles->name }}"
                                        type="text" name="name" class="form-control" id="formGroupExampleInput"
                                        placeholder="Please enter name">
                                </blockquote>
                                <br>
                                <div class="row">
                                    <blockquote class="col-md-8 blockquote mb-0">
                                        <label for="formGroupExampleInput">{{__('lang.Description')}}</label>
                                        <br>
                                        <textarea style="" class="" name="description" id="summernote"
                                            name="editordata">{{ $articles->description }}</textarea>
                                    </blockquote>
                                </div>
                                <br>
                                <blockquote>
                                    @if (" /storage/articles/{{ $articles->image }}")
                                        <div class="col-md-5">
                                            <label for="image">{{__('lang.image')}}</label>
                                            <br>
                                            <input class="" id="image" type="file" name="image"
                                                value="{{ $articles->image }}" onchange="loadFile(event)">
                                        </div>
                                        <div>
                                            <br>
                                            <img src=" /storage/articles/{{ $articles->image }}" class=""
                                                style="height:150px;width:580px" id="out">
                                        </div>

                                    @endif
                                </blockquote>
                                <br>
                                <blockquote>
                                    <div class="col-md-5">
                                        <label for="cover">{{__('lang.cover')}}</label>
                                        <br>
                                        <input class="" id="cover" type="file" name="cover" value="{{ old('cover') }}"
                                            onchange="loadFile2(event)">
                                    </div>
                                    <div>
                                        <br>
                                        @if (" /storage/articles/{{ $articles->cover }}")
                                            <img src=" /storage/articles/{{ $articles->cover }}" class=""
                                                style="height:150px;width:580px" id="out2">
                                        @endif
                                    </div>
                                </blockquote>
                                <br>
                                <div class="col-xs-12 col-sm-12 col-md-7 mb-5">
                                    <label for="category">{{__('lang.Category')}}</label>
                                    <select name="category_id[]" id="category"
                                        class="form-control show-tick" data-live-search="true">
                                        <option selected>{{__('lang.OpenMenu')}}</option>
                                        @foreach ($categories as $category)
                                            <option style="text-align: center" value="{{ $category->id }}">
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <blockquote class="blockquote mb-0">
                                    <div class="slideOne">
                                        <input {{ $articles->status == '1' ? 'checked' : '' }} type="checkbox" value="1"
                                            id="published" name="status" />
                                        <label for="slideOne">{{__('lang.Activate')}}</label>
                                    </div>
                                    <br>
                                </blockquote>
                                <br>
                                <div class="form-group">
                                    <button type="submit" class="col-md-2 btn btn-success"
                                        id="btn-send">{{__('lang.submit')}}</button>
                                    <a class='col-md-2 btn btn-light' href='{{ route('articles.index') }}'>{{__('lang.cancel')}}</a>
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

        $(document).ready(function() {
            $('#summernote').summernote({
                height: 200,
                focus: true,
            });

        });

    </script>
@endsection
