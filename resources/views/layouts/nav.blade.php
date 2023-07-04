<header class="yellow-bg int-header">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="nav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle toggle-menu menu-left push-body" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span
                        class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="#"><img src="{{asset('assets/images/logo-n-0111.png')}}" alt="Image"></a>
            </div>
            <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left"
                id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{route('welcome')}}" class="transition">HOME</a></li>
                    <li><a href="{{route('about')}}" class="transition">ABOUT US</a></li>
                    <li><a href="{{route('service')}}" class="transition">SERVICES</a></li>
                    <li> <a href="{{route('blog')}}" class="transition">BLOG</a> </li>
                    <li><a href="{{route('contact')}}" class="transition">CONTACT</a></li>
                    <li><a href="#" class="hamburger-menu"><i class="ion-navicon"></i></a></li>
                </ul>
            </div>
            <!-- end navbar-collapse -->
        </div>
        <!-- end container -->
    </nav>
    