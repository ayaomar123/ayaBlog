@extends('layouts.admin')
@section('mtitle','Show User')
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
            Show User
        </h2>

        <div class="" style="float: left">
            <a  class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
        </div>

    </div>
</div>
<div class="card mt-3" style="margin-left:50px;margin-right:50px;text-align:left;padding-left:25px ">

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mt-3">
                <h4>Name:</h4>
                {{ $user->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h4>Email:</h4>
                {{ $user->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h4>Roles:</h4>
                @if(!empty($user->getRoleNames()))
                    @foreach($user->getRoleNames() as $v)
                        <label class="badge badge-success">{{ $v }}</label>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
