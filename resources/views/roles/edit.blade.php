@extends('layouts.admin')

@section('mtitle','Edit Roles')

@section('style')
    <style>
        .container{
            margin-top: 110px;
        }
    </style>
@endsection
@section('content')
<div class=" container">
    <div class="mb-4">

        <h2 class="text-center py-2" style="width:100%;height:40px;background:#1f1e2e;color:whitesmoke;font-family: Arial, Helvetica, sans-serif;">
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
        <label><input name="check_all" id="check_all" type="checkbox" id="select_all" >Select All</label>

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
                  <th scope="row">Article</th>
                  <td><input class="name" name="permission[]" type="checkbox" value="9" {{in_array(9, $rolePermissions) ? "checked" : ""}}></td>
                  <td><input class="name" name="permission[]" type="checkbox" value="10" {{in_array(10, $rolePermissions) ? "checked" : ""}}></td>
                  <td><input class="name" name="permission[]" type="checkbox" value="11" {{in_array(11, $rolePermissions) ? "checked" : ""}}></td>
                  <td><input class="name" name="permission[]" type="checkbox" value="12" {{in_array(12, $rolePermissions) ? "checked" : ""}}></td>
                </tr>
                <tr>
                  <th scope="row">Category</th>
                  <td><input class="name" name="permission[]" type="checkbox" value="5" {{in_array(5, $rolePermissions) ? "checked" : ""}}></td>
                  <td><input class="name" name="permission[]" type="checkbox" value="6" {{in_array(6, $rolePermissions) ? "checked" : ""}}></td>
                  <td><input class="name" name="permission[]" type="checkbox" value="7" {{in_array(7, $rolePermissions) ? "checked" : ""}}></td>
                  <td><input class="name" name="permission[]" type="checkbox" value="8" {{in_array(8, $rolePermissions) ? "checked" : ""}}></td>
                </tr>
                <tr>
                  <th scope="row">Product</th>
                  <td><input class="name" name="permission[]" type="checkbox" value="13" {{in_array(13, $rolePermissions) ? "checked" : ""}}></td>
                  <td><input class="name" name="permission[]" type="checkbox" value="14" {{in_array(14, $rolePermissions) ? "checked" : ""}}></td>
                  <td><input class="name" name="permission[]" type="checkbox" value="15" {{in_array(15, $rolePermissions) ? "checked" : ""}}></td>
                  <td><input class="name" name="permission[]" type="checkbox" value="16" {{in_array(16, $rolePermissions) ? "checked" : ""}}></td>
                </tr>
            <tr>
              <th scope="row">Role</th>
              <td><input class="name" name="permission[]" type="checkbox" value="1" {{in_array(1, $rolePermissions) ? "checked" : ""}}></td>
              <td><input class="name" name="permission[]" type="checkbox" value="2" {{in_array(2, $rolePermissions) ? "checked" : ""}}></td>
              <td><input class="name" name="permission[]" type="checkbox" value="3" {{in_array(3, $rolePermissions) ? "checked" : ""}}></td>
              <td><input class="name" name="permission[]" type="checkbox" value="4" {{in_array(4, $rolePermissions) ? "checked" : ""}}></td>
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
@section('script')
    <script>
    $('#check_all').change(function() {
        $(".name").prop('checked', $(this).prop('checked'));
    });
    </script>
@endsection
