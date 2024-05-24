<header class="edica-header edica-landing-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{ route('frontend.home') }}">Payel</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav"
                    aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="edicaMainNav">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('frontend.home') }}">Home <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend.about') }}">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend.video') }}">Video</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend.contact') }}">Contact Us</a>
                    </li>
                </ul>
                <ul class="navbar-nav mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><span
                                class="flag-icon flag-icon-squared rounded-circle flag-icon-gb"></span> Eng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="edica-landing-header-content">
            <div id="edicaLandingHeaderCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#edicaLandingHeaderCarousel" data-slide-to="0" class="active">.01</li>
                    <li data-target="#edicaLandingHeaderCarousel" data-slide-to="1">.02</li>
                    <li data-target="#edicaLandingHeaderCarousel" data-slide-to="2">.03</li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-6 carousel-content-wrapper">
                                <h1>Elevate your hotel's efficiency with our software</h1>
                                <p>He has led a remarkable campaign, defying the traditional mainstream parties courtesy
                                    of his En Marche! movement.</p>
                                <div class="carousel-content-btns">
                                    <a href="#!" class="btn btn-success"> <i class="fab fa-apple mr-2"></i> App
                                        Store</a>
                                    <a href="#!" class="btn btn-secondary"> <i class="fab fa-android mr-2"></i> Google
                                        Play</a>
                                </div>
                            </div>
                            <div class="col-md-6 carousel-img-wrapper">
                                <img src="{{ asset('frontend/assets/images/Slider_1.png') }}" alt="carousel-img"
                                     class="img-fluid" width="350px">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6 carousel-content-wrapper">
                                <h1>Get Started Power social proof for your brands.</h1>
                                <p>He has led a remarkable campaign, defying the traditional mainstream parties courtesy
                                    of his En Marche! movement.</p>
                                <div class="carousel-content-btns">
                                    <a href="#!" class="btn btn-success"> <i class="fab fa-apple mr-2"></i> App
                                        Store</a>
                                    <a href="#!" class="btn btn-secondary"> <i class="fab fa-android mr-2"></i> Google
                                        Play</a>
                                </div>
                            </div>
                            <div class="col-md-6 carousel-img-wrapper">
                                <img src="{{ asset('frontend/assets/images/Slider_1.png') }}" alt="carousel-img"
                                     class="img-fluid" width="350px">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6 carousel-content-wrapper">
                                <h1>Get Started Power social proof for your brands.</h1>
                                <p>He has led a remarkable campaign, defying the traditional mainstream parties courtesy
                                    of his En Marche! movement.</p>
                                <div class="carousel-content-btns">
                                    <a href="#!" class="btn btn-success"> <i class="fab fa-apple mr-2"></i> App
                                        Store</a>
                                    <a href="#!" class="btn btn-secondary"> <i class="fab fa-android mr-2"></i> Google
                                        Play</a>
                                </div>
                            </div>
                            <div class="col-md-6 carousel-img-wrapper">
                                <img src="{{ asset('frontend/assets/images/Slider_1.png') }}" alt="carousel-img"
                                     class="img-fluid" width="350px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
