<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <!-- <meta name="author" content="Megapixel Technologies"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Fav Icon  -->
        <!-- <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}"> -->
        <!-- Site Title  -->
        <!-- <title>Megapixel Technologies | Best Digital Marketing Agency In UK</title> -->
        <!-- <meta name="description" content="The best digital marketing agency and digital web agency that offers cutting-edge digital solutions for your needs, but Megapixel Technologies is the best of both."> -->
        <!-- <link rel="canonical" href="{{url('/')}}" />
        <meta name="robots" content="index, follow" /> -->

            <!-- Twitter Card data -->
            <!-- <meta name="twitter:card" content="summary_large_image"/>
            <meta name="twitter:title" content="Megapixel Technologies | Best Digital Marketing Agency In UK"/>
            <meta name="twitter:description" content="The best digital marketing agency and digital web agency that offers cutting-edge digital solutions for your needs, but Megapixel Technologies is the best of both."/>
            <meta name="twitter:site" content="@megapixel_tech"/>
            <meta name="twitter:image" content="{{url('/')}}/images/banner-a.jpg"/>
            <meta name="twitter:creator" content="@megapixel_tech"/> -->

        <!-- Open Graph data -->
        <!-- <meta property="og:title" content="Megapixel Technologies | Best Digital Marketing Agency In UK" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="{{url('/')}}" />
        <meta property="og:image" content="{{url('/')}}/images/bg-a-light.jpg" />
        <meta property="og:description"
              content="The best digital marketing agency and digital web agency that offers cutting-edge digital solutions for your needs, but Megapixel Technologies is the best of both. To find out more about the services that can aid in the expansion of your company, get in touch with us right away." /> -->

        <!-- Bundle and Base CSS -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/theme.css')}}">
        <link rel="stylesheet" href="{{asset('css/vendor.bundle.css')}}">


    </head>
    <body>
    <header class="is-sticky is-shrink is-boxed header-s1" id="header">
        <div class="header-box">
            @include('header')
           
        </div>
    </header>
  
    <!-- JavaScript -->
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script src="{{asset('js/jquery.bundle.js')}}"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    </body>
</html>
