@extends('Admin.board')
@section('title', 'Create Article')
@section('name')
    <a href="#" class="btn btn-primary">Article</a>
    <a href="#" class="btn btn-primary">Create Article</a>
@endsection
@section('content')
    <div class="container mt-2 ">
        <div class="mb-4">
            <h2 class="text-center py-2"
                style="width: 100%;height:40px; background:#1f1e2e;color:whitesmoke;  font-family: Arial, Helvetica, sans-serif;">
                Create Article
            </h2>
            <form enctype="multipart/form-data" id="add-article" method="post" action="{{ url('articles') }}">
                @csrf
                <div class="row">
                    <div class="form-group col-md-12">
                        <div class="card" >
                            <div class="card-body" >
                                <blockquote class="blockquote mb-0">
                                    <label style="float: left;" for="formGroupExampleInput">Enter Article Name</label>
                                    <br>
                                    <input type="text" name="name" class="form-control col-md-5" id="formGroupExampleInput"
                                        placeholder="Please enter name">
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                </blockquote>
                                <br>
                                <blockquote class="blockquote mb-0">
                                    <label style="float: left" for="message">Description</label>
                                    <br>
                                    <textarea style="margin-left: 108px;" class="form-control col-md-5" name="description"
                                        placeholder="Please enter description"></textarea>
                                    <span class="text-danger">{{ $errors->first('description') }}</span>
                                </blockquote>
                                <br>
                                <blockquote>
                                    <div class="col-md-5">
                                        <label style="float: left" for="image">Choose article Image</label>
                                        <br>
                                        <input  class="col-md-5" id="image" type="file" name="image"
                                            value="{{ old('image') }}" onchange="loadFile(event)">
                                    </div>
                                    <div class="col-md-6">
                                        <img class="card-img-top col-md-5" id="out" style="width:70%">
                                    </div>
                                </blockquote>
                                <br>
                                <blockquote class="blockquote mb-0">
                                    <div class="slideOne">
                                        <input style="float: left" type="checkbox" value="1" id="published" name="status" checked />
                                        <label style="float: left" for="slideOne">Active</label>
                                    </div>

                                </blockquote>
                                <br> <br>
                                <div class="col-xs-12 col-sm-12 col-md-5 mb-5">
                                    <label style="float: left" for="category">Select Category</label>
                                    <select style="margin-left: 108px;" name="category_id[]" id="category" class="form-control show-tick"
                                        data-live-search="true" multiple>
                                        @foreach ($categories as $category)
                                            <option style="text-align: center" value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-6" style="float: left">
                                    <button style="" type="submit" class="btn btn-success"
                                        id="btn-send">Submit</button>
                                    <a class='btn btn-light ' href='{{ route('articles.index') }}'>Cancel</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </form>

        </div>
    </div>
    <script>
        var loadFile = function(event) {
            var out = document.getElementById('out');
            out.src = URL.createObjectURL(event.target.files[0]);
        };

    </script>
@endsection
