@extends('layouts.layout.bootstrap_modal')

@section('title_bootstrap')
    | Create Property
@endsection

@section('content_bootstrap')
    <!-- Modal -->
    {{-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add Property</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="body-card">
                            <form action="">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <label for="floatingInput">Email address</label>
                                </div>
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="floatingPassword"
                                        placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container-xl">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Tambah Property</h1>
        </div>

    <!-- Content Row -->
    {{-- @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif --}}
    <div class="card shadow">
              <div class="card-body">
                  <form action="" method="post">
                      @csrf
                      <div style="margin-top: 20px" class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Iklankan Property Ini</label>
                      </div>
                      <div style="margin-top: 20px" class="form-group">
                          <label for="name">Name</label>
                          <input type="text" class="form-control" name="name" placeholder="Name" value="">
                      </div>
                      <div style="margin-top: 20px" class="form-group">
                          <label for="harga">Harga</label>
                          <input type="price" class="form-control" name="harga" placeholder="Harga" value="">
                      </div>
                      {{-- <div class="form-group">
                          <label for="about">About</label>
                          <textarea name="about" rows="10" class="d-block w-100 form-control">{{ old('about') }}</textarea>
                      </div> --}}
                      <div style="margin-top: 20px" class="form-group">
                        <label for="status" class="form-label">Status</label>
                        <input class="form-control" list="status-list" id="status" placeholder="Pilih Status">
                        <datalist id="status-list">
                          <option value="Dijual">
                          <option value="Disewakan">
                        </datalist>
                      </div>
                      <div style="margin-top: 20px" class="form-group">
                          <label for="lokasi">Alamat Lokasi</label>
                          <input type="text" class="form-control" name="lokasi" placeholder="Lokasi" value="">
                      </div>
                      <div style="margin-top: 20px" class="form-group">
                          <label for="kota">Kota</label>
                          <input class="form-control" id="kota" list="kota-list" placeholder="Kota" value="">
                          <datalist id="kota-list">
                            <option value="Jakarta">
                            <option value="Surabaya">
                          </datalist>
                      </div>
                      <div style="margin-top: 20px" class="form-group">
                          <label for="provinsi">Provinsi</label>
                          <input class="form-control" id="provinsi" list="provinsi-list" placeholder="Provinsi" value="">
                          <datalist id="provinsi-list">
                            <option value="Jakarta">
                            <option value="Jawa Timur">
                          </datalist>
                      </div>
                      <div style="margin-top: 20px" class="form-group">
                          <label for="deskripsi">Deskripsi</label>
                          <textarea class="form-control" name="deskripsi" placeholder="Deskripsi" value=""></textarea>
                      </div>
                      <div style="margin-top: 20px" class="form-group">
                        <label for="formFile" class="form-label">Photo Property</label>
                        <input class="form-control" type="file" id="formFile">
                      </div>
                      <a style="margin-top: 20px" type="submit" class="btn btn-success btn-block">
                          Simpan
                      </a>
                      <a style="margin-top: 20px" type="submit" class="btn btn-danger btn-block">
                        Cancel
                    </a>
                  </form>
              </div>
          </div>
      </div>
@endsection
