@extends('layouts.layout.master_main')

@section('title')
| Agency
@endsection

@section('title_image')
<section class="section__breadcrumb ">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="text-capitalize text-white ">Agency List</h2>
                <ul class="list-inline ">
                    <li class="list-inline-item">
                        <a href="#" class="text-white">
                            home
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-white">
                            agency
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-white">
                            agency list
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
<section>
    <div class="profile__agency">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- ARCHIVE CATEGORY -->
                    <div class=" wrapper__list__category">
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
                    </div>
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
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="cards mt-0">
                                <div class="profile__agency-header">
                                    <a href="#" class="profile__agency-logo">
                                        <img src="images/500x400.jpg" alt="" class="img-fluid">
                                        <div class="total__property-agent">20 listing</div>
                                    </a>
                                </div>
                                <div class="profile__agency-body">
                                    <div class="profile__agency-info">
                                        <h5 class="text-capitalize">
                                            <a href="#" target="_blank">real estate company</a>
                                        </h5>
                                        <p class="text-capitalize mb-1">Los Angeles, city, United States of America</p>
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
                        <div class="col-lg-6">
                            <div class="cards mt-0">
                                <div class="profile__agency-header">
                                    <a href="#" class="profile__agency-logo">
                                        <img src="images/500x400.jpg" alt="" class="img-fluid">
                                        <div class="total__property-agent">20 listing</div>
                                    </a>
                                </div>
                                <div class="profile__agency-body">
                                    <div class="profile__agency-info">
                                        <h5 class="text-capitalize mb-0">
                                            <a href="#" target="_blank">real estate company</a>
                                        </h5>
                                        <p class="text-capitalize mb-1">Los Angeles, city, United States of America
                                        </p>
                                        <ul class="list-unstyled mt-2">
                                            <li><a href="#" class="text-capitalize"><span><i class="fa fa-building"></i>
                                                        office :</span> 123 456
                                                    789</a>
                                            </li>
                                            <li><a href="#" class="text-capitalize"><span><i class="fa fa-phone"></i>
                                                        mobile :</span> 123 456
                                                    789</a></li>
                                            <li><a href="#" class="text-capitalize"><span><i class="fa fa-fax"></i>
                                                        fax : </span> 342 655</a></li>
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
                    <div class="row">
                        <div class="col-lg-6 mt-0">
                            <div class="cards">
                                <div class="profile__agency-header">
                                    <a href="#" class="profile__agency-logo">
                                        <img src="images/500x400.jpg" alt="" class="img-fluid">
                                        <div class="total__property-agent">20 listing</div>
                                    </a>
                                </div>
                                <div class="profile__agency-body">
                                    <div class="profile__agency-info">
                                        <h5 class="text-capitalize">
                                            <a href="#" target="_blank">real estate company</a>
                                        </h5>
                                        <p class="text-capitalize mb-1">Los Angeles, city, United States of America
                                        </p>
                                        <ul class="list-unstyled mt-2">
                                            <li><a href="#" class="text-capitalize"><span><i class="fa fa-building"></i>
                                                        office :</span> 123 456
                                                    789</a>
                                            </li>
                                            <li><a href="#" class="text-capitalize"><span><i class="fa fa-phone"></i>
                                                        mobile :</span> 123 456
                                                    789</a></li>
                                            <li><a href="#" class="text-capitalize"><span><i class="fa fa-fax"></i>
                                                        fax : </span> 342 655</a></li>
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
                        <div class="col-lg-6 mt-0">
                            <div class="cards">
                                <div class="profile__agency-header">
                                    <a href="#" class="profile__agency-logo">
                                        <img src="images/500x400.jpg" alt="" class="img-fluid">
                                        <div class="total__property-agent">20 listing</div>
                                    </a>
                                </div>
                                <div class="profile__agency-body">
                                    <div class="profile__agency-info">
                                        <h5 class="text-capitalize">
                                            <a href="#" target="_blank">real estate company</a>
                                        </h5>
                                        <p class="text-capitalize mb-1">Los Angeles, city, United States of America
                                        </p>
                                        <ul class="list-unstyled mt-2">
                                            <li><a href="#" class="text-capitalize"><span><i class="fa fa-building"></i>
                                                        office :</span> 123 456
                                                    789</a>
                                            </li>
                                            <li><a href="#" class="text-capitalize"><span><i class="fa fa-phone"></i>
                                                        mobile :</span> 123 456
                                                    789</a></li>
                                            <li><a href="#" class="text-capitalize"><span><i class="fa fa-fax"></i>
                                                        fax : </span> 342 655</a></li>
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
    </div>
</section>

<!-- END LISTING LIST -->

<!-- CALL TO ACTION -->
<section class="bg-theme-v1">
    <div class="cta">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 col-lg-12 text-center">
                    <h2 class="text-uppercase text-white">signup & build your dream house</h2>
                    <p class="text-capitalize text-white">We'll help you to grow your career and growth, please contact
                        team
                        walls real estate and get this offer promo</p>
                    <a href="#" class="btn btn-primary text-uppercase ">request a quote
                        <i class="fa fa-angle-right ml-3 arrow-btn "></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END CALL TO ACTION -->
@endsection