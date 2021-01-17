@extends('layouts.admin')


@section('content')
<div class="container mt-2">
    <div class="mb-4">

        <h2 class="text-center py-2"
            style="width: 100%;height:40px; background:#1f1e2e;color:whitesmoke;  font-family: Arial, Helvetica, sans-serif;">
            Create New Role
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

    {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
    <div class="card mt-3" style="margin-left:50px;margin-right:50px;text-align:left;padding-left:25px ">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group mt-2">
                    <strong>Name:</strong>
                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Permission:</strong>
                    <br/>
                    @foreach($permission as $value)
                        <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                            {{ $value->name }}</label>
                        <br/>
                    @endforeach
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary" style="margin-bottom:25px;float: left;">Submit</button>
            </div>
        </div>
    </div>
    {!! Form::close() !!}


@endsection
