@extends('layouts.layout.bootstrap_modal')

@section('title_bootstrap')
    | Create Property
@endsection

@section('content_bootstrap')
    <div class="col-lg-12 col-12">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Property</h1>
        </div>
        <div class="row">
            <div class="card shadow">
                <div class="card-body pt-0">
                    <form  method="post" action="{{ route('property.store') }}" id="myForm">
                        @csrf
                        <div class="form-check form-switch col-12 col-sm-4">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Advertise This Property</label>
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" value="">
                        </div>
                        <div style="margin-top: 20px" class="form-group col-12 col-sm-4">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        </div>
                        <div style="margin-top: 20px" class="form-group col-12 col-sm-4">
                            <label for="price">Price</label>
                            <input type="price" class="form-control" id="price" name="price" placeholder="Price">
                        </div>
                        <div style="margin-top: 20px" class="form-group col-12 col-sm-4">
                            <label for="status_property" class="form-label">Status</label>                            
                            <select class="form-control" id="status_property" name="status_property">
								<option value="#" disabled selected>Choose Status</option>																		
                                <option value="For Sell">For Sell</option>
                                <option value="For Rent">For Rent</option>
                                <option value="Sold OUt">Sold out</option>
							</select>
                        </div>
                        <div style="margin-top: 20px" class="form-group col-12 col-sm-4">
                            <label for="street">Address</label>
                            <input type="text" class="form-control" id="street" name="street" placeholder="address">
                        </div>
                        <div style="margin-top: 20px" class="form-group col-12 col-sm-4">
                            <label for="city_id">City</label>
                            <select class="form-control" id="city_id" name="city_id">
								<option value="#" disabled selected>Choose City</option>																		
                                @foreach($city as $cty){
                                    <option value="<?= $cty->id ?>" ><?= $cty->name ?></option>
                                }
                                @endforeach
							</select>
                        </div>
                        <div style="margin-top: 20px" class="form-group col-12 col-sm-4">
                            <label for="provinsi">Provinsi</label>
                            <select class="form-control" id="provience_id" name="provience_id">
								<option value="#" disabled selected>Choose Provience</option>																		
                                @foreach($province as $prov){
                                    <option value="<?= $prov->id ?>" ><?= $prov->name ?></option>
                                }
                                @endforeach
							</select>
                        </div>
                        <div style="margin-top: 20px" class="form-group col-12 col-sm-4">
                            <label for="deskripsi">Description Property</label>
                            <textarea class="form-control" id="description" name="description" placeholder="Description Your Property"></textarea>
                        </div>
                        <div style="margin-top: 20px" class="form-group col-12 col-sm-4">
                            <label for="type_property_id">Type Property</label>
                            <select class="form-control" id="type_property_id" name="type_property_id">
								<option value="#" disabled selected>Choose Type Property</option>																		
                                @foreach($type_property as $type){
                                    <option value="<?= $type->id ?>" ><?= $type->name ?></option>
                                }
                                @endforeach
							</select>
                        </div>
                        {{-- <div style="margin-top: 20px" class="form-group col-12 col-sm-4">
                            <label for="formFile" class="form-label">Photo Property</label>
                            <input class="form-control" @error('image') is-invalid @enderror type="file" id="image" name="image">
                            @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div> --}}
                        <button type="submit" style="margin-top: 20px" class="btn btn-success">Simpan</button>
                        {{-- <a style="margin-top: 20px" type="submit" class="btn btn-success btn-block">
                            Simpan
                        </a> --}}
                        <a href="{{ route('property.index') }}" style="margin-top: 20px" type="submit"
                            class="btn btn-danger btn-block">
                            Cancel
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
