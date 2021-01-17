@extends('layouts.admin')


@section('content')
<div class=" container mt-2">
    <div class="mb-4">

        <h2 class="text-center py-2"
            style="width: 100%;height:40px; background:#1f1e2e;color:whitesmoke;  font-family: Arial, Helvetica, sans-serif;">
            Edit Role
        </h2>

        <div class="" style="float: left">
            <a  class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
        </div>

    </div>
</div>


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
    <div class="card mt-3" style="margin-left:50px;margin-right:50px;text-align:left;padding-left:25px ">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group mt-3">
                <h4>Name:</h4>
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mt-">
                <h4>Permission:</h4>
                <br/>
                @foreach($permission as $value)
                    <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                        {{ $value->name }}</label>
                    <br/>
                @endforeach
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 text-center mb-5">
            <button style="float: left" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    </div>
    {!! Form::close() !!}


@endsection
