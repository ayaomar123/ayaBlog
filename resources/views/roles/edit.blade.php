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
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group mt-3">
                <h4>Name:</h4>
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                  <th scope="col">Permission</th>
                  <th scope="col">View</th>
                  <th scope="col">Add</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <th scope="row">Category</th>
                  <td><input class="name" name="permission[]" type="checkbox" value="9"></td>
                  <td><input class="name" name="permission[]" type="checkbox" value="10"></td>
                  <td><input class="name" name="permission[]" type="checkbox" value="11"></td>
                  <td><input class="name" name="permission[]" type="checkbox" value="12"></td>
                </tr>
                <tr>
                  <th scope="row">Product</th>
                  <td><input class="name" name="permission[]" type="checkbox" value="5"></td>
                  <td><input class="name" name="permission[]" type="checkbox" value="6"></td>
                  <td><input class="name" name="permission[]" type="checkbox" value="7"></td>
                  <td><input class="name" name="permission[]" type="checkbox" value="8"></td>
                </tr>
                <tr>
                  <th scope="row">Article</th>
                  <td><input class="name" name="permission[]" type="checkbox" value="13"></td>
                  <td><input class="name" name="permission[]" type="checkbox" value="14"></td>
                  <td><input class="name" name="permission[]" type="checkbox" value="15"></td>
                  <td><input class="name" name="permission[]" type="checkbox" value="16"></td>
                </tr>
            <tr>
              <th scope="row">Role</th>
              <td><input class="name" name="permission[]" type="checkbox" value="1"></td>
              <td><input class="name" name="permission[]" type="checkbox" value="2"></td>
              <td><input class="name" name="permission[]" type="checkbox" value="3"></td>
              <td><input class="name" name="permission[]" type="checkbox" value="4"></td>
            </tr>
            </tbody>
        </table>


        <div class="col-xs-12 col-sm-12 col-md-6 text-center mb-5">
            <button style="float: left" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    </div>
    {!! Form::close() !!}


@endsection
