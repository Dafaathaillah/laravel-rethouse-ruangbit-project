@section('navbar_navbar_organism')
    <header>
        <!-- NAVBAR TOP -->
        <div class="topbar d-none d-sm-block">
            <div class="container ">
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="topbar-left">
                            <div class="topbar-text">
                                {{-- {{ $ldate }} --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="list-unstyled topbar-right">
                            <ul class="topbar-link">
                                <li><a href="#" title="">Career</a></li>
                                <li><a href="#" title="">Contact Us</a></li>
                                {{-- <li><a href="{{route('auth.register')}}" title="">Login / Register</a></li> --}}                                                                
                            </ul>                            
                            <ul class="topbar-sosmed">
                                <li>
                                    <a href="http://www.facebook.com"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="http://www.twitter.com"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="http://www.instagram.com"><i class="fa fa-instagram"></i></a>
                                </li>
                                @auth
                                <li class="nav-item dropdown nav-profile">
                                    {{-- <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('images\pic_sample.jpg') }}" alt="profile">
                                    </a> --}}
                                    <a class="dropdown-toggle" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome, {{ auth()->user()->name }}</a>
                                    <div class="dropdown-menu" aria-labelledby="profileDropdown">
                                        <div class="dropdown-header d-flex flex-column align-items-center">
                                            {{-- <div class="figure mb-3">
                                                <img src="{{ asset('images\pic_sample.jpg') }}" alt="">
                                            </div> --}}
                                            <div class="info text-center">
                                                <p class="name font-weight-bold mb-0">Welcome, {{ auth()->user()->name }}</p>
                                                <p class="email text-muted mb-3">{{ auth()->user()->email }}</p>
                                            </div>
                                        </div>                                        
                                        <div class="dropdown-body">
                                            <hr />
                                            <ul class="profile-nav p-0">
                                                <li class="nav-item">
                                                    <form action="{{ route('auth.logout') }}" action="post">
                                                        @csrf
                                                        <button type="submit" class="dropdown-item">Log Out</button>
                                                    </form>									
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                @else
                                <li class="nav-item dropdown nav-profile">
                                    <a href="{{ route('auth.login')}}" title="">Login</a> / <a href="{{ route('auth.register')}}" title="">Register</a>
                                </li>				
                                @endauth
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END NAVBAR TOP -->
        <!-- NAVBAR -->
        <nav class="navbar navbar-hover navbar-expand-lg navbar-soft">
            <div class="container">
                <a class="navbar-brand" href="{{route("dashboard")}}">
                    <img src="images/logo-blue-stiky.png" alt="" class="img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav99">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main_nav99">
                    <ul class="navbar-nav  mx-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="{{ route('dashboard') }}"
                                data-toggle="dropdown"> Home </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Pages </a>
                            <ul class="dropdown-menu animate fade-up">

                                <li><a class="dropdown-item icon-arrow" href="#"> Property Listing </a>
                                    <ul class="submenu dropdown-menu  animate fade-up">
                                        <li><a class="dropdown-item" href="{{ route('dashboard') }}"> Dashboard </a></li>
                                        <li><a class="dropdown-item" href="{{ route('property.index') }}"> Property </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>


                    <!-- Search bar.// -->
                    <ul class="navbar-nav">
                        <li>
                            <a href="{{ route('property.create') }}" class="btn btn-primary text-capitalize">
                                <i class="fa fa-plus-circle mr-1"></i> add listing</a>
                        </li>
                    </ul>
                    <!-- Search content bar.// -->
                    <div class="top-search navigation-shadow">
                        <div class="container">
                            <div class="input-group ">
                                <form action="#">

                                    <div class="row no-gutters mt-3">
                                        <div class="col">
                                            <input class="form-control border-secondary border-right-0 rounded-0"
                                                type="search" value="" placeholder="Search "
                                                id="example-search-input4">
                                        </div>
                                        <div class="col-auto">
                                            <a class="btn btn-outline-secondary border-left-0 rounded-0 rounded-right"
                                                href="/search-result.html">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Search content bar.// -->
                </div> <!-- navbar-collapse.// -->
            </div>
        </nav>
        <!-- END NAVBAR -->
        <!-- BREADCRUMB -->
        <div class="bg-theme-overlay">

            @yield('title_image')

        </div>
        <!-- END BREADCRUMB -->
    </header>
@show
