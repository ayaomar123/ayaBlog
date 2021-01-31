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
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    </style>
@endsection
@section('content')
    <div class="mb-4">
        <h2 class="text-center py-2"
            style="width: 100%;height:40px; background:#1f1e2e;color:whitesmoke;  font-family: Arial, Helvetica, sans-serif;">
            {{__('lang.EditPages')}}
        </h2>
    </div>
    <form class="card" action="{{route('staticPages.update',[$pages->id])}}" method="post">
        @csrf
        @method('put')

        <div class="form-group">
            <label for="name">{{__('lang.Name')}}</label>
            <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" value="{{ $pages->title }}">
        </div>

        <div class="form-group">
            <label for="description">{{__('lang.Description')}}</label>
            <br>
            <textarea id="summernote" class="description" name="description">{{strip_tags($pages->description)}}</textarea>
        </div>

        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="status">
                <label class="pr-5 form-check-label" for="status"> {{__('lang.Activate')}} </label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary col-md-2">{{__('lang.EditPages')}}</button>
    </form>

@endsection
@section('script')
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 500,
            focus: true,
        });

    });

</script>
@endsection
