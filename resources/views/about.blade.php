<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Megapixel Technologies">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
    <title>Megapixel Technologies | Digital Marketing Agency UK - About Us </title>
    <meta name="description"
          content="A digital web agency set up to help small and medium-sized businesses grow with high-quality digital marketing packages in social media, the web, mobile, and more!">
    <link rel="canonical" href="{{url('/')}}/about" />
    <meta name="robots" content="index, follow" />

         <!-- Twitter Card data -->
         <meta name="twitter:card" content="summary_large_image"/>
         <meta name="twitter:title" content="Megapixel Technologies | Digital Marketing Agency UK - About Us"/>
         <meta name="twitter:description" content="A digital web agency set up to help small and medium-sized businesses grow with high-quality digital marketing packages in social media, the web, mobile, and more!"/>
         <meta name="twitter:site" content="@megapixel_tech"/>
         <meta name="twitter:image" content="{{url('/')}}/images/banner-sm-g.jpg"/>
         <meta name="twitter:creator" content="@megapixel_tech"/>

    <!-- Open Graph data -->
    <meta property="og:title" content="Megapixel Technologies | Digital Marketing Agency UK - About Us" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{url('/')}}" />
    <meta property="og:image" content="{{url('/')}}/images/bg-a-light.jpg" />
    <meta property="og:description"
          content="A digital web agency set up to help small and medium-sized businesses grow with high-quality digital marketing packages in social media, the web, mobile, and more!" />

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
<header class="is-sticky is-shrink is-boxed header-s1" id="header">
    <div class="header-box">
        @include('header')
        <div class="banner tc-light">
            <div class="banner-block has-bg-image">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-xl-7 offset-xl-0">
                            <div class="banner-content">
                                <h1 class="banner-heading">About Us</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-image">
                    <img src="{{asset('images/banner-sm-a.jpg')}}" alt="Megapixel Technologies" title="Megapixel Technologies" loading="lazy" width="100%" height="100%">
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header -->


<!-- section -->
<div class="section section-x tc-grey-alt">
    <div class="container">
        <div class="row gutter-vr-30px">
            <div class="col-md-6">
                <div class="text-block pr-2rem">
                    <h5 class="heading-xs dash t-u">We Are</h5>
                    <h2>Megapixel Technologies is a bold-thinking digital agency working for leading brands
                        worldwide.</h2>
                    <p class="lead">Megapixel Technologies provides their clients with a detailed report that will elaborate on the planning, organizing, implementing, and tracking of their brand’s digital marketing and social media campaigns in order to connect with the right target audiences and achieve their objectives.</p>
                </div>
            </div>
            <div class="col-md-6 tc-grey">
                <div class="text-block">
                    <div class="row gutter-vr-20px">
                        <div class="col-12 col-md-12 col-lg-6">
                            <div class="text-box project-box-pad bg-secondary h-full">
                                <h4>What we do</h4>
                                <p>We work at the frontier of interactive development and design. We are highly
                                    skilled and happily take on complex technical challenges.</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-6">
                            <div class="text-box project-box-pad bg-secondary h-full">
                                <h4>Culture</h4>
                                <p>A friendly, ambitious team in a great office space makes Uppercase an awesome
                                    place to work. We believe having fun leads to better results dadcation.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .section -->

<!-- section -->
<div class="section section-x tc-grey-alt">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-10 col-lg-5">
                <div class="text-block bg-light block-pad-80">
                    <h5 class="heading-xs dash">Why us</h5>
                    <h2>We love to make a difference by creating digital experiences that simplify and enhance
                        value.</h2>
                    <a href="https://megapixeltech.com/services" class="btn">Our Services</a>
                </div>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->

    <!-- bg-image -->
    <div class="bg-image bg-fixed">
        <img src="images/bg-g.jpg" alt="Megapixel Technologies" title="Megapixel Technologies" loading="lazy" width="100%" height="100%">
    </div>
    <!-- end bg -->
</div>
<!-- .section -->

<!-- section -->
<div class="section section-counter-m">
    <div class="container">
        <div class="row align-items-center gutter-vr-30px justify-content-center">
            <div class="col-md-3 col-sm-6 col-6">
                <div class="counter">
                    <div class="counter-icon">
                        <em class="icon ti-dropbox"></em>
                    </div>
                    <div class="counter-content">
                        <h2 class="count" data-count="34">34</h2>
                        <p class="mb-0">Brands Helped</p>
                    </div>
                </div>
            </div><!-- .col -->
            <div class="col-md-3 col-sm-6 col-6">
                <div class="counter">
                    <div class="counter-icon">
                        <em class="icon ti-basketball"></em>
                    </div>
                    <div class="counter-content">
                        <h2 class="count" data-count="145">+145</h2>
                        <p class="mb-0">Ongoing Task</p>
                    </div>
                </div>
            </div><!-- .col -->
            <div class="col-md-3 col-sm-6 col-6">
                <div class="counter">
                    <div class="counter-icon">
                        <em class="icon ti-pencil-alt"></em>
                    </div>
                    <div class="counter-content">
                        <h2 class="count" data-count="437">+437</h2>
                        <p class="mb-0">Projects Done</p>
                    </div>
                </div>
            </div><!-- .col -->
            <div class="col-md-3 col-sm-6 col-6">
                <div class="counter">
                    <div class="counter-icon">
                        <em class="icon ti-user"></em>
                    </div>
                    <div class="counter-content">
                        <h2 class="count" data-count="375">+375</h2>
                        <p class="mb-0">Satisfied Clients</p>
                    </div>
                </div>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div>
<!-- .section -->



@include('partials.team')



@include('partials.cta-section')

@include('footer')

@include('partials.preloader')


<!-- JavaScript -->
<script src="{{asset('js/jquery.bundle.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
</body>
</html>
