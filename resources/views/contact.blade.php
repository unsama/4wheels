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
    <link rel="canonical" href="{{url('/')}}/contact" />
    <meta name="robots" content="noindex, nofollow" />
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
        <div class="banner banner-inner tc-light">
            <div class="banner-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="banner-content">
                                <h1 class="banner-heading">Lets’s Work Together</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-image">
                    <img src="{{asset('images/banner-sm-d.jpg')}}" alt="Megapixel Technologies" title="Megapixel Technologies" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header -->

<!-- section -->
<div class="section section-x tc-grey-alt">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-8">
                <div class="section-head">
                    <h2 class="heading-xs dash">Feel the form</h4>
                    <h2>Describe your project and leave us your contact info</h2>
                </div>
            </div><!-- .col -->
        </div><!-- .row -->
        <div class="row gutter-vr-30px">
            <div class="col-lg-4 order-lg-last">
                <div class="contact-text contact-text-s2 bg-secondary box-pad ">
                    <div class="text-box">
                        <h3>Megapixel Technologies</h3>
                        <p class="lead">33 Glencroft Road, Glasgow, G44 5RA, United Kingdom</p>
                    </div>
                    <ul class="contact-list">
                        <li>
                            <em class="contact-icon ti-mobile"></em>
                            <div class="conatct-content">
                                <a href="tel:+447354699047">+447354699047</a>
                            </div>
                        </li>
                        <li>
                            <em class="contact-icon ti-email"></em>
                            <div class="conatct-content">
                                <a href="mailto:info@megapixeltech.com">info@megapixeltech.com</a>
                            </div>
                        </li>
                        <li>
                            <em class="contact-icon ti-map-alt"></em>
                            <div class="conatct-content">
                                <a
                                    href="https://www.google.com/maps/place/33+Glencroft+Rd,+Glasgow+G44+5RA,+UK/@55.8173641,-4.240391,17z/data=!3m1!4b1!4m5!3m4!1s0x48884720b9f9f227:0x41e5522afef3d2ab!8m2!3d55.8173611!4d-4.2378161">Get
                                    Directions</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- .col -->
            <div class="col-lg-8">
                <form class="genox-form mt-10" method="post" action="{{ url('/') }}/contact" >
                    @csrf

                    @if (session('status') === 'email-sent')
                        <p
                            x-data="{ show: true }"
                            x-show="show"
                            x-transition
                            x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-gray-600"
                        >{{ __('Your message has been delivered to us, You will receive a reply in next 24hours.') }}</p>
                    @endif

                    <div class="row">
                        <div class="form-field col-md-6">
                            <input name="name" type="text" placeholder="Your Name" class="input bdr-b required">
                        </div>
                        <div class="form-field col-md-6">
                            <input name="email" type="email" placeholder="Your Email"
                                   class="input bdr-b required">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-field col-md-6">
                            <input name="address" type="text" placeholder="Your Address"
                                   class="input bdr-b required">
                        </div>
                        <div class="form-field col-md-6">
                            <input name="company" type="text" placeholder="Your Company"
                                   class="input bdr-b required">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-field col-md-6">
                            <input type="text" name="start_date" class="input bdr-b datepicker"
                                   placeholder="When do you want start?">
                        </div>
                        <div class="form-field form-select col-md-6">
                            <select name="budget" class="form-control input-select bdr-b input required"
                                    id="selectid_b">
                                <option>What your Budget</option>
                                <option>$100 - $200</option>
                                <option>$200 - $300</option>
                                <option>$300 - $400</option>
                                <option>$400 - $500</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-field col-md-12">
								<textarea name="user_message" placeholder="Briefly tell us about your project. "
                                          class="input input-msg bdr-b required"></textarea>
                            <input type="text" class="d-none" name="form-anti-honeypot" value="">
                            <button type="submit" class="btn">Send Message</button>
                        </div>
                    </div>
                </form>
            </div><!-- .col -->
        </div>
    </div><!-- .container -->
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
