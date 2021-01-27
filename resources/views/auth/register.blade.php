@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div style="text-align: right;background-color:#173460;color:white" class="card-header">تسجيل</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="col-auto">
                                <label class="col-lg-12" for="inlineFormInputGroup">الاسم</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-user"></i></div>
                                    </div>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="email"
                                        placeholder="ادخل  اسمك كاملا" name="name" value="{{ old('name') }}" required
                                        autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
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
                            <div class="col-auto">
                                <label class="col-lg-12" for="inlineFormInputGroup"> تأكيد كلمة السر</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-key"></i></div>
                                    </div>
                                    <input type="password" class="form-control @error('password-confirm') is-invalid @enderror"
                                        id="password-confirm" placeholder="ادخل  كلمة السر" name="password-confirm"
                                        value="{{ old('password-confirm') }}" required autofocus>
                                    @error('password-confirm')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-10 offset-md-4">
                                    <button type="submit" class="btn"
                                        style="text-align: right;background-color:#173460;color:white">
                                        تسجيل
                                    </button>
                                    <a class="btn" href="{{route('login')}}" style="text-align: right;color:#173460">
                                        لديك حساب بالفعل،قم بتسجيل الدخول </a>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
