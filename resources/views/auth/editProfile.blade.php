@include('frontend.header')
<div class="container">
    <div class="row justify-content-center mt-5">
        <br>
        <div class="col-md-8">
            <div class="card">
                <div style="text-align: right;background-color:#173460;color:white" class="card-header">تعديل الملف الشخصي</div>

                <div class="card-body">
                    <form enctype="multipart/form-data"method='post'action='{{ route('post-editProfile')}}'>
                        @csrf
                        <div class="col-auto">
                            <label class="col-lg-12" for="inlineFormInputGroup">الاسم</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                                </div>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="email"
                                    placeholder="ادخل  اسمك كاملا" name="name" value="{{ Auth::user()->name }}" required
                                    autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="col-auto">
                            <label class="col-lg-12" for="inlineFormInputGroup">البريد الالكتروني</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-at"></i></div>
                                </div>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                                    placeholder="ادخل البريد الالكتروني" name="email" value="{{ Auth::user()->email }}"
                                    required autocomplete="email" autofocus>
                            </div>
                        </div>

                        <div class="col-auto">
                            <label class="col-lg-12" for="inlineFormInputGroup">تغيير الصورة الشخصية</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-camera"></i></div>
                                </div>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                            </div>
                        </div>

                        <button class="btn btn-primary" type="submit">Edit Profile</button>
                        <a class='btn btn-light' href='{{ asset('home') }}'>Cancel</a>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
