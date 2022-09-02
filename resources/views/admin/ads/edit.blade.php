@extends('layouts\layout_admin\master_admin')
@include('sweetalert::alert')
@section('title')
| Dashboard-Admin
@endsection
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 48rem;">
            <div class="card-header bg-primary text-white">
                Add Start & End Date ADS
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('admin.ads.update', $ads->id) }}" id="myForm"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="logo">ADS</label>
                        <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker"
                            inline="true">
                            <label for="example">start ads...</label>
                            <input placeholder="Select start date" type="date" name="start_ads" value="{{ $ads->start_ads }} id="satrt_ads" class="form-control">
                            <i class="fas fa-calendar input-prefix"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker"
                            inline="true">
                            <label for="example">end_ads...</label>
                            <input placeholder="Select end date" type="date" name="end_ads" value="{{ $ads->end_ads }} id="end_ands" class="form-control">
                            <i class="fas fa-calendar input-prefix"></i>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-warning" href="{{ route('admin.ads.index')}}">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
