@extends('layouts.admin')
@section('mtitle','Slider')

@section('style')
    <style>
        .container{
            margin-top: 0px;
        }
    </style>
@endsection
@section('content')
<div class="container mt-2">
    <div class="mb-4">

        <h2 class="text-center py-2"
            style="width: 100%;height:40px; background:#1f1e2e;color:whitesmoke;  font-family: Arial, Helvetica, sans-serif;">
             Slider
        </h2>

        <div class="col-md-3">
            @can('role-create')
            <a style="background:rgb(108, 192, 115);color:white;float: right; width:250px;" class="btn btn-success" href="{{ route('slider.create') }}"> Create New Slider</a>
            @endcan
        </div>

    </div>
</div>

<table class="table table-hover" style="text-align: left;margin-left:60px">
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Image</th>
                <th>word</th>
                <th>Link</th>
                <th>Action</th>
            </tr>
            @foreach($sliders as $slider)
                <tr>
                    <?php
                    for($i=1;$i<$slider->id;$i++) ?>
                <td>
                <?php
                    echo $i;
                    ?>
                </td>
                    <td>{{ $slider->title}} </td>
                    <td>{{ $slider->image}}</td>
                    <td>{{ $slider->word}}</td>
                    <td>{{ $slider->link}}</td>
                    <td>{{ $slider->word}}</td>
                    <td>
                        <a href="{{ route('slider.edit',[$slider->id]) }}">Edit </a>
                        <form class="" action="{{ route('slider.delete',[$slider->id]) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit"class="btn btn-danger" name="button">Delete</button>
                        </form> </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection
