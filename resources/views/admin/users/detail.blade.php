@extends('layouts\layout_admin\master_admin')

@section('title')
   | Dashboard-Admin
@endsection

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail User
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>User Id: </b>{{$user->id}}</li>
                @if ($user->role_id == 1)
                    <li class="list-group-item"><b>Role: </b>Admin</li>
                @else
                    <li class="list-group-item"><b>Role: </b>Normal User</li>
                @endif
                <li class="list-group-item"><b>Nama: </b>{{$user->name}}</li>
                <li class="list-group-item"><b>Email: </b>{{$user->email}}</li>
                <li class="list-group-item"><b>Contact: </b>{{$user->contact}}</li>
                <li class="list-group-item"><b>Gender: </b>{{$user->gender}}</li>
                </ul>
            </div>
            <a class="btn btn-primary" href="{{ route('admin.user.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection