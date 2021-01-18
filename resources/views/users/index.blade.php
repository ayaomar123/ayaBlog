@extends('layouts.admin')

@section('mtitle','User')
@section('style')
    <style>
        .container{
            margin-top: 70px;
        }
    </style>
@endsection
@section('content')
<div class="container">
    <div class="mb-4">

        <h2 class="text-center py-2"
            style="width: 100%;height:40px; background:#1f1e2e;color:whitesmoke;  font-family: Arial, Helvetica, sans-serif;">
            Users Management
        </h2>

        <div class="col-md-3">
            @can('role-create')
            <a style="background:rgb(108, 192, 115);color:white;float: right; width:250px;" class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
        @endcan
        </div>

    </div>
</div>



    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="card-body" style="padding-left:50px">
    <table class="table table-bordered" style="text-align: left">
        <tr>
            <th>No</th>
            <th>Name</th>
            {{-- <th>image</th> --}}
            <th>Email</th>
            <th>Roles</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $user)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $user->name }}</td>
                {{-- <td>
                    @if($user->image)
                    <img style='max-width:75px' src='{{asset("storage/$user->image")}}' />
                    @endif
                </td> --}}
                <td>{{ $user->email }}</td>
                <td>
                    @if(!empty($user->getRoleNames()))
                        @foreach($user->getRoleNames() as $v)
                            <label class="badge badge-success">{{ $v }}</label>
                        @endforeach
                    @endif
                </td>
                <td>
                    <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
</div>

    {!! $data->render() !!}


@endsection
