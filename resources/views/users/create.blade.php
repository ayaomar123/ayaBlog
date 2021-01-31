@extends('Admin.board')
@section('title','Create User')
@section('content')
        <div class="mb-4">
            <h2 class="text-center py-2"
            style="width: 100%;height:40px; background:#1f1e2e;color:whitesmoke;  font-family: Arial, Helvetica, sans-serif;">
            {{__('lang.createUser')}}
            </h2>
        </div>


    {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
    <div class="card mt-3" style="padding-left:25px ">
        <div class="row" style="margin-right: 50px;">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group mt-3">
                <strong> {{__('lang.UserName')}}:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
        </div>
    </div>

    <div class="row" style="margin-right: 50px;">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <form method="post" action="{{ url('store_image/insert_image') }}"  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <strong>{{__('lang.myImage')}}:</strong>
                    <br><br>
                    <div>
                        <input type="file" name="user_image" />
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row" style="margin-right: 50px;">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>{{__('lang.Email')}}:</strong>
                {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
            </div>
        </div>
    </div>

    <div class="row" style="margin-right: 50px;">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>{{__('lang.Password')}}:</strong>
                {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
            </div>
        </div>
    </div>

    <div class="row" style="margin-right: 50px;">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>{{__('lang.confPassword')}}:</strong>
                {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
            </div>
        </div>
    </div>

    <div class="row" style="margin-right: 50px;">
        <div class="col-xs-6 col-sm-6 col-md-6">

                <strong>{{__('lang.Roles')}}:</strong>
                {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}

        </div>
    </div>

    <div class="row" >
        <div class="col-xs-6 col-sm-6 col-md-2 text-center mb-5 mt-5" >
            <button  type="submit" class="col-md-5 btn btn-primary">{{__('lang.submit')}}</button>
        </div>
    </div>
    {!! Form::close() !!}



@endsection
