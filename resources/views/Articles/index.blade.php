@extends('Admin.board')
@section('title', 'Article')

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
        <h2 class="text-center py-1"
            style="width: 100%;height:40px; background:#1f1e2e;color:whitesmoke;  font-family: Arial, Helvetica, sans-serif;">
            {{__('lang.manageArticle')}}
        </h2>
    </div>

    <div class="card">
        <div class="card-body">

            <div class="row">
                <div class="mt-3 col-md-12">
                    <div class="row">
                        <div class="col-md-4 form-check" style="float: left;padding-left:5px;margin-left:10px">
                            <select class="mdb-select md-form" searchable="Search here.." name='artcile' id="artcile"
                                style="width:340px;">
                                <option value="">{{__('lang.SelectArticleName')}}</option>
                                @foreach ($items as $item)
                                    <option {{ old('name') == $item->id ? 'selected' : '' }} value='{{ $item->name }}'>
                                        {{ $item->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-4">
                            <div class="form-check" style="">
                                <select class="mdb-select md-form" searchable="Search here.." name='categories' id="categories"
                                    style="width:340px;">
                                    <option value="">{{ __('lang.selectCategory') }}</option>
                                    @foreach ($categories as $item)
                                        <option {{ old('name') == $item->id ? 'selected' : '' }} value='{{ $item->name }}'>
                                            {{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-check" style="float: right">
                            <select class="px-5 btn btn-primary" name="status" id="status" class="filter-select"
                                style="width:160px;text-align:center">
                                <option value="">{{__('lang.status')}}</option>
                                <option value="1">{{__('lang.Active')}}</option>
                                <option value="0">{{__('lang.Deactive')}}</option>
                            </select>

                            <button type="submit" style="margin-left: 10px" class="px-5 btn btn-primary"
                                name="filter" id="filter"><i class="fas fa-search"></i>{{__('lang.filter')}}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <a href="" style="width: 250px;" data-url="{{ url('articles/activate') }}"
                        class="px-5 btn btn-info btn-lg activate"><i class="fas fa-check"></i>{{__('lang.Activate')}}
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="" style="width: 250px;margin-left:0px;margin-right:20px"
                        data-url="{{ url('articles/deactive') }}" class="px-5 btn btn-primary btn-lg active-all"><i
                            class="fas fa-check"></i>{{__('lang.Deactivate')}}
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="" style="width: 250px;" data-url="{{ url('myproductsDeleteAll') }}"
                        class="px-5 btn btn-lg btn-danger delete-all"><i class="fas fa-trash"></i>{{__('lang.Delete')}}
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="{{ url('articles/create') }}" class="px-5 btn-lg btn"
                        style="background:rgb(19, 143, 29);color:white;float: right; width:250px;"><i
                            class="far fa-plus-square" style="color: white;width:25px"></i>{{__('lang.Create_Article')}}
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div class="card-body">
        <table class="table table-bordered" id="laravel-datatable-crud">

            <thead>
                <tr style="background:#3699ff">
                    <th style=" text-align:center;width:40px">
                        <input class="big-checkbox regular-checkbox text-content" type="checkbox" name="check_all"
                            id="check_all">
                    </th>
                    <th style="color: whitesmoke">{{__('lang.Id')}}</th>
                    <th style="color: whitesmoke">{{__('lang.Name')}}</th>
                    <th style="color: whitesmoke" width="20%">{{__('lang.myCategory')}}</th>
                    {{-- <th style="color: whitesmoke">Main-Image</th>
                    <th style="color: whitesmoke">Article-cover</th> --}}
                    <th style="color: whitesmoke" width="5%">{{__('lang.status')}}</th>
                    <th style="color: whitesmoke" width="25%">{{__('lang.Action')}}</th>

                </tr>
            </thead>

            <tbody>
            </tbody>
        </table>

    </div>


@endsection

@section('script')
    @include('Articles.js')
@endsection
