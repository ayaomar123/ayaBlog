@extends('Admin.board')
@section('title', 'staticPages')

@section('content')
    <div class="mb-4">
        <h2 class="text-center py-2"
            style="width: 100%;height:40px; background:#1f1e2e;color:whitesmoke;  font-family: Arial, Helvetica, sans-serif;">
            {{__('lang.staticPages')}}
        </h2>
    </div>
    <div class="col-md-3">
        <a style="background:rgb(108, 192, 115);color:white;float: right; width:250px;" class="btn btn-success"
            href="{{ asset('staticPages/create') }}"> {{__('lang.Add')}}</a>
    </div>

    <div class="card" style="margin-top:60px">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col" width="5%">#</th>
                    <th scope="col">{{__('lang.Name')}}</th>
                    <th scope="col">{{__('lang.Description')}}</th>
                    <th scope="col">{{__('lang.status')}}</th>
                    <th scope="col" width="22%">{{__('lang.Action')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ strip_tags($item->description) }}</td>
                        <td>{{ $item->status }}</td>
                        <td>
                            <form method='post' action="{{ route('staticPages.destroy', $item->id) }}">
                                @csrf
                                @method("delete")
                                <a href='{{ route('staticPages.edit', $item->id) }}' class=' btn-sm btn-primary'>{{__('lang.Edit')}}</a>
                                <button onclick='return confirm("Are you sure?")' type="submit"
                                    class="btn btn-sm btn-danger">{{__('lang.Delete')}}</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
