@extends('layouts\layout_admin\master_admin')

@section('title')
   | Dashboard-Admin
@endsection

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail Term & Condition
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Term & Condition Id: </b>{{$term->id}}</li>                
                <li class="list-group-item"><b>Term & Condition Name: </b><br>{{$term->name}}</li>                
                </ul>
            </div>
            <a class="btn btn-primary" href="{{ route('admin.term.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection