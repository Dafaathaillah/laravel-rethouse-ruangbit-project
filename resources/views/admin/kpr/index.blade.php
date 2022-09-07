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
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card-body">
                            <h6 class="card-title">Manage KPR</h6>
                            <br>
                            <a class="btn btn-primary px-1 py-1" href="{{ route('kpr-admin.create') }}"><i
                                class="link-icon p-1" data-feather="plus"></i>Add KPR</a>
                            <div class="table-responsive">
                                <table id="dataTableExample" class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Logo</th>
                                            <th>Nama Bank</th>
                                            <th>Suku Bunga</th>
                                            <th>Max Tenor</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 0;
                                        ?>
                                        @foreach ($kpradm as $kpr )
                                        <tr>
                                            <td>{{ $no++ +1 }}</td>
                                            <td><img src="{{asset('storage/images/kpr/'.$kpr->logo) }}"
                                                    class="rounded float-left" style="width: 100px"></td>
                                            <td>{{ $kpr->name }}</td>
                                            <td>{{ $kpr->suku_bunga }}</td>
                                            <td>{{ $kpr->tenor_max }}</td>
                                            <td>
                                                <a class="btn btn-primary px-1 py-1" href="{{ route('kpr-admin.edit', $kpr->id )}}"><i
                                                    class="link-icon p-1" data-feather="edit"></i>Edit Kpr</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
