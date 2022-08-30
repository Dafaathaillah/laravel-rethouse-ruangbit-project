@extends('layouts.layout.master_main')

@section('title')
    | Property List
@endsection

@section('title_image')
    <section class="section__breadcrumb ">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="text-capitalize text-white ">Property List</h2>
                    <ul class="list-inline ">
                        <li class="list-inline-item">
                            <a href="#" class="text-white">
                                home
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-white">
                                property
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-white">
                                property list
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
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
                        <form action="/property">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade active show" id="buy" role="tabpanel"
                                    aria-labelledby="buy-tab">
                                    <div class=" search__container">
                                        <div class="row input-group no-gutters">                                        
                                                <input type="text" name="search" class="form-control" id="search" placeholder="cari lokasi, area, nama property, nama agent" style="font-size: 1.3em" value="{{ request('search') }}">
                                                <div class="col-lg-2">
                                                    <button class="btn btn-primary btn-block" type="submit" style="line-height: 2.2rem">
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
                                                <input type="text" name="search2" class="form-control" id="search2" placeholder="cari lokasi, area, nama property, nama agent" style="font-size: 1.3em" value="{{ request('search') }}">
                                            <div class="col-lg-2">
                                                <button class="btn btn-primary btn-block" type="submit" style="line-height: 2.2rem">
                                                    <i class="fa fa-search"></i> <span
                                                        class="ml-1 text-uppercase">search</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </form>                        
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
                                        <a class="nav-link active" data-toggle="pill" href="#pills-tab-two" role="tab"
                                            aria-controls="pills-tab-two" aria-selected="false">
                                            <span class="fa fa-th-large"></span></a>
                                    </li>
                                </ul>

                                <div class="tab-pane fade show active" id="pills-tab-two" role="tabpanel"
                                    aria-labelledby="pills-tab-two">
                                    <div class="row">
                                        @foreach ($property as $prt)
                                            <div class="col-md-4 col-lg-4">
                                                <div class="card__image card__box-v1">
                                                    <div class="card__image-header h-250">
                                                        <div class="ribbon text-capitalize">featured</div>
                                                        @if($prt->image)
                                                            <img src="{{ asset('storage/' . $prt->image)}}" alt=""
                                                                class="img-fluid w100 img-transition">
                                                            <div class="info"> {{ $prt->status_property }}</div>
                                                        @else
                                                            <img src="images/property4.jpg" alt=""
                                                                class="img-fluid w100 img-transition">
                                                            <div class="info"> {{ $prt->status_property }}</div>
                                                        @endif
                                                    </div>
                                                    <div class="card__image-body">
                                                        {{-- <span class="badge badge-primary text-capitalize mb-2">{{ $prt->type_property }}</span> --}}
                                                        <h6 class="text-capitalize">
                                                            {{ $prt->name }}
                                                        </h6>

                                                        <p class="text-capitalize">
                                                            <i class="fa fa-map-marker"></i>
                                                            {{ $prt->street }}
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
                                                                <a href="{{route('property.show',$prt->id)}}">
                                                                    Show
                                                                </a>

                                                            </li>

                                                        </ul>
                                                        <ul class="list-inline my-auto ml-auto">
                                                            <li class="list-inline-item">

                                                                <h6>Rp {{ $prt->price }}</h6>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach




                                        <div class="cleafix"></div>
                                    </div>



                                </div> <!-- END FILTER VERTICAL -->
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
@endsection
