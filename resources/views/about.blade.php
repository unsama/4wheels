<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
    <title>Home </title>
    <meta name="description"
          content="A digital web agency set up to help small and medium-sized businesses grow with high-quality digital marketing packages in social media, the web, mobile, and more!">
    <!-- <link rel="canonical" href="{{url('/')}}/about" /> -->
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
                            
            <div class="text-block pr-2rem">
                    <h2 class="heading-xs  t-u">We Are</h2>                   
                    <h1 class="mt-3">MOT check up</h1>
                    <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet provident omnis voluptates nostrum nobis? Magnam, in suscipit!.</p>
                
           
           
        </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-image">
                    <img src="{{asset('images/mechanic.png')}}" alt="" title="" loading="lazy" width="100%" height="100%">
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header -->


<!-- section who are we -->
<div class="section tc-grey-alt">
    <div class="container">
        <h1 style="color: #FAA61A; font: lalezar" >Who are we</h1>
        <p class="mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo inventore</p>
        <div class="row gutter-vr-30px mt-5">
            <div class="col-md-4">
                <div class="text-block pr-2rem">
                    <!-- <h2 class="heading-xs dash t-u">We Are</h2> -->
                    <img src="{{asset('images/image_1.png')}}" alt="">
                    <h4 class="mt-3">Family Owned</h4>
                    <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet provident omnis voluptates nostrum nobis? Magnam, in suscipit!.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-block pr-2rem">
                    <!-- <h2 class="heading-xs dash t-u">We Are</h2> -->
                    <img src="{{asset('images/image_2.png')}}" alt="">
                    <h4 class="mt-3">Highly Skilled</h4>
                    <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet provident omnis voluptates nostrum nobis? Magnam, in suscipit!.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-block pr-2rem">
                    <!-- <h2 class="heading-xs dash t-u">We Are</h2> -->
                    <img src="{{asset('images/image_3.png')}}" alt="">
                    <h4 class="mt-3">Trustworthy</h4>
                    <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet provident omnis voluptates nostrum nobis? Magnam, in suscipit!.</p>
                </div>
            </div>
           
        </div>
    </div>
</div>
<!-- .section testimonials -->
<div class="section tc-grey-alt" style="background-color:#FAA61A">
    <div class="container">
        <h1 style="color: white; font: lalezar" >Our testimonials</h1>
        <p class="mt-3" style="color:black">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo inventore</p>
        
    </div>
</div>
<!-- section our services -->
<div class="section tc-grey-alt" style="background-color:#">
    <div class="container">
        <h1 style="color: #FAA61A; font: lalezar" >Our Services</h1>
        <p class="mt-3" style="color:black">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo inventore</p>
        <div class="row gutter-vr-30px mt-5">
            <div class="col-md-4">
            <div class="text-block pr-2rem">
                    <!-- <h2 class="heading-xs dash t-u">We Are</h2> -->
                    <div style=" width: 175px; height:175px; border-radius:50%;align-items: center;text-align: center;border: 3px solid black;">
                    <img class="mt-4" src="{{asset('images/mot.png')}}"  alt="">
                    </div>
                    
                    <h4 class="mt-3">MOT check up</h4>
                    <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet provident omnis voluptates nostrum nobis? Magnam, in suscipit!.</p>
                </div>
            </div>
            <div class="col-md-4">
            <div class="text-block pr-2rem">
                    <!-- <h2 class="heading-xs dash t-u">We Are</h2> -->
                    <div style=" width: 175px; height:175px; border-radius:50%;align-items: center;text-align: center;border: 3px solid black;">
                    <img class="mt-4" src="{{asset('images/car.png')}}"  alt="">
                    </div>
                    
                    <h4 class="mt-3">Service</h4>
                    <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet provident omnis voluptates nostrum nobis? Magnam, in suscipit!.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-block pr-2rem">
                    <!-- <h2 class="heading-xs dash t-u">We Are</h2> -->
                    <div style=" width: 175px; height:175px; border-radius:50%;align-items: center;text-align: center;border: 3px solid black;">
                    <img class="mt-4" src="{{asset('images/brake.png')}}"  alt="">
                    </div>
                    
                    <h4 class="mt-3">Brake</h4>
                    <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet provident omnis voluptates nostrum nobis? Magnam, in suscipit!.</p>
                </div>
            </div>
           
        </div>
        <div class="row gutter-vr-30px mt-5">
            <div class="col-md-4">
            <div class="text-block pr-2rem">
                    <!-- <h2 class="heading-xs dash t-u">We Are</h2> -->
                    <div style=" width: 175px; height:175px; border-radius:50%;align-items: center;text-align: center;border: 3px solid black;">
                    <img class="mt-4" src="{{asset('images/batteries.png')}}"  alt="">
                    </div>
                    
                    <h4 class="mt-3">Batteries</h4>
                    <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet provident omnis voluptates nostrum nobis? Magnam, in suscipit!.</p>
                </div>
            </div>
            <div class="col-md-4">
            <div class="text-block pr-2rem">
                    <!-- <h2 class="heading-xs dash t-u">We Are</h2> -->
                    <div style=" width: 175px; height:175px; border-radius:50%;align-items: center;text-align: center;border: 3px solid black;">
                    <img class="mt-4" src="{{asset('images/belt.png')}}"  alt="">
                    </div>
                    
                    <h4 class="mt-3">Timing Belt</h4>
                    <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet provident omnis voluptates nostrum nobis? Magnam, in suscipit!.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-block pr-2rem">
                    <!-- <h2 class="heading-xs dash t-u">We Are</h2> -->
                    <div style=" width: 175px; height:175px; border-radius:50%;align-items: center;text-align: center;border: 3px solid black;">
                    <img class="mt-4" src="{{asset('images/exhaust.png')}}"  alt="">
                    </div>
                    
                    <h4 class="mt-3">Exhaust</h4>
                    <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet provident omnis voluptates nostrum nobis? Magnam, in suscipit!.</p>
                </div>
            </div>
           
        </div>
    </div>
</div>

<!-- .section -->

<!-- section -->

<!-- .section -->





@include('footer')




<!-- JavaScript -->
<script src="{{asset('js/jquery.bundle.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
</body>
</html>
