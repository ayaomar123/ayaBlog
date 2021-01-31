@extends('Admin.board')
@section('title','Roles')
@section('content')

    <div class="mb-4">
        <h2 class="text-center py-2"
            style="width: 100%;height:40px; background:#1f1e2e;color:whitesmoke;  font-family: Arial, Helvetica, sans-serif;">
             {{ __('lang.Roles') }}
        </h2>
        <div class="col-md-3">
            @can('role-create')
            <a style="background:rgb(108, 192, 115);color:white;float: right; width:250px;" class="btn btn-success" href="{{ route('roles.create') }}">{{__('lang.createRole')}}</a>
            @endcan
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
                <th scope="col">{{__('lang.Id')}}</th>
                <th scope="col">{{__('lang.RoleName')}}</th>
                <th scope="col" width="280px">{{__('lang.Action')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $key => $role)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $role->name }}</td>
                        <td>
                            @can('role-edit')
                                <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">{{__('lang.Edit')}}</a>
                            @endcan
                            
                            @can('role-delete')
                            {{-- <form method="DELETE" action="{{route('roles.destroy',$role->id)}}" style="display:inline">
                                @csrf
                                <input class="btn btn-danger" type="submit" value="{{__('lang.Delete')}}">
                                </form> --}}
                                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}
                            @endcan
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $roles->render() !!}
    </div>


@endsection
