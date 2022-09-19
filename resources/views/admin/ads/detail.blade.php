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
                Detail Ads
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
                <ul class="list-group list-group-flush">
                    <div class="container mb-3">
                        <img src="{{asset('storage/transaction-images/' .$ads->image_transaction)}}"
                        class="rounded float-left" style="width: 500px">
                    </div>
                    <div class="row mb-3 mx-1">
                        <li class="list-group-item col-6"><b>Type Property : </b>
                            @if ($ads->type_property_id == 1)
                            <span>House</span>
                            @elseif ($ads->type_property_id == 2)
                            <span>Apartment</span>
                            @elseif ($ads->type_property_id == 3)
                            <span>Land</span>
                            @endif</li>
                        <li class="list-group-item col-6 border-top"><b>Harga : </b>{{(number_format($ads->price))}}</li>
                        <li class="list-group-item col-6"><b>Start ADS : </b>{{($ads->start_ads)}}</li>
                        <li class="list-group-item col-6"><b>End ADS : </b>{{($ads->end_ads)}}</li>
                        <li class="list-group-item col-12"><b>Status :
                            @if ($ads->start_ads == null)
                            <span class="badge badge-danger text-dark">Free</span>
                            @elseif ($ads->start_ads != null)
                            <span class="badge badge-primary text-dark">Advertise</span>
                            @endif</li>
                    </div>
                    </ul>
                <a class="btn btn-warning mx-1  " href="{{ route('admin.ads.index')}}">Kembali</a>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
 $("#datepicker").datepicker({
     format: 'dd-mm-yy'
 });
})
</script>
@endsection
