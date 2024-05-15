<!-- Header -->
<div class="header-main">
    <div class="header-wrap">
        <!-- Logo  -->
        <div class="header-logo logo">
            <a href="https://megapixeltech.com/" class="logo-link" title="megapixel technologies">
                <img class="logo-white" src="{{URL::asset('images/logos/wheeler-logo.png')}}" alt="Megapixel Technologies" width="100%" height="100%" title="Megapixel Technologies" loading="lazy">
            </a>
        </div>

        <!-- Menu Toogle -->
        <div class="header-nav-toggle">
            <!-- <a href="#" class="search search-mobile search-trigger"><i class="icon ti-search"></i></a> -->
            <a href="#" class="navbar-toggle" data-menu-toggle="header-menu" title="menu">
                <div class="toggle-line">
                    <span></span>
                </div>
            </a>
        </div>
        <!-- Menu Toogle -->

        <!-- Menu -->
        <div class="header-navbar">
            <nav class="header-menu" id="header-menu">
                <ul class="menu">
                    <li class="menu-item">
                        <a class="menu-link nav-link" href="{{url('/')}}" title="Home" >Home</a>
                    </li>
                                  </ul>
            </nav>
        </div><!-- .header-navbar -->

        <!-- header-search -->
        <div class="header-search">
            <form role="search" method="POST" class="search-form" action="#">
                <div class="search-group">
                    <input type="text" class="input-search" placeholder="Search ...">
                    <button class="search-submit" type="submit"><i class="icon ti-search"></i></button>
                </div>
            </form>
        </div>
        <!-- . header-search -->
    </div>
</div>

