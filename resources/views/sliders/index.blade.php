@extends('Admin.board')
@section('title','Slider')
@section('content')

    <div class="mb-4">
        <h2 class="text-center py-2"
            style="width: 100%;height:40px; background:#1f1e2e;color:whitesmoke;  font-family: Arial, Helvetica, sans-serif;">
             {{__('lang.Sliders')}}
        </h2>
        {{-- <div class="col-md-3 mb-5">
            <a style="background:rgb(108, 192, 115);color:white;float: right; width:250px;" class="btn btn-success" href="{{ route('slider.create') }}"> Create New Slider</a>
        </div> --}}
    </div>
<div class="card" style="margin-top:30px">

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">{{__('lang.Id')}}</th>
                <th scope="col">{{__('lang.Name')}}</th>
                <th scope="col">{{__('lang.myImage')}}</th>
                <th scope="col">{{__('lang.Description')}}</th>
                <th scope="col">{{__('lang.link')}}</th>
                <th scope="col">{{__('lang.Action')}}</th>
            </tr>
        </thead>
        <tbody>
                @foreach($sliders as $slider)
                    <tr>
                        <?php for($i=1;$i<$slider->id;$i++) ?>
                        <td> <?php echo $i;?> </td>
                        <td>{{ $slider->title}} </td>
                        <td><img width="50px" src="{{ asset('storage/images/'.$slider->image)}}" alt="Img"></td>
                        <td>{{strip_tags($slider->word)}}</td>
                        <td>{{ $slider->link}}</td>

                        <td>
                            <a href="{{ route('slider.edit',[$slider->id]) }}">Edit </a>
                            {{-- <form class="" action="{{ route('slider.delete',[$slider->id]) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit"class="btn btn-danger" name="button">Delete</button>
                            </form> --}}
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>
</div>

@endsection

