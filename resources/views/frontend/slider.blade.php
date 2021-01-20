   <!--==================  Start slider ===============================-->

   <section class="SLIDER">
       <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
           <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
           </ol>
           <div class="carousel-inner">
            @foreach ($sliders as $slider)
               <div class="carousel-item {{$slider->id == "1" ? "active" : ""}}">
                   <div class="listslide">
                           <h1>{{ strip_tags($slider->word) }}</h1>
                           <ul>
                               <a href="{{ $slider->link }}" class="badge badge-info">{{ $slider->title }}</a>
                               <a href="{{ $slider->link }}" class="badge badge-info">{{ $slider->title }}</a>
                               <a href="{{ $slider->link }}" class="badge badge-info">{{ $slider->title }}</a>
                           </ul>
                   </div>
                   <img class="d-block w-100" src="{{ asset('storage/images/' . $slider->image) }}" alt="First slide">
               </div>
            @endforeach

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
