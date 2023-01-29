<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Megapixel Technologies">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
    <!-- Site Title  -->
    <title>Megapixel Technologies | Digital Marketing Services - Website Development Services</title>
    <meta name="description"
          content="We offer all varieties of digital marketing services, website development services, web development services, and much more at the most competitive costs with quality.">

    <link rel="canonical" href="{{url('/')}}/services" />
    <meta name="robots" content="index, follow" />


                <!-- Twitter Card data -->
                <meta name="twitter:card" content="summary_large_image"/>
                <meta name="twitter:title" content="Megapixel Technologies | Digital Marketing Services - Website Development Services"/>
                <meta name="twitter:description" content="We offer all varieties of digital marketing services, website development services, web development services, and much more at the most competitive costs with quality."/>
                <meta name="twitter:site" content="@megapixel_tech"/>
                <meta name="twitter:image" content="{{url('/')}}/images/banner-sm-g.jpg"/>
                <meta name="twitter:creator" content="@megapixel_tech"/>


    <!-- Open Graph data -->
    <meta property="og:title" content="Digital Marketing Services, Website Development Services, Megapixel Technologies" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{url('/')}}" />
    <meta property="og:image" content="{{url('/')}}/images/bg-a-light.jpg" />
    <meta property="og:description"
          content="We offer all varieties of digital marketing services, website development services, web development services, and much more at the most competitive costs with quality." />

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
        <div class="banner banner-inner tc-light">
            <div class="banner-block">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="banner-content">
                                <h1 class="banner-heading">We Specialize in Digital Solutions</h1>
                                <a href="https://megapixeltech.com/contact" class="btn">Let’s Talk !</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-image">
                    <img src="{{asset('images/banner-sm-g.jpg')}}" alt="Megapixel Technologies" title="Megapixel Technologies" loading="lazy" width="100%" height="100%">
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header -->

<!-- section -->
<div class="section section-x tc-grey-alt">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-5">
                <div class="section-head section-md res-m-btm">
                    <h5 class="heading-xs dash">OUR SERVICES</h5>
                    <h2>We help brands and companies stand out in the digital age.</h2>
                </div>
            </div><!-- .col -->
            <div class="col-md-6">
                <div class="section-head section-md">
                    <div class="text-box">
                        <p class="lead">It’s not just our track record, the efficiency of our process and the
                            quality of our products. It’s the secret ingredient that makes it all happen: the
                            bravery of our people</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center gutter-vr-30px">
            <div class="col-sm-6 col-xl-4">
                <div class="feature feature-s2 feature-s2-inner bdr">
                    <div class="feature-icon">
                        <em class="ti-panel"></em>
                    </div>
                    <div class="feature-content-s3">
                        <h3>Graphics & Design</h3>
                        <p>We are experts at delivering the best web design services! Our well-versed designers transform potential ideas into unbeatable designs that stand out from the competition. We are committed to produce top-notch website designs that can fulfill the unique needs of our clients and offer a spectacular user experience. We guarantee full-fledged response and maintain open lines of communication with you throughout the entire process, allowing your preferences to guide our services from design to delivery.</p>
                        <a href="https://megapixeltech.com/services/graphic-design-services" class="btn btn-arrow custom-button-arrow">Read
                            More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-4">
                <div class="feature feature-s2 feature-s2-inner bdr">
                    <div class="feature-icon">
                        <em class="ti-write"></em>
                    </div>
                    <div class="feature-content-s3">
                        <h3>Social Media Marketing</h3>
                        <p>Megapixel Technologies gives your social media wings to fly! Our experienced and talented team of content writers create unique and compelling scripts, podcasts, essays, blogs, and much more.  So become care-free, and leave this to our experts because it's in the best interest of you. Our social media marketing services are worth the price, because we offer the best in what we do!</p>
                        <a href="https://megapixeltech.com/services/social-media-marketing"
                           class="btn btn-arrow custom-button-arrow">Read
                            More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-4">
                <div class="feature feature-s2 feature-s2-inner bdr">
                    <div class="feature-icon">
                        <em class="ti-layers-alt"></em>
                    </div>
                    <div class="feature-content-s3">
                        <h3>Programming & Tech</h3>
                        <p>Megapixel Technologies offers high-quality IT and technical seo consulting services that guarantees high-quality assurance, long-term support, and maintenance. We have a team of tech specialists that streamline your R&D and IT operations. We promise flawless quality, prompt delivery, and smooth communication. Make Megapixel Technologies your one-stop technological partner if you want the exceptional IT development services.
                        </p>
                        <a href="https://megapixeltech.com/services/programming-and-tech" class="btn btn-arrow custom-button-arrow">Read
                            More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-4">
                <div class="feature feature-s2 feature-s2-inner bdr">
                    <div class="feature-icon">
                        <em class="ti-bar-chart-alt"></em>
                    </div>
                    <div class="feature-content-s3">
                        <h3>Digital Marketing</h3>
                        <p>Megapixel Technologies offers high-quality IT and technical seo consulting services that guarantees high-quality assurance, long-term support, and maintenance. We have a team of tech specialists that streamline your R&D and IT operations. We promise flawless quality, prompt delivery, and smooth communication. Make Megapixel Technologies your one-stop technological partner if you want the exceptional IT development services.</p>
                        <a href="https://megapixeltech.com/services/digital-marketing-services" class="btn btn-arrow custom-button-arrow">Read
                            More</a>
                    </div>
                </div>
            </div>
        </div><!-- .row-->
    </div><!-- .container -->
</div>
<!-- .section -->

@include('partials.process2')

<!-- section / logo -->
<div class="section section-x">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 text-center">
                <div class="section-head section-md">
                    <h5 class="heading-xs dash dash-both">Clients</h5>
                    <h2>Our friends who love to work with us</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center gutter-vr-40px">
            <div class="col-sm-3 col-4">
                <div class="logo-item">
                    <img src="images/client-a.png" alt="Client" title="Client" loading="lazy" width="100%" height="100%">
                </div>
            </div><!-- .col -->
            <div class="col-sm-3 col-4">
                <div class="logo-item">
                    <img src="images/client-b.png" alt="Client" title="Client" loading="lazy" width="100%" height="100%">
                </div>
            </div><!-- .col -->
            <div class="col-sm-3 col-4">
                <div class="logo-item">
                    <img src="images/client-c.png" alt="Client" title="Client" loading="lazy" width="100%" height="100%">
                </div>
            </div><!-- .col -->
            <div class="col-sm-3 col-4">
                <div class="logo-item">
                    <img src="images/client-a.png" alt="Client" title="Client" loading="lazy" width="100%" height="100%">
                </div>
            </div><!-- .col -->
            <div class="col-sm-3 col-4">
                <div class="logo-item">
                    <img src="images/client-d.png" alt="Client" title="Client" loading="lazy" width="100%" height="100%">
                </div>
            </div><!-- .col -->
            <div class="col-sm-3 col-4">
                <div class="logo-item">
                    <img src="images/client-e.png" alt="Client" title="Client" loading="lazy" width="100%" height="100%">
                </div>
            </div><!-- .col -->
            <div class="col-sm-3 col-4">
                <div class="logo-item">
                    <img src="images/client-a.png" alt="Client" title="Client" loading="lazy" width="100%" height="100%">
                </div>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div>
<!-- .section/logo -->

@include('partials.cta-section')

@include('footer')

@include('partials.preloader')


<!-- JavaScript -->
<script src="{{asset('js/jquery.bundle.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
</body>
</html>
