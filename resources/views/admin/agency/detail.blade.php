@extends('layouts\layout_admin\master_admin')

@section('title')
   | Dashboard-Admin
@endsection

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
<<<<<<< HEAD
        <div class="card col-8" style="width: 24rem;">
=======
        <div class="card" style="width: 24rem;">
>>>>>>> origin/auth
            <div class="card-header">
            Detail Agency
            </div>
            <div class="card-body">
<<<<<<< HEAD
                <div class="row">
                    <li class="list-group-item col-6"><b>Role Id: </b>{{$agency->id}}</li>
                    <li class="list-group-item col-6 border-top"><b>Role Name: </b>{{$agency->name}}</li>
                </div>
=======
                <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Role Id: </b>{{$agency->id}}</li>                
                <li class="list-group-item"><b>Role Name: </b>{{$agency->name}}</li>                
                </ul>
>>>>>>> origin/auth
            </div>
            <a class="btn btn-primary" href="{{ route('admin.agency.index') }}">Kembali</a>
        </div>
    </div>
</div>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> origin/auth
