@extends('layouts.layout.master_main')

@section('title')
| Agents
@endsection

@section('title_image')
<section class="section__breadcrumb ">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="text-capitalize text-white ">Agents List</h2>
                <ul class="list-inline ">
                    <li class="list-inline-item">
                        <a href="#" class="text-white">
                            home
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-white">
                            agents
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-white">
                            agents list
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')

<!-- LISTING LIST -->
<section class="profile__agents">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <!-- FORM FILTER -->
                <div class="products__filter mb-30">
                    <div class="products__filter__group">
                        <div class="products__filter__header">

                            <h5 class="text-center text-capitalize">find agents</h5>
                        </div>
                        <div class="products__filter__body">
                            <div class="form-group">
                                <label>Enter Agent name</label>
                                <input type="text" class="form-control" placeholder="Enter agent name">

                            </div>
                            <div class="form-group">
                                <label>All Categories</label>
                                <select class="select_option wide">
                                    <option data-display="All Categories">All Categories</option>

                                    <option>Apartment</option>
                                    <option>Bungalow</option>
                                    <option>Condo</option>
                                    <option>House</option>
                                    <option>Land</option>
                                    <option>Single Family</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <label>All Cities</label>
                                <select class="select_option wide">
                                    <option data-display="All City">All Cities</option>
                                    <option>Atlanta</option>
                                    <option>Florida</option>
                                    <option>Los Angeles</option>
                                    <option>Miami</option>
                                    <option>New York</option>
                                    <option>Orlando</option>
                                </select>

                            </div>
                        </div>
                        <div class="products__filter__footer">
                            <div class="form-group mb-0">
                                <button class="btn btn-primary text-capitalize btn-block"> search agents <i
                                        class="fa fa-search ml-1"></i></button>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- END FORM FILTER -->
                <!-- ARCHIVE CATEGORY -->
                <aside class=" wrapper__list__category">
                    <!-- CATEGORY -->
                    <div class="widget widget__archive">
                        <div class="widget__title">
                            <h5 class="text-dark mb-0 text-center">Categories Property</h5>
                        </div>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#" class="text-capitalize">
                                    apartement
                                    <span class="badge badge-primary">14</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-capitalize">
                                    villa
                                    <span class="badge badge-primary">4</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-capitalize">
                                    family house
                                    <span class="badge badge-primary">2</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-capitalize">
                                    modern villa
                                    <span class="badge badge-primary">8</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-capitalize">
                                    town house
                                    <span class="badge badge-primary">10</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="text-capitalize">
                                    office
                                    <span class="badge badge-primary">12</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END CATEGORY -->
                </aside>
                <!-- End ARCHIVE CATEGORY -->
                <div class="download mb-0">
                    <h5 class="text-center text-capitalize">Property Attachments</h5>
                    <div class="download__item">
                        <a href="#" target="_blank"><i class="fa fa-file-pdf-o mr-3" aria-hidden="true"></i>Download
                            Document.Pdf</a>
                    </div>
                    <div class="download__item">
                        <a href="#" target="_blank"><i class="fa fa-file-word-o mr-3"
                                aria-hidden="true"></i>Presentation
                            2016-17.Doc</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row no-gutters">
                    <div class="col-lg-12 cards mt-0">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <a href="#" class="profile__agents-avatar">
                                    <img src="images/500x400.jpg" alt="" class="img-fluid ">
                                    <div class="total__property-agent">20 listing</div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-6 my-auto">
                                <div class="profile__agents-info">
                                    <h5 class="text-capitalize mb-0">
                                        <a href="#" target="_blank">jhon doe</a>
                                    </h5>
                                    <p class="text-capitalize mb-1">property agent</p>

                                    <ul class="list-unstyled mt-2">
                                        <li><a href="#" class="text-capitalize"><span><i class="fa fa-building"></i>
                                                    office :</span> 123 456
                                                789</a>
                                        </li>
                                        <li><a href="#" class="text-capitalize"><span><i class="fa fa-phone"></i>
                                                    mobile :</span> 123 456
                                                789</a></li>
                                        <li><a href="#" class="text-capitalize"><span><i class="fa fa-fax"></i> fax
                                                    : </span> 342 655</a></li>
                                        <li><a href="#" class="text-capitalize"><span><i class="fa fa-envelope"></i>
                                                    email :</span>
                                                agents@property.com</a></li>
                                    </ul>
                                    <p class="mb-0 mt-3">
                                        <button class="btn btn-social btn-social-o facebook mr-1">
                                            <i class="fa fa-facebook-f"></i>
                                        </button>
                                        <button class="btn btn-social btn-social-o twitter mr-1">
                                            <i class="fa fa-twitter"></i>
                                        </button>

                                        <button class="btn btn-social btn-social-o linkedin mr-1">
                                            <i class="fa fa-linkedin"></i>
                                        </button>
                                        <button class="btn btn-social btn-social-o instagram mr-1">
                                            <i class="fa fa-instagram"></i>
                                        </button>

                                        <button class="btn btn-social btn-social-o youtube mr-1">
                                            <i class="fa fa-youtube"></i>
                                        </button>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 cards">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <a href="#" class="profile__agents-avatar">
                                    <img src="images/500x400.jpg" alt="" class="img-fluid ">
                                    <div class="total__property-agent">20 listing</div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-6 my-auto">
                                <div class="profile__agents-info">
                                    <h5 class="text-capitalize mb-0">
                                        <a href="#" target="_blank">jhon doe</a>
                                    </h5>
                                    <p class="text-capitalize mb-1">property agent</p>

                                    <ul class="list-unstyled mt-2">
                                        <li><a href="#" class="text-capitalize"><span><i class="fa fa-building"></i>
                                                    office :</span> 123 456
                                                789</a>
                                        </li>
                                        <li><a href="#" class="text-capitalize"><span><i class="fa fa-phone"></i>
                                                    mobile :</span> 123 456
                                                789</a></li>
                                        <li><a href="#" class="text-capitalize"><span><i class="fa fa-fax"></i> fax
                                                    : </span> 342 655</a></li>
                                        <li><a href="#" class="text-capitalize"><span><i class="fa fa-envelope"></i>
                                                    email :</span>
                                                agents@property.com</a></li>
                                    </ul>
                                    <p class="mb-0 mt-3">
                                        <button class="btn btn-social btn-social-o facebook mr-1">
                                            <i class="fa fa-facebook-f"></i>
                                        </button>
                                        <button class="btn btn-social btn-social-o twitter mr-1">
                                            <i class="fa fa-twitter"></i>
                                        </button>

                                        <button class="btn btn-social btn-social-o linkedin mr-1">
                                            <i class="fa fa-linkedin"></i>
                                        </button>
                                        <button class="btn btn-social btn-social-o instagram mr-1">
                                            <i class="fa fa-instagram"></i>
                                        </button>

                                        <button class="btn btn-social btn-social-o youtube mr-1">
                                            <i class="fa fa-youtube"></i>
                                        </button>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 cards">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <a href="#" class="profile__agents-avatar">
                                    <img src="images/500x400.jpg" alt="" class="img-fluid ">
                                    <div class="total__property-agent">20 listing</div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-6 my-auto">
                                <div class="profile__agents-info">
                                    <h5 class="text-capitalize mb-0">
                                        <a href="#" target="_blank">jhon doe</a>
                                    </h5>
                                    <p class="text-capitalize mb-1">property agent</p>

                                    <ul class="list-unstyled mt-2">
                                        <li><a href="#" class="text-capitalize"><span><i class="fa fa-building"></i>
                                                    office :</span> 123 456
                                                789</a>
                                        </li>
                                        <li><a href="#" class="text-capitalize"><span><i class="fa fa-phone"></i>
                                                    mobile :</span> 123 456
                                                789</a></li>
                                        <li><a href="#" class="text-capitalize"><span><i class="fa fa-fax"></i> fax
                                                    : </span> 342 655</a></li>
                                        <li><a href="#" class="text-capitalize"><span><i class="fa fa-envelope"></i>
                                                    email :</span>
                                                agents@property.com</a></li>
                                    </ul>
                                    <p class="mb-0 mt-3">
                                        <button class="btn btn-social btn-social-o facebook mr-1">
                                            <i class="fa fa-facebook-f"></i>
                                        </button>
                                        <button class="btn btn-social btn-social-o twitter mr-1">
                                            <i class="fa fa-twitter"></i>
                                        </button>

                                        <button class="btn btn-social btn-social-o linkedin mr-1">
                                            <i class="fa fa-linkedin"></i>
                                        </button>
                                        <button class="btn btn-social btn-social-o instagram mr-1">
                                            <i class="fa fa-instagram"></i>
                                        </button>

                                        <button class="btn btn-social btn-social-o youtube mr-1">
                                            <i class="fa fa-youtube"></i>
                                        </button>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 cards">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <a href="#" class="profile__agents-avatar">
                                    <img src="images/500x400.jpg" alt="" class="img-fluid ">
                                    <div class="total__property-agent">20 listing</div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-6 my-auto">
                                <div class="profile__agents-info">
                                    <h5 class="text-capitalize mb-0">
                                        <a href="#" target="_blank">jhon doe</a>
                                    </h5>
                                    <p class="text-capitalize mb-1">property agent</p>

                                    <ul class="list-unstyled mt-2">
                                        <li><a href="#" class="text-capitalize"><span><i class="fa fa-building"></i>
                                                    office :</span> 123 456
                                                789</a>
                                        </li>
                                        <li><a href="#" class="text-capitalize"><span><i class="fa fa-phone"></i>
                                                    mobile :</span> 123 456
                                                789</a></li>
                                        <li><a href="#" class="text-capitalize"><span><i class="fa fa-fax"></i> fax
                                                    : </span> 342 655</a></li>
                                        <li><a href="#" class="text-capitalize"><span><i class="fa fa-envelope"></i>
                                                    email :</span>
                                                agents@property.com</a></li>
                                    </ul>
                                    <p class="mb-0 mt-3">
                                        <button class="btn btn-social btn-social-o facebook mr-1">
                                            <i class="fa fa-facebook-f"></i>
                                        </button>
                                        <button class="btn btn-social btn-social-o twitter mr-1">
                                            <i class="fa fa-twitter"></i>
                                        </button>

                                        <button class="btn btn-social btn-social-o linkedin mr-1">
                                            <i class="fa fa-linkedin"></i>
                                        </button>
                                        <button class="btn btn-social btn-social-o instagram mr-1">
                                            <i class="fa fa-instagram"></i>
                                        </button>

                                        <button class="btn btn-social btn-social-o youtube mr-1">
                                            <i class="fa fa-youtube"></i>
                                        </button>
                                    </p>

                                </div>
                            </div>
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
                <p class="text-capitalize text-white">We Will Assist You In The Best And Comfortable Property Services
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