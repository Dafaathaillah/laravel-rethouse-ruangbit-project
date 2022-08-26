@extends('layouts.layout.master_main_create')

@section('title')
| Create Property
@endsection

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="mb-3">
            <div class="card mb-3 rounded" style="width: 48rem;">
                <div class="card-header bg-primary text-white">
                    Add Property
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('property.store') }}" id="myForm">
                        @csrf
                        <div style="margin-top: 20px" class="form-group col-12 ">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        </div>
                        <div style="margin-top: 20px" class="form-group col-12 ">
                            <label for="price">Price</label>
                            <input type="price" class="form-control" id="price" name="price" placeholder="Price">
                        </div>
                        <div style="margin-top: 20px" class="form-group col-12 ">
                            <label for="status_property" class="form-label">Status</label>
                            <select class="form-control" id="status_property" name="status_property">
                                <option value="#" disabled selected>Choose Status</option>
                                <option value="For Sell">For Sell</option>
                                <option value="For Rent">For Rent</option>
                                <option value="Sold OUt">Sold out</option>
                            </select>
                        </div>
                        <div style="margin-top: 20px" class="form-group col-12 ">
                            <label for="street">Address</label>
                            <input type="text" class="form-control" id="street" name="street" placeholder="address">
                        </div>
                        <div style="margin-top: 20px" class="form-group col-12 ">
                            <label for="city_id">City</label>
                            <select class="form-control" id="city_id" name="city_id">
                                <option value="#" disabled selected>Choose City</option>
                                @foreach($city as $cty){
                                <option value="<?= $cty->id ?>">
                                    <?= $cty->name ?>
                                </option>
                                }
                                @endforeach
                            </select>
                        </div>
                        <div style="margin-top: 20px" class="form-group col-12 ">
                            <label for="provinsi">Provinsi</label>
                            <select class="form-control" id="provience_id" name="provience_id">
                                <option value="#" disabled selected>Choose Provience</option>
                                @foreach($province as $prov){
                                <option value="<?= $prov->id ?>">
                                    <?= $prov->name ?>
                                </option>
                                }
                                @endforeach
                            </select>
                        </div>
                        <div style="margin-top: 20px" class="form-group col-12 ">
                            <label for="deskripsi">Description Property</label>
                            <textarea class="form-control" id="description" name="description"
                                placeholder="Description Your Property"></textarea>
                        </div>
                        <div style="margin-top: 20px" class="form-group col-12 ">
                            <label for="type_property_id">Type Property</label>
                            <select class="form-control" id="type_property_id" name="type_property_id">
                                <option value="#" disabled selected>Choose Type Property</option>
                                @foreach($type_property as $type){
                                <option value="<?= $type->id ?>">
                                    <?= $type->name ?>
                                </option>
                                }
                                @endforeach
                            </select>
                        </div>
                        <div style="margin-top: 20px" class="form-group col-12">
                            <label for="logo">Logo</label>
                            <div class="input-group">
                                <input type="file" name="logo" class="form-control" id="logo" aria-describedby="logo">
                                <label for="logo" class="input-group-text" style="line-height: 1.1rem">Upload</label>
                            </div>
                        </div>
                        {{-- <div style="margin-top: 20px" class="form-group col-12 col-sm-4">
                            <label for="formFile" class="form-label">Photo Property</label>
                            <input class="form-control" @error('image') is-invalid @enderror type="file" id="image"
                                name="image">
                            @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div> --}}
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1">
                            <label class="custom-control-label" for="customSwitch1">Advertise this Property</label>
                        </div>
                        <div class="row justify-content-end">
                            <button type="submit" style="margin-top: 20px" class="btn btn-primary">Simpan</button>
                            &nbsp;
                            {{-- <a style="margin-top: 20px" type="submit" class="btn btn-success btn-block">
                                Simpan
                            </a> --}}
                            <a href="{{ route('property.index') }}" style="margin-top: 20px" type="button"
                                class="btn btn-warning">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
