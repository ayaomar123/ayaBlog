@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div style="text-align: right;background-color:#173460;color:white" class="card-header">دخول</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="col-auto">
                                <label class="col-lg-12" for="inlineFormInputGroup">البريد الالكتروني</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-at"></i></div>
                                    </div>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                                        placeholder="ادخل البريد الالكتروني" name="email" value="{{ old('email') }}"
                                        required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-auto">
                                <label class="col-lg-12" for="inlineFormInputGroup"> كلمة السر</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-key"></i></div>
                                    </div>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        id="password" placeholder="ادخل  كلمة السر" name="password"
                                        value="{{ old('password') }}" required autofocus>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn" style="text-align: right;background-color:#173460;color:white">
                                        دخول
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn" href="{{ route('password.request') }}" style="text-align: right;color:#173460">
                                            نسيت كلمة السر؟
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
