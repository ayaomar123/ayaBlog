@extends('Admin.board')
@section('title','Edit Pages')
@section('style')
    <style>
        .form-control{
            width: 50%;
        }
        .card{
            padding: 30px;
        }
    </style>
@endsection
@section('content')
    <div class="mb-4">
        <h2 class="text-center py-2"
            style="width: 100%;height:40px; background:#1f1e2e;color:whitesmoke;  font-family: Arial, Helvetica, sans-serif;">
            Create Pages
        </h2>
    </div>
    <form class="card" action="{{route('pages.update',[$pages->id])}}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">pages Title</label>
            <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" value="{{ $pages->title }}">
        </div>

        <div class="form-group">
            <label for="description">pages description</label>
            <input type="text" name="description" class="form-control" id="description" aria-describedby="emailHelp" value="{{$pages->description}}">
        </div>

        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="status">
                <label class="form-check-label" for="status"> Active </label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary col-md-2">Edit pages</button>
    </form>

@endsection
