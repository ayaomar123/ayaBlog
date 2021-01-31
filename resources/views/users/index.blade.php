@extends('Admin.board')
@section('title','User')
@section('content')

    <div class="mb-4">

        <h2 class="text-center py-2"
            style="width: 100%;height:40px; background:#1f1e2e;color:whitesmoke;  font-family: Arial, Helvetica, sans-serif;">
            {{__('lang.User')}}
        </h2>
        <div class="col-md-3">
            <a style="background:rgb(108, 192, 115);color:white;float: right; width:250px;" class="btn btn-success" href="{{ route('users.create') }}">{{__('lang.createUser')}}</a>
        </div>
</div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="card" style="margin-top:60px">
        <table class="table table-hover" style="padding-left:5px">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{__('lang.Name')}}</th>
                    <th scope="col">{{__('lang.myImage')}}</th>
                    <th scope="col">{{__('lang.Email')}}</th>
                    <th scope="col">{{__('lang.Roles')}}</th>
                    <th scope="col" width="280px">Action</th>
                </tr>
        @foreach ($data as $key => $user)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $user->name }}</td>
                <td>
                    <img style='max-width:75px' src='{{asset("storage/images/$user->image")}}' />
                </td>
                <td>{{ $user->email }}</td>
                <td>
                    @if(!empty($user->getRoleNames()))
                        @foreach($user->getRoleNames() as $v)
                            <label class="badge badge-success">{{ $v }}</label>
                        @endforeach
                    @endif
                </td>
                <td>
                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">{{__('lang.Edit')}}</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
</div>




@endsection
