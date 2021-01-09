@extends('layouts.admin')
<title>{{__('lang.createCategory')}}</title>
@section('name')
    <a href="#" class="btn btn-primary">{{__('lang.createCategory')}}</a>
@endsection
@section('content')

    <div class="container mt-2 ">
        <div class="mb-4">
            <h2 class="text-center py-2"
                style="width: 100%;height:40px; background:#1f1e2e;color:whitesmoke;  font-family: Arial, Helvetica, sans-serif;">
                {{__('lang.createCategory')}}
            </h2>

            <form id="add-category" method="post" action="{{ url('categories') }}">
                @csrf
                <div class="row">
                    <div class="form-group col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                    <label for="name">{{ __('lang.enter') }}</label>
                                    <input type="text" name="name" class="form-control col-md-5" id="formGroupExampleInput"
                                        placeholder="{{ __('lang.enter') }}">
                                </blockquote>
                                <br>
                                <blockquote class="blockquote mb-0">
                                    <label for="message">{{ __('lang.catDescription') }}</label>
                                    <textarea class="form-control col-md-5" name="description"
                                        placeholder="{{ __('lang.catDescription') }}"></textarea>
                                </blockquote>
                                <br>
                                <blockquote>
                                    <div class="col-md-5">
                                        <label for="image">{{ __('lang.choose') }}</label>
                                        <input class="col-md-5" id="image" type="file" name="image" value="{{ old('image') }}"
                                            onchange="loadFile(event)">
                                    </div>
                                    <div class="col-md-6">
                                        <img class="card-img-top col-md-5" id="out" style="width:70%">
                                    </div>
                                </blockquote>
                                <br>
                                <blockquote class="blockquote mb-0">
                                    <div class="slideOne">
                                        <input type="checkbox" value="1" id="published" name="status" checked />
                                        <label for="slideOne">{{__('lang.active')}}</label>
                                    </div>

                                </blockquote>
                                <br>
                                <div class="form-group" >
                                    <button style="" type="submit" class="btn btn-success col-md-2" id="btn-send">{{__('lang.submit')}}</button>
                                    <a class='btn btn-light col-md-2' href='{{ route('categories.index') }}'>{{__('lang.cancel')}}</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </form>

        </div>
    </div>
        <script>
            var loadFile = function(event) {
                var out = document.getElementById('out');
                out.src = URL.createObjectURL(event.target.files[0]);
            };

        </script>
    @endsection
