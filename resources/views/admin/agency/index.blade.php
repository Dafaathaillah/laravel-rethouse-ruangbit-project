@extends('layouts\layout_admin\master_admin')
@include('sweetalert::alert')
@section('title')
| Dashboard-Admin
@endsection
@section('content')
<?php
  $no = 0;
?>
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
                <h6 class="card-title">Agency Managements</h6>
                {{-- <p class="card-description">Read the <a href="https://datatables.net/" target="_blank"> Official
                        DataTables Documentation </a>for a full list of instructions and other options.</p> --}}
                <br>
<<<<<<< HEAD
                <a class="btn btn-primary px-1 py-1" href="{{ route('admin.agency.create') }}"><i class="link-icon p-1"
=======
                <a class="btn btn-primary" href="{{ route('admin.agency.create') }}"><i class="link-icon"
>>>>>>> origin/auth
                        data-feather="plus"></i>Add Agency</a>
                <div class="table-responsive">
                    <table id="dataTableExample" class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($agency as $agn)
                            <tr>
                                <td>{{ ++$no; }}</td>
                                <td>{{ $agn->name }}</td>
                                <td>
<<<<<<< HEAD
                                    <a class="btn btn-primary px-1 py-1"
                                        href="{{ route('admin.agency.show',$agn->id) }}"><i class="link-icon p-1"
                                            data-feather="eye"></i></a>
                                    <a class="btn btn-primary px-1 py-1"
                                        href="{{ route('admin.agency.edit',$agn->id) }}"><i class="link-icon p-1"
                                            data-feather="edit"></i></a>
                                    <a class="btn btn-primary px-1 py-1 delete" href="#" id="trash"
                                        data-id="{{ $agn->id }}" data-name="{{ $agn->name }}"><i class="link-icon p-1"
                                            data-feather="trash"></i></a>
=======
                                    <a class="btn btn-success" href="{{ route('admin.agency.show',$agn->id) }}"><i
                                            class="link-icon" data-feather="eye"></i></a>
                                    <a class="btn btn-primary" href="{{ route('admin.agency.edit',$agn->id) }}"><i
                                            class="link-icon" data-feather="edit"></i></a>
                                    <a class="btn btn-primary delete" href="#" id="trash" data-id="{{ $agn->id }}"
                                        data-name="{{ $agn->name }}"><i class="link-icon"
                                            data-feather="trash-2"></i></a>
>>>>>>> origin/auth
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.slim.js"
    integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
<script>
    $('.delete').click( function(){
  var id = $(this).attr('data-id');
  var name = $(this).attr('data-name');
  swal({
    title: "Are you sure?",
    text: "You won't be able to revert agency "+name+"!",
    icon: 'warning',
    buttons: {
      confirm: true,
      cancel: true,
    }
  }).then((result) => {
    if (result) {
      window.location = "{{ route('admin.agency.destroy', $agn->id) }}"
      Swal.fire(
        'Deleted!',
        'Agency'+name+'has been deleted.',
        'success'
      )
    }
  });
 });
</script>
@endsection
