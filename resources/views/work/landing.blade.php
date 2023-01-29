<!DOCTYPE html>

<html lang="en" class="js">



<head>

    <meta charset="utf-8">

    <meta name="author" content="Megapixel Technologies">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fav Icon  -->

    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">

    <!-- Site Title  -->

    <title>Megapixel Technologies - Our Works</title>

    <meta name="description"

        content="We create powerful content strategies for corporate brands using our proven and tested 'ROADMAP' process. We have a track record of producing digital marketing initiatives that deliver outstanding results.">

    <link rel="canonical" href="{{url('/')}}/works" />

    <meta name="robots" content="index, follow" />

    <!-- Twitter Card data -->

    <meta name="twitter:card" value="summary">

    <meta itemprop="name" content="Megapixel Technologies - Digital Agency , Creative Solutions">

    <meta itemprop="description"

        content="We create powerful content strategies for corporate brands using our proven and tested 'ROADMAP' process. We have a track record of producing digital marketing initiatives that deliver outstanding results.">

    <meta itemprop="image" content="{{url('/')}}">



    <!-- Open Graph data -->

    <meta property="og:title" content="Megapixel Technologies - Digital Agency , Creative Solutions" />

    <meta property="og:type" content="article" />

    <meta property="og:url" content="{{url('/')}}" />

    <meta property="og:image" content="{{url('/')}}/images/bg-a-light.jpg" />

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



<body class="body-wider">



        <header class="is-sticky is-shrink is-boxed header-s1" id="header">

            <div class="header-box">

                @include('header')

                <div class="banner banner-inner tc-light">

					<div class="banner-block">

						<div class="container">

							<div class="row">

								<div class="col-md-9">

									<div class="banner-content">

										<h1 class="banner-heading m-0">Landing Page</h1>

										<p class="lead m-0">Client : Art Media Ltd</p>

									</div>

								</div>

							</div>

						</div>

						<div class="bg-image">

							<img src="images/banner-sm-m.jpg" alt="Megapixel Technologies" title="Megapixel Technologies" loading="lazy">

						</div>

					</div>



				</div>

            </div>

        </header>





        <!-- section -->

        <div class="section section-x">

            <div class="container">

                <div class="content">

                    <div class="row gutter-vr-30px">

                        <div class="col-xl-6 order-lg-last">

                            <div class="image-block">

                                <img src="images/image-k.jpg" alt="Megapixel Technologies" title="Megapixel Technologies" loading="lazy">

                            </div>

                        </div><!-- .col -->

                        <div class="col-xl-6">

                            <div class="text-block  project-box-pad bg-primary tc-light h-full">

                                <h2>Landing Page Deisgn</h2>

                                <p>This communication platform makes it easy to share updates from any classroom around the world, empowering teachers, parents and students to connect and learn. Having reached more than 180 countries, it's clearly working.To maintain growth however was best-in-class with a growing community.</p>

                            </div>

                        </div><!-- .col -->

                    </div><!-- .row -->

                </div>

            </div><!-- .container -->

        </div>

        <!-- .section -->



    <!-- section -->

    <div class="section section-x pt-0 fw-3">

        <div class="container">

            <div class="row gutter-vr-30px">

                <div class="col-md-4">

                    <div class="text-box project-box-content project-box-pad bg-secondary h-full">

                        <p><strong>Client:</strong> Art Media LTD</p>

                        <p><strong>Budget:</strong> $200</p>

                        <p><strong>Category:</strong> UI/UX, Landing Page</p>

                        <p><strong>Date:</strong>September 19, 2022 </p>

                    </div>

                </div><!-- .col -->

                <div class="col-md-4">

                    <div class="text-box project-box-content h-full">

                        <h3>Challenge</h3>

                        <p>With a growing community of millions messaging and sharing photos and videos, Landing page needed to ensure its apps were as high-quality, reliable and smoothly synced as could be.The company brought us on board to accelerate development of both its iOS and Android mobile.</p>

                    </div>

                </div><!-- .col -->

                <div class="col-md-4">

                    <div class="text-box project-box-content h-full">

                        <h3>Solution</h3>

                        <p>We onboarded one Genox engineer to start, but Landing was so impressed with our seamless integration into its business, that we quickly scaled to eight dedicated iOS and Android engineers. Working with client, we helped deliver high-quality mobile development and code.</p>

                    </div>

                </div><!-- .col -->

            </div><!-- .row -->

        </div>

    </div>

    <!-- section. -->



    <!-- section -->

    <div class="section section-x pt-0">

        <div class="container">

            <div class="row gutter-vr-30px">

                <div class="col-md-6">

                    <div class="image-block">

                        <img src="{{asset('images/image-l.jpg')}}" alt="Megapixel Technologies" title="Megapixel Technologies" loading="lazy">

                    </div>

                </div><!-- .col -->

                <div class="col-md-6">

                    <div class="image-block">

                        <img src="{{asset('images/image-m.jpg')}}" alt="Megapixel Technologies" title="Megapixel Technologies" loading="lazy">

                    </div>

                </div><!-- .col -->

            </div><!-- .row -->

        </div><!-- .container -->

    </div>

    <!-- .section -->







    @include('partials.cta-section')



    @include('footer')



    @include('partials.preloader')









<!-- JavaScript -->

<script src="{{asset('js/jquery.bundle.js')}}"></script>

<script src="{{asset('js/scripts.js')}}"></script>

<script src="{{asset('js/custom.js')}}"></script>



</body>



</html>
