   <!--==================  Start slider ===============================-->

   <section class="SLIDER">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                    <div class = "listslide">
                        @foreach ($sliders as $slider)
                            <h1>{{$slider->word}}</h1>
                            <ul >
                            <a href="{{$slider->link}}" class="badge badge-info">{{$slider->title}}</a>
                            <a href="{{$slider->link}}" class="badge badge-info">{{$slider->title}}</a>
                            <a href="{{$slider->link}}" class="badge badge-info">{{$slider->title}}</a>
                            </ul>
                            </div>
                            @endforeach
                <img class="d-block w-100" src="../img/BG.png" alt="First slide">
              </div>
              <div class="carousel-item">
                    <div class = "listslide">
                        @foreach ($sliders as $slider)
                        <h1>{{$slider->word}}</h1>
                                <ul >
                                    <a href="{{$slider->link}}" class="badge badge-info">{{$slider->title}}</a>

                                </ul>
                        @endforeach

                        </div>
                    <img class="d-block w-100" src="../img/slideImg2.png" alt="First slide">
                </div>
              <div class="carousel-item">
                    <img class="d-block w-100" src="../img/slideImg3.png" alt="First slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

        </section>
<!--==================  End slider ===============================-->
