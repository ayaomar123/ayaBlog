@extends('Admin.board')
@section('title','Edit Roles')
@section('content')
    <div class="mb-4">
        <h2 class="text-center py-2" style="width:100%;height:40px;background:#1f1e2e;color:whitesmoke;font-family: Arial, Helvetica, sans-serif;">
            {{__('lang.EditRole')}}
        </h2>
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

<div>
    {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
    <div class="card mt-3" style="padding-left:25px;padding-right:25px">
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group mt-3">
                <h4>{{__('lang.Name')}}</h4>
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
        </div>
        <label><input name="check_all" id="check_all" type="checkbox" id="select_all" >{{__('lang.selectAll')}}</label>

        <table class="table table-hover">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">{{__('lang.Show')}}</th>
                  <th scope="col">{{__('lang.Add')}}</th>
                  <th scope="col">{{__('lang.Edit')}}</th>
                  <th scope="col">{{__('lang.Delete')}}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <th scope="row">{{__('lang.Articles')}}</th>
                  <td><input class="name" name="permission[]" type="checkbox" value="9" {{in_array(9, $rolePermissions) ? "checked" : ""}}></td>
                  <td><input class="name" name="permission[]" type="checkbox" value="10" {{in_array(10, $rolePermissions) ? "checked" : ""}}></td>
                  <td><input class="name" name="permission[]" type="checkbox" value="11" {{in_array(11, $rolePermissions) ? "checked" : ""}}></td>
                  <td><input class="name" name="permission[]" type="checkbox" value="12" {{in_array(12, $rolePermissions) ? "checked" : ""}}></td>
                </tr>
                <tr>
                  <th scope="row">{{__('lang.Categories')}}</th>
                  <td><input class="name" name="permission[]" type="checkbox" value="5" {{in_array(5, $rolePermissions) ? "checked" : ""}}></td>
                  <td><input class="name" name="permission[]" type="checkbox" value="6" {{in_array(6, $rolePermissions) ? "checked" : ""}}></td>
                  <td><input class="name" name="permission[]" type="checkbox" value="7" {{in_array(7, $rolePermissions) ? "checked" : ""}}></td>
                  <td><input class="name" name="permission[]" type="checkbox" value="8" {{in_array(8, $rolePermissions) ? "checked" : ""}}></td>
                </tr>
                <tr>
                  <th scope="row">{{__('lang.Pages')}}</th>
                  <td><input class="name" name="permission[]" type="checkbox" value="13" {{in_array(13, $rolePermissions) ? "checked" : ""}}></td>
                  <td><input class="name" name="permission[]" type="checkbox" value="14" {{in_array(14, $rolePermissions) ? "checked" : ""}}></td>
                  <td><input class="name" name="permission[]" type="checkbox" value="15" {{in_array(15, $rolePermissions) ? "checked" : ""}}></td>
                  <td><input class="name" name="permission[]" type="checkbox" value="16" {{in_array(16, $rolePermissions) ? "checked" : ""}}></td>
                </tr>
            <tr>
              <th scope="row">{{__('lang.Roles')}}</th>
              <td><input class="name" name="permission[]" type="checkbox" value="1" {{in_array(1, $rolePermissions) ? "checked" : ""}}></td>
              <td><input class="name" name="permission[]" type="checkbox" value="2" {{in_array(2, $rolePermissions) ? "checked" : ""}}></td>
              <td><input class="name" name="permission[]" type="checkbox" value="3" {{in_array(3, $rolePermissions) ? "checked" : ""}}></td>
              <td><input class="name" name="permission[]" type="checkbox" value="4" {{in_array(4, $rolePermissions) ? "checked" : ""}}></td>
            </tr>
            <tr>
                <th scope="row">{{__('lang.Sliders')}}</th>
                <td><input class="name" name="permission[]" type="checkbox" value="17" {{in_array(17, $rolePermissions) ? "checked" : ""}}></td>
                <td><input class="name" name="permission[]" type="checkbox" value="18" {{in_array(18, $rolePermissions) ? "checked" : ""}}></td>
                <td><input class="name" name="permission[]" type="checkbox" value="19" {{in_array(19, $rolePermissions) ? "checked" : ""}}></td>
                <td><input class="name" name="permission[]" type="checkbox" value="20" {{in_array(20, $rolePermissions) ? "checked" : ""}}></td>
            </tr>
            <tr>
                <th scope="row">{{__('lang.setting')}}</th>
                <td><input class="name" name="permission[]" type="checkbox" value="21" {{in_array(21, $rolePermissions) ? "checked" : ""}}></td>
                <td><input class="name" name="permission[]" type="checkbox" value="22" {{in_array(22, $rolePermissions) ? "checked" : ""}}></td>
                <td><input class="name" name="permission[]" type="checkbox" value="23" {{in_array(23, $rolePermissions) ? "checked" : ""}}></td>
                <td><input class="name" name="permission[]" type="checkbox" value="24" {{in_array(24, $rolePermissions) ? "checked" : ""}}></td>
            </tr>
            <tr>
                <th scope="row">{{__('lang.User')}}</th>
                <td><input class="name" name="permission[]" type="checkbox" value="25" {{in_array(25, $rolePermissions) ? "checked" : ""}}></td>
                <td><input class="name" name="permission[]" type="checkbox" value="26" {{in_array(26, $rolePermissions) ? "checked" : ""}}></td>
                <td><input class="name" name="permission[]" type="checkbox" value="27" {{in_array(27, $rolePermissions) ? "checked" : ""}}></td>
                <td><input class="name" name="permission[]" type="checkbox" value="28" {{in_array(28, $rolePermissions) ? "checked" : ""}}></td>
            </tr>
            </tbody>
        </table>


        <div class="col-xs-12 col-sm-12 col-md-6 text-center mb-5">
            <button type="submit" class="btn btn-primary">{{__('lang.submit')}}</button>
        </div>
    </div>
    </div>
    {!! Form::close() !!}

</div>
@endsection
@section('script')
    <script>
    $('#check_all').change(function() {
        $(".name").prop('checked', $(this).prop('checked'));
    });
    </script>
@endsection
