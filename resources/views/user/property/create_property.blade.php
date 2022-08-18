@extends('layouts.layout.bootstrap_modal')

@section('title_bootstrap')
    | Create Property
@endsection

@section('content_bootstrap')
    <div class="col-lg-12 col-12">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Property</h1>
        </div>
        <div class="row">
            <div class="card shadow">
                <div class="card-body pt-0">
                    <form action="" method="post">
                        @csrf
                        <div class="form-check form-switch col-12 col-sm-6">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Iklankan Property Ini</label>
                        </div>
                        <div style="margin-top: 20px" class="form-group col-12 col-sm-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Name" value="">
                        </div>
                        <div style="margin-top: 20px" class="form-group col-12 col-sm-6">
                            <label for="harga">Harga</label>
                            <input type="price" class="form-control" name="harga" placeholder="Harga" value="">
                        </div>
                        <div style="margin-top: 20px" class="form-group col-12 col-sm-6">
                            <label for="status" class="form-label">Status</label>
                            <input class="form-control" list="status-list" id="status" placeholder="Pilih Status">
                            <datalist id="status-list">
                                <option value="Dijual">
                                <option value="Disewakan">
                            </datalist>
                        </div>
                        <div style="margin-top: 20px" class="form-group col-12 col-sm-6">
                            <label for="lokasi">Alamat Lokasi</label>
                            <input type="text" class="form-control" name="lokasi" placeholder="Lokasi" value="">
                        </div>
                        <div style="margin-top: 20px" class="form-group col-12 col-sm-6">
                            <label for="kota">Kota</label>
                            <input class="form-control" id="kota" list="kota-list" placeholder="Kota" value="">
                            <datalist id="kota-list">
                                <option value="Jakarta">
                                <option value="Surabaya">
                            </datalist>
                        </div>
                        <div style="margin-top: 20px" class="form-group col-12 col-sm-6">
                            <label for="provinsi">Provinsi</label>
                            <input class="form-control" id="provinsi" list="provinsi-list" placeholder="Provinsi"
                                value="">
                            <datalist id="provinsi-list">
                                <option value="Jakarta">
                                <option value="Jawa Timur">
                            </datalist>
                        </div>
                        <div style="margin-top: 20px" class="form-group col-12 col-sm-6">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" placeholder="Deskripsi" value=""></textarea>
                        </div>
                        <div style="margin-top: 20px" class="form-group col-12 col-sm-6">
                            <label for="formFile" class="form-label">Photo Property</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <a style="margin-top: 20px" type="submit" class="btn btn-success btn-block">
                            Simpan
                        </a>
                        <a href="{{ route('property.index') }}" style="margin-top: 20px" type="submit"
                            class="btn btn-danger btn-block">
                            Cancel
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
