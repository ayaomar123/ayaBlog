@extends('Admin.board')
@section('title', 'Create Roles')
@section('content')

    <div class="mb-4">
        <h2 class="text-center py-2"
            style="width: 100%;height:40px; background:#1f1e2e;color:whitesmoke;  font-family: Arial, Helvetica, sans-serif;">
            {{__('lang.createRole')}}
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
    <div class="">

    {!! Form::open(['route' => 'roles.store', 'method' => 'POST']) !!}

    <div class="card mt-3" style="padding-left:25px;padding-right:25px ">
        <div class="row mt-5">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group mt-2">
                    <strong>{{__('lang.RoleName')}}</strong>
                    <input class="form-control" type="text" name="name" id="" placeholder="{{__('lang.RoleName')}}">
                </div>
            </div>
        </div>
        <label><input name="check_all" id="check_all" type="checkbox" id="select_all">{{__('lang.selectAll')}}</label>


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
                    <th scope="row">{{__('lang.Roles')}}</th>
                    <td><input class="name" name="permission[]" type="checkbox" value="1"></td>
                    <td><input class="name" name="permission[]" type="checkbox" value="2"></td>
                    <td><input class="name" name="permission[]" type="checkbox" value="3"></td>
                    <td><input class="name" name="permission[]" type="checkbox" value="4"></td>
                </tr>
                <tr>
                    <th scope="row">{{__('lang.Categories')}}</th>
                    <td><input class="name" name="permission[]" type="checkbox" value="5"></td>
                    <td><input class="name" name="permission[]" type="checkbox" value="6"></td>
                    <td><input class="name" name="permission[]" type="checkbox" value="7"></td>
                    <td><input class="name" name="permission[]" type="checkbox" value="8"></td>
                </tr>

                <tr>
                    <th scope="row">{{__('lang.Articles')}}</th>
                    <td><input class="name" name="permission[]" type="checkbox" value="9"></td>
                    <td><input class="name" name="permission[]" type="checkbox" value="10"></td>
                    <td><input class="name" name="permission[]" type="checkbox" value="11"></td>
                    <td><input class="name" name="permission[]" type="checkbox" value="12"></td>
                </tr>
                <tr>
                    <th scope="row">{{__('lang.Pages')}}</th>
                    <td><input class="name" name="permission[]" type="checkbox" value="13"></td>
                    <td><input class="name" name="permission[]" type="checkbox" value="14"></td>
                    <td><input class="name" name="permission[]" type="checkbox" value="15"></td>
                    <td><input class="name" name="permission[]" type="checkbox" value="16"></td>
                </tr>
                <tr>
                    <th scope="row">{{__('lang.Sliders')}}</th>
                    <td><input class="name" name="permission[]" type="checkbox" value="17"></td>
                    <td><input class="name" name="permission[]" type="checkbox" value="18"></td>
                    <td><input class="name" name="permission[]" type="checkbox" value="19"></td>
                    <td><input class="name" name="permission[]" type="checkbox" value="20"></td>
                </tr>
                <tr>
                    <th scope="row">{{__('lang.setting')}}</th>
                    <td><input class="name" name="permission[]" type="checkbox" value="21"></td>
                    <td><input class="name" name="permission[]" type="checkbox" value="22"></td>
                    <td><input class="name" name="permission[]" type="checkbox" value="23"></td>
                    <td><input class="name" name="permission[]" type="checkbox" value="24"></td>
                </tr>
                <tr>
                    <th scope="row">{{__('lang.User')}}</th>
                    <td><input class="name" name="permission[]" type="checkbox" value="25"></td>
                    <td><input class="name" name="permission[]" type="checkbox" value="26"></td>
                    <td><input class="name" name="permission[]" type="checkbox" value="27"></td>
                    <td><input class="name" name="permission[]" type="checkbox" value="28"></td>
                </tr>


            </tbody>
        </table>
            <button type="submit" class="btn btn-primary col-md-2" style="margin-bottom:25px;">{{__('lang.submit')}}</button>
        
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
