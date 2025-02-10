<header class="yellow-bg int-header">
    <nav class="navbar navbar-default navbar-fixed-top" id="nav">

        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle toggle-menu menu-left push-body" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span
                        class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="{{route('welcome')}}"><img src="{{asset('assets/images/logo-n-0111.png')}}" alt="Image"></a>
            </div>
            <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left"
                id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{route('welcome')}}" class="transition">HOME</a></li>
                    <li><a href="{{route('about')}}" class="transition">ABOUT US</a></li>

                    <li class="dropdown">
                        <a href="{{ route('service') }}" class="dropdown-toggle transition">SERVICES</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown">
                                <a href="{{ route('digital-marketing') }}">Digital Marketing</a>
                                <ul class="sub-dropdown">
                                    <li><a href="{{ route('seo') }}">SEO</a></li>
                                    <li><a href="{{ route('google-ads') }}">Google ADS</a></li>
                                   
                                </ul>
                            </li>
                            <li><a href="{{ route('web-development') }}">Web Development</a></li>
                            
                            <li><a href="{{route('GraphicsDesigning')}}">Graphics Designing</a></li>
                            <li><a href="{{ route('miscaudibles') }}">Misc Audibles</a></li>

                           
                        </ul>
                    </li>
                    
                    
                    <li> <a href="{{route('blog')}}" class="transition">BLOG</a> </li>
                    <li><a href="{{route('contact')}}" class="transition">CONTACT</a></li>
                    <li><a href="https://miscarchiveportfolio.com/" class="transition">PORTFOLIO</a></li>
                    <li><a href="{{route('career')}}" class="transition">CAREER</a></li>
                    <li><a href="#" class="hamburger-menu"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                        <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"/>
                      </svg></a></li>
                </ul>
            </div>
            <!-- end navbar-collapse -->
        </div>
        <!-- end container -->
    </nav>
    