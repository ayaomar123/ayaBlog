@extends('layouts.admin')
@section('content')
    <div class="container">
        <h1>Edit pages</h1>
        @if (count($errors) > 0)
            <div class = "alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="" action="{{route('pages.update',[$pages->id])}}" method="post">
            {{--<!--    --><?php=// csrf_token() ?>--}}
            <input type="hidden" name="_token" value=" {{csrf_token()}} ">

            <div class="form-group">
                <label for="name">pages Title</label>
                <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" value="{{ $pages->title }}">
            </div>

            <div class="form-group">
                <label for="description">pages Link</label>
                <input type="text" name="link" class="form-control" id="link" aria-describedby="emailHelp" value="{{$pages->link}}">
            </div>

            <div class="form-group">
                <label for="status">pages Status</label>
                <input type="checkbox" name="status" class="form-control" value="1">
            </div>



            <button type="submit" class="btn btn-primary">Edit pages</button>
        </form>

    </div>
@endsection
