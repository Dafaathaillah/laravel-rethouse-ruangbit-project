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
                        <form method="post" action="{{ route('property.store') }}" id="myForm" enctype="multipart/form-data">
                            @csrf
                            <div style="margin-top: 20px" class="form-group col-12">
                                <label for="picture">Picture</label>
                                <div class="input-group">
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image"
                                        aria-describedby="image">
                                    <label for="image" class="input-group-text" style="line-height: 1.1rem">Upload</label>
                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div style="margin-top: 20px" class="form-group col-12 ">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                            </div>
                            <div style="margin-top: 20px" class="form-group col-12 ">
                                <label for="price">Price</label>
                                <input type="price" class="form-control" id="price" name="price"
                                    placeholder="Price">
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
                                <input type="text" class="form-control" id="street" name="street"
                                    placeholder="Address">
                            </div>
                            <div style="margin-top: 20px" class="form-group col-12 ">
                                <label for="city_id">City</label>
                                <select class="form-control" id="city_id" name="city_id">
                                    <option value="#" disabled selected>Choose City</option>
                                    @foreach ($city as $cty)
                                        {
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
                                    @foreach ($province as $prov)
                                        {
                                        <option value="<?= $prov->id ?>">
                                            <?= $prov->name ?>
                                        </option>
                                        }
                                    @endforeach
                                </select>
                            </div>
                            <div style="margin-top: 20px" class="form-group col-12 ">
                                <label for="deskripsi">Description Property</label>
                                <textarea class="form-control" id="description" name="description" placeholder="Description Your Property"></textarea>
                            </div>
                            <div style="margin-top: 20px" class="form-group col-12 ">
                                <label for="type_property_id">Type Property</label>
                                <select class="form-control" id="type_property_id" name="type_property_id">
                                    <option value="#" disabled selected>Choose Type Property</option>
                                    @foreach ($type_property as $type)
                                        {
                                        <option value="<?= $type->id ?>">
                                            <?= $type->name ?>
                                        </option>
                                        }
                                    @endforeach
                                </select>
                            </div>
                            <div style="margin-top: 20px" class="form-group col-md-12">
                                <label for="picture">Add ADS</label>
                                <div class="input-group">
                                    <button class="btn btn-primary" type="button" data-toggle="collapse"
                                        data-target="#adscard" aria-expanded="false" aria-controls="collapseExample">
                                        Click this button if you want to show list ads
                                    </button>
                                    <div class="collapse" id="adscard">
                                        <div class="row">
                                            @foreach ($ad_lists as $ads)
                                                <div class="col-md-6 mt-3">
                                                    <div class="card bg-light" style="width: 20rem">
                                                        <div class="card-body text-center">
                                                            <h5 class="card-title">{{ $ads->title }}</h5>
                                                            <p class="card-text">{{ $ads->description }}</p>
                                                            <p class="card-text"><small class="text-muted">Rp {{ $ads->ad_price }}</small>
                                                            </p>
                                                        </div>
                                                        <div class="card-footer">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="ads_id" id="ads_id"
                                                                    value="<?= $ads->id ?>">
                                                                <label class="form-check-label"
                                                                    for="ads_id">Pilih</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="bedroom">Bedroom</label>
                                            <input type="number" class="form-control" id="bedroom" name="bedroom">
                                          </div>
                                          <div class="form-group col-md-4">
                                            <label for="bathroom">Bathroom</label>
                                            <input type="number" class="form-control" id="bathroom" name="bathroom">
                                          </div>
                                          <div class="form-group col-md-4">
                                            <label for="garage">Garage</label>
                                            <input type="number" class="form-control" id="garage" name="garage">
                                          </div>
                                          <div class="form-group col-md-4">
                                            <label for="property_size">Property Size</label>
                                            <input type="text" class="form-control" id="property_size" name="property_size">
                                          </div>
                                          <div class="form-group col-md-4">
                                            <label for="area">Area</label>
                                            <input type="text" class="form-control" id="area" name="area">
                                          </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div style="margin-top: 20px" class="form-group col-12 ">
                                        <label for="features">Features</label>
                                        <textarea class="form-control" id="features" name="features" placeholder="Features of Property"></textarea>
                                    </div>
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
