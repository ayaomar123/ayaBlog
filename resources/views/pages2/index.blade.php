@extends("layouts.admin")
@section("mtitle","Pages")
@section('style')
    <style>
        .container{
            margin-top: 0px;
        }
    </style>
@endsection

@section("content")
<div class="container mt-2">
    <div class="mb-4">

        <h2 class="text-center py-2"
            style="width: 100%;height:40px; background:#1f1e2e;color:whitesmoke;  font-family: Arial, Helvetica, sans-serif;">
             Pages
        </h2>

        <div class="col-md-3">
            <a style="background:rgb(108, 192, 115);color:white;float: right; width:250px;" class="btn btn-success" href="{{asset('pages/create')}}"> Create New Page</a>
        </div>

    </div>
</div>

<table class="table table-hover" style="text-align: left;margin-left:60px">

    <thead>
        <tr>
            <th width="5%">#</th>
            <th>Title</th>
            <th>Description</th>
            <th>Status</th>
            <th width="22%">option</th>
        </tr>
    </thead>
    <tbody>
        @foreach($items as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->title }}</td>
            <td>{{ $item->description }}</td>
            <td>{{ $item->status }}</td>
            <td>
                <form method='post' action='{{asset("pages/".$item->id)}}'>
                    @csrf
                    @method("delete")
                    <a href='{{ route("pages.edit",$item->id) }}' class='btn btn-sm btn-primary'>Edit</a>
                    <!-- <input type='submit' onclick='return confirm("Are you sure?")' value='Delete'
                        class='btn btn-danger btn-sm ' /> -->
                    <a href='{{ route("pages.delete",$item->id) }}' class='btn btn-warning btn-sm'
                        onclick='return confirm("Are you sure?")'>Delete</a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<!-- <div class="card mb-3" style="max-width: 1500px;">
    <div class="row no-gutters">
        <div class="col-md-4">
            <img style="max-width: 350px;"
                src="https://media.wired.com/photos/5e9f574ed42e6f0008f47b7a/master/w_2560%2Cc_limit/Gear-Top-Apple_new-iphone-se-white_04152020.jpg"
                class="card-img" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h2 class="card-title">Card title</h2>
                <p class="card-text">details</p>
                <p class="card-text"><small class="text-muted">slug</small></p>
                <p class="card-text"><small class="text-muted">active</small></p>
            </div>
        </div>
    </div>
</div> -->
@endsection
