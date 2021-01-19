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
                Manage Article
            </h2>
    </div>

    <div class="card">
        <div class="card-body">

            <div class="row">

                <form>

                    <div class="mt-3 col-md-12">
                        <div class="form-check" style="float: left;padding-left:0rem;margin-right:4px">
                            <select class="mdb-select md-form" searchable="Search here.." name='artcile' id="artcile"
                                            style="width:340px;">
                                <option value="">Select your Article Name</option>
                                    @foreach ($items as $item)
                                        <option {{ old('name') == $item->id ? 'selected' : '' }}
                                                    value='{{ $item->name }}'>{{ $item->name }}
                                        </option>
                                    @endforeach
                            </select>
                        </div>

                        <div class="form-check" style="float: left;padding-left:0rem;">
                            <select class="mdb-select md-form" searchable="Search here.." name='category' id="category"
                                            style="width:340px;">
                                <option value="">Select your Category Name</option>
                                    @foreach ($items as $article)
                                        @foreach ($article->categories as $item)
                                            <option {{ old('category') == $item->id ? 'selected' : '' }}
                                                    value='{{ $item->categories }}'>{{ $item->name }}
                                </option>
                                        @endforeach
                                    @endforeach
                                </select>
                        </div>

                        <div class="form-check" style="float: right">
                            <select class="px-5 btn btn-lg btn-primary" name="status" id="status"
                                            class="filter-select" style="width:160px;text-align:center">
                                <option value="">Status</option>
                                <option value="1">Active</option>
                                <option value="0">Deactive</option>
                            </select>

                            <button type="submit" style="margin-left: 10px" class="px-5 btn-lg btn btn-primary"
                                            name="filter" id="filter"><i class="fas fa-search"></i>filter</button>
                        </div>

                    </div>

                </form>
            </div>

        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <a href="" style="width: 250px;" data-url="{{ url('articles/activate') }}"
                                class="px-5 btn btn-info btn-lg activate"><i class="fas fa-check"></i>Activate
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="" style="width: 250px;margin-left:0px;margin-right:20px"
                                data-url="{{ url('articles/deactive') }}" class="px-5 btn btn-primary btn-lg active-all"><i
                                    class="fas fa-check"></i>Deactivate
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="" style="width: 250px;" data-url="{{ url('myproductsDeleteAll') }}"
                                class="px-5 btn btn-lg btn-danger delete-all"><i class="fas fa-trash"></i>Delete
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="{{ url('articles/create') }}" class="px-5 btn-lg btn"
                                style="background:rgb(19, 143, 29);color:white;float: right; width:250px;"><i
                                    class="far fa-plus-square" style="color: white;width:25px"></i>Create Article
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
                    <th style="color: whitesmoke">Id</th>
                    <th style="color: whitesmoke">Name</th>
                    <th style="color: whitesmoke" width="20%">Description</th>
                    <th style="color: whitesmoke" width="20%">Category</th>
                    <th style="color: whitesmoke">Image</th>
                    <th style="color: whitesmoke" width="5%">Status</th>
                    <th style="color: whitesmoke" width="25%">Action</th>

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
