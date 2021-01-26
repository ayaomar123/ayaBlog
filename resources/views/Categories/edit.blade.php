@extends('Admin.board')

@section('title', 'Edit Category')
@section('content')
    <div class="mb-4">
        <h2 class="py-2 text-center " style="width: 100%;height:40px; background:#1F1E2E;color:whitesmoke">
            Edit Category</h2>
    </div>
    <form enctype="multipart/form-data" id="add-category" method="post"
        action="{{ route('categories.update', [$category->id]) }}">
        @csrf
        <input type="hidden" name="id" class="form-control" value="{{ $category->id }}" id="formGroupExampleInput">

        <div class="row">
            <div class="form-group col-md-12">
                <div class="card">
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <label for="formGroupExampleInput">Name</label>
                            <input type="text" name="name" value="{{ $category->name }}" class="col-md-5 form-control"
                                id="formGroupExampleInput" placeholder="Please enter title" value="{{ $category->title }}">
                        </blockquote>
                        <br>
                        <blockquote class="blockquote mb-0">
                            <label for="description">Description</label>
                            <textarea style="height: 170px" class="form-control col-md-5" name="description"
                                placeholder="Write short description fot this category">{{ $category->description }}</textarea>
                            <br>
                            <blockquote>
                                <div>
                                    <label for="image">Choose Category Image</label>
                                    <br>
                                    <input value="{{ $category->image }}" id="image" type="file" name="image"
                                        onchange="loadFile(event)">
                                </div>
                                <div>
                                    <br>
                                    @if (" /storage/categories/{{ $category->image }}")
                                        <img src=" /storage/categories/{{ $category->image }}" class="col-md-5"
                                            style="height:150px;" id="out">
                                    @endif
                                </div>
                            </blockquote>
                            <br>
                            <blockquote class="blockquote mb-0">
                                <div class="slideOne">
                                    <input {{ $category->status == '1' ? 'checked' : '' }} type="checkbox" value="1"
                                        id="published" name="status" />
                                    <label for="slideOne">Active</label>
                                </div>

                            </blockquote>
                            <br>
                            <div class="form-group" style="float: left">
                                <button style="width:442px" type="submit" class="col-md-5 btn btn-success"
                                    id="btn-send">Submit</button>
                                <a class='col-md-5 btn btn-light' href='{{ route('categories.index') }}'>Cancel</a>
                            </div>
                    </div>
                </div>

            </div>
        </div>
    </form>
    <script>
        var loadFile = function(event) {
            var out = document.getElementById('out');
            out.src = URL.createObjectURL(event.target.files[0]);
        };

    </script>
@endsection
