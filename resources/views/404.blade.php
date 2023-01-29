<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Megapixel Technologies">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
    <!-- Site Title  -->
    <title>Megapixel Technologies - Contact Us</title>
    <meta name="description"
          content="We create powerful content strategies for corporate brands using our proven and tested 'ROADMAP' process. We have a track record of producing digital marketing initiatives that deliver outstanding results.">

    <meta name="robots" content="noindex, nofollow" />
    <!-- Twitter Card data -->
    <meta name="twitter:card" value="summary">
    <meta itemprop="name" content="Megapixel Technologies - Digital Agency , Creative Solutions">
    <meta itemprop="description"
          content="We create powerful content strategies for corporate brands using our proven and tested 'ROADMAP' process. We have a track record of producing digital marketing initiatives that deliver outstanding results.">
    <meta itemprop="image" content="https://megapixeltech.com">

    <!-- Open Graph data -->
    <meta property="og:title" content="Megapixel Technologies - Digital Agency , Creative Solutions" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://megapixeltech.com" />
    <meta property="og:image" content="https://megapixeltech.com/images/bg-a-light.jpg" />
    <meta property="og:description"
          content="We create powerful content strategies for corporate brands using our proven and tested 'ROADMAP' process. We have a track record of producing digital marketing initiatives that deliver outstanding results." />

    <!-- Bundle and Base CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor.bundle.css')}}">
    <link rel="stylesheet" href="{{asset('css/theme.css')}}">

      <!-- Google tag (gtag.js) -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-QP1GVB6YDT"></script>
      <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-QP1GVB6YDT');
      </script>

</head>
<body>
@include('header')

<!-- section -->
<div class="section section-x page-extra-pd align-middle-md">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 text-center">
                <div class="error-content">
                    <span class="error-text-large">404</span>
                    <h5>Opps! Why you’re here?</h5>
                    <p>We are very sorry for inconvenience. It looks like you are try to access a page that either
                        has been deleted or never existed.</p>
                    <a href="{{url('/')}}" class="btn">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .section -->

@include('footer')
@include('partials.preloader')

<!-- JavaScript -->
<script src="{{asset('js/jquery.bundle.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
</body>
</html>
