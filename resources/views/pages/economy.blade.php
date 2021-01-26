@extends('frontend.home')
@section('content')
    <section class="artical-a department">
        <div class="container">

            <div class="row">
                <div class="col-lg-9 card-artical-a-parent">
                    @foreach ($categoryArticles as $categoryArticle)
                    <a style="font-size: 20px !important;" href="#" class="a-parent"> <img src="{{asset('storage/categories/'.$categoryArticle->image)}}"
                            alt=""> {{$categoryArticle->name}}</a>

                    <div class="row">

                            @foreach ($categoryArticle->articles as $article)
                                <div class="col-lg-4 parent">
                                    <div class="card-artical-a department-card">
                                        <div class="card-overlay-artical-a card-overlay-department-a">
                                            <!--=======End-Star-header=========-->
                                            <span class="date-2"> <i class="far fa-calendar-alt" aria-hidden="true"></i>
                                                {{ $article->created_at->todatestring() }}
                                            </span>
                                        </div>
                                        <img src="{{asset('storage/articles/'.$article->image)}}" alt="">
                                        <h1><a href="{{ url('details/' . $article->id) }}">{{ strip_tags(Str::words($article->description,10))}}

                                            </a></h1>
                                    </div>
                                </div>
                            @endforeach

                    </div>

                    @endforeach
                </div>
                <div class="col-lg-3 artical-a-col-lg ">
                    <img style=" display: flex; margin: 0 auto; margin-bottom: 2rem;   margin-top: 6rem;"
                        src="../img/ADS 2.png" alt="">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>أهم المقالات</h1>
                        </div>
                        <div class="col-lg-12">
                            @foreach ($articles as $item)


                            <div class="card-left-artical ">
                                <img src="{{asset('storage/articles/'.$item->image)}}" alt="">
                                <a href="{{url('details/'.$item->id)}}">
                                    <h3>{{$item->name}}</h3>
                                </a>
                                <p>
                                    {{ strip_tags(Str::words($item->description,10))}}                                </p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <img class="ads-s" src="../img/ADS 5.png" alt="">

                </div>
            </div>
        </div>
    </section>
@endsection
