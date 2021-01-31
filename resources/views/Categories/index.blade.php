@extends('Admin.board')

@section('title',"Category" )
@section('style')

    <style>
        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #444;
            line-height: 11px;
        }
    </style>

@endsection

@section('content')
        <div class="mb-4">
            <h2 class="text-center py-2"
                style="width: 100%;height:40px; background:#1f1e2e;color:whitesmoke;  font-family: Arial, Helvetica, sans-serif;">
                 {{ __('lang.Categories') }}
            </h2>
        </div>

        <div class="card container">
          <div class="card-body">
            <div class="row">
                <div class="mt-3 col-md-8">
                    <div class="form-check" style="">
                        <select class="mdb-select md-form" searchable="Search here.." name='category'id="category" style="width:650px;">
                            <option value="">{{ __('lang.selectCategory') }}</option>
                                @foreach ($items as $item)
                                    <option {{ old('name') == $item->id ? 'selected' : '' }} value='{{ $item->name }}'>{{ $item->name }}</option>
                                @endforeach
                        </select>
                    </div>
                </div>
                
                <div class="mt-3 col-md-4">
                    <div class="form-check">
                        <select class="px-5 btn btn-primary" name="status" id="status" class="filter-select" style="max-width:165px;text-align:center;">
                            <option value="">{{ __('lang.status') }}</option>
                            <option value="1">{{ __('lang.Active') }}</option>
                            <option value="0">{{ __('lang.Deactive') }}</option>
                        </select>
                        <button type="submit" class="px-5 btn btn-primary" style="max-width:165px;" name="filter" id="filter"><i class="fas fa-search"></i></button>
                    </div>
                </div>

            </div>
          </div>
        </div>

            <div class="card mt-3 mb-5">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="" style="width: 250px;" data-url="{{ url('categories/activate') }}" class="px-5 btn btn-info btn-lg activate"><i class="fas fa-check"></i> {{ __('lang.Activate') }} </a>
                        </div>

                        <div class="col-md-3">
                            <a href="" style="width: 250px;margin-left:0px;margin-right:10px"
                                data-url="{{ url('categories/deactive') }}"
                                class="px-5 btn btn-primary btn-lg deactive-all"><i class="fas fa-check"></i> {{ __('lang.Deactivate') }}
                            </a>
                        </div>

                        <div class="col-md-3">
                            <a href="" style="width: 250px;" data-url="{{ url('myproductsDeleteAll') }}"
                                class="px-5 btn btn-lg btn-danger delete-all"><i class="fas fa-trash"></i> {{ __('lang.Delete') }}
                            </a>
                        </div>

                        <div class="col-md-3">

                            <a href="{{ url('categories/create') }}" class="px-5 btn-lg btn"
                                style="background:rgb(108, 192, 115);color:white;float: right; width:250px;"><i
                                    class="far fa-plus-square" style="color: white;"></i>  {{ __('lang.Add') }}
                            </a>

                        </div>

                    </div>

                </div>

            </div>


        <table class=" table table-bordered" id="laravel-datatable-crud" style=" text-align:center;">
            <thead>

                <tr style="background:#3699ff">

                    <th style=" text-align:center;width:40px">
                        <input class="big-checkbox regular-checkbox text-content" type="checkbox" name="check_all"
                            id="check_all">
                    </th>
                    <th style="color: whitesmoke;width:40px">{{ __('lang.Id') }}</th>
                    <th style="color: whitesmoke">{{ __('lang.Name') }}</th>
                    <th style="color: whitesmoke" width="20%">{{ __('lang.myDescribe') }}</th>
                    <th style="color: whitesmoke">{{ __('lang.myImage') }}</th>
                    <th style="color: whitesmoke" width="5%">{{ __('lang.status') }}</th>
                    <th style="color: whitesmoke" width="27%">{{ __('lang.Action') }}</th>

                </tr>
            </thead>

            <tbody>
            </tbody>
        </table>



@endsection
@section('script')
    @include('Categories.js')
@endsection
