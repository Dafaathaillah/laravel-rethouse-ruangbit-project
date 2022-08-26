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
        <div class="card mb-3">
            <div class="card-body">
                <div class="container">
                    <div class="col-lg-12 mt-3 stretch-card">
                        <div class="card-body">
                            <h5 class="card-title">List Logo Rethouse | RealEstate</h5>
                            <form class="cmxform" id="signupForm" method="get" action="#">
                                <fieldset>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Pilih logo yang akan digunakan</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="topic_id"
                                            id="topic_id">
                                            <option value="#" disabled>-- Pilih Hasil --</option>
                                            @foreach ($logo as $item )
                                            <option class="text-center" colspan="6" value="{{ $item->$id }}">{{ $item->$name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <input class="btn btn-primary" type="submit" value="Choose">
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card-body">
                            <h6 class="card-title">Manage Logo</h6>
                            <br>
                            <a class="btn btn-primary px-1 py-1" href="{{ route('admin.logo.create')}}"><i
                                    class="link-icon p-1" data-feather="plus"></i>Add Logo</a>
                            {{-- <p class="card-description">Read the <a href="https://datatables.net/" target="_blank">
                                    Official DataTables Documentation </a>for a full list of instructions and other
                                options.
                            </p> --}}
                            <div class="table-responsive">
                                <table id="dataTableExample" class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Logo</th>
                                            <th>Keterangan</th>
                                            <th width="280px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $id = 0;
                                        ?>
                                        @foreach ($logo as $logos)
                                        <tr>
                                            <td>{{ $id++ +1}}</td>
                                            <td><img src="{{asset('storage/images/logo/'.$logos->logo) }}"
                                                    class="rounded float-left" style="width: 100px"></td>
                                            <td>{{ $logos->name}}</td>
                                            <td>
                                                <a class="nav-link" href="#" id="trash" data-id="{{ $logos->id }}"
                                                    data-name="{{ $logos->name }}"><i class="link-icon"
                                                        data-feather="trash-2"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    {{ $logo->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
