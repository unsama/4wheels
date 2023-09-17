<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Megapixel Technologies">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Fav Icon  -->
        <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
        <!-- Site Title  -->
        <title>Megapixel Technologies | Best Digital Marketing Agency In UK</title>
        <meta name="description" content="The best digital marketing agency and digital web agency that offers cutting-edge digital solutions for your needs, but Megapixel Technologies is the best of both.">
        <link rel="canonical" href="{{url('/')}}" />
        <meta name="robots" content="index, follow" />

            <!-- Twitter Card data -->
            <meta name="twitter:card" content="summary_large_image"/>
            <meta name="twitter:title" content="Megapixel Technologies | Best Digital Marketing Agency In UK"/>
            <meta name="twitter:description" content="The best digital marketing agency and digital web agency that offers cutting-edge digital solutions for your needs, but Megapixel Technologies is the best of both."/>
            <meta name="twitter:site" content="@megapixel_tech"/>
            <meta name="twitter:image" content="{{url('/')}}/images/banner-a.jpg"/>
            <meta name="twitter:creator" content="@megapixel_tech"/>

        <!-- Open Graph data -->
        <meta property="og:title" content="Megapixel Technologies | Best Digital Marketing Agency In UK" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="{{url('/')}}" />
        <meta property="og:image" content="{{url('/')}}/images/bg-a-light.jpg" />
        <meta property="og:description"
              content="The best digital marketing agency and digital web agency that offers cutting-edge digital solutions for your needs, but Megapixel Technologies is the best of both. To find out more about the services that can aid in the expansion of your company, get in touch with us right away." />

        <!-- Bundle and Base CSS -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/theme.css')}}">
        <link rel="stylesheet" href="{{asset('css/vendor.bundle.css')}}">

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-QP1GVB6YDT"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-QP1GVB6YDT');
            </script>

            <!--Start of Tawk.to Script-->
            <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/6411970b4247f20fefe602fc/1gribc1op';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
        </script>
        <!--End of Tawk.to Script-->

    </head>
    <body>
    <header class="is-sticky is-shrink is-boxed header-s1" id="header">
        <div class="header-box">
            @include('header')
            <div class="banner tc-light">
                <div class="banner-block">
                    <div class="container">
                        <div class="row ">
                            <div class="col-md-10 col-xl-7 offset-xl-0">
                                <div class="banner-content">
                                    <h1 class="banner-heading">Your home for digital marketing solutions</h1>
                                    <h2 class="lead lead-lg">Ready for growth? owned by you, driven by us.</h2>

                                    <div class="banner-btn">
                                        <a href="{{url('/')}}/services">Check Out Our
                                            Services</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-image change-bg">
                        <img src="{{asset('images/banner-a.jpg')}}" alt="Megapixel Technologies" title="Megapixel Technologies" loading="lazy" width="100%" height="100%">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->


    <!-- section -->
    <div class="section section-x tc-grey-alt">
        <div class="container">
            <div class="row justify-content-between gutter-vr-30px">
                <div class="col-lg-4 col-xl-3 col-md-8">
                    <div class="section-head section-head-col">
                        <h3 class="heading-xs dash">What we do</h3>
                        <h2 class="font-bold">Innovations and impact</h2>
                        <p class="lead">Implementing and managing innovative web marketing techniques to boost your business's profile</p>
                        <a href="https://megapixeltech.com/services" class="btn">Discover More</a>
                    </div>
                </div><!-- .col -->
                <div class="col-lg-8">
                    <div class="row gutter-vr-30px gutter-vr-30px-res">
                        <div class="col-sm-6">
                            <div class="feature">
                                <div class="feature-icon">
                                    <em class="icon ti-panel"></em>
                                </div>
                                <div class="feature-content">
                                    <h3>Graphic & Design</h3>
                                    <p>We are a reputable provider of web design services with the best attitude. </p>
                                    <a href="https://megapixeltech.com/graphic-design-services" class="btn btn-arrow custom-button-arrow">Read
                                        More</a>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-sm-6">
                            <div class="feature">
                                <div class="feature-icon">
                                    <em class="icon ti-write"></em>
                                </div>
                                <div class="feature-content">
                                    <h3>Social Media Marketing</h3>
                                    <p>Megapixel Technologies gives your social media wings to fly!</p>
                                    <a href="https://megapixeltech.com/social-media-marketing-agency"
                                       class="btn btn-arrow custom-button-arrow">Read More</a>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-sm-6">
                            <div class="feature">
                                <div class="feature-icon">
                                    <em class="icon ti-layers-alt"></em>
                                </div>
                                <div class="feature-content">
                                    <h3>Programming & Tech</h3>
                                    <p>We use the latest technology and we never stop learning</p>
                                    <a href="https://megapixeltech.com/programming-and-tech" class="btn btn-arrow custom-button-arrow">Read
                                        More</a>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-sm-6">
                            <div class="feature">
                                <div class="feature-icon">
                                    <em class="icon ti-bar-chart-alt "></em>
                                </div>
                                <div class="feature-content">
                                    <h3>Digital Marketing</h3>
                                    <p>Megapixel Technologies is the top digital marketing firm </p>
                                    <a href="https://megapixeltech.com/digital-marketing-agency-in-uks" class="btn btn-arrow custom-button-arrow">Read
                                        More</a>
                                </div>
                            </div>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div>
            </div>
        </div>
    </div>
    <!-- .section -->

    <!-- section -->
    <div class="section section-x section-block tc-light">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-9">
                    <div class="text-block feature-area bg-darker">
                        <div class="section-head">
                            <h4 class="heading-xs dash">What We Stand For</h4>
                            <h2 class="font-bold">Our designers and developers do everything to get the attention of your audience.</h2>
                        </div>
                        <div class="row gutter-vr-40px">
                            <div class="col-sm-6">
                                <div class="feature">
                                    <div class="feature-icon feature-icon-s2">
                                        <em class="icon ti-notepad"></em>
                                    </div>
                                    <div class="feature-content feature-content-s4">
                                        <h3>Quality Products</h3>
                                        <p>Our creative experts provide top-notch quality products to make our clients
                                            stand out among the rest.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="feature">
                                    <div class="feature-icon feature-icon-s2">
                                        <em class="icon ti-bookmark-alt"></em>
                                    </div>
                                    <div class="feature-content feature-content-s4">
                                        <h4>True Value</h4>
                                        <p>We are true to our goals of providing the best design to increase a brand’s
                                            awareness and value.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="feature">
                                    <div class="feature-icon feature-icon-s2">
                                        <em class="icon ti-bag"></em>
                                    </div>
                                    <div class="feature-content feature-content-s4">
                                        <h4>Discover & Sharing</h4>
                                        <p>Our creativity is expanded as we discover and share products.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="feature">
                                    <div class="feature-icon feature-icon-s2">
                                        <em class="icon ti-reload"></em>
                                    </div>
                                    <div class="feature-content feature-content-s4">
                                        <h4>Build Faster</h4>
                                        <p>To unlock the gates to bigger opportunities, we build faster, smoother, and
                                            more human-touched websites.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .col -->
            </div>
        </div>
        <div class="bg-image bg-fixed">
            <img src="{{asset('images/bg-a-light.jpg')}}" alt="Megapixel Technologies" title="Megapixel Technologies" loading="lazy" width="100%" height="100%">
        </div>
    </div>
    <!-- .section -->

    <!-- section -->
    <div class="section section-x tc-grey">
        <div class="container">
            <div class="row justify-content-between align-items-center gutter-vr-30px">
                <div class="col-xl-7 col-lg-6">
                    <div class="image-block">
                        <img src="{{asset('images/image-a.jpg')}}" alt="Megapixel Technologies" title="Megapixel Technologies" loading="lazy" width="100%" height="100%">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="text-block text-box-ml mtm-15">
                        <h2 class="font-bold">We help clients to create Digital amazing experience. </h2>
                        <p class="lead">Are you ready for a meaningful change? Together, let's create this thing!</p>
                        <p>
                            We create powerful content strategies for corporate brands using our proven and tested
                            "ROADMAP" process. We have a track record of producing digital marketing initiatives that
                            deliver outstanding results.
                        </p>
                        <a href="{{url('/')}}/about" class="btn">About us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .section -->

    @include('partials.process')

    <!-- Feature Services Test -->
    <!-- section -->
    <div class="section section-x section-project pb-0 tc-grey-alt" id="project">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 text-center">
                    <div class="section-head">
                        <h5 class="heading-xs dash dash-both">Services</h5>
                        <h2 class="font-bold">We Are Cultivating Market Leadership From The Inside Out</h2>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <!-- project filter -->
                    <ul class="project-filter project-md">
                        <li class="active" data-filter="all">All</li>
                        <li data-filter="1">Graphic & Design</li>
                        <li data-filter="2">Social Media Marketing</li>
                        <li data-filter="3">Programming & Tech</li>
                        <li data-filter="4">Digital Marketing</li>
                    </ul>
                    <!-- .project-filter -->
                </div>
            </div>
        </div>

        <div class="project-area bg-secondary">
            <div class="row project project-v5 no-gutters" id="project1">
                <div class="col-sm-6 col-xl-3 filtr-item" data-category="1">
                    <a href="{{url('/')}}/services/graphic-design-services/logo-design-and-brand-identity">
                        <div class="project-item">
                            <div class="project-image">
                                <img src="{{asset('images/services/logo-and-brand-identity.jpg')}}" alt="Megapixel Technologies" title="Megapixel Technologies" loading="lazy" width="100%" height="100%">
                            </div>
                            <div class="project-over">
                                <div class="project-content">
                                    <h3>Graphic & Design</h4>
                                    <p>Logo & Brand Identity</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-3 filtr-item" data-category="1">
                    <a href="{{url('/')}}/services/graphic-design-services/web-mobile-design">
                        <div class="project-item">
                            <div class="project-image">
                                <img src="{{asset('images/services/web-and-mobile-design.jpg')}}" alt="Megapixel Technologies" title="Megapixel Technologies" loading="lazy" width="100%" height="100%">
                            </div>
                            <div class="project-over">
                                <div class="project-content">
                                    <h4>Graphic & Design</h4>
                                    <p>Web & Mobile Design</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-3 filtr-item" data-category="1">
                    <a href="{{url('/')}}/services/graphic-design-services/ui-ux-design-services">
                        <div class="project-item">
                            <div class="project-image">
                                <img src="{{asset('images/services/web-and-mobile-design.jpg')}}" alt="Megapixel Technologies" title="Megapixel Technologies" loading="lazy" width="100%" height="100%">
                            </div>
                            <div class="project-over">
                                <div class="project-content">
                                    <h4>Graphic & Design</h4>
                                    <p>UI/UX</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-xl-3 filtr-item" data-category="2">
                    <a to="{{url('/')}}/services/social-media-marketing/articles-and-blog-posts">
                        <div class="project-item">
                            <div class="project-image">
                                <img src="{{asset('images/services/articles-and-blog-posts.jpg')}}" alt="Megapixel Technologies" title="Megapixel Technologies" loading="lazy" width="100%" height="100%">
                            </div>
                            <div class="project-over">
                                <div class="project-content">
                                    <h4>Social Media Marketing</h4>
                                    <p>Articles & Blog Posts</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-3 filtr-item" data-category="2">
                    <a to="{{url('/')}}/services/social-media-marketing/proofreading-and-editing">
                        <div class="project-item">
                            <div class="project-image">
                                <img src="{{asset('images/services/proofreading-and-editing.jpg')}}" alt="Megapixel Technologies" title="Megapixel Technologies" loading="lazy" width="100%" height="100%">
                            </div>
                            <div class="project-over">
                                <div class="project-content">
                                    <h4>Social Media Marketing</h4>
                                    <p>Proofreading & Editing</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-3 filtr-item" data-category="2">
                    <a to="{{url('/')}}/services/social-media-marketing/resume-and-cover-letters">
                        <div class="project-item">
                            <div class="project-image">
                                <img src="{{asset('images/services/resume-and-cover-letters.jpg')}}" alt="Megapixel Technologies" title="Megapixel Technologies" loading="lazy" width="100%" height="100%">
                            </div>
                            <div class="project-over">
                                <div class="project-content">
                                    <h4>Social Media Marketing</h4>
                                    <p>Resume & Cover Letters</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>


                <div class="col-sm-6 col-xl-3 filtr-item" data-category="3">
                    <a href="{{url('/')}}/services/programming-and-tech/mobile-apps">
                        <div class="project-item">
                            <div class="project-image">
                                <img src="{{asset('images/services/mobile-app.jpg')}}" alt="Megapixel Technologies" title="Megapixel Technologies" loading="lazy" width="100%" height="100%">
                            </div>
                            <div class="project-over">
                                <div class="project-content">
                                    <h4>Programming & Tech</h4>
                                    <p>Mobile Apps</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-3 filtr-item" data-category="3">
                    <a href="{{url('/')}}/services/programming-and-tech/shopify">
                        <div class="project-item">
                            <div class="project-image">
                                <img src="{{asset('images/services/shopify.jpg')}}" alt="Megapixel Technologies" title="Megapixel Technologies" loading="lazy" width="100%" height="100%">
                            </div>
                            <div class="project-over">
                                <div class="project-content">
                                    <h4>Programming & Tech</h4>
                                    <p>Shopify</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-3 filtr-item" data-category="3">
                    <a href="{{url('/')}}/services/programming-and-tech/e-commerce-development">
                        <div class="project-item">
                            <div class="project-image">
                                <img src="{{asset('images/services/e-commerce.jpg')}}" alt="Megapixel Technologies" title="Megapixel Technologies" loading="lazy" width="100%" height="100%">
                            </div>
                            <div class="project-over">
                                <div class="project-content">
                                    <h4>Programming & Tech</h4>
                                    <p>E Commerce Development</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-3 filtr-item" data-category="3">
                    <a href="{{url('/')}}/services/programming-and-tech/website-builders-and-cms">
                        <div class="project-item">
                            <div class="project-image">
                                <img src="{{asset('images/services/web-builders-and-cms.jpg')}}" alt="Megapixel Technologies" title="Megapixel Technologies" loading="lazy" width="100%" height="100%">
                            </div>
                            <div class="project-over">
                                <div class="project-content">
                                    <h4>Programming & Tech</h4>
                                    <p>Website Builders & CMS</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-xl-3 filtr-item" data-category="4">
                    <a href="{{url('/')}}/services/digital-marketing-services/search-engine-marketing-services">
                        <div class="project-item">
                            <div class="project-image">
                                <img src="{{asset('images/services/search-engine-marketing.jpg')}}" alt="Megapixel Technologies" title="Megapixel Technologies" loading="lazy" width="100%" height="100%">
                            </div>
                            <div class="project-over">
                                <div class="project-content">
                                    <h4>Digital Marketing</h4>
                                    <p>Search Engine Marketing</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-3 filtr-item" data-category="4">
                    <a href="{{url('/')}}/services/digital-marketing-services/search-engine-optimization-services">
                        <div class="project-item">
                            <div class="project-image">
                                <img src="{{asset('images/services/seo-services.jpg')}}" alt="Megapixel Technologies" title="Megapixel Technologies" loading="lazy" width="100%" height="100%">
                            </div>
                            <div class="project-over">
                                <div class="project-content">
                                    <h4>Digital Marketing</h4>
                                    <p>Search Engine Optimization</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-3 filtr-item" data-category="4">
                    <a href="{{url('/')}}/services/digital-marketing-services/social-media-marketing">
                        <div class="project-item">
                            <div class="project-image">
                                <img src="{{asset('images/services/social-media-marketing.jpg')}}" alt="Megapixel Technologies" title="Megapixel Technologies" loading="lazy" width="100%" height="100%">
                            </div>
                            <div class="project-over">
                                <div class="project-content">
                                    <h4>Digital Marketing</h4>
                                    <p>Social Media Marketing</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-3 filtr-item" data-category="4">
                    <a href="{{url('/')}}/services/digital-marketing-services/email-marketing-services">
                        <div class="project-item">
                            <div class="project-image">
                                <img src="{{asset('images/services/email-marketing.jpg')}}" alt="Megapixel Technologies" title="Megapixel Technologies" loading="lazy" width="100%" height="100%">
                            </div>
                            <div class="project-over">
                                <div class="project-content">
                                    <h4>Digital Marketing</h4>
                                    <p>Email Marketing</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-3 filtr-item" data-category="4">
                    <a href="{{url('/')}}/services/digital-marketing-services/affiliate-marketing-services">
                        <div class="project-item">
                            <div class="project-image">
                                <img src="{{asset('images/services/affiliate-marketing.jpg')}}" alt="Megapixel Technologies" title="Megapixel Technologies" loading="lazy" width="100%" height="100%">
                            </div>
                            <div class="project-over">
                                <div class="project-content">
                                    <h4>Digital Marketing</h4>
                                    <p>Affiliate Marketing</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>


            </div>
            <div class="project-area project-call section-m bg-dark-s2 tc-light">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-lg-flex text-center text-lg-left align-items-center justify-content-between">
                                <h2 class="fw-4 font-bold">Want to see what we do?</h2>
                                <a href="{{url('/')}}/services" class="custom-button">See All Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- section -->
    <div class="section section-x">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-8 text-center">
                    <div class="section-head section-md">
                        <h3 class="heading-xs dash dash-both">Testimonial</h3>
                        <h2 class="font-bold">What clients say about Megapixel Technologies</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="tes-s1">
                        <div class="has-carousel" data-items="1" data-loop="true" data-dots="true" data-auto="true"
                             data-navs="true">
                            <div class="tes-item">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="tes-thumb">
                                            <div class="bg-image">
                                                <img src="{{asset('images/clients-a.jpg')}}" alt="Client" title="Client" loading="lazy" width="100%" height="100%">
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-md-7">
                                        <div class="tes-block tc-light bg-primary">
                                            <div class="tes-content">
                                                <p class="tes-title u-cap"><strong>They are great agency</strong> </p>
                                                <p class="lead">We've been working with the team at Megapixel Technologies for the past year and have been extremely impressed with their level of expertise and professionalism. They have helped to completely revamp our website and implement a successful digital marketing campaign, resulting in a significant increase in online sales.</p>
                                            </div>
                                            <div class="author-con">
                                                <h6 class="author-name t-u">Mike Andrew</h6>
                                                <p>CEO - Philandropia</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .tes-item -->
                            <div class="tes-item">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="tes-thumb">
                                            <div class="bg-image">
                                                <img src="{{asset('images/clients-b.jpg')}}" alt="Client" title="Client" loading="lazy" width="100%" height="100%">
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-md-7">
                                        <div class="tes-block tc-light bg-primary">
                                            <div class="tes-content">
                                                <p class="tes-title u-cap"><strong>They are great agency</strong> </p>
                                                <p class="lead">As a small business owner, I was hesitant to invest in website development and digital marketing services. However, after working with Digital Web and Marketing, I can confidently say that it was the best decision I could have made for my business. </p>
                                            </div>
                                            <div class="author-con">
                                                <h6 class="author-name t-u">MARINA SHOVA</h6>
                                                <p>CEO - Art policy</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .tes-item -->
                            <div class="tes-item">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="tes-thumb">
                                            <div class="bg-image">
                                                <img src="{{asset('images/clients-c.jpg')}}" alt="Client" title="Client" loading="lazy" width="100%" height="100%">
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-md-7">
                                        <div class="tes-block tc-light bg-primary">
                                            <div class="tes-content">
                                                <p class="tes-title u-cap"><strong>They are great agency</strong> </p>
                                                <p class="lead">Megapixel Technologies has been an invaluable partner for our business. Not only did they design a beautiful and user-friendly website, but they also helped us to develop a comprehensive digital marketing strategy that has increased our online visibility and attracted new customers.
                                                </p>
                                            </div>
                                            <div class="author-con">
                                                <h3 class="author-name t-u">HYPER MACK</h3>
                                                <p>CEO - Hellozen Bulk</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tes-arrow">
                            <a class='slick-prev slick-arrow'><i class='icon ti ti-angle-left'></i></a>
                            <a class='slick-next slick-arrow'><i class='icon ti ti-angle-right'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .section -->

    <!-- logo -->
    <div class="section section-logo">
        <div class="container">
            <div class="row justify-content-center justify-content-md-between gutter-vr-30px">
                <div class="col-sm-3 col-md-2 col-5">
                    <div class="logo-item">
                        <img src="{{asset('images/client-a.png')}}" alt="Client" title="Client" loading="lazy" width="100%" height="100%">
                    </div>
                </div><!-- .col -->
                <div class="col-sm-3 col-md-2 col-5">
                    <div class="logo-item">
                        <img src="{{asset('images/client-b.png')}}" alt="Client" title="Client" loading="lazy" width="100%" height="100%">
                    </div>
                </div><!-- .col -->
                <div class="col-sm-3 col-md-2 col-5">
                    <div class="logo-item">
                        <img src="{{asset('images/client-c.png')}}" alt="Client" title="Client" loading="lazy" width="100%" height="100%">
                    </div>
                </div><!-- .col -->
                <div class="col-sm-3 col-md-2 col-5">
                    <div class="logo-item">
                        <img src="{{asset('images/client-d.png')}}" alt="Client" title="Client" loading="lazy" width="100%" height="100%">
                    </div>
                </div><!-- .col -->
                <div class="col-sm-3 col-md-2 col-5">
                    <div class="logo-item">
                        <img src="{{asset('images/client-e.png')}}" alt="Client" title="Client" loading="lazy" width="100%" height="100%">
                    </div>
                </div><!-- .col -->
            </div>
        </div><!-- .container -->
    </div>
    <!-- .logo -->

    <!-- section -->
    <div class="section section-x section-counter tc-light">
        <div class="container">
            <div class="row justify-content-between align-items-center gutter-vr-30px">
                <div class="col-md-5">
                    <div class="text-box mrm-20">
                        <h2 class="font-bold">Let’s Build And Grow Together & Create The Next Big Thing</h2>
                        <p>Our team is creatively strategy-oriented and focused on providing creative solutions for your creative ideas.</p>
                    </div>
                </div><!-- .col -->
                <div class="col-md-6">
                    <div class="row no-gutters">
                        <div class="col-6">
                            <div class="counter counter-s2 counter-bdr border-bottom-0">
                                <div class="counter-icon">
                                    <em class="icon ti-dropbox"></em>
                                </div>
                                <div class="counter-content counter-content-s2">
                                    <h2 class="count font-bold" data-count="34">34</h2>
                                    <p>Brands Helped</p>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-6">
                            <div class="counter counter-s2 counter-bdr border-bottom-0">
                                <div class="counter-icon">
                                    <em class="icon ti-basketball"></em>
                                </div>
                                <div class="counter-content counter-content-s2">
                                    <h2 class="count font-bold" data-count="145">+145</h2>
                                    <p>Ongoing Task</p>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-6">
                            <div class="counter counter-s2 counter-bdr">
                                <div class="counter-icon">
                                    <em class="icon ti-pencil-alt"></em>
                                </div>
                                <div class="counter-content counter-content-s2">
                                    <h2 class="count font-bold" data-count="437">+437</h2>
                                    <p>Projects Done</p>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-6">
                            <div class="counter counter-s2 counter-bdr">
                                <div class="counter-icon">
                                    <em class="icon ti-user"></em>
                                </div>
                                <div class="counter-content counter-content-s2">
                                    <h2 class="mrm-4 count font-bold" data-count="375">+375</h2>
                                    <p>Satisfied Clients</p>
                                </div>
                            </div>
                        </div><!-- .col -->
                    </div>
                </div>
            </div>
        </div>
        <!-- bg -->
        <div class="bg-image bg-fixed">
            <img src="{{asset('images/bg-b.jpg')}}" alt="Megapixel Technologies" title="Megapixel Technologies" loading="lazy" width="100%" height="100%">
        </div>
    </div>
    <!-- .section -->

    <!-- section-news -->
    <div class="section section-x section-news">
        <div class="container">
            <div class="row justify-content-center gutter-vr-60px">
                <div class="col-lg-12">
                    <div class="row justify-content-center justify-content-md-start no-gutter">
                        <div class="col-10 col-lg-7 text-center text-md-left">
                            <div class="section-head section-sm">
                                <h3 class="heading-xs dash">Blogs</h3>
                                <h2 class="font-bold">Recent Posts</h2>
                            </div>
                        </div>
                    </div><!-- .row -->
                    <div class="row justify-content-center justify-content-md-start gutter-vr-30px">
                        @foreach ($posts as $post)
                            <div class="col-md-12">
                                <div class="post post-v1 align-items-center">
                                    <div class="post-thumb">
                                        @php
                                            $image = $post->thumbnail;
                                            $image = str_replace('public/', '', $image);
                                        @endphp
                                        <a href="{{url('/')}}/blogs/{{$post->meta_slug}}"><img
                                                src="{{asset('storage/'.$image)}}" alt="{{$post->title}}" title="{{$post->title}}" loading="lazy" width="100" height="100"></a>
                                    </div>
                                    <div class="post-content text-center text-md-left">
                                        <p class="post-tag post-date">{{date('F j, Y', strtotime($post->created_at))}}</p>
                                        <h3><a
                                                href="{{url('/')}}/blogs/{{$post->meta_slug}}" class="text-capitalize">{{$post->title}}</a>
                                        </h3>
                                        <a href="{{url('/')}}/blogs/{{$post->meta_slug}}"
                                           class="btn btn-arrow custom-button-arrow">Read More</a>
                                    </div>
                                </div>
                            </div>

                            @if ($loop->index > 2)
                                @break
                            @endif
                        @endforeach

                        <div class="col-12 text-center text-md-left">
                            <div class="">
                                <a href="{{url('/')}}/blogs" class="custom-button">View all blogs</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-6">
                    <div class="block bdr feed ml-lg-4">
                        <div class="feed-block d-flex">
                            <div class="feed-icon">
                                <i class="icon fab fa-twitter"></i>
                            </div>
                            <div class="feed-content">
                                <h4>Megapixel Technologies</h4>
                                <a
                                    href="https://twitter.com/megapixel_tech?s=11&t=ZgUU1Nn1GQod_N0gzE16qA">@megapixel_tech</a>
                            </div>
                        </div>
                        <div class="feed-block" id="tweets_feed">

                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- .section-news -->

    <!-- Section Tweets -->
    <div class="section">
                        <div class="feed d-flex justify-content-center align-items-center">
                            <div class="feed-icon">
                                <i class="icon fab fa-twitter"></i>
                            </div>
                            <div class="feed-content">
                                <h4>Megapixel Technologies</h4>
                                <a
                                    href="https://twitter.com/megapixel_tech?s=11&t=ZgUU1Nn1GQod_N0gzE16qA">@megapixel_tech</a>
                            </div>
                        </div>
        <div class="container d-flex justify-content-center align-items-start flex-wrap">
            <div class="m-1" style="max-width:240px;">
                             <blockquote class="twitter-tweet">
                                <p lang="en" dir="ltr">
                                    SEO, is the process of optimizing a website to increase its visibility and making a website easier to find and navigate, and thus increasing its organic traffic.
                                    <a href="https://twitter.com/hashtag/megapixeltech?src=hash&amp;ref_src=twsrc%5Etfw">#megapixeltech</a>
                                    <a href="https://twitter.com/hashtag/digitalmarketing?src=hash&amp;ref_src=twsrc%5Etfw">#digitalmarketing</a>
                                    <a href="https://twitter.com/hashtag/SEO?src=hash&amp;ref_src=twsrc%5Etfw">#SEO</a>
                                    <a href="https://twitter.com/hashtag/seoagency?src=hash&amp;ref_src=twsrc%5Etfw">#seoagency</a>
                                    <a href="https://twitter.com/hashtag/tech?src=hash&amp;ref_src=twsrc%5Etfw">#tech</a>
                                    <a href="https://t.co/LQyTFzFQdg">pic.twitter.com/LQyTFzFQdg</a>
                                </p>&mdash; Megapixel Technologies (@megapixel_tech) <a href="https://twitter.com/megapixel_tech/status/1631249974074679299?ref_src=twsrc%5Etfw">March 2, 2023</a>
                              </blockquote>
            </div>
            <div class="m-1" style="max-width:240px;">
                <blockquote class="twitter-tweet"><p lang="en" dir="ltr">Social media marketing can help to increase brand awareness by making your business more visible online. Through the use of various social media platforms, you can reach more people and increase your brand’s visibility<a href="https://twitter.com/hashtag/megapixeltech?src=hash&amp;ref_src=twsrc%5Etfw">#megapixeltech</a> <a href="https://twitter.com/hashtag/digitalmarketing?src=hash&amp;ref_src=twsrc%5Etfw">#digitalmarketing</a> <a href="https://twitter.com/hashtag/socialmediamarketing?src=hash&amp;ref_src=twsrc%5Etfw">#socialmediamarketing</a> <a href="https://twitter.com/hashtag/tech?src=hash&amp;ref_src=twsrc%5Etfw">#tech</a> <a href="https://t.co/xtur4Pp0iZ">pic.twitter.com/xtur4Pp0iZ</a></p>&mdash; Megapixel Technologies (@megapixel_tech) <a href="https://twitter.com/megapixel_tech/status/1629107930275405826?ref_src=twsrc%5Etfw">February 24, 2023</a>
                </blockquote>
            </div>
            <div class="m-1" style="max-width:240px;">
                <blockquote class="twitter-tweet"><p lang="en" dir="ltr">Content marketing is all about creating and distributing valuable, relevant, and consistent content to attract and retain a targeted audience.<a href="https://twitter.com/hashtag/megapixeltech?src=hash&amp;ref_src=twsrc%5Etfw">#megapixeltech</a> <a href="https://twitter.com/hashtag/DigitalMarketing?src=hash&amp;ref_src=twsrc%5Etfw">#DigitalMarketing</a> <a href="https://twitter.com/hashtag/marketingagency?src=hash&amp;ref_src=twsrc%5Etfw">#marketingagency</a> <a href="https://twitter.com/hashtag/contentmarketing?src=hash&amp;ref_src=twsrc%5Etfw">#contentmarketing</a> <a href="https://t.co/qwnhVexF1Q">pic.twitter.com/qwnhVexF1Q</a></p>&mdash; Megapixel Technologies (@megapixel_tech) <a href="https://twitter.com/megapixel_tech/status/1627007695294275585?ref_src=twsrc%5Etfw">February 18, 2023</a></blockquote>
            </div>
            <div class="m-1" style="max-width:240px;">
                <blockquote class="twitter-tweet"><p lang="en" dir="ltr">Ecommerce development involves creating online stores and websites with the goal of improving customer experience and increasing sales.<a href="https://twitter.com/hashtag/megapixeltech?src=hash&amp;ref_src=twsrc%5Etfw">#megapixeltech</a> <a href="https://twitter.com/hashtag/DigitalMarketing?src=hash&amp;ref_src=twsrc%5Etfw">#DigitalMarketing</a> <a href="https://twitter.com/hashtag/technology?src=hash&amp;ref_src=twsrc%5Etfw">#technology</a> <a href="https://twitter.com/hashtag/ecommerce?src=hash&amp;ref_src=twsrc%5Etfw">#ecommerce</a> <a href="https://twitter.com/hashtag/design?src=hash&amp;ref_src=twsrc%5Etfw">#design</a> <a href="https://t.co/3FfyX626d2">pic.twitter.com/3FfyX626d2</a></p>&mdash; Megapixel Technologies (@megapixel_tech) <a href="https://twitter.com/megapixel_tech/status/1625068409762336768?ref_src=twsrc%5Etfw">February 13, 2023</a></blockquote>
            </div>
            <div class="m-1" style="max-width:240px;">
                <blockquote class="twitter-tweet"><p lang="en" dir="ltr">A brand identity is the collective visual elements used to communicate a company’s personality, values, and purpose and is often used to differentiate a company from its competitors.<a href="https://twitter.com/hashtag/megapixeltech?src=hash&amp;ref_src=twsrc%5Etfw">#megapixeltech</a> <a href="https://twitter.com/hashtag/digitalagency?src=hash&amp;ref_src=twsrc%5Etfw">#digitalagency</a> <a href="https://twitter.com/hashtag/digitalmarketingagency?src=hash&amp;ref_src=twsrc%5Etfw">#digitalmarketingagency</a> <a href="https://twitter.com/hashtag/technology?src=hash&amp;ref_src=twsrc%5Etfw">#technology</a> <a href="https://twitter.com/hashtag/brandidentity?src=hash&amp;ref_src=twsrc%5Etfw">#brandidentity</a> <a href="https://twitter.com/hashtag/design?src=hash&amp;ref_src=twsrc%5Etfw">#design</a> <a href="https://t.co/X9ijPE3pyh">pic.twitter.com/X9ijPE3pyh</a></p>&mdash; Megapixel Technologies (@megapixel_tech) <a href="https://twitter.com/megapixel_tech/status/1623278945712971776?ref_src=twsrc%5Etfw">February 8, 2023</a></blockquote>
            </div>
            <div class="m-1" style="max-width:240px;">
                <blockquote class="twitter-tweet"><p lang="en" dir="ltr">As a business owner, you know that Email Marketing is an excellent way to reach new customers and retain existing ones. Get the results you need with Professional Email Strategies.<a href="https://twitter.com/hashtag/megapixeltech?src=hash&amp;ref_src=twsrc%5Etfw">#megapixeltech</a> <a href="https://twitter.com/hashtag/DigitalMarketing?src=hash&amp;ref_src=twsrc%5Etfw">#DigitalMarketing</a> <a href="https://twitter.com/hashtag/EmailMarketing?src=hash&amp;ref_src=twsrc%5Etfw">#EmailMarketing</a> <a href="https://twitter.com/hashtag/marketingagency?src=hash&amp;ref_src=twsrc%5Etfw">#marketingagency</a> <a href="https://twitter.com/hashtag/techno?src=hash&amp;ref_src=twsrc%5Etfw">#techno</a> <a href="https://t.co/WZBXEFlVrS">pic.twitter.com/WZBXEFlVrS</a></p>&mdash; Megapixel Technologies (@megapixel_tech) <a href="https://twitter.com/megapixel_tech/status/1621487042558402560?ref_src=twsrc%5Etfw">February 3, 2023</a></blockquote>
            </div>
            <div class="m-1" style="max-width:240px;">
                <blockquote class="twitter-tweet"><p lang="en" dir="ltr">We are experts at transforming potential ideas into unequaled designs to create websites that reflect the principles of your brand and stand out from the competition. <a href="https://twitter.com/hashtag/megapixeltech?src=hash&amp;ref_src=twsrc%5Etfw">#megapixeltech</a> <a href="https://twitter.com/hashtag/digitalagency?src=hash&amp;ref_src=twsrc%5Etfw">#digitalagency</a> <a href="https://twitter.com/hashtag/webdesign?src=hash&amp;ref_src=twsrc%5Etfw">#webdesign</a> <a href="https://twitter.com/hashtag/uiux?src=hash&amp;ref_src=twsrc%5Etfw">#uiux</a> <a href="https://t.co/TJeCI08EPV">pic.twitter.com/TJeCI08EPV</a></p>&mdash; Megapixel Technologies (@megapixel_tech) <a href="https://twitter.com/megapixel_tech/status/1610979699207065600?ref_src=twsrc%5Etfw">January 5, 2023</a></blockquote>
            </div>
            <div class="m-1" style="max-width:240px;">
                <blockquote class="twitter-tweet"><p lang="en" dir="ltr">LET’S ACCELERATE YOUR BUSINESS ENGINE WITH THE BEST DIGITAL MARKETING SOLUTIONS<a href="https://twitter.com/hashtag/Megapixeltech?src=hash&amp;ref_src=twsrc%5Etfw">#Megapixeltech</a> <a href="https://twitter.com/hashtag/DigitalMarketing?src=hash&amp;ref_src=twsrc%5Etfw">#DigitalMarketing</a> <a href="https://twitter.com/hashtag/digitalagency?src=hash&amp;ref_src=twsrc%5Etfw">#digitalagency</a> <a href="https://twitter.com/hashtag/tech?src=hash&amp;ref_src=twsrc%5Etfw">#tech</a> <a href="https://twitter.com/hashtag/InformationTechnology?src=hash&amp;ref_src=twsrc%5Etfw">#InformationTechnology</a> <a href="https://twitter.com/hashtag/SEO?src=hash&amp;ref_src=twsrc%5Etfw">#SEO</a> <a href="https://t.co/oSi1BHbhB6">pic.twitter.com/oSi1BHbhB6</a></p>&mdash; Megapixel Technologies (@megapixel_tech) <a href="https://twitter.com/megapixel_tech/status/1606257339375398912?ref_src=twsrc%5Etfw">December 23, 2022</a></blockquote>
            </div>
            <div class="m-1" style="max-width:240px;">
                <blockquote class="twitter-tweet"><p lang="en" dir="ltr">We help Brands and Companies stand out in the Digital age.<a href="https://twitter.com/hashtag/megapixeltech?src=hash&amp;ref_src=twsrc%5Etfw">#megapixeltech</a> <a href="https://twitter.com/hashtag/webdesigner?src=hash&amp;ref_src=twsrc%5Etfw">#webdesigner</a> <a href="https://twitter.com/hashtag/webdevelopment?src=hash&amp;ref_src=twsrc%5Etfw">#webdevelopment</a> <a href="https://twitter.com/hashtag/technology?src=hash&amp;ref_src=twsrc%5Etfw">#technology</a> <a href="https://twitter.com/hashtag/IT?src=hash&amp;ref_src=twsrc%5Etfw">#IT</a> <a href="https://twitter.com/hashtag/digitalagency?src=hash&amp;ref_src=twsrc%5Etfw">#digitalagency</a> <a href="https://twitter.com/hashtag/DigitalMarketing?src=hash&amp;ref_src=twsrc%5Etfw">#DigitalMarketing</a> <a href="https://twitter.com/hashtag/designers?src=hash&amp;ref_src=twsrc%5Etfw">#designers</a> <a href="https://twitter.com/hashtag/SEO?src=hash&amp;ref_src=twsrc%5Etfw">#SEO</a> <a href="https://twitter.com/hashtag/digitalmarketingagency?src=hash&amp;ref_src=twsrc%5Etfw">#digitalmarketingagency</a> <a href="https://twitter.com/hashtag/DigitalMarketingServices?src=hash&amp;ref_src=twsrc%5Etfw">#DigitalMarketingServices</a> <a href="https://twitter.com/hashtag/Tech4All?src=hash&amp;ref_src=twsrc%5Etfw">#Tech4All</a> <a href="https://twitter.com/hashtag/searchengineoptimization?src=hash&amp;ref_src=twsrc%5Etfw">#searchengineoptimization</a> <a href="https://t.co/dB5kS8UCCk">pic.twitter.com/dB5kS8UCCk</a></p>&mdash; Megapixel Technologies (@megapixel_tech) <a href="https://twitter.com/megapixel_tech/status/1604811381630332928?ref_src=twsrc%5Etfw">December 19, 2022</a></blockquote>
            </div>
            <div class="m-1" style="max-width:240px;">
                <blockquote class="twitter-tweet"><p lang="en" dir="ltr">As a reputable and professional web development agency, Megapixel Technologies implements all kinds of features in web design and development. We provide simple and affordable web solutions.<a href="https://twitter.com/hashtag/megapixeltech?src=hash&amp;ref_src=twsrc%5Etfw">#megapixeltech</a> <a href="https://twitter.com/hashtag/webdesigner?src=hash&amp;ref_src=twsrc%5Etfw">#webdesigner</a> <a href="https://twitter.com/hashtag/WebDevelopment?src=hash&amp;ref_src=twsrc%5Etfw">#WebDevelopment</a> <a href="https://twitter.com/hashtag/digitalagency?src=hash&amp;ref_src=twsrc%5Etfw">#digitalagency</a> <a href="https://twitter.com/hashtag/digitalmarketing?src=hash&amp;ref_src=twsrc%5Etfw">#digitalmarketing</a> <a href="https://twitter.com/hashtag/IT?src=hash&amp;ref_src=twsrc%5Etfw">#IT</a> <a href="https://twitter.com/hashtag/tech?src=hash&amp;ref_src=twsrc%5Etfw">#tech</a> <a href="https://t.co/uLkDL1uC7x">pic.twitter.com/uLkDL1uC7x</a></p>&mdash; Megapixel Technologies (@megapixel_tech) <a href="https://twitter.com/megapixel_tech/status/1603362774196838400?ref_src=twsrc%5Etfw">December 15, 2022</a></blockquote>
            </div>
        </div>
    </div>

    @include('partials.cta-section')

    @include('footer')

    @include('partials.preloader')

    <!-- JavaScript -->
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script src="{{asset('js/jquery.bundle.js')}}"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    </body>
</html>
