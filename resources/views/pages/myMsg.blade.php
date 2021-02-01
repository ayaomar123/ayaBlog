@extends('Admin.board')
@section('title', 'staticPages')

@section('content')
    <div class="mb-4">
        <h2 class="text-center py-2"
            style="width: 100%;height:40px; background:#1f1e2e;color:whitesmoke;  font-family: Arial, Helvetica, sans-serif;">
            My Message
        </h2>
    </div>

    <div class="card" style="margin-top:60px">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Message</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone}}</td>
                        <td>{{ $item->msg }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
