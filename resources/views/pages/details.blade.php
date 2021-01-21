@extends('frontend.home')
@section('style')
    <style>

        .rating {
            font-size: 1.2rem;
            line-height: 1.2rem;
        }

        .rating .star {
            position: relative;
            float: left;
            width: 1.4rem;
            height: 1.2rem;
            font-family: FontAwesome;
            font-weight: normal;
            font-style: normal;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, .4);
            border: 0;
            background: transparent;
        }

        .rating .star:before {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 1.2rem;
            height: 1.2rem;
            transform: translate(-50%, -50%);
            content: "\f006";
            color: #777;
        }

        .rating--read-only .star--full:before {
            content: "\f005";
            color: #e3cf7a;
        }

        .rating--read-only .star--half:after {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 1.2rem;
            height: 1.2rem;
            transform: translate(-50%, -50%);
            content: "\f089";
            color: #e3cf7a;
        }

        .rating--interactive .star {
            float: right;
        }

        .rating--interactive .star:hover {
            cursor: pointer;
        }

        .rating--interactive .star:hover:before,
        .rating--interactive .star:hover~.star:before {
            content: "\f005";
            color: #e3cf7a
        }

    </style>
@endsection
@section('content')

    @foreach ($articles as $article)
        <section class="artical-detials">

            <div class="row">
                <div class="over-lay-detials-header">
                    <h1 style="position: relative;top:-100px">{{ $article->name }}</h1>
                    <div class="row">
                        <p><i class="far fa-user"></i>Name</p>
                        <p><i class="far fa-calendar-alt"></i> {{ $article->created_at->todatestring() }}</p>
                        <h3><i class="far fa-eye"></i> 1500</h3>

                        <div class="star-header">
                            <!--================-->
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>

                        </div>
                    </div>
                    <ul class="soical-header-artical">

                        <i class="fab fa-whatsapp"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-facebook-f"></i>

                    </ul>
                </div>
                <img src="{{ asset('storage/articles/' . $article->image) }}" alt="">

            </div>
        </section>
        <section class="artical-detials-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <h1>{{ $article->name }}</h1>
                        <p>{{ $article->description }}</p>
                        <div class="container">
                            <div class="rating rating--interactive" itemprop="reviewRating" itemscope
                                itemtype="https://schema.org/Rating">
                                <p class="sr-only">
                                    <meta itemprop="ratingValue" content="1">
                                    Not yet rated
                                </p>
                                <form action="{{route('ratePost')}}" class="clearfix">
                                    <!-- Buttons need to be reversed as they are floated right. -->
                                    <button  class="star" type="button" name="5" itemprop="bestRating">
                                        <span class="sr-only">Rate 5 star</span>
                                    </button>
                                    <button class="star" type="button" name="4">
                                        <span class="sr-only">Rate 4 star</span>
                                    </button>
                                    <button class="star" type="button" name="3">
                                        <span class="sr-only">Rate 3 star</span>
                                    </button>
                                    <button class="star" type="button" name="2">
                                        <span class="sr-only">Rate 2 star</span>
                                    </button>
                                    <button class="star" type="button" name="1" itemprop="worstRating">
                                        <span class="sr-only">Rate 1 star</span>
                                    </button>
                                </form>
                            </div>
                        </div>

                        <img class="ads-det" src="img/ADS 1.png" alt="">

                        <div class="edit-team-artical">
                            <div class="row">
                                <div class="over-lay-img-team">
                                    <span>مشرف</span>
                                </div>
                                <div class="membership">
                                    <img src="../img/edit-team.png" alt="">
                                    <a href="http://">عضو نشيط</a>

                                </div>
                                <div class="edit-team-artical-p">
                                    <p> <span>من قبل</span> Name<strong>
                                            ،{{ $article->created_at->translatedFormat('l j F Y') }} </strong> </p>
                                    <p> <span>أخر تعديل</span> ،{{ $article->updated_at->translatedFormat('l j F Y') }}</p>

                                </div>

                            </div>
                        </div>
                        <div class="artical-a department">
                            <div class=" card-artical-a-parent">
                                <a style="  font-size: 20px !important;" href="#" class="a-parent">اقرأ أيضاً عن</a>

                                <div class="row">
                                    @foreach ($related as $article1)
                                        <div class="col-lg-4 parent">
                                            <div class="card-artical-a department-card">
                                                <div class="card-overlay-artical-a card-overlay-department-a">
                                                    <!--=======End-Star-header=========-->
                                                    <span class="date-2"> <i class="far fa-calendar-alt"></i>
                                                        {{ $article1->created_at->todatestring() }}
                                                    </span>
                                                </div>
                                                <img src="{{ asset('storage/articles/' . $article1->image) }}" alt="">
                                                <h1><a
                                                        href="{{ url('details/' . $article1->id) }}">{{ $article1->name }}</a>
                                                </h1>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 artical-a-col-lg">
                        <div class="row">
                            <img class="ads-s" src="../img/ADS 5.png" alt="">
                            <div class="col-lg-12">
                                <h1>مواضيع شائعة</h1>
                            </div>
                            <div class="col-lg-12">
                                @foreach ($related as $item)
                                    <div class="card-left-artical ">
                                        <img src="{{ asset('storage/articles/' . $item->image) }}" alt="">
                                        <a href="{{ url('details/' . $item->id) }}">
                                            <h3>{{ $item->name }}</h3>
                                        </a>
                                        <p>{{ $item->description }}</p>
                                    </div>
                                @endforeach
                                <img class="ads-s" src="../img/ADS.png" alt="">


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    @endforeach
@endsection
