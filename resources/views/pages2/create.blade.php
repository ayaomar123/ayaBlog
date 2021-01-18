@extends('layouts.admin')
@section('mtitle','Create Page')
@section('style')
    <style>
        .container{
            margin-top: 50px;
            text-align: left
        }
        .form-control{
            width: 50%;
        }
        .card{
            padding: 50px;
        }
    </style>
@endsection
@section('content')
<div class="container">
    <div class="mb-4">

        <h2 class="text-center py-2"
            style="width: 100%;height:40px; background:#1f1e2e;color:whitesmoke;  font-family: Arial, Helvetica, sans-serif;">
            Create pages
        </h2>

        <div class="" style="float: left">
            <a  class="btn btn-primary" href="{{ route('pages.index') }}"> Back</a>
        </div>

    </div>

</div>
    <div class="container">
        @if (count($errors) > 0)
            <div class = "alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="card" method="post" action="{{route('pages.store')}}">
            <div class="form-group">
              <label for="tilte">Title</label>
              <input type="text" class="form-control" id="tilte" placeholder="Enter tilte">
            </div>

            <div class="form-group">
              <label for="word">Word</label>
              <textarea class="description" name="description"></textarea>
            </div>

            <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="status">
                  <label class="form-check-label" for="status">
                    Active
                  </label>
                </div>
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
