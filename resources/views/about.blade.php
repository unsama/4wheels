<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Megapixel Technologies">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
    <title>4 Wheels</title>
    <meta name="description"
          content="A digital web agency set up to help small and medium-sized businesses grow with high-quality digital marketing packages in social media, the web, mobile, and more!">
    <link rel="canonical" href="{{url('/')}}/about" />
    <meta name="robots" content="index, follow" />

       
    
    <!-- Bundle and Base CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor.bundle.css')}}">
    <link rel="stylesheet" href="{{asset('css/theme.css')}}">

    


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
                                <h1 class="banner-heading">Home Page</h1>
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





<!-- JavaScript -->
<script src="{{asset('js/jquery.bundle.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
</body>
</html>
