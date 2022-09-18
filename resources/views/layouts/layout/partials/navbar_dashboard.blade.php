@section('navbar_dashboard')
    <!-- HEADER -->
    <header class="jumbotron bg-theme-v5">
        <div class="bg-overlay"></div>
        <!-- NAVBAR -->
        <nav class="navbar navbar-hover navbar-expand-lg navbar-soft navbar-transparent">
            <div class="container">
                <a class="navbar-brand" href="{{ route('dashboard') }}">
                    <img src="images/logo-blue.png" alt="">
                    <img src="images/logo-blue-stiky.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav99">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main_nav99">
                    <ul class="navbar-nav mx-auto ">
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="{{route('dashboard')}}" data-toggle="dropdown"> Home </a>
                            <ul class="dropdown-menu dropdown-menu-left animate fade-up">
                                <li><a class="dropdown-item" href="{{ route('dashboard') }}"> Dashboard </a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('property.index') }}"> Property </a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Pages </a>
                            <ul class="dropdown-menu animate fade-up">

                                <li><a class="dropdown-item icon-arrow" href="{{ route('property.index') }}"> Property
                                        Listing </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- Search bar.// -->
                    <ul class="navbar-nav ">
                        <li>
                            <a href="{{ route('property.index') }}" class="btn btn-primary text-capitalize">
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
        <!-- HERO -->
        <div class="wrap__intro d-flex align-items-md-center  ">
            <div class="container  ">
                <div class="row align-items-center justify-content-start flex-wrap">
                    <div class="col-lg-12 mx-auto">
                        <div class="wrap__intro-heading" data-aos="fade-up">

                            <h1 class="text-capitalize">
                                Find your dream house </h1>
                            <p>Your Property, Our Priority and From as low as $10 per day with limited time offer
                                discounts</p>

                            <div class="bg__overlay-black p-4">
                                <div class="search__property">
                                    <div class="position-relative">
                                        <ul class="nav nav-tabs nav-tabs-02 mb-3 justify-content-start" id="pills-tab"
                                            role="tablist">
                                            <li class="nav-item mr-1">
                                                <a class="nav-link active" id="buy-tab" data-toggle="pill" href="#buy"
                                                    role="tab" aria-controls="buy" aria-selected="true">Buy </a>
                                            </li>
                                            <li class="nav-item mr-1">
                                                <a class="nav-link" id="rent-tab" data-toggle="pill" href="#"
                                                    role="tab" aria-controls="rent" aria-selected="false">Rent</a>
                                            </li>

                                        </ul>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade active show" id="buy" role="tabpanel"
                                                aria-labelledby="buy-tab">
                                                <div class=" search__container">
                                                    <div class="row input-group no-gutters">
                                                        <input type="text" name="search" class="form-control"
                                                            id="search"
                                                            placeholder="cari lokasi, area, nama property, nama agent"
                                                            style="font-size: 1.3em">
                                                        <div class="col-lg-2">
                                                            <button class="btn btn-primary btn-block" type="submit"
                                                                style="line-height: 2.2rem">
                                                                <i class="fa fa-search"></i> <span
                                                                    class="ml-1 text-uppercase">search</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="rent" role="tabpanel"
                                                aria-labelledby="rent-tab">
                                                <div class=" search__container">
                                                    <div class="row input-group no-gutters">
                                                        <input type="text" name="search" class="form-control"
                                                            id="search"
                                                            placeholder="cari lokasi, area, nama property, nama agent"
                                                            style="font-size: 1.3em">
                                                        <div class="col-lg-2">
                                                            <button class="btn btn-primary btn-block" type="submit"
                                                                style="line-height: 2.2rem">
                                                                <i class="fa fa-search"></i> <span
                                                                    class="ml-1 text-uppercase">search</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END HERO -->
    </header>
    <!-- END HEADER -->
@show
