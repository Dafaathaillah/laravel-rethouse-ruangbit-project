@extends('layouts.layout.master_dashboard')

@section('title')
    | Dashboard
@endsection

@section('content')
       <!-- POPULAR CITY -->
       <section class="popular__city-large">
         <div class="container">
             <div class="row">
                 <div class="col-md-6">
                     <div class="title__head-v2">
                         <h2 class="text-capitalize">popular city</h2>
                         <p class="text-capitalize mb-0">Find Properties In These Cities.</p>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-md-6 col-lg-3">
                     <!-- CARD IMAGE -->
                     <a href="#">
                         <div class="card__image-hover-style-v3">
                             <div class="card__image-hover-style-v3-thumb h-230">
                                 <img src="images/600x400.jpg" alt="" class="img-fluid w-100">
                             </div>
                             <div class="overlay">
                                 <div class="desc">
                                     <h6 class="text-capitalize">rome</h6>
                                     <p class="text-capitalize">70 properties</p>
                                 </div>
                             </div>
                         </div>
                     </a>
                 </div>
                 <div class="col-md-6 col-lg-3">
                     <!-- CARD IMAGE -->
                     <a href="#">
                         <div class="card__image-hover-style-v3">
                             <div class="card__image-hover-style-v3-thumb h-230">
                                 <img src="images/600x400.jpg" alt="" class="img-fluid w-100">
                             </div>
                             <div class="overlay">
                                 <div class="desc">
                                     <h6 class="text-capitalize">australia</h6>
                                     <p class="text-capitalize">70 properties</p>
                                 </div>
                             </div>
                         </div>
                     </a>
                 </div>
                 <div class="col-md-6 col-lg-3">
                     <!-- CARD IMAGE -->
                     <a href="#">
                         <div class="card__image-hover-style-v3">
                             <div class="card__image-hover-style-v3-thumb h-230">
                                 <img src="images/600x400.jpg" alt="" class="img-fluid w-100">
                             </div>
                             <div class="overlay">
                                 <div class="desc">
                                     <h6 class="text-capitalize">indonesia</h6>
                                     <p class="text-capitalize">70 properties</p>
                                 </div>
                             </div>
                         </div>
                     </a>
                 </div>
                 <div class="col-md-6 col-lg-3">
                     <!-- CARD IMAGE -->
                     <a href="#">
                         <div class="card__image-hover-style-v3">
                             <div class="card__image-hover-style-v3-thumb h-230">
                                 <img src="images/600x400.jpg" alt="" class="img-fluid w-100">
                             </div>
                             <div class="overlay">
                                 <div class="desc">
                                     <h6 class="text-capitalize">paris</h6>
                                     <p class="text-capitalize">70 properties</p>
                                 </div>
                             </div>
                         </div>
                     </a>
                 </div>
             </div>
         </div>
     </section>
     <!-- END POPULAR CITY -->



     <!-- FEATURED PROPERTY -->
     <section class="recent__property pt-0">
         <div class="container">
             <div class="row">
                 <div class="col-md-6">
                     <div class="title__head-v2">
                         <h2 class="text-capitalize">featured property</h2>
                         <p class="text-capitalize">Handpicked Exclusive Properties By Our Team.</p>
                     </div>
                 </div>
             </div>
             <div class="recent__property-carousel owl-carousel owl-theme">
                @foreach ($property as $prts)
                <div class="item">
                    <!-- CARD IMAGE -->
                    <a href="#">
                        <div class="card__image-hover h-250">
                            <div class="card__image-hover-overlay">
                                <div class="listing-badges">
                                    <span class="featured">
                                        Featured
                                    </span>
                                    <span>
                                        {{$prts->status_property}}
                                    </span>
                                </div>
                                <div class="card__image-content">
                                    <div class="card__image-content-desc">
                                        <h6> {{$prts->name}}</h6>
                                        <p class="mb-0"> Rp {{$prts->price}}</p>
                                    </div>
                                    <ul class="list-inline card__hidden-content">
                                        <li class="list-inline-item">
                                            Baths
                                            <span>
                                                <i class="fa fa-bath"></i> {{$prts->bathroom}}
                                            </span>
                                        </li>
                                        <li class="list-inline-item">
                                            Beds
                                            <span>
                                                <i class="fa fa-bed"></i> {{$prts->bedroom}}
                                            </span>
                                        </li>
                                        <li class="list-inline-item">
                                            Rooms
                                            <span>
                                                <i class="fa fa-inbox"></i> {{$prts->bedroom}}
                                            </span>
                                        </li>
                                        <li class="list-inline-item">
                                            Area
                                            <span>
                                                <i class="fa fa-map"></i> {{$prts->area}} M2
                                            </span>
                                        </li>

                                    </ul>
                                </div>
                                <img alt="" src="{{ asset('storage/' . $prts->image) }}" class="img-fluid h-40 ">
                            </div>
                        </div>
                    </a>
                </div>
                <!--End foreach-->
                @endforeach


             </div>
         </div>
     </section>
     <!-- END FEATURED PROPERTY -->



     <!-- RECENTS CITY -->
     <section class="recent__property pt-0">
         <div class="container">
             <div class="row">
                 <div class="col-md-6">
                     <div class="title__head-v2">
                         <h2 class="text-capitalize">recent property</h2>
                         <p class="text-capitalize">Handpicked Exclusive Properties By Our Team.</p>
                     </div>
                 </div>
             </div>
             <div class="recent__property-carousel owl-carousel owl-theme">
                @foreach ($property as $prts)
                <div class="item">
                    <!-- CARD IMAGE -->
                    <a href="#">
                        <div class="card__image-hover h-250">
                            <div class="card__image-hover-overlay">
                                <div class="listing-badges">
                                    <span class="featured">
                                        Featured
                                    </span>
                                    <span>
                                        {{$prts->status_property}}
                                    </span>
                                </div>
                                <div class="card__image-content">
                                    <div class="card__image-content-desc">
                                        <h6> {{$prts->name}}</h6>
                                        <p class="mb-0"> Rp {{$prts->price}}</p>
                                    </div>
                                    <ul class="list-inline card__hidden-content">
                                        <li class="list-inline-item">
                                            Baths
                                            <span>
                                                <i class="fa fa-bath"></i> {{$prts->bathroom}}
                                            </span>
                                        </li>
                                        <li class="list-inline-item">
                                            Beds
                                            <span>
                                                <i class="fa fa-bed"></i> {{$prts->bedroom}}
                                            </span>
                                        </li>
                                        <li class="list-inline-item">
                                            Rooms
                                            <span>
                                                <i class="fa fa-inbox"></i> {{$prts->bedroom}}
                                            </span>
                                        </li>
                                        <li class="list-inline-item">
                                            Area
                                            <span>
                                                <i class="fa fa-map"></i> {{$prts->area}} M2
                                            </span>
                                        </li>

                                    </ul>
                                </div>
                                <img alt="" src="{{ asset('storage/' . $prts->image) }}" class="img-fluid h-40 ">
                            </div>
                        </div>
                    </a>
                </div>
                <!--End foreach-->
                @endforeach


             </div>
         </div>
     </section>
     <!-- END RECENTS CITY -->


     <!-- ABOUT -->
     <section class="home__about bg-theme-v7">
         <div class="container">
             <div class="row">
                 <div class="col-md-7">
                     <div class="title__leading">
                         <!-- <h6 class="text-uppercase">trusted By thousands</h6> -->
                         <h2 class="text-capitalize">why choose use?</h2>
                         <p>
                             The first step in selling your property is to get a valuation from local experts. They will
                             inspect your home and take into account its unique features, the area and market conditions
                             before providing you with the most accurate valuation.
                         </p>
                         <p>
                             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                             ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                             laboris nisi ut aliquip ex ea commodo consequat.
                         </p>
                         <a href="#" class="btn btn-primary mt-3 text-capitalize"> read more
                             <i class="fa fa-angle-right ml-3 "></i></a>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- END ABOUT -->


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
