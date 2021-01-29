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
                        <h3><i class="far fa-eye"></i>المشاهدات {{ $views->viewer }}</h3>

                        <div class="star-header">
                            <!--================-->
                            @php $rating = $ratings; @endphp
                            @foreach (range(1, 5) as $i)
                                <span class="fa-stack" style="width:1em">
                                    <i class="far fa-star fa-stack-1x"></i>

                                    @if ($rating > 0)
                                        @if ($rating > 0.5)
                                            <i class="fas fa-star fa-stack-1x"></i>
                                        @else
                                            <i class="fas fa-star-half fa-stack-1x"></i>
                                        @endif
                                    @endif
                                    @php $rating--; @endphp
                                </span>
                            @endforeach
                        </div>
                    </div>
                    <ul class="soical-header-artical">

                        <i class="fab fa-whatsapp"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-facebook-f"></i>

                    </ul>
                </div>
                <img src="{{ asset('storage/articles/' . $article->cover) }}" alt="">

            </div>
        </section>
        <section class="artical-detials-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <h1>{{ $article->name }}</h1>
                        <p>{!! $article->description !!}</p>
                        <div class="container">
                            <div class="mt-3 row">
                                <div class="card col-md-12">
                                    <div class="card-header">
                                        <h1>التعليقات</h1>
                                    </div>
                                    @foreach ($comments as $item)
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <img width="50px" src="../a.png" alt="A">
                                                </div>
                                                <div style="text-align: right" class="col-md-11">
                                                    <h5>{{ $item->user->name }}</h5>
                                                    <h6 style="margin-top:5px">{{ $item->comment }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    @endforeach

                                </div>

                            </div>
                            <br>
                            @if (Auth::user())
                                <form action="{{ route('comment', $article->id) }}" method="get">
                                    <div class="row">
                                        <img width="50px" src="../a.png" alt="A">
                                        <input class="col-md-10" type="text" name="comment" placeholder="أضف تعليقك هنا">
                                        <button class="col-md-1 btn btn-primary" type="submit" style="margin-right: 5px">نشر</button>
                                    </div>
                                </form>
                                <br>
                                <div class="container">

                                    <div class="row">
                                        <h1>قيم المقالة</h1>
                                        <div class="container">
                                            <form class="form-horizontal poststars" action="{{ route('rating', $article->id) }}"
                                                id="addStar" method="get">

                                                <div class="rating rating--interactive" itemprop="reviewRating" itemscope>
                                                    <p class="sr-only">
                                                        <meta itemprop="ratingValue" content="1">
                                                        Not yet rated
                                                    </p>
                                                    <button class="star" type="radio" value="5" name="star" itemprop="bestRating">
                                                        <span class="sr-only">Rate 5 star</span>
                                                    </button>
                                                    <button class="star" type="radio" value="4" name="star">
                                                        <span class="sr-only">Rate 4 star</span>
                                                    </button>
                                                    <button class="star" type="radio" value="3" name="star">
                                                        <span class="sr-only">Rate 3 star</span>
                                                    </button>
                                                    <button class="star" value="2" type="radio" name="star">
                                                        <span class="sr-only">Rate 2 star</span>
                                                    </button>
                                                    <button class="star" type="radio" value="1" name="star" itemprop="worstRating">
                                                        <span class="sr-only">Rate 1 star</span>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @else
                            <div class="row">
                                <h6> قم بتسجيل الدخول لتتمكن من التعليق وتقييم المقالات <a
                                        href="{{ asset('login') }}">من هنا</a></h6>
                            </div>
                            @endif
                        </div>
                        <br>

                        <br>
                        <br>

                        <div class="edit-team-artical">
                            <div class="row">
                                @foreach ($article->editors as $item)
                                    @foreach ($item->roles as $role)
                                        <div class="over-lay-img-team">
                                            <span>
                                                {{ $role->name ? $role->name : 'مشرف' }}
                                            </span>
                                        </div>
                                        <div class="membership">
                                            <img src="{{asset('storage/images/').'/'.$item->image}}" alt="">
                                        </div>
                                    @endforeach
                                    <div class="edit-team-artical-p">
                                        <p> <span>من قبل</span>
                                            {{ $item->name }}
                                            <strong>
                                                ،{{ $article->created_at->translatedFormat('l j F Y') }} </strong>
                                        </p>
                                        <p> <span>أخر تعديل منذ:</span>
                                            ،{{ $article->updated_at->translatedFormat('l j F Y') }}</p>

                                    </div>
                                @endforeach
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
                                        <p>{{ strip_tags(Str::words($item->description, 10)) }}</p>
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
@section('script')
    <script>
        $('#addStar').change('.star', function(e) {
            $(this).submit();
        });

    </script>
@endsection
