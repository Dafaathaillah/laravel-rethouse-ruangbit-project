@extends('layouts\layout_admin\master_admin')
@include('sweetalert::alert')
@section('title')
   | Dashboard-Admin
@endsection
@section('content')
<?php
  $no = 0;
?>
<div class="main-wrapper">
      <div class="page-content">

         {{-- <nav class="page-breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="#">Tables</a></li>
               <li class="breadcrumb-item active" aria-current="page">Data Table</li>
            </ol>
         </nav> --}}

         <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
         <div class="card">
           <div class="card-body">
             <h6 class="card-title">User Managements</h6>
             {{-- <p class="card-description">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p> --}}
             <div class="table-responsive">
               <table id="dataTableExample" class="table">
                 <thead>
                   <tr>
                     <th>No</th>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Phone</th>
                     <th>Gender</th>
                     <th>Status</th>
                     <th>Action</th>
                   </tr>
                 </thead>
                 <tbody>                  
                  @foreach ($user as $usr)                    
                   <tr>
                      <td>{{ ++$no; }}</td>
                      <td>{{ $usr->name }}</td>                                          
                      <td>{{ $usr->email }}</td>
                      <td>{{ $usr->contact }}</td>
                      <td>{{ $usr->gender }}</td>
                      @if ($usr->role_id == 1)
                        <td>Admin</td>
                      @else
                        <td>Normal User</td>
                      @endif
                      <td>                      
                        <a class="btn btn-success" href="{{ route('admin.user.show',$usr->id) }}"><i class="link-icon" data-feather="eye"></i></a>
                        <a class="btn btn-primary" href="{{ route('admin.user.edit',$usr->id) }}"><i class="link-icon" data-feather="edit"></i></a>                             
                        <a class="btn btn-primary delete" href="#" id="trash" data-id="{{ $usr->id }}" data-name="{{ $usr->name }}"><i class="link-icon" data-feather="trash-2"></i></a>                        
                      </td>
                      {{-- <td>
                        <a href="#" class="nav-link">
                          <i class="link-icon" data-feather="eye"></i>
                        </a>
                        <a href="#" class="nav-link">
                          <i class="link-icon" data-feather="edit"></i>
                        </a>
                        <a href="#" class="nav-link">
                          <i class="link-icon" data-feather="trash-2"></i>
                        </a>
                      </td> --}}
                   </tr>
                  @csrf
                  @endforeach
                 </tbody>
               </table>
             </div>
           </div>
         </div>
            </div>
         </div>

      </div>
   </div>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
<script>  
 $('.delete').click( function(){  
  var id = $(this).attr('data-id');
  var name = $(this).attr('data-name');
  swal({
    title: "Are you sure?",
    text: "You won't be able to revert user "+name+"!",
    icon: 'warning',
    buttons: {
      cancel: true,
      confirm: true,
    }
  }).then((result) => {
    if (result) {
      window.location = "{{ route('admin.user.destroy',$usr->id) }}"
      Swal.fire(
        'Deleted!',
        'User'+name+'has been deleted.',
        'success'
      )
    }
  });
 });
</script>
@endsection