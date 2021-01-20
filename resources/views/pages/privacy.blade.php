@include('frontend.header')
@section('title','Privacy')


@include('frontend.headerads')
@include('frontend.nav')

@yield('section')
<section class="privacy">
    <div class="container">
        @foreach ($mypages as $myPage)


            <h1> {{strip_tags($myPage->title)}}</h1>
            <ul>
                {{$myPage->description}}
            </ul>



        @endforeach

    </div>
</section>
@include('frontend.footer')
