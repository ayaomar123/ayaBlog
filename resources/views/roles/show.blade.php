@extends('Admin.board')
@section('title','Show Roles')
@section('content')

    <div class="mb-4">
        <h2 class="text-center py-2"
            style="width: 100%;height:40px; background:#1f1e2e;color:whitesmoke;  font-family: Arial, Helvetica, sans-serif;">
            
        </h2>
    </div>

<div class="card mt-3" style="text-align:left;padding-left:25px ">

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mt-3">
                <strong>Name:</strong> <br>
                {{ $role->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Permissions:</strong> <br>
                @if(!empty($rolePermissions))
                    @foreach($rolePermissions as $v)
                        <label class="">{{ $v->name }}
                        </label>
                        <br>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
