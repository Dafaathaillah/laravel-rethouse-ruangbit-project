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
                Edit Logo
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
                <form method="post" action="{{ route('kpr-admin.update', $kpradm->id) }}" id="myForm" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="logo">Logo</label>
                        <div class="input-group">
                            <input type="file" name="logo" class="form-control" id="logo" value="{{ asset('storage/images/kpr/'. $kpradm->logo) }}" style="width:50%%;">
                            {{-- <input type="file" name="logo" class="form-control" id="logo" value="{{ asset('storage/images/logo/'. $logo->logo) }}" style="width:50%%;" aria-describedby="logo"> --}}
                            <label for="logo" class="input-group-text" style="line-height: 1.1rem">Upload</label>
                        </div>
                        <img src="#" width="300px">
                    </div>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" class="form-control" value="{{ $kpradm->name }}" id="name" aria-describedby="name" disabled>
                        {{-- @error('logo')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror --}}
                    </div>
                    <div class="form-group">
                        <label for="suku_bunga">Suku Bunga</label>
                        <input type="text" name="suku_bunga" class="form-control" value="{{ $kpradm->suku_bunga }}" id="suku_bunga" aria-describedby="name">
                        {{-- @error('logo')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror --}}
                    </div>
                    <div class="form-group">
                        <label for="tenor_max">Tenor Max</label>
                        <input type="text" name="tenor_max" class="form-control" value="{{ $kpradm->tenor_max }}" id="tenor_max" aria-describedby="name">
                        {{-- @error('logo')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror --}}
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-warning" href="{{ route('kpr-admin.index')}}">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
