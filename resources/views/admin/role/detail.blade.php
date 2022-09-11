@extends('layouts\layout_admin\master_admin')

@section('title')
   | Dashboard-Admin
@endsection

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card col-8" style="width: 24rem;">
            <div class="card-header">
            Detail Role
            </div>
            <div class="card-body">
                <div class="row">
                    <li class="list-group-item col-6"><b>Role Id: </b>{{$role->id}}</li>
                    <li class="list-group-item col-6 border-top"><b>Role Name: </b>{{$role->name}}</li>
                </div>
            </div>
            <a class="btn btn-primary" href="{{ route('admin.role.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection
