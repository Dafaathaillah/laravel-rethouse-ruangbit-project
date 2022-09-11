@extends('layouts\layout_admin\master_admin')

@section('title')
   | Dashboard-Admin
@endsection

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card col-8" style="width: 24rem;">
            <div class="card-header">
            Detail User
            </div>
            <div class="card-body">
                <div class="row">
                        <li class="list-group-item col-6"><b>User Id: </b>{{$user->id}}</li>
                        @if ($user->role_id == 1)
                            <li class="list-group-item col-6 border-top"><b>Role: </b>Admin</li>
                        @else
                            <li class="list-group-item col-6 border-top"><b>Role: </b>Normal User</li>
                        @endif
                        <li class="list-group-item col-6"><b>Nama: </b>{{$user->name}}</li>
                        <li class="list-group-item col-6"><b>Email: </b>{{$user->email}}</li>
                        <li class="list-group-item col-6"><b>Contact: </b>{{$user->contact}}</li>
                        <li class="list-group-item col-6"><b>Gender: </b>{{$user->gender}}</li>
                </div>
            </div>
            <a class="btn btn-primary" href="{{ route('admin.user.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection
