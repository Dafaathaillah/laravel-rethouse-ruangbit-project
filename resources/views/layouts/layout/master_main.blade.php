<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Rethouse - Real Estate HTML Template">
    <meta name="keywords" content="Real Estate, Property, Directory Listing, Marketing, Agency" />
    <meta name="author" content="mardianto - retenvi.com">
    <title>Rethouse - Real Estate HTML Template</title>

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <!-- favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="{{ asset('icon.png') }}">
    <meta name="theme-color" content="#3454d1">
    <link href="{{ asset('./css/styles.css?fd365619e86ad9137a29') }}" rel="stylesheet">
</head>

<body>
    <!-- HEADER -->
    @include('layouts.layout.partials.navbar_navbar_organism')

    <div class="clearfix"></div>
    <!-- BREADCRUMB -->
    <div class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section__breadcrumb-v1">
                        <ol class="breadcrumb mb-0 bg-light">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> </a></li>
                            <li class="breadcrumb-item"> <a href="#">Property</a></li>
                            <li class="breadcrumb-item active"> <span class="text-capitalize"> Luxury family home</span>
                            </li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END BREADCRUMB -->
    <div class="search__area bg__shadow">
        <div class="container">
            <div class="search__area-inner">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-3">
                        <div class="form-group">
                            <select class="wide select_option">
                                <option data-display="Property Status">Property Status</option>
                                <option>For Sale</option>
                                <option>For Rent</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-3">
                        <div class="form-group">
                            <select class="wide select_option">
                                <option data-display="Property Type">Property Type</option>
                                <option>Residential</option>
                                <option>Commercial</option>
                                <option>Land</option>
                                <option>Luxury</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-3">
                        <div class="form-group">
                            <select class="wide select_option">
                                <option data-display="Area From">Area From </option>
                                <option>1500</option>
                                <option>1200</option>
                                <option>900</option>
                                <option>600</option>
                                <option>300</option>
                                <option>100</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-3">
                        <div class="form-group">
                            <select class="wide select_option">
                                <option data-display="Locations">Locations</option>
                                <option>United Kingdom</option>
                                <option>American Samoa</option>
                                <option>Belgium</option>
                                <option>Canada</option>
                                <option>Delaware</option>
                                <option>Indonesia</option>
                                <option>Malaysia</option>
                                <option>Japan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-3">
                        <div class="form-group">
                            <select class="wide select_option">
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
                    </div>
                    <div class="col-6 col-lg-3 col-md-3">
                        <div class="form-group">
                            <select class="wide select_option">
                                <option data-display="Bathrooms">Bathrooms</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>


                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-3">
                        <div class="form-group">
                            <div class="filter__price">
                                <input class="price-range" type="text" name="my_range" value="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-3">
                        <div class="form-group">
                            <button class="btn btn-primary text-uppercase btn-block"> search <i
                                    class="fa fa-search ml-1"></i></button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- LISTING LIST -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tabs__custom-v2 ">
                                <!-- FILTER VERTICAL -->
                                <ul class="nav nav-pills myTab" role="tablist">
                                    <li class="list-inline-item mr-auto">
                                        <span class="title-text">Sort by</span>
                                        <div class="btn-group">
                                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                Based Properties
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Low to High Price</a>
                                                <a class="dropdown-item" href="javascript:void(0)">High to Low Price
                                                </a>
                                                <a class="dropdown-item" href="javascript:void(0)">Sell Properties</a>

                                                <a class="dropdown-item" href="javascript:void(0)">Rent Properties</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#pills-tab-one" role="tab"
                                            aria-controls="pills-tab-one" aria-selected="true">
                                            <span class="fa fa-th-list"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="pill" href="#pills-tab-two" role="tab"
                                            aria-controls="pills-tab-two" aria-selected="false">
                                            <span class="fa fa-th-large"></span></a>
                                    </li>
                                </ul>



                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade" id="pills-tab-one" role="tabpanel"
                                        aria-labelledby="pills-tab-one">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card__image card__box-v1">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-4 col-lg-3 col-xl-4">
                                                            <div class="card__image__header h-250">
                                                                <a href="#">
                                                                    <div class="ribbon text-capitalize">sold out</div>
                                                                    <img src="images/600x400.jpg" alt=""
                                                                        class="img-fluid w100 img-transition">
                                                                    <div class="info"> for sale</div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-lg-6 col-xl-5 my-auto">
                                                            <div class="card__image__body">

                                                                <span
                                                                    class="badge badge-primary text-capitalize mb-2">house</span>
                                                                <h6>
                                                                    <a href="#">vila in coral gables</a>
                                                                </h6>
                                                                <div class="card__image__body-desc">
                                                                    <!-- <p class="text-capitalize">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, alias!

                    </p> -->
                                                                    <p class="text-capitalize">
                                                                        <i class="fa fa-map-marker"></i>
                                                                        west flaminggo road, las vegas
                                                                    </p>
                                                                </div>

                                                                <ul class="list-inline card__content">
                                                                    <li class="list-inline-item">

                                                                        <span>
                                                                            baths <br>
                                                                            <i class="fa fa-bath"></i> 2
                                                                        </span>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            beds <br>
                                                                            <i class="fa fa-bed"></i> 3
                                                                        </span>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            rooms <br>
                                                                            <i class="fa fa-inbox"></i> 3
                                                                        </span>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            area <br>
                                                                            <i class="fa fa-map"></i> 4300 sq ft
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-md-4 col-lg-3 col-xl-3 my-auto card__image__footer-first">
                                                            <div class="card__image__footer">
                                                                <figure>
                                                                    <img src="images/80x80.jpg" alt=""
                                                                        class="img-fluid rounded-circle">
                                                                </figure>
                                                                <ul class="list-inline my-auto">
                                                                    <li class="list-inline-item name">
                                                                        <a href="#">
                                                                            tom wilson
                                                                        </a>

                                                                    </li>


                                                                </ul>
                                                                <ul class="list-inline my-auto ml-auto price">
                                                                    <li class="list-inline-item ">

                                                                        <h6>$350.000</h6>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card__image card__box-v1">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-4 col-lg-3 col-xl-4">
                                                            <div class="card__image__header h-250">
                                                                <a href="#">
                                                                    <div class="ribbon text-capitalize">sold out</div>
                                                                    <img src="images/600x400.jpg" alt=""
                                                                        class="img-fluid w100 img-transition">
                                                                    <div class="info"> for sale</div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-lg-6 col-xl-5 my-auto">
                                                            <div class="card__image__body">

                                                                <span
                                                                    class="badge badge-primary text-capitalize mb-2">house</span>
                                                                <h6>
                                                                    <a href="#">Ample Apartment At Last Floor</a>
                                                                </h6>
                                                                <div class="card__image__body-desc">
                                                                    <!-- <p class="text-capitalize">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, alias!
                
                                    </p> -->
                                                                    <p class="text-capitalize">
                                                                        <i class="fa fa-map-marker"></i>
                                                                        west flaminggo road, las vegas
                                                                    </p>
                                                                </div>

                                                                <ul class="list-inline card__content">
                                                                    <li class="list-inline-item">

                                                                        <span>
                                                                            baths <br>
                                                                            <i class="fa fa-bath"></i> 2
                                                                        </span>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            beds <br>
                                                                            <i class="fa fa-bed"></i> 3
                                                                        </span>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            rooms <br>
                                                                            <i class="fa fa-inbox"></i> 3
                                                                        </span>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            area <br>
                                                                            <i class="fa fa-map"></i> 4300 sq ft
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-md-4 col-lg-3 col-xl-3 my-auto card__image__footer-first">
                                                            <div class="card__image__footer">
                                                                <figure>
                                                                    <img src="images/logo.jpg" alt=""
                                                                        class="img-fluid rounded-circle">
                                                                </figure>
                                                                <ul class="list-inline my-auto">
                                                                    <li class="list-inline-item name">
                                                                        <a href="#">
                                                                            tom wilson
                                                                        </a>

                                                                    </li>


                                                                </ul>
                                                                <ul class="list-inline my-atuo ml-auto price">
                                                                    <li class="list-inline-item ">

                                                                        <h6>$350.000</h6>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card__image card__box-v1">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-4 col-lg-3 col-xl-4">
                                                            <div class="card__image__header h-250">
                                                                <a href="#">
                                                                    <div class="ribbon text-capitalize">sold out</div>
                                                                    <img src="images/600x400.jpg" alt=""
                                                                        class="img-fluid w100 img-transition">
                                                                    <div class="info"> for sale</div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-lg-6 col-xl-5 my-auto">
                                                            <div class="card__image__body">

                                                                <span
                                                                    class="badge badge-primary text-capitalize mb-2">house</span>
                                                                <h6>
                                                                    <a href="#">Ample Apartment At Last Floor</a>
                                                                </h6>
                                                                <div class="card__image__body-desc">
                                                                    <!-- <p class="text-capitalize">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, alias!
                
                                    </p> -->
                                                                    <p class="text-capitalize">
                                                                        <i class="fa fa-map-marker"></i>
                                                                        west flaminggo road, las vegas
                                                                    </p>
                                                                </div>

                                                                <ul class="list-inline card__content">
                                                                    <li class="list-inline-item">

                                                                        <span>
                                                                            baths <br>
                                                                            <i class="fa fa-bath"></i> 2
                                                                        </span>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            beds <br>
                                                                            <i class="fa fa-bed"></i> 3
                                                                        </span>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            rooms <br>
                                                                            <i class="fa fa-inbox"></i> 3
                                                                        </span>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            area <br>
                                                                            <i class="fa fa-map"></i> 4300 sq ft
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-md-4 col-lg-3 col-xl-3 my-auto card__image__footer-first">
                                                            <div class="card__image__footer">
                                                                <figure>
                                                                    <img src="images/logo.jpg" alt=""
                                                                        class="img-fluid rounded-circle">
                                                                </figure>
                                                                <ul class="list-inline my-auto">
                                                                    <li class="list-inline-item name">
                                                                        <a href="#">
                                                                            tom wilson
                                                                        </a>

                                                                    </li>


                                                                </ul>
                                                                <ul class="list-inline my-atuo ml-auto price">
                                                                    <li class="list-inline-item ">

                                                                        <h6>$350.000</h6>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card__image card__box-v1">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-4 col-lg-3 col-xl-4">
                                                            <div class="card__image__header h-250">
                                                                <a href="#">
                                                                    <div class="ribbon text-capitalize">sold out</div>
                                                                    <img src="images/600x400.jpg" alt=""
                                                                        class="img-fluid w100 img-transition">
                                                                    <div class="info"> for sale</div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-lg-6 col-xl-5 my-auto">
                                                            <div class="card__image__body">

                                                                <span
                                                                    class="badge badge-primary text-capitalize mb-2">house</span>
                                                                <h6>
                                                                    <a href="#">Family Home For Sale</a>
                                                                </h6>
                                                                <div class="card__image__body-desc">
                                                                    <!-- <p class="text-capitalize">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, alias!
                    
                                        </p> -->
                                                                    <p class="text-capitalize">
                                                                        <i class="fa fa-map-marker"></i>
                                                                        west flaminggo road, las vegas
                                                                    </p>
                                                                </div>

                                                                <ul class="list-inline card__content">
                                                                    <li class="list-inline-item">

                                                                        <span>
                                                                            baths <br>
                                                                            <i class="fa fa-bath"></i> 2
                                                                        </span>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            beds <br>
                                                                            <i class="fa fa-bed"></i> 3
                                                                        </span>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            rooms <br>
                                                                            <i class="fa fa-inbox"></i> 3
                                                                        </span>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            area <br>
                                                                            <i class="fa fa-map"></i> 4300 sq ft
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-md-4 col-lg-3 col-xl-3 my-auto card__image__footer-first">
                                                            <div class="card__image__footer">
                                                                <figure>
                                                                    <img src="images/logo.jpg" alt=""
                                                                        class="img-fluid rounded-circle">
                                                                </figure>
                                                                <ul class="list-inline my-auto">
                                                                    <li class="list-inline-item name">
                                                                        <a href="#">
                                                                            tom wilson
                                                                        </a>

                                                                    </li>


                                                                </ul>
                                                                <ul class="list-inline my-atuo ml-auto price">
                                                                    <li class="list-inline-item ">

                                                                        <h6>$350.000</h6>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card__image card__box-v1">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-4 col-lg-3 col-xl-4">
                                                            <div class="card__image__header h-250">
                                                                <a href="#">
                                                                    <div class="ribbon text-capitalize">sold out</div>
                                                                    <img src="images/600x400.jpg" alt=""
                                                                        class="img-fluid w100 img-transition">
                                                                    <div class="info"> for sale</div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-lg-6 col-xl-5 my-auto">
                                                            <div class="card__image__body">

                                                                <span
                                                                    class="badge badge-primary text-capitalize mb-2">house</span>
                                                                <h6>
                                                                    <a href="#">Luxury Villa With Pool</a>
                                                                </h6>
                                                                <div class="card__image__body-desc">
                                                                    <!-- <p class="text-capitalize">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, alias!
                    
                                        </p> -->
                                                                    <p class="text-capitalize">
                                                                        <i class="fa fa-map-marker"></i>
                                                                        west flaminggo road, las vegas
                                                                    </p>
                                                                </div>

                                                                <ul class="list-inline card__content">
                                                                    <li class="list-inline-item">

                                                                        <span>
                                                                            baths <br>
                                                                            <i class="fa fa-bath"></i> 2
                                                                        </span>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            beds <br>
                                                                            <i class="fa fa-bed"></i> 3
                                                                        </span>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            rooms <br>
                                                                            <i class="fa fa-inbox"></i> 3
                                                                        </span>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            area <br>
                                                                            <i class="fa fa-map"></i> 4300 sq ft
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-md-4 col-lg-3 col-xl-3 my-auto card__image__footer-first">
                                                            <div class="card__image__footer">
                                                                <figure>
                                                                    <img src="images/logo.jpg" alt=""
                                                                        class="img-fluid rounded-circle">
                                                                </figure>
                                                                <ul class="list-inline my-auto">
                                                                    <li class="list-inline-item name">
                                                                        <a href="#">
                                                                            tom wilson
                                                                        </a>

                                                                    </li>


                                                                </ul>
                                                                <ul class="list-inline my-atuo ml-auto price">
                                                                    <li class="list-inline-item ">

                                                                        <h6>$350.000</h6>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card__image card__box-v1">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-4 col-lg-3 col-xl-4">
                                                            <div class="card__image__header h-250">
                                                                <a href="#">
                                                                    <div class="ribbon text-capitalize">sold out</div>
                                                                    <img src="images/600x400.jpg" alt=""
                                                                        class="img-fluid w100 img-transition">
                                                                    <div class="info"> for sale</div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-lg-6 col-xl-5 my-auto">
                                                            <div class="card__image__body">

                                                                <span
                                                                    class="badge badge-primary text-capitalize mb-2">house</span>
                                                                <h6>
                                                                    <a href="#">184 Lexington Avenue</a>
                                                                </h6>
                                                                <div class="card__image__body-desc">
                                                                    <!-- <p class="text-capitalize">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, alias!
                    
                                        </p> -->
                                                                    <p class="text-capitalize">
                                                                        <i class="fa fa-map-marker"></i>
                                                                        west flaminggo road, las vegas
                                                                    </p>
                                                                </div>

                                                                <ul class="list-inline card__content">
                                                                    <li class="list-inline-item">

                                                                        <span>
                                                                            baths <br>
                                                                            <i class="fa fa-bath"></i> 2
                                                                        </span>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            beds <br>
                                                                            <i class="fa fa-bed"></i> 3
                                                                        </span>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            rooms <br>
                                                                            <i class="fa fa-inbox"></i> 3
                                                                        </span>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            area <br>
                                                                            <i class="fa fa-map"></i> 4300 sq ft
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-md-4 col-lg-3 col-xl-3 my-auto card__image__footer-first">
                                                            <div class="card__image__footer">
                                                                <figure>
                                                                    <img src="images/logo.jpg" alt=""
                                                                        class="img-fluid rounded-circle">
                                                                </figure>
                                                                <ul class="list-inline my-auto">
                                                                    <li class="list-inline-item name">
                                                                        <a href="#">
                                                                            tom wilson
                                                                        </a>

                                                                    </li>


                                                                </ul>
                                                                <ul class="list-inline my-atuo ml-auto price">
                                                                    <li class="list-inline-item ">

                                                                        <h6>$350.000</h6>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card__image card__box-v1">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-4 col-lg-3 col-xl-4">
                                                            <div class="card__image__header h-250">
                                                                <a href="#">
                                                                    <div class="ribbon text-capitalize">sold out</div>
                                                                    <img src="images/600x400.jpg" alt=""
                                                                        class="img-fluid w100 img-transition">
                                                                    <div class="info"> for sale</div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-lg-6 col-xl-5 my-auto">
                                                            <div class="card__image__body">

                                                                <span
                                                                    class="badge badge-primary text-capitalize mb-2">house</span>
                                                                <h6>
                                                                    <a href="#">The Citizen Apartment 5th Floor</a>
                                                                </h6>
                                                                <div class="card__image__body-desc">
                                                                    <!-- <p class="text-capitalize">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, alias!
                    
                                        </p> -->
                                                                    <p class="text-capitalize">
                                                                        <i class="fa fa-map-marker"></i>
                                                                        west flaminggo road, las vegas
                                                                    </p>
                                                                </div>

                                                                <ul class="list-inline card__content">
                                                                    <li class="list-inline-item">

                                                                        <span>
                                                                            baths <br>
                                                                            <i class="fa fa-bath"></i> 2
                                                                        </span>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            beds <br>
                                                                            <i class="fa fa-bed"></i> 3
                                                                        </span>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            rooms <br>
                                                                            <i class="fa fa-inbox"></i> 3
                                                                        </span>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            area <br>
                                                                            <i class="fa fa-map"></i> 4300 sq ft
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-md-4 col-lg-3 col-xl-3 my-auto card__image__footer-first">
                                                            <div class="card__image__footer">
                                                                <figure>
                                                                    <img src="images/logo.jpg" alt=""
                                                                        class="img-fluid rounded-circle">
                                                                </figure>
                                                                <ul class="list-inline my-auto">
                                                                    <li class="list-inline-item name">
                                                                        <a href="#">
                                                                            tom wilson
                                                                        </a>

                                                                    </li>


                                                                </ul>
                                                                <ul class="list-inline my-atuo ml-auto price">
                                                                    <li class="list-inline-item ">

                                                                        <h6>$350.000</h6>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="tab-pane fade show active" id="pills-tab-two" role="tabpanel"
                                        aria-labelledby="pills-tab-two">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-4">
                                                <div class="card__image card__box-v1">
                                                    <div class="card__image-header h-250">
                                                        <div class="ribbon text-capitalize">featured</div>
                                                        <img src="images/600x400.jpg" alt=""
                                                            class="img-fluid w100 img-transition">
                                                        <div class="info"> for sale</div>
                                                    </div>
                                                    <div class="card__image-body">
                                                        <span
                                                            class="badge badge-primary text-capitalize mb-2">house</span>
                                                        <h6 class="text-capitalize">
                                                            vila in coral gables
                                                        </h6>

                                                        <p class="text-capitalize">
                                                            <i class="fa fa-map-marker"></i>
                                                            west flaminggo road, las vegas
                                                        </p>
                                                        <ul class="list-inline card__content">
                                                            <li class="list-inline-item">

                                                                <span>
                                                                    baths <br>
                                                                    <i class="fa fa-bath"></i> 2
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    beds <br>
                                                                    <i class="fa fa-bed"></i> 3
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    rooms <br>
                                                                    <i class="fa fa-inbox"></i> 3
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    area <br>
                                                                    <i class="fa fa-map"></i> 4300 sq ft
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="card__image-footer">
                                                        <figure>
                                                            <img src="images/80x80.jpg" alt=""
                                                                class="img-fluid rounded-circle">
                                                        </figure>
                                                        <ul class="list-inline my-auto">
                                                            <li class="list-inline-item ">
                                                                <a href="#">
                                                                    tom wilson
                                                                </a>

                                                            </li>

                                                        </ul>
                                                        <ul class="list-inline my-auto ml-auto">
                                                            <li class="list-inline-item">

                                                                <h6>$350.000</h6>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-lg-4">
                                                <div class="card__image card__box-v1">
                                                    <div class="card__image-header h-250">
                                                        <div class="ribbon text-capitalize">featured</div>
                                                        <img src="images/600x400.jpg" alt=""
                                                            class="img-fluid w100 img-transition">
                                                        <div class="info"> for sale</div>
                                                    </div>
                                                    <div class="card__image-body">
                                                        <span
                                                            class="badge badge-primary text-capitalize mb-2">house</span>
                                                        <h6 class="text-capitalize">
                                                            <a href="#">Contemporary Apartment</a>
                                                        </h6>

                                                        <p class="text-capitalize">
                                                            <i class="fa fa-map-marker"></i>
                                                            west flaminggo road, las vegas
                                                        </p>
                                                        <ul class="list-inline card__content">
                                                            <li class="list-inline-item">

                                                                <span>
                                                                    baths <br>
                                                                    <i class="fa fa-bath"></i> 2
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    beds <br>
                                                                    <i class="fa fa-bed"></i> 3
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    rooms <br>
                                                                    <i class="fa fa-inbox"></i> 3
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    area <br>
                                                                    <i class="fa fa-map"></i> 4300 sq ft
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="card__image-footer">
                                                        <figure>
                                                            <img src="images/logo.jpg" alt=""
                                                                class="img-fluid rounded-circle">
                                                        </figure>
                                                        <ul class="list-inline my-auto">
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    tom wilson
                                                                </a>

                                                            </li>

                                                        </ul>
                                                        <ul class="list-inline my-auto ml-auto">
                                                            <li class="list-inline-item">

                                                                <h6>$350.000</h6>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-lg-4">
                                                <div class="card__image card__box-v1">
                                                    <div class="card__image-header h-250">
                                                        <div class="ribbon text-capitalize">featured</div>
                                                        <img src="images/600x400.jpg" alt=""
                                                            class="img-fluid w100 img-transition">
                                                        <div class="info"> for sale</div>
                                                    </div>
                                                    <div class="card__image-body">
                                                        <span
                                                            class="badge badge-primary text-capitalize mb-2">house</span>
                                                        <h6 class="text-capitalize">
                                                            <a href="#">Family Home For Sale</a>
                                                        </h6>

                                                        <p class="text-capitalize">
                                                            <i class="fa fa-map-marker"></i>
                                                            west flaminggo road, las vegas
                                                        </p>
                                                        <ul class="list-inline card__content">
                                                            <li class="list-inline-item">

                                                                <span>
                                                                    baths <br>
                                                                    <i class="fa fa-bath"></i> 2
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    beds <br>
                                                                    <i class="fa fa-bed"></i> 3
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    rooms <br>
                                                                    <i class="fa fa-inbox"></i> 3
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    area <br>
                                                                    <i class="fa fa-map"></i> 4300 sq ft
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="card__image-footer">
                                                        <figure>
                                                            <img src="images/logo.jpg" alt=""
                                                                class="img-fluid rounded-circle">
                                                        </figure>
                                                        <ul class="list-inline my-auto">
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    tom wilson
                                                                </a>

                                                            </li>

                                                        </ul>
                                                        <ul class="list-inline my-auto ml-auto">
                                                            <li class="list-inline-item">

                                                                <h6>$350.000</h6>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-lg-4">
                                                <div class="card__image card__box-v1">
                                                    <div class="card__image-header h-250">
                                                        <div class="ribbon text-capitalize">featured</div>
                                                        <img src="images/600x400.jpg" alt=""
                                                            class="img-fluid w100 img-transition">
                                                        <div class="info"> for sale</div>
                                                    </div>
                                                    <div class="card__image-body">
                                                        <span
                                                            class="badge badge-primary text-capitalize mb-2">house</span>
                                                        <h6 class="text-capitalize">
                                                            <a href="#">Luxury Villa With Pool</a>
                                                        </h6>

                                                        <p class="text-capitalize">
                                                            <i class="fa fa-map-marker"></i>
                                                            west flaminggo road, las vegas
                                                        </p>
                                                        <ul class="list-inline card__content">
                                                            <li class="list-inline-item">

                                                                <span>
                                                                    baths <br>
                                                                    <i class="fa fa-bath"></i> 2
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    beds <br>
                                                                    <i class="fa fa-bed"></i> 3
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    rooms <br>
                                                                    <i class="fa fa-inbox"></i> 3
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    area <br>
                                                                    <i class="fa fa-map"></i> 4300 sq ft
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="card__image-footer">
                                                        <figure>
                                                            <img src="images/logo.jpg" alt=""
                                                                class="img-fluid rounded-circle">
                                                        </figure>
                                                        <ul class="list-inline my-auto">
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    tom wilson
                                                                </a>

                                                            </li>

                                                        </ul>
                                                        <ul class="list-inline my-auto ml-auto">
                                                            <li class="list-inline-item">

                                                                <h6>$350.000</h6>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-lg-4">
                                                <div class="card__image card__box-v1">
                                                    <div class="card__image-header h-250">
                                                        <div class="ribbon text-capitalize">featured</div>
                                                        <img src="images/600x400.jpg" alt=""
                                                            class="img-fluid w100 img-transition">
                                                        <div class="info"> for sale</div>
                                                    </div>
                                                    <div class="card__image-body">
                                                        <span
                                                            class="badge badge-primary text-capitalize mb-2">house</span>
                                                        <h6 class="text-capitalize">
                                                            <a href="#">184 Lexington Avenue</a>
                                                        </h6>

                                                        <p class="text-capitalize">
                                                            <i class="fa fa-map-marker"></i>
                                                            west flaminggo road, las vegas
                                                        </p>
                                                        <ul class="list-inline card__content">
                                                            <li class="list-inline-item">

                                                                <span>
                                                                    baths <br>
                                                                    <i class="fa fa-bath"></i> 2
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    beds <br>
                                                                    <i class="fa fa-bed"></i> 3
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    rooms <br>
                                                                    <i class="fa fa-inbox"></i> 3
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    area <br>
                                                                    <i class="fa fa-map"></i> 4300 sq ft
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="card__image-footer">
                                                        <figure>
                                                            <img src="images/logo.jpg" alt=""
                                                                class="img-fluid rounded-circle">
                                                        </figure>
                                                        <ul class="list-inline my-auto">
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    tom wilson
                                                                </a>

                                                            </li>

                                                        </ul>
                                                        <ul class="list-inline my-auto ml-auto">
                                                            <li class="list-inline-item">

                                                                <h6>$350.000</h6>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-lg-4">
                                                <div class="card__image card__box-v1">
                                                    <div class="card__image-header h-250">
                                                        <div class="ribbon text-capitalize">featured</div>
                                                        <img src="images/600x400.jpg" alt=""
                                                            class="img-fluid w100 img-transition">
                                                        <div class="info"> for sale</div>
                                                    </div>
                                                    <div class="card__image-body">
                                                        <span
                                                            class="badge badge-primary text-capitalize mb-2">house</span>
                                                        <h6 class="text-capitalize">
                                                            <a href="#">The Citizen Apartment 5th Floor</a>
                                                        </h6>

                                                        <p class="text-capitalize">
                                                            <i class="fa fa-map-marker"></i>
                                                            west flaminggo road, las vegas
                                                        </p>
                                                        <ul class="list-inline card__content">
                                                            <li class="list-inline-item">

                                                                <span>
                                                                    baths <br>
                                                                    <i class="fa fa-bath"></i> 2
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    beds <br>
                                                                    <i class="fa fa-bed"></i> 3
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    rooms <br>
                                                                    <i class="fa fa-inbox"></i> 3
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    area <br>
                                                                    <i class="fa fa-map"></i> 4300 sq ft
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="card__image-footer">
                                                        <figure>
                                                            <img src="images/logo.jpg" alt=""
                                                                class="img-fluid rounded-circle">
                                                        </figure>
                                                        <ul class="list-inline my-auto">
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    tom wilson
                                                                </a>

                                                            </li>

                                                        </ul>
                                                        <ul class="list-inline my-auto ml-auto">
                                                            <li class="list-inline-item">

                                                                <h6>$350.000</h6>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-lg-4">
                                                <div class="card__image card__box-v1">
                                                    <div class="card__image-header h-250">
                                                        <div class="ribbon text-capitalize">featured</div>
                                                        <img src="images/600x400.jpg" alt=""
                                                            class="img-fluid w100 img-transition">
                                                        <div class="info"> for sale</div>
                                                    </div>
                                                    <div class="card__image-body">
                                                        <span
                                                            class="badge badge-primary text-capitalize mb-2">house</span>
                                                        <h6 class="text-capitalize">
                                                            <a href="#">Family Home For Sale</a>
                                                        </h6>

                                                        <p class="text-capitalize">
                                                            <i class="fa fa-map-marker"></i>
                                                            west flaminggo road, las vegas
                                                        </p>
                                                        <ul class="list-inline card__content">
                                                            <li class="list-inline-item">

                                                                <span>
                                                                    baths <br>
                                                                    <i class="fa fa-bath"></i> 2
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    beds <br>
                                                                    <i class="fa fa-bed"></i> 3
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    rooms <br>
                                                                    <i class="fa fa-inbox"></i> 3
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    area <br>
                                                                    <i class="fa fa-map"></i> 4300 sq ft
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="card__image-footer">
                                                        <figure>
                                                            <img src="images/logo.jpg" alt=""
                                                                class="img-fluid rounded-circle">
                                                        </figure>
                                                        <ul class="list-inline my-auto">
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    tom wilson
                                                                </a>

                                                            </li>

                                                        </ul>
                                                        <ul class="list-inline my-auto ml-auto">
                                                            <li class="list-inline-item">

                                                                <h6>$350.000</h6>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-lg-4">
                                                <!-- ONE -->
                                                <div class="card__image card__box-v1">
                                                    <div class="card__image-header h-250">
                                                        <div class="ribbon text-capitalize">featured</div>
                                                        <img src="images/600x400.jpg" alt=""
                                                            class="img-fluid w100 img-transition">
                                                        <div class="info"> for sale</div>
                                                    </div>
                                                    <div class="card__image-body">
                                                        <span
                                                            class="badge badge-primary text-capitalize mb-2">house</span>
                                                        <h6 class="text-capitalize">
                                                            <a href="#">vila in coral gables</a>
                                                        </h6>

                                                        <p class="text-capitalize">
                                                            <i class="fa fa-map-marker"></i>
                                                            west flaminggo road, las vegas
                                                        </p>
                                                        <ul class="list-inline card__content">
                                                            <li class="list-inline-item">

                                                                <span>
                                                                    baths <br>
                                                                    <i class="fa fa-bath"></i> 2
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    beds <br>
                                                                    <i class="fa fa-bed"></i> 3
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    rooms <br>
                                                                    <i class="fa fa-inbox"></i> 3
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    area <br>
                                                                    <i class="fa fa-map"></i> 4300 sq ft
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="card__image-footer">
                                                        <figure>
                                                            <img src="images/80x80.jpg" alt=""
                                                                class="img-fluid rounded-circle">
                                                        </figure>
                                                        <ul class="list-inline my-auto">
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    tom wilson
                                                                </a>

                                                            </li>

                                                        </ul>
                                                        <ul class="list-inline my-auto ml-auto">
                                                            <li class="list-inline-item">

                                                                <h6>$350.000</h6>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-lg-4">
                                                <!-- TWO -->
                                                <div class="card__image card__box-v1">
                                                    <div class="card__image-header h-250">
                                                        <div class="ribbon text-capitalize">featured</div>
                                                        <img src="images/600x400.jpg" alt=""
                                                            class="img-fluid w100 img-transition">
                                                        <div class="info"> for sale</div>
                                                    </div>
                                                    <div class="card__image-body">
                                                        <span
                                                            class="badge badge-primary text-capitalize mb-2">house</span>
                                                        <h6 class="text-capitalize">
                                                            <a href="#">Ample Apartment At Last Floor</a>
                                                        </h6>

                                                        <p class="text-capitalize">
                                                            <i class="fa fa-map-marker"></i>
                                                            west flaminggo road, las vegas
                                                        </p>
                                                        <ul class="list-inline card__content">
                                                            <li class="list-inline-item">

                                                                <span>
                                                                    baths <br>
                                                                    <i class="fa fa-bath"></i> 2
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    beds <br>
                                                                    <i class="fa fa-bed"></i> 3
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    rooms <br>
                                                                    <i class="fa fa-inbox"></i> 3
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    area <br>
                                                                    <i class="fa fa-map"></i> 4300 sq ft
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="card__image-footer">
                                                        <figure>
                                                            <img src="images/80x80.jpg" alt=""
                                                                class="img-fluid rounded-circle">
                                                        </figure>
                                                        <ul class="list-inline my-auto">
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    tom wilson
                                                                </a>

                                                            </li>

                                                        </ul>
                                                        <ul class="list-inline my-auto ml-auto">
                                                            <li class="list-inline-item">

                                                                <h6>$350.000</h6>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-lg-4">
                                                <!-- THREE -->
                                                <div class="card__image card__box-v1">
                                                    <div class="card__image-header h-250">
                                                        <div class="ribbon text-capitalize">featured</div>
                                                        <img src="images/600x400.jpg" alt=""
                                                            class="img-fluid w100 img-transition">
                                                        <div class="info"> for sale</div>
                                                    </div>
                                                    <div class="card__image-body">
                                                        <span
                                                            class="badge badge-primary text-capitalize mb-2">house</span>
                                                        <h6 class="text-capitalize">
                                                            <a href="#">Contemporary Apartment</a>
                                                        </h6>

                                                        <p class="text-capitalize">
                                                            <i class="fa fa-map-marker"></i>
                                                            west flaminggo road, las vegas
                                                        </p>
                                                        <ul class="list-inline card__content">
                                                            <li class="list-inline-item">

                                                                <span>
                                                                    baths <br>
                                                                    <i class="fa fa-bath"></i> 2
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    beds <br>
                                                                    <i class="fa fa-bed"></i> 3
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    rooms <br>
                                                                    <i class="fa fa-inbox"></i> 3
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    area <br>
                                                                    <i class="fa fa-map"></i> 4300 sq ft
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="card__image-footer">
                                                        <figure>
                                                            <img src="images/80x80.jpg" alt=""
                                                                class="img-fluid rounded-circle">
                                                        </figure>
                                                        <ul class="list-inline my-auto">
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    tom wilson
                                                                </a>

                                                            </li>

                                                        </ul>
                                                        <ul class="list-inline my-auto ml-auto">
                                                            <li class="list-inline-item">

                                                                <h6>$350.000</h6>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-lg-4">
                                                <div class="card__image card__box-v1">
                                                    <div class="card__image-header h-250">
                                                        <div class="ribbon text-capitalize">featured</div>
                                                        <img src="images/600x400.jpg" alt=""
                                                            class="img-fluid w100 img-transition">
                                                        <div class="info"> for sale</div>
                                                    </div>
                                                    <div class="card__image-body">
                                                        <span
                                                            class="badge badge-primary text-capitalize mb-2">house</span>
                                                        <h6 class="text-capitalize">
                                                            <a href="#">Family Home For Sale</a>
                                                        </h6>

                                                        <p class="text-capitalize">
                                                            <i class="fa fa-map-marker"></i>
                                                            west flaminggo road, las vegas
                                                        </p>
                                                        <ul class="list-inline card__content">
                                                            <li class="list-inline-item">

                                                                <span>
                                                                    baths <br>
                                                                    <i class="fa fa-bath"></i> 2
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    beds <br>
                                                                    <i class="fa fa-bed"></i> 3
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    rooms <br>
                                                                    <i class="fa fa-inbox"></i> 3
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    area <br>
                                                                    <i class="fa fa-map"></i> 4300 sq ft
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="card__image-footer">
                                                        <figure>
                                                            <img src="images/80x80.jpg" alt=""
                                                                class="img-fluid rounded-circle">
                                                        </figure>
                                                        <ul class="list-inline my-auto">
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    tom wilson
                                                                </a>

                                                            </li>

                                                        </ul>
                                                        <ul class="list-inline my-auto ml-auto">
                                                            <li class="list-inline-item">

                                                                <h6>$350.000</h6>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-lg-4">
                                                <div class="card__image card__box-v1">
                                                    <div class="card__image-header h-250">
                                                        <div class="ribbon text-capitalize">featured</div>
                                                        <img src="images/600x400.jpg" alt=""
                                                            class="img-fluid w100 img-transition">
                                                        <div class="info"> for sale</div>
                                                    </div>
                                                    <div class="card__image-body">
                                                        <span
                                                            class="badge badge-primary text-capitalize mb-2">house</span>
                                                        <h6 class="text-capitalize">
                                                            <a href="#">184 Lexington Avenue</a>
                                                        </h6>

                                                        <p class="text-capitalize">
                                                            <i class="fa fa-map-marker"></i>
                                                            west flaminggo road, las vegas
                                                        </p>
                                                        <ul class="list-inline card__content">
                                                            <li class="list-inline-item">

                                                                <span>
                                                                    baths <br>
                                                                    <i class="fa fa-bath"></i> 2
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    beds <br>
                                                                    <i class="fa fa-bed"></i> 3
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    rooms <br>
                                                                    <i class="fa fa-inbox"></i> 3
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    area <br>
                                                                    <i class="fa fa-map"></i> 4300 sq ft
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="card__image-footer">
                                                        <figure>
                                                            <img src="images/80x80.jpg" alt=""
                                                                class="img-fluid rounded-circle">
                                                        </figure>
                                                        <ul class="list-inline my-auto">
                                                            <li class="list-inline-item">
                                                                <a href="#">
                                                                    tom wilson
                                                                </a>

                                                            </li>

                                                        </ul>
                                                        <ul class="list-inline my-auto ml-auto">
                                                            <li class="list-inline-item">

                                                                <h6>$350.000</h6>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cleafix"></div>
                                    </div>



                                </div>
                                <!-- END FILTER VERTICAL -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END LISTING LIST -->

    <!-- CALL TO ACTION -->
    <section class="cta-v1 py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <h2 class="text-uppercase text-white">Looking To Sell Or Rent Your Property?</h2>
                    <p class="text-capitalize text-white">We Will Assist You In The Best And Comfortable Property
                        Services
                        For You
                    </p>

                </div>
                <div class="col-lg-3">
                    <a href="#" class="btn btn-light text-uppercase ">request a quote
                        <i class="fa fa-angle-right ml-3 arrow-btn "></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- END CALL TO ACTION -->

    <!-- Footer  -->
    @include('layouts.layout.partials.footer')



    <!-- SCROLL TO TOP -->
    <a href="{{ asset('javascript:') }}" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- END SCROLL TO TOP -->
    <script src="{{ asset('./js/index.bundle.js?fd365619e86ad9137a29') }}"></script>
</body>

</html>