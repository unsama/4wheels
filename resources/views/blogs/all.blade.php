<!DOCTYPE html>
<html lang="en" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Megapixel Technologies">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- Site Title  -->
    <title>Megapixel Technologies | Digital Web Agency - All Blogs</title>
    <meta name="description"
          content="The best digital marketing agency and digital web agency that offers cutting-edge digital solutions for your needs, but Megapixel Technologies is the best of both. ">
    <link rel="canonical" href="{{url('/')}}/blogs" />
    <meta name="robots" content="index, follow" />
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="Megapixel Technologies | Digital Web Agency - Digital Marketing Agency - Blogs"/>
    <meta name="twitter:description" content="The best digital marketing agency and digital web agency that offers cutting-edge digital solutions for your needs, but Megapixel Technologies is the best of both. To find out more about the services that can aid in the expansion of your company, get in touch with us right away."/>
    <meta name="twitter:site" content="@megapixel_tech"/>
    <meta name="twitter:image" content="{{url('/')}}/images/bg-a-light.jpg"/>
    <meta name="twitter:creator" content="@megapixel_tech"/>

    <!-- Open Graph data -->
    <meta property="og:title" content="Megapixel Technologies | Digital Web Agency - Digital Marketing Agency - Blogs" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{url('/')}}" />
    <meta property="og:image" content="{{url('/')}}/images/bg-a-light.jpg" />
    <meta property="og:description"
          content="The best digital marketing agency and digital web agency that offers cutting-edge digital solutions for your needs, but Megapixel Technologies is the best of both. To find out more about the services that can aid in the expansion of your company, get in touch with us right away." />

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
            <div class="banner-block has-bg-image">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-xl-7 offset-xl-0">
                            <div class="banner-content">
                                <h1 class="banner-heading">Latest Blogs</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-image overlay-fall bg-image-loaded">
                    <img src="{{asset('images/banner-sm-g.jpg')}}" alt="Megapixel Technologies" title="Megapixel Technologies" loading="lazy" width="100%" height="100%">
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header -->

        <!-- section/blog -->
    <div class="section blog section-x tc-grey">
        <div class="container">

            <div class="row gutter-vr-30px">
                <div class="col-md-8">



                    @foreach($posts as $post)
                    <div class="post post-full">
                        <div class="post-thumb">
                            <a href="{{url('/')}}/blogs/{{$post->meta_slug}}">
                                @php
                                    $image = $post->thumbnail;
                                    $image = str_replace('public/', '', $image);
                                @endphp
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
                                    <div class="author-name">
                                        <p class="text-capitalize">{{$post->author_name}}</p>
                                    </div>
                                </div>
                                <h3><a
                                        href="{{url('/')}}/blogs/{{$post->meta_slug}}" class="text-capitalize">{{$post->title}}</a>
                                </h3>
                                <div class="content">
                                    <p>{{$post->excerpt}}</p>
                                </div>
                                <div class="post-tag d-flex">
                                    <ul class="post-cat">
                                        <li><a href="{{url('/')}}/categories/{{$post->category}}"><em
                                                    class="icon ti-bookmark"></em>
                                                <span class="text-capitalize">{{$post->category}}</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    {{$posts->links()}}

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
                                        <h5><a
                                                href="{{url('/')}}/blogs/{{$post->meta_slug}}" class="text-capitalize">{{$post->title}}
                                            </a></h5>
                                        <p class="post-tag">{{date('F j, Y', strtotime($post->created_at))}}</p>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
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
            </div><!-- .row -->
        </div><!-- .container -->
    </div>
    <!-- end section/blog -->

    @include('partials.cta-section')

    @include('footer')

    @include('partials.preloader')




<!-- JavaScript -->
<script src="{{asset('js/jquery.bundle.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>

</body>

</html>
