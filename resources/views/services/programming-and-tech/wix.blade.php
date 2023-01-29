<!DOCTYPE html>
<html lang="en" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Megapixel Technologies">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="../../images/favicon.ico">
    <!-- Site Title  -->
    <title>Megapixel Technologies | Wix Website Development Services - Wix Development Agency</title>
    <meta name="description"
        content="We provide top-notch Wix website development services in the UK. we are a Wix development agency, a digital web agency based in the UK. Contact us for more…">
    <link rel="canonical" href="https://megapixeltech.com/services/programming-and-tech/wix-website-development-services" />
    <meta name="robots" content="index, follow" />
      <!-- Twitter Card data -->
   <meta name="twitter:card" content="summary_large_image"/>
   <meta name="twitter:title" content="Megapixel Technologies | Wix Website Development Services - Wix Development Agency"/>
   <meta name="twitter:description" content="We provide top-notch Wix website development services in the UK. we are a Wix development agency, a digital web agency based in the UK. Contact us for more…"/>
   <meta name="twitter:site" content="@megapixel_tech"/>
   <meta name="twitter:image" content="{{url('/')}}/images/banner-sm-g.jpg"/>
   <meta name="twitter:creator" content="@megapixel_tech"/>

    <!-- Open Graph data -->
    <meta property="og:title" content="Megapixel Technologies | Wix Website Development Services - Wix Development Agency " />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://megapixeltech.com" />
    <meta property="og:image" content="https://megapixeltech.com/images/bg-a-light.jpg" />
    <meta property="og:description"
        content="We provide top-notch Wix website development services in the UK. we are a Wix development agency, a digital web agency based in the UK. Contact us for more…" />


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

<body class="body-wider">
    <header class="is-sticky is-shrink is-boxed header-s1" id="header">
        <div class="header-box">
            @include('header')
            <div class="banner tc-light">
                <div class="banner-block">
                    <div class="container">
                        <div class="row ">
                            <div class="col-md-10 col-xl-7 offset-xl-0">
                                <div class="banner-content">
                                    <h1 class="banner-heading">Wix</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-image change-bg">
                        <img src="{{URL::asset('images/banner-sm-g.jpg')}}" alt="Wix" width="100%" height="100%" title="Wix" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- section -->
    <div class="section section-x tc-grey-alt">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-5">
                    <div class="section-head section-md res-m-btm">
                        <h5 class="heading-xs dash">Wix</h5>
                        <h2 class="text-3xl font-bold">We help brands and companies stand out in the digital age.</h2>
                    </div>
                </div><!-- .col -->
                <div class="col-md-6">
                    <div class="section-head section-md">
                        <div class="text-box">
                            <p class="lead">Megapixel Technologies is an all-in-one website that provides both free and paid plans, hundreds of custom web design templates, integrated SEO, and a full selection of popular features that assist you in building an effective and appealing online presence. At a low cost, you can get a simple drag-and-drop interface and built-in SEO integrations for your website.</p>
                        </div>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->

        </div><!-- .container -->
    </div>
    <!-- .section -->

    @include('partials.process2')

    @include('partials.team')

    @include('partials.recent-work')

    @include('partials.cta-section')

    @include('footer')

    @include('partials.preloader')

    <!-- JavaScript -->
    <script src="{{asset('js/jquery.bundle.js')}}"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>

</body>

</html>
