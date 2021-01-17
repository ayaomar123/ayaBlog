@extends('layouts.admin')


@section('content')
<div class="container mt-2">
    <div class="mb-4">

        <h2 class="text-center py-2"
            style="width: 100%;height:40px; background:#1f1e2e;color:whitesmoke;  font-family: Arial, Helvetica, sans-serif;">
            Create New User
        </h2>

        <div class="" style="float: left">
            <a  class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
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



    {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
    <div class="card mt-3" style="margin-left:50px;margin-right:50px;text-align:left;padding-left:25px ">

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group mt-3">
                <strong>Name:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <form method="post" action="{{ url('store_image/insert_image') }}"  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <strong>Image:</strong>
                    <br><br>
                        <input type="file" name="user_image" />
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Email:</strong>
                {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Password:</strong>
                {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Confirm Password:</strong>
                {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">

                <strong>Role:</strong>
                {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}

        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 text-center mb-5 mt-5" >
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>
    {!! Form::close() !!}


@endsection
