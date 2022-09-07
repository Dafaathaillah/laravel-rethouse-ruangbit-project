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
                Tambah KPR
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
                <form method="post" action="{{ route('kpr-admin.store')}}" id="myForm" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="logo">Logo</label>
                            <div class="input-group">
                                <input type="file" name="logo" class="form-control" id="logo" aria-describedby="logo">
                                <label for="logo" class="input-group-text" style="line-height: 1.1rem">Upload</label>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Nama Kpr</label>
                            <input type="text" name="name" class="form-control" id="name"
                                aria-describedby="name">
                            {{-- @error('logo')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror --}}
                        </div>
                        <div class="form-group col-md-6">
                            <label for="suku_bunga">Suku Bunga</label>
                            <input type="text" name="suku_bunga" class="form-control" id="suku_bunga"
                                aria-describedby="suku_bunga">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tenor_max">Max Tenor</label>
                            <input type="text" name="tenor_max" class="form-control" id="tenor_max"
                                aria-describedby="tenor_max">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-warning" href="{{ route('kpr-admin.index')}}">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
