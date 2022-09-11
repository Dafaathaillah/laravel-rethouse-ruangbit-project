@extends('layouts\layout_admin\master_admin')

@section('title')
   | Dashboard-Admin
@endsection
@section('content')
 
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Role
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
                <form method="post" action="{{ route('admin.term.update', $term->id) }}" id="myForm">
            @csrf
            @method('PUT') 
                <div class="form-group">
                    <label for="name">Name</label> 
                    <input type="text" name="name" class="form-control" id="name" value="{{ $term->name }}" aria-describedby="name" > 
                </div> 
                <button type="submit" class="btn btn-success">Submit</button>
                    <a class="btn btn-primary" href="{{ route('admin.term.index') }}">Kembali</a>
                {{-- <button class="btn btn-primary">Kembali</button> --}} 
                </form>
            </div>
        </div>
    </div>
</div>
@endsection