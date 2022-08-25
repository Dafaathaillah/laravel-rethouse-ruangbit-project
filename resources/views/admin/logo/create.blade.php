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
                Tambah Logo
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
                <form method="post" action="{{ route('logo.store')}}" id="myForm" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="logo">Logo</label>
                        <div class="input-group">
                            <input type="file" name="logo" class="form-control" id="logo" aria-describedby="logo">
                            <label for="logo" class="input-group-text" style="line-height: 1.1rem">Upload</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Keterangan</label>
                        <textarea type="text" name="name" class="form-control" id="name" aria-describedby="name"></textarea>
                        {{-- @error('logo')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror --}}
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-warning" href="{{ route('logo.index')}}">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
