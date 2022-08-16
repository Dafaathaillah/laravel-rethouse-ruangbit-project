@extends('layouts\layout_admin\master_admin')
@include('sweetalert::alert')
@section('title')
   | Dashboard-Admin
@endsection
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Tambah Agency
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
                <form method="post" action="{{ route('admin.agency.store') }}" id="myForm">
                @csrf
                <div class="form-group">
                <label for="name">Name</label> 
                <input type="text" name="name" class="form-control" id="name" aria-describedby="name" > 
                </div>                
                <button type="submit" class="btn btn-success">Submit</button>
                <a class="btn btn-primary" href="{{ route('admin.agency.index') }}">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection