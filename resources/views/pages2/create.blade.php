@extends('Admin.board')
@section('title','Create Pages')
@section('style')
    <style>
        .form-control{
            width: 50%;
        }
        .card{
            padding: 30px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection
@section('content')
    <div class="mb-4">
        <h2 class="text-center py-2"
            style="width: 100%;height:40px; background:#1f1e2e;color:whitesmoke;  font-family: Arial, Helvetica, sans-serif;">
            Create pages
        </h2>
    </div>
        <form class="card" method="post" action="{{route('staticPages.store')}}">
            @csrf
            <div class="form-group">
              <label for="tilte">Title</label>
              <input name="title" value="{{old('title')}}" type="text" class="form-control" id="tilte" placeholder="Enter tilte">
            </div>

            <div class="form-group">
              <label for="word">Word</label>
              <textarea id="summernote" class="description" name="description"></textarea>
            </div>

            <div class="form-group">
                <div class="form-check">
                  <input name="status" value="1" class="form-check-input" type="checkbox" id="status">
                  <label class="form-check-label" for="status">
                    Active
                  </label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary col-md-2">Submit</button>
          </form>

@endsection

@section('script')

<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 200,
            focus: true,
        });

    });

</script>
@endsection
