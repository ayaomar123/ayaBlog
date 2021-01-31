@extends('Admin.board')

@section('title',"Create Category" )
@section('content')
        <div class="mb-4">
            <h2 class="text-center py-2"
                style="width: 100%;height:40px; background:#1f1e2e;color:whitesmoke;  font-family: Arial, Helvetica, sans-serif;">
                {{__('lang.createCategory')}}
            </h2>
        </div>

            <form enctype="multipart/form-data" id="add-category" method="post" action="{{ url('categories') }}">
                @csrf
                <div class="row">
                    <div class="form-group col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                    <label for="name">{{ __('lang.Name') }}</label>
                                    <input type="text" name="name" class="form-control col-md-5" id="formGroupExampleInput"
                                        placeholder="{{ __('lang.Name') }}">
                                </blockquote>
                                <br>
                                <blockquote class="blockquote mb-0">
                                    <label for="message">{{ __('lang.Description') }}</label>
                                    <textarea style="height: 170px" class="form-control col-md-5" name="description"
                                        placeholder="{{ __('lang.Description') }}"></textarea>
                                </blockquote>
                                <br>
                                <blockquote>
                                    <div class="">
                                        <label for="image">{{ __('lang.image') }}</label>
                                        <br>
                                        <input class="" id="image" type="file" name="image" value="{{ old('image') }}"
                                            onchange="loadFile(event)">
                                    </div>
                                    <div class="" style="">
                                        <br>
                                        <img class="col-md-5" id="out" style="width:70%;height:150px;">
                                    </div>
                                </blockquote>
                                <br>
                                <blockquote class="blockquote mb-0">
                                    <div class="slideOne">
                                        <input type="checkbox" value="1" id="published" name="status" checked />
                                        <label for="slideOne">{{__('lang.Active')}}</label>
                                    </div>

                                </blockquote>

                                <br>
                                <div class="form-group" >
                                    <button style="" type="submit" class="btn btn-success col-md-1" id="btn-send">{{__('lang.submit')}}</button>
                                    <a class='btn btn-light col-md-1' href='{{ route('categories.index') }}'>{{__('lang.cancel')}}</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </form>

        <script>
            var loadFile = function(event) {
                var out = document.getElementById('out');
                out.src = URL.createObjectURL(event.target.files[0]);
            };

        </script>
    @endsection
