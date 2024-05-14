<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @include('layouts.inc.front_head')
    @yield('style')
</head>
<body>
    <div class="edica-loader"></div>
    @include('layouts.inc.front_header')
    <main>
       @yield('main_content')
    </main>
    <section class="edica-footer-banner-section">
        <div class="container">
            <div class="footer-banner" data-aos="fade-up">
                <h1 class="banner-title">Download it now.</h1>
                <div class="banner-btns-wrapper">
                    <button class="btn btn-success"> <img src="{{ asset('frontend/assets/images/apple@1x.svg') }}" alt="ios" class="mr-2"> App Store</button>
                    <button class="btn btn-success"> <img src="{{ asset('frontend/assets/images/android@1x.svg') }}" alt="android" class="mr-2"> Google Play</button>
                </div>
                <p class="banner-text">Add some helper text here to explain the finer details of your <br> product or service.</p>
            </div>
        </div>
    </section>
    @include('layouts.inc.front_footer')
    @include('layouts.inc.front_scripts')
    @yield('scripts')
</body>
</html>

