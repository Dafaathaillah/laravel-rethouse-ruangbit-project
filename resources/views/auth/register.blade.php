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

<link rel="manifest" href="site.webmanifest">
<!-- favicon.ico in the root directory -->
<link rel="apple-touch-icon" href="icon.png">
<meta name="theme-color" content="#3454d1">
<link href="{{ asset('./css/styles.css?fd365619e86ad9137a29')}}" rel="stylesheet"></head>

<section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Register -->

<div class="card mx-auto" style="max-width:520px;">
    <div class="card-body">
        <h4 class="card-title mb-4">Sign in</h4>
        <form action="{{ route('auth.save') }}" method="post">
        @if(Session::get('success'))
            <div class="alert alert-success">
                {{ Session::get('success' )}}
            </div>
        @endif
        @if(Session::get('fail'))
            <div class="alert alert-danger">
                {{ Session::get('fail' )}}
            </div>
        @endif

        @csrf
            <div class="form-row">
                <div class="col form-group">
                    <label>Full Name</label>
                    <input type="text" class="form-control" placeholder="Enter your name" name="name">
                    <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                </div> <!-- form-group end.// -->
                <div class="col form-group">
                    <label>Contact</label>
                    <input type="text" class="form-control" placeholder="Enter your phone number" name="contact">
                    <span class="text-danger">@error('contact'){{ $message }} @enderror</span>
                </div> 
                 <!-- form-group end.// -->
            </div> <!-- form-row end.// -->
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email">
                <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
            </div> <!-- form-group end.// -->
            <div class="form-group">
                <label class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" checked="" type="radio" name="gender" value="Male">
                    <span class="custom-control-label"> Male </span>
                </label>
                <label class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" type="radio" name="gender" value="Female">
                    <span class="custom-control-label"> Female </span>
                </label>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="password">                
                <span class="text-danger">@error('password'){{ $message }} @enderror</span>
            </div>
             <!-- form-group end.// -->            
            <!--<div class="form-row">
                <div class="form-group col-lg-6">
                    <label>City</label>
                    <input type="text" class="form-control" name="city">
                </div>--> <!-- form-group end.// -->
                <!-- <div class="form-group col-lg-6">
                    <label>Country</label>
                    <select class=" form-control" name="country">
                        <option> Choose...</option>
                        <option>Uzbekistan</option>
                        <option>Russia</option>
                        <option selected="">United States</option>
                        <option>India</option>
                        <option>Afganistan</option>
                    </select>
                </div>  -->
                <!-- form-group end.// -->
            <!-- </div>  -->
            <!-- form-row.// -->           
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Register </button>
            </div> <!-- form-group// -->
            <div class="form-group">
                <label class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input"
                        checked="">
                    <span class="custom-control-label"> I am agree with <a href="#">terms and contitions</a> </span>
                </label>
            </div> <!-- form-group end.// -->
        </form>        
    </div><!-- card-body.// -->    
</div>
<p class="text-center mt-4">Have account? <a href="{{ route('auth.login')}}">&#8592 Back to Login</a></p>
                </div>
            </div>
        </div>
    </section>