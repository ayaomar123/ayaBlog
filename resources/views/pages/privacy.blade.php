@include('frontend.header')
@section('title','Privacy')


@include('frontend.headerads')
{{-- @include('frontend.nav') --}}

@yield('section')
<section class="privacy">
    <div class="container">
        @foreach ($page as $myPage)
            <h1> {{strip_tags($myPage->title)}}</h1>
            <div class="row" style="text-align: right">
                {{strip_tags($myPage->description)}}
            </div>

        @endforeach

    </div>
</section>
@include('frontend.footer')
