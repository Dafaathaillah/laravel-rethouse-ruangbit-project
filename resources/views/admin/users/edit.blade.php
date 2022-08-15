@extends('layouts\layout_admin\master_admin')

@section('title')
   | Dashboard-Admin
@endsection
@section('content')
 
<div class="container mt-5">
 <div class="row justify-content-center align-items-center">
 <div class="card" style="width: 24rem;">
 <div class="card-header">
 Edit Mahasiswa
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
 <form method="post" action="{{ route('admin.user.update', $user->id) }}" id="myForm">
 @csrf
 @method('PUT') 
 <div class="form-group">
 <label for="name">Name</label> 
 <input type="text" name="name" class="form-control" id="name" value="{{ $user->name }}" aria-describedby="name" > 
 </div>
 <div class="form-group">
 <label for="email">Email</label> 
 <input type="email" name="email" class="form-control" id="email" value="{{ $user->email }}" aria-describedby="email" > 
 </div>
 <div class="form-group">
    <label for="exampleFormControlSelect1">Role</label>
    <select class="form-control" id="role_id" name="role_id">
        <option value="#" selected="selected" disabled >Pilih Role</option>                
        <option value="1">Admin</option>            
        <option value="2">Normal User</option>
    </select>
</div>
 <div class="form-group">
   <label class="custom-control custom-radio custom-control-inline">
       <input class="custom-control-input" type="radio" name="gender" value="Male">
       <span class="custom-control-label"> Male </span>
   </label>
   <label class="custom-control custom-radio custom-control-inline">
       <input class="custom-control-input" type="radio" name="gender" value="Female">
       <span class="custom-control-label"> Female </span>
   </label>
</div>
 <div class="form-group">
 <label for="contact">Contact</label> 
 <input type="contact" name="contact" class="form-control" id="contact" value="{{ $user->contact }}" aria-describedby="contact" > 
 </div> 
 <button type="submit" class="btn btn-success">Submit</button>
 <a class="btn btn-primary" href="{{ route('admin.user.index') }}">Kembali</a>
 {{-- <button class="btn btn-primary">Kembali</button> --}} 
 </form>
 </div>
 </div>
 </div>
</div>
@endsection