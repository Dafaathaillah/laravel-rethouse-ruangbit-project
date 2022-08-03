@section('footer')
    <!-- HEADER -->
    <header class="jumbotron bg-theme-v5">
        <div class="bg-overlay"></div>
        <!-- NAVBAR -->
        <nav class="navbar navbar-hover navbar-expand-lg navbar-soft navbar-transparent">
            <div class="container">
                <a class="navbar-brand" href="/homepage-v1.html">
                    <img src="images/logo-blue.png" alt="">
                    <img src="images/logo-blue-stiky.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav99">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main_nav99">
                    <ul class="navbar-nav mx-auto ">
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" data-toggle="dropdown"> Home </a>
                            <ul class="dropdown-menu dropdown-menu-left animate fade-up">
                                <li><a class="dropdown-item" href="/homepage-v1.html"> Home version one </a>
                                </li>
                                <li><a class="dropdown-item" href="homepage-v2.html"> Home version two </a></li>
                                <li><a class="dropdown-item" href="/homepage-v3.html"> Home version three </a></li>
                                <li><a class="dropdown-item" href="/homepage-v4.html"> Home version four </a></li>
                                <li><a class="dropdown-item" href="/homepage-v5.html"> Home version five </a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Pages </a>
                            <ul class="dropdown-menu animate fade-up">
    
                                <li><a class="dropdown-item icon-arrow" href="#"> Property Listing </a>
                                    <ul class="submenu dropdown-menu  animate fade-up">
                                        <li><a class="dropdown-item" href="/listing-style-v1.html"> Style 1</a></li>
                                        <li><a class="dropdown-item" href="/listing-style-v2.html"> Style 2</a></li>
                                        <li><a class="dropdown-item" href="/listing-style-v3.html"> Style 3</a></li>
                                        <li><a class="dropdown-item" href="/listing-style-v4.html"> Style 4</a></li>
                                        <li><a class="dropdown-item" href="/listing-style-v5.html"> Style 5</a></li>
    
                                        <li><a class="dropdown-item icon-arrow" href="">Submenu item 3 </a>
                                            <ul class="submenu dropdown-menu  animate fade-up">
                                                <li><a class="dropdown-item" href="">Multi level 1</a></li>
                                                <li><a class="dropdown-item" href="">Multi level 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item" href="">Submenu item 4</a></li>
                                        <li><a class="dropdown-item" href="">Submenu item 5</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item icon-arrow" href="#"> Property single detail </a>
                                    <ul class="submenu dropdown-menu  animate fade-up">
                                        <li><a class="dropdown-item" href="/single-detail-v1.html">Style 1</a></li>
                                        <li><a class="dropdown-item" href="/single-detail-v2.html">Style 2</a></li>
                                        <li><a class="dropdown-item" href="/single-detail-v3.html">Style 3</a></li>
                                        <li><a class="dropdown-item" href="/single-detail-v4.html">Style 4</a></li>
                                        <li><a class="dropdown-item" href="/single-detail-v5.html">Style 5</a></li>
                                    </ul>
                                </li>
    
                                <li><a class="dropdown-item icon-arrow" href="#"> Agent </a>
                                    <ul class="submenu dropdown-menu  animate fade-up">
                                        <li><a class="dropdown-item" href="/agents-v1.html">Style 1</a></li>
                                        <li><a class="dropdown-item" href="/agents-v2.html">Style 2</a></li>
                                        <li><a class="dropdown-item" href="/agents-detail.html">Agent detail</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item icon-arrow" href="#"> Agency </a>
                                    <ul class="submenu dropdown-menu  animate fade-up">
                                        <li><a class="dropdown-item" href="/agency-v1.html">Style 1</a></li>
                                        <li><a class="dropdown-item" href="/agency-v2.html">Style 2</a></li>
                                        <li><a class="dropdown-item" href="/agency-detail.html">Agency detail</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item" href="/about-us.html">About us </a>
                                <li><a class="dropdown-item" href="/login.html">Login </a>
                                <li><a class="dropdown-item" href="/register.html"> Register </a>
                                <li><a class="dropdown-item" href="/contact.html"> Contact </a>
                                <li><a class="dropdown-item" href="/404.html"> 404 Error </a>
                            </ul>
                        </li>
    
    
    
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" data-toggle="dropdown"> Blog </a>
                            <ul class="dropdown-menu dropdown-menu-left animate fade-up">
                                <li><a class="dropdown-item" href="/blog.html"> Blog </a>
                                </li>
                                <li><a class="dropdown-item" href="/blog-single.html"> Blog Single </a></li>
    
    
                            </ul>
                        </li>
    
                        <li class="nav-item"><a class="nav-link" href="/contact.html"> contact </a></li>
                    </ul>
    
    
                    <!-- Search bar.// -->
                    <ul class="navbar-nav ">
                        <li>
                            <a href="#" class="btn btn-primary text-capitalize">
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
                                                type="search" value="" placeholder="Search " id="example-search-input4">
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
                                                <a class="nav-link" id="rent-tab" data-toggle="pill" href="#rent"
                                                    role="tab" aria-controls="rent" aria-selected="false">Rent</a>
                                            </li>
    
                                        </ul>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade active show" id="buy" role="tabpanel"
                                                aria-labelledby="buy-tab">
                                                <div class=" search__container">
                                                    <div class="row input-group no-gutters">
                                                        <div class="col-lg-2">
                                                            <select class="select_option form-control" name="select">
                                                                <option selected>Type Property</option>
                                                                <option>House</option>
                                                                <option>Apartement </option>
                                                                <option>Hotel</option>
                                                                <option>Residential</option>
                                                                <option>Land</option>
                                                                <option>Luxury</option>
    
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <select class="select_option form-control" name="select">
                                                                <option data-display="Area From">Area From </option>
                                                                <option>1500</option>
                                                                <option>1200</option>
                                                                <option>900</option>
                                                                <option>600</option>
                                                                <option>300</option>
                                                                <option>100</option>
    
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <select class="select_option form-control" name="select">
                                                                <option data-display="Bedrooms">Bedrooms</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                                <option>6</option>
                                                                <option>7</option>
                                                                <option>8</option>
                                                                <option>9</option>
    
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <select class="select_option form-control" name="select">
                                                                <option data-display="Bathrooms">Bathrooms</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
    
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <select class="select_option form-control" name="select">
                                                                <option data-display="Locations">Locations</option>
                                                                <option>United Kingdom</option>
                                                                <option>American Samoa</option>
                                                                <option>Belgium</option>
                                                                <option>Canada</option>
                                                                <option>Delaware</option>
    
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2 input-group-append">
                                                            <button class="btn btn-primary btn-block" type="submit">
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
                                                        <div class="col-lg-2">
                                                            <select class="select_option form-control" name="select">
                                                                <option selected>Type Property</option>
                                                                <option>House</option>
                                                                <option>Apartement </option>
                                                                <option>Hotel</option>
                                                                <option>Residential</option>
                                                                <option>Land</option>
                                                                <option>Luxury</option>
    
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <select class="select_option form-control" name="select">
                                                                <option data-display="Area From">Area From </option>
                                                                <option>1500</option>
                                                                <option>1200</option>
                                                                <option>900</option>
                                                                <option>600</option>
                                                                <option>300</option>
                                                                <option>100</option>
    
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <select class="select_option form-control" name="select">
                                                                <option data-display="Bedrooms">Bedrooms</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                                <option>6</option>
                                                                <option>7</option>
                                                                <option>8</option>
                                                                <option>9</option>
    
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <select class="select_option form-control" name="select">
                                                                <option data-display="Bathrooms">Bathrooms</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
    
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <select class="select_option form-control" name="select">
                                                                <option data-display="Locations">Locations</option>
                                                                <option>United Kingdom</option>
                                                                <option>American Samoa</option>
                                                                <option>Belgium</option>
                                                                <option>Canada</option>
                                                                <option>Delaware</option>
    
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2 input-group-append">
                                                            <button class="btn btn-primary btn-block" type="submit">
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