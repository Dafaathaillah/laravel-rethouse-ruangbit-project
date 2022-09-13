@extends('layouts\layout_admin\master_admin')

@section('title')
| Dashboard-Admin
@endsection

@section('content')
{{-- <nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Tables</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data Table</li>
    </ol>
</nav> --}}
<div class="row">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="card-body">
                            <h6 class="card-title">Manage ADS</h6>
                            <br>
                            {{-- <a class="btn btn-primary px-1 py-1" href="{{ route('admin.logo.create')}}"><i
                                    class="link-icon p-1" data-feather="plus"></i>Add Logo</a> --}}
                            {{-- <p class="card-description">Read the <a href="https://datatables.net/" target="_blank">
                                    Official DataTables Documentation </a>for a full list of instructions and other
                                options.
                            </p> --}}
                            <div class="table-responsive">
                                <table id="dataTableExample" class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Picture</th>
                                            <th>Request Ads</th>
                                            <th>Bukti Transfer</th>
                                            <th>Start ADS</th>
                                            <th>End ADS</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 0;
                                        ?>
                                        @foreach ($ads as $adv )
                                        <tr>
                                            <td>{{ $no++ +1 }}</td>
                                            <td><img src="{{asset('storage/property-images/' .$adv->image)}}"
                                                    class="rounded float-left" style="width: 100px"></td>
                                            <td>
                                                <?php
                                                if ($adv->ads_id == 1) {
                                                   echo "No ADS";
                                                }elseif ($adv->ads_id == 2) {
                                                    echo "1 bulan | Rp 125,000.00";
                                                }elseif ($adv->ads_id == 3) {
                                                    echo "3 bulan | Rp 375,000.00";
                                                }elseif ($adv->ads_id == 4) {
                                                    echo "6 bulan | Rp 750,000.00";
                                                }
                                            ?>
                                            </td>
                                            <td>{{($adv->image_transaction)}}</td>
                                            <td>{{($adv->start_ads)}}</td>
                                            <td>{{($adv->end_ads)}}</td>
                                            <td>
                                                @if ($adv->end_ads == null)
                                                <span class="badge badge-danger text-white">Free</span>
                                                @elseif ($adv->end_ads != null)
                                                <span class="badge badge-info-muted text-dark">Advertise</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-primary px-1 py-1"
                                                    href="{{ route('admin.ads.edit', $adv->id)}}"><i
                                                        class="link-icon p-1" data-feather="edit"></i></a>
                                                <a class="btn btn-primary px-1 py-1"
                                                    href="{{ route('admin.ads.show', $adv->id)}}"><i
                                                        class="link-icon p-1" data-feather="eye"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                    </div>
                    {{ $ads->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
