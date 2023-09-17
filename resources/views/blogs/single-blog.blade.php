<!DOCTYPE html>
<html lang="en" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Megapixel Technologies">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
    <!-- Site Title  -->
    <title>Megapixel Technologies - {{$post->meta_title}}</title>
  <meta name="description"
        content="{{$post->meta_description}}">
    <link rel="canonical"
        href="{{url('/')}}/blogs/{{Route::current()->parameter('meta_slug')}}" />
    <meta name="robots" content="index, follow" />

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="Megapixel Technologies - {{$post->meta_title}}"/>
    <meta name="twitter:description" content="{{$post->meta_description}}"/>
    <meta name="twitter:site" content="@megapixel_tech"/>
    <meta name="twitter:image" content="{{$post->meta_image}}"/>
    <meta name="twitter:creator" content="@megapixel_tech"/>

    <!-- Open Graph data -->
    <meta property="og:title" content="Megapixel Technologies - {{$post->meta_title}}" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{url('/')}}" />
    <meta property="og:image" content="{{$post->meta_image}}" />
    <meta property="og:description"
        content="{{$post->meta_description}}" />


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
                                        <h1 class="banner-heading">{{$post->title}}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-image change-bg">
                            <img src="{{URL::asset('images/banner-sm-g.jpg')}}" alt="Megapixel Technologies" title="Megapixel Technologies" loading="lazy" width="100%" height="100%">
                        </div>
                    </div>
                </div>
            </div>
        </header>



        <!-- section/blog -->
        <div class="section blog section-x tc-grey">

            <div class="container">
                <div class="row gutter-vr-30px">
                    <div class="col-md-8">
                        <!-- .post -->

                        <div class="post post-full">
                            <div class="post-thumb">
                                @php
                                            $image = $post->thumbnail;
                                            $image = str_replace('public/', '', $image);
                                        @endphp
                                <a
                                    href="{{url('/')}}/blogs/{{$post->meta_slug}}">
                                    <img src="{{asset('storage/'.$image)}}" alt="{{$post->title}}" title="{{$post->title}}" loading="lazy" width="100%" height="100%">
                                </a>
                            </div>
                            <div class="post-entry d-sm-flex d-block align-items-start">
                                <div class="post-date">
                                    <p> {{date('M', strtotime($post->created_at))}} <strong> {{date('j', strtotime($post->created_at))}}</strong></p>
                                </div>


                                <div class="post-content">
                                    <div class="post-author d-flex align-items-center">
                                        <div class="author-thumb">
                                            @php
                                            $image = $post->author_image;
                                            $image = str_replace('public/', '', $image);
                                        @endphp
                                            <img src="{{asset('storage/'.$image)}}" alt="{{$post->author_name}}" title="{{$post->author_name}}" loading="lazy" width="100%" height="100%">
                                        </div>
                                        <div class="author-name text-capitalize">
                                            <p>{{$post->author_name}}</p>
                                        </div>
                                    </div>
                                    <h2><a
                                            href="{{url('/')}}/blogs/{{$post->mega_slug}}">In
                                           {{$post->title}}</a></h2>
                                    <div class="content">
                                        <p>{!! $post->description !!}</p>
                                    </div>
                                    <div class="post-tag d-flex">
                                        <ul class="post-cat">
                                            <li><a href="{{url('/')}}/categories/{{$post->category}}"><em
                                                        class="icon ti-bookmark text-capitalize"></em><span> {{$post->category}} </span> </a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                   {{-- Sidebar --}}
                   <div class="col-md-4 pl-lg-4">
                    <div class="sidebar">

                        <div class="wgs wgs-sidebar bg-secondary wgs-recents">
                            <h3 class="wgs-heading">Recent News</h3>
                            <div class="wgs-content">
                                <ul class="post-recent">
                                    @foreach($posts as $post)
                                    @if($loop->index > 3)
                                    @break

                                    @endif
                                    <li>
                                        <h4 style="font-size:16px;"><a
                                                href="{{url('/')}}/blogs/{{$post->meta_slug}}" class="text-capitalize">{{$post->title}}
                                            </a></h4>
                                        <p class="post-tag ">{{date('F j, Y', strtotime($post->created_at))}}</p>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div><!-- .wgs -->
                        <div class="wgs wgs-sidebar bg-secondary wgs-category">
                            <h3 class="wgs-heading">Categories</h3>
                            <div class="wgs-content">
                                <ul class="wgs-menu">
                                    @php
                                    $categories = array();


                                    foreach ($posts as $post) {
                                    $categories[] = $post->category;
                                    }

                                    $categories = array_unique($categories);

                                    @endphp

                                    @foreach($categories as $category)

                                    <li ><a href="{{url('/')}}/categories/{{$category}}" class="text-capitalize">{{$category}}<span
                                        class="base"></span></a></li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>

                        <div class="wgs wgs-sidebar bg-secondary wgs-tags">
                            <h3 class="wgs-heading">Tags</h3>
                            <div class="wgs-content">
                                <ul class="tag-list">
                                    @php
                                    $tags = array();


                                    foreach ($posts as $post) {
                                    $explodedTags = explode(',', $post->tags);
                                        foreach ($explodedTags as $tag) {
                                            array_push($tags, $tag);
                                        }
                                    }

                                    $tags = array_unique($tags);

                                    @endphp

                                    @foreach($tags as $tag)
                                    @if ($loop->index > 20)
                                        @break
                                    @endif
                                    <li><span class="text-capitalize">{{$tag}}</span></li>
                                    @endforeach

                                </ul>
                            </div>
                        </div><!-- .wgs -->
                    </div>
                </div>
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </div>


        @include('partials.cta-section')


        @include('footer')

        @include('partials.preloader')





   <!-- JavaScript -->
   <script src="{{asset('js/jquery.bundle.js')}}"></script>
   <script src="{{asset('js/scripts.js')}}"></script>
   <script src="{{asset('js/custom.js')}}"></script>
</body>

</html>
