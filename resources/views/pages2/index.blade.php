@extends('Admin.board')
@section('title', 'staticPages')

@section('content')
    <div class="mb-4">
        <h2 class="text-center py-2"
            style="width: 100%;height:40px; background:#1f1e2e;color:whitesmoke;  font-family: Arial, Helvetica, sans-serif;">
            staticPages
        </h2>
    </div>
    <div class="col-md-3">
        <a style="background:rgb(108, 192, 115);color:white;float: right; width:250px;" class="btn btn-success"
            href="{{ asset('staticPages/create') }}"> Create New Page</a>
    </div>

    <div class="card" style="margin-right:65px;text-align:left;margin-top:60px">
        <table class="table table-hover" style="text-align: left">
            <thead>
                <tr>
                    <th scope="col" width="5%">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
                    <th scope="col" width="22%">option</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ strip_tags($item->description) }}</td>
                        <td>{{ $item->status }}</td>
                        <td>
                            <form method='post' action="{{ route('staticPages.destroy', $item->id) }}">
                                @csrf
                                @method("delete")
                                <a href='{{ route('staticPages.edit', $item->id) }}' class=' btn-sm btn-primary'>Edit</a>
                                <button onclick='return confirm("Are you sure?")' type="submit"
                                    class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
