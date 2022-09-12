@extends('layouts.layout.master_main')

@section('title')
| Property List
@endsection

@section('title_image')
<section class="section__breadcrumb ">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="text-capitalize text-white ">Kpr List</h2>
                <ul class="list-inline ">
                    <li class="list-inline-item">
                        <a href="#" class="text-white">
                            home
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-white">
                            kpr
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-white">
                            kpr list
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
                        <li class="breadcrumb-item"> <a href="#">Kpr</a></li>
                        <li class="breadcrumb-item active"> <span class="text-capitalize"> Kpr List</span>
                        </li>

                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END BREADCRUMB -->
{{-- <div class="search__area bg__shadow">
    <div class="container">
        <div class="bg__overlay-black p-4">
            <div class="search__property">
                <div class="position-relative">
                    <ul class="nav nav-tabs nav-tabs-02 mb-3 justify-content-start" id="pills-tab" role="tablist">
                        <li class="nav-item mr-1">
                            <a class="nav-link active" id="buy-tab" data-toggle="pill" href="#buy" role="tab"
                                aria-controls="buy" aria-selected="true">Buy </a>
                        </li>
                        <li class="nav-item mr-1">
                            <a class="nav-link" id="rent-tab" data-toggle="pill" href="#rent" role="tab"
                                aria-controls="rent" aria-selected="false">Rent</a>
                        </li>

                    </ul>
                    <form action="/property">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade active show" id="buy" role="tabpanel" aria-labelledby="buy-tab">
                                <div class=" search__container">
                                    <div class="row input-group no-gutters">
                                        <input type="text" name="search" class="form-control" id="search"
                                            placeholder="cari lokasi, area, nama property, nama agent"
                                            style="font-size: 1.3em" value="{{ request('search') }}">
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
                            <div class="tab-pane fade" id="rent" role="tabpanel" aria-labelledby="rent-tab">
                                <div class=" search__container">
                                    <div class="row input-group no-gutters">
                                        <input type="text" name="search2" class="form-control" id="search2"
                                            placeholder="cari lokasi, area, nama property, nama agent"
                                            style="font-size: 1.3em" value="{{ request('search') }}">
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
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs__custom-v2 ">
                        <!-- FILTER VERTICAL -->
                        {{-- <ul class="nav nav-pills myTab" role="tablist">
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
                        </ul> --}}

                        <div class="tab-pane fade show active" id="pills-tab-two" role="tabpanel"
                            aria-labelledby="pills-tab-two">
                            <div class="row">
                                <div class="col-md-4 col-lg-4">
                                    <div class="card__image card__box-v1">
                                        <div class="card__image-body">
                                            <div class="container mb-3">
                                                <div class="row">
                                                    <div class="col-6 px-0">
                                                        <div class="box-image">
                                                            <img src="{{ asset('images/mandiri.png') }}" alt="image-kpr" width="96" height="64">
                                                        </div>
                                                    </div>
                                                    <div class="col-6 px-0">
                                                        <h6 class="text-capitalize">
                                                            Bank Mandiri
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cotainer">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col-8">
                                                                <span class="label">
                                                                    Suku Bunga
                                                                    Mulai Dari:
                                                                </span>
                                                            </div>
                                                            <div class="col-4 px-0">
                                                                <span class="label">3,65%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col border-left">
                                                        <div class="row">
                                                            <div class="col-6 px-0">
                                                                <span class="label">Tenor Max:</span>
                                                            </div>
                                                            <div class="col-4 px-0">
                                                                <span class="label">5 Tahun</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <a href="#" class="btn btn-primary rounded col-12">Go Calculate</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <div class="card__image card__box-v1">
                                        <div class="card__image-body">
                                            <div class="container mb-3">
                                                <div class="row">
                                                    <div class="col-6 px-0">
                                                        <div class="box-image">
                                                            <img src="{{ asset('images/BCA.png') }}" alt="image-kpr" width="96" height="64">
                                                        </div>
                                                    </div>
                                                    <div class="col-6 px-0">
                                                        <h6 class="text-capitalize">
                                                            Bank BCA
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cotainer">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col-8">
                                                                <span class="label">
                                                                    Suku Bunga
                                                                    Mulai Dari:
                                                                </span>
                                                            </div>
                                                            <div class="col-4 px-0">
                                                                <span class="label">3,65%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col border-left">
                                                        <div class="row">
                                                            <div class="col-6 px-0">
                                                                <span class="label">Tenor Max:</span>
                                                            </div>
                                                            <div class="col-4 px-0">
                                                                <span class="label">5 Tahun</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <a href="#" class="btn btn-primary rounded col-12">Go Calculate</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <div class="card__image card__box-v1">
                                        <div class="card__image-body">
                                            <div class="container mb-3">
                                                <div class="row">
                                                    <div class="col-6 px-0">
                                                        <div class="box-image">
                                                            <img src="{{ asset('images/BNI.png') }}" alt="image-kpr" width="96" height="64">
                                                        </div>
                                                    </div>
                                                    <div class="col-6 px-0">
                                                        <h6 class="text-capitalize">
                                                            Bank BNI
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cotainer">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col-8">
                                                                <span class="label">
                                                                    Suku Bunga
                                                                    Mulai Dari:
                                                                </span>
                                                            </div>
                                                            <div class="col-4 px-0">
                                                                <span class="label">3,65%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col border-left">
                                                        <div class="row">
                                                            <div class="col-6 px-0">
                                                                <span class="label">Tenor Max:</span>
                                                            </div>
                                                            <div class="col-4 px-0">
                                                                <span class="label">5 Tahun</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <a href="#" class="btn btn-primary rounded col-12">Go Calculate</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cleafix"></div>
                            <div class="row my-3">                                
                                <div class="card__image mt-3 ml-4 col-md-4 col-lg-4 rounded">
                                    <div class="card-body">
                                        <form method="post" onsubmit="return process()">
                                            @csrf
                                            <div class="form-group">                                                
                                                <h5>Profil Financial</h5>
                                                <h5 id="demo"></h5>
                                                <hr />
                                            </div>                                            
                                            <div class="form-group">                                                
                                                <label for="text">Harga Property</label>                                                                                               
                                                <input type="text" class="form-control shadow-sm" id="property" name="price" placeholder="Harga property yang ingin dibeli">
                                            </div>
                                            <div class="form-group">                                                
                                                <label for="text">Penghasilan</label>
                                                <input type="text" class="form-control shadow-sm" id="penghasilan" name="income" placeholder="Penghasilan gabungan suami & istri">
                                            </div>     
                                            <div class="form-group">                                                
                                                <label for="text">Uang Muka</label>
                                                <input type="text" class="form-control shadow-sm" id="uang_muka" name="downPayment" placeholder="Minimal 20% dari harga propert">
                                            </div>     
                                            <div class="form-group">                                                
                                                <label for="text">Margin (7.00% - 9.50%)</label>
                                                <input type="text" class="form-control shadow-sm" id="margin" name="margin" placeholder="Margin sesuai ketentuan bank">
                                            </div>
                                            <div class="form-group">                                                
                                                <label for="text">Lama masa KPR (tahun)</label>
                                                <input type="text" class="form-control shadow-sm" id="tenor" name="instalment" placeholder="Lama waktu angsuran">
                                            </div>
                                            <div class="form-group">                                                
                                                <label for="text">Cicilan lainnya</label>
                                                <input type="text" class="form-control shadow-sm" id="cicilan_lain" name="instalment2" placeholder="Cicilan dalam bulan">
                                            </div>  
                                            <div class="form-group">                                                
                                                <button type="submit" class="btn btn-primary rounded col-12">Hitung</button>                                                                                  
                                            </div>                                                                                 
                                        </form>                                        
                                    </div>
                                </div>
                                <div class="card__image mt-3 ml-5 col-md-7 col-lg-7 rounded">
                                    <div class="card-body">
                                        <h5>Hasil Kalkulasi</h5>
                                        <hr />
                                        <div class="row my-5">
                                            <div class="col-4">
                                                <div class="btn btn-primary rounded col-12 text-center">
                                                    <label for="price">Pinjaman</label>
                                                    <div id="pinjaman">Rp.0</div>
                                                </div>                                            
                                            </div>
                                            <div class="col-4">
                                                <div class="btn btn-primary rounded col-12 text-center">
                                                    <label for="price">Total Pinjaman</label>
                                                    <div id="total_pinjaman">Rp.0</div>
                                                </div>                                            
                                            </div>
                                            <div class="col-4">
                                                <div class="btn btn-primary rounded col-12 text-center">
                                                    <label for="price">Cicilan/bulan</label>
                                                    <div id="cicilan_bulanan">Rp.0</div>
                                                </div>                                            
                                            </div>
                                            <div class="col-12 mt-3">
                                                <div class="btn btn-primary rounded col-12 text-center">
                                                    <label for="price" class="h5">Persentase Cicilan</label>
                                                    <div id="persentase_cicilan">Rp.0</div>
                                                </div>                                            
                                            </div>
                                        </div>       
                                        <p class="font-weight-light">* Pengajuan KPR kemungkinan besar diterima bila persentase cicilan &#8804; 40%</p>                                 
                                        <hr />                                                 
                                        <div class="row my-3 mx-2">
                                            <div class="col-4">
                                                <p class="font-weight-light"> Penghasilan Bulanan</p>
                                            </div>
                                            <div class="col-8">
                                                <p class="text-right" id="penghasilan_bulanan"> Rp.0</p>
                                            </div>
                                            <div class="col-4">
                                                <p class="font-weight-light"> Cicilan Lainnya</p>
                                            </div>
                                            <div class="col-8">
                                                <p class="text-right" id="cicilan_cicilan"> Rp.0</p>
                                            </div>     
                                            <div class="col-4">
                                                <p class="font-weight-light">Kesiapan Uang Muka</p>
                                            </div>
                                            <div class="col-8">
                                                <p class="text-right" id="uang_dp"> Rp.0</p>
                                            </div>                                    
                                            <div class="col-4">
                                                <p class="font-weight-light"> Masa Kredit KPR</p>
                                            </div>
                                            <div class="col-8">
                                                <p class="text-right" id="kredit"> 0 Tahun</p>
                                            </div>
                                            <div class="col-4">
                                                <p class="font-weight-light">Suku Bunga Fix</p>
                                            </div>
                                            <div class="col-8">
                                                <p class="text-right" id="bunga"> 7.5%</p>
                                            </div>          
                                            <div class="col-4">
                                                <p class="font-weight-light"> Jenis KPR</p>
                                            </div>
                                            <div class="col-8">
                                                <p class="text-right"> KPR Konvensional</p>
                                            </div>
                                        </div>                                                                                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- END FILTER VERTICAL -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- LISTING LIST -->
<!-- END LISTING LIST -->

<!-- Calculate KPR simulation -->


<!-- CALL TO ACTION -->
<section class="cta-v1 py-5 mt-3">
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
<script>
    function process(e)
    {
        if (!e) e = window.event;
        e.preventDefault();
    
        var harga_rumah  = parseInt(document.getElementById('property').value);
        var uang_muka    = parseInt(document.getElementById('uang_muka').value);
        var margin       = parseFloat(document.getElementById('margin').value).toFixed(2);
        var tenor        = parseInt(document.getElementById('tenor').value);
        var penghasilan  = parseInt(document.getElementById('penghasilan').value);
        var cicilan_lain = parseInt(document.getElementById('cicilan_lain').value);
    //     var harga_rumah  = parseInt(document.getElementById('harga_rumah').value);
    // var uang_muka    = parseInt(document.getElementById('uang_muka').value);
    // var margin       = parseFloat(document.getElementById('margin').value).toFixed(2);
    // var tenor        = parseInt(document.getElementById('tenor').value);
    // var penghasilan  = parseInt(document.getElementById('penghasilan').value);
    // var cicilan_lain = parseInt(document.getElementById('cicilan_lain').value);
        const LIMIT = 40;
    
        // error if...
        // uang_muka >= harga_rumah
        if (uang_muka >= harga_rumah)
        {
            alert('Uang Muka tidak boleh lebih dari Harga Rumah');
            return ;
        }
    
        // uang_muka < 0.2 * harga_rumah
        if (uang_muka < 0.2 * harga_rumah)
        {
            alert('Uang Muka minimal 20 persen dari Harga Rumah');
            return ;
        }
    
        // penghasilan >= harga rumah - uang_muka
        if (penghasilan >= harga_rumah)
        {
            alert('Penghasilan per bulan lebih dari Harga Rumah');
            return ;
        }
    
        // cicilan_lain >= penghasilan
        if (cicilan_lain >= penghasilan)
        {
            alert('Cicilan Lain lebih dari Penghasilan per Bulan');
            return ;
        }
    
        var pinjaman = harga_rumah - uang_muka;
        var total_pinjaman = pinjaman + (margin / 100 * pinjaman * tenor);
        var cicilan_bulanan = parseInt(total_pinjaman / tenor / 12);
        var persentase_cicilan = parseFloat((cicilan_bulanan + cicilan_lain) / penghasilan * 100).toFixed(2);                                                    
        // document.getElementById('hasil_harga_rumah').innerHTML = addCommas(harga_rumah);
        // document.getElementById('hasil_uang_muka').innerHTML = addCommas(uang_muka);
        // document.getElementById('hasil_margin').innerHTML = margin;
        // document.querySelectorAll('.hasil_pinjaman')[0].innerHTML = document.querySelectorAll('.hasil_pinjaman')[1].innerHTML = addCommas(pinjaman);
        // document.querySelectorAll('.hasil_tenor')[0].innerHTML = document.querySelectorAll('.hasil_tenor')[1].innerHTML = tenor;
        // document.querySelectorAll('.hasil_pinjaman')[0].innerHTML = 
            // document.querySelectorAll('.hasil_pinjaman')[1].innerHTML = 
            document.getElementById('pinjaman').innerHTML = "Rp. " + addCommas(pinjaman);
        // document.getElementById('hasil_total_pinjaman').innerHTML = 
            document.getElementById('total_pinjaman').innerHTML = "Rp. " + addCommas(total_pinjaman);
    
        document.getElementById('cicilan_bulanan').innerHTML = "Rp." + addCommas(cicilan_bulanan);
        document.getElementById('persentase_cicilan').innerHTML = persentase_cicilan + "%";
        if (persentase_cicilan > LIMIT)
            document.getElementById('persentase_cicilan').style.color = 'red'; 
        else
        document.getElementById('persentase_cicilan').style.color = 'white';

        document.getElementById('penghasilan_bulanan').innerHTML = "Rp. " +  addCommas(parseInt(document.getElementById('penghasilan').value));
        document.getElementById('cicilan_cicilan').innerHTML = "Rp. " + addCommas(cicilan_lain);
        document.getElementById('uang_dp').innerHTML =  "Rp. " + addCommas(uang_muka);        
        document.getElementById('bunga').innerHTML = margin + "%";        
        document.getElementById('kredit').innerHTML = tenor + " Tahun";       
    }
    
    function addCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
</script>
@endsection