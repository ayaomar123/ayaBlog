             <!--==================  Start Navbar ===============================-->
             <section class="Nav-bar" id="navbar">
                <nav class="navbar navbar-expand-lg navbar-light fixed bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    @foreach ($sliderArticles as $sliderArticle)
                                    <li class="nav-item">
                                        <a class=" nav-link" href="#">{{$sliderArticle->name}}</a>
                                    </li>
                                    @endforeach
                                      </ul>
                        </div>
                      </nav>


        </section>
<!--==================  End Navbar ===============================-->
