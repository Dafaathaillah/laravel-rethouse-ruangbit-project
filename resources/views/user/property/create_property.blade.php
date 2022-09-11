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
                        <form method="post" action="{{ route('property.store') }}" id="myForm"
                            enctype="multipart/form-data">
                            @csrf
                            <div style="margin-top: 20px" class="form-group col-12">
                                <label for="picture">Picture</label>
                                <div class="dropzone dz-clickable @error('image') is-invalid @enderror" name="image[]"
                                    id="image">
                                    <div class="dz-default dz-message"><span>Drop images here</span></div>
                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <script type="text/javascript">
                                    Dropzone.options.dropzone = {
                                        maxFilesize: 12,
                                        renameFile: function(file) {
                                            var dt = new Date();
                                            var time = dt.getTime();
                                            return time + file.name;
                                        },
                                        acceptedFiles: ".jpeg,.jpg,.png,.gif",
                                        addRemoveLinks: true,
                                        timeout: 5000,
                                        success: function(file, response) {
                                            console.log(response);
                                        },
                                        error: function(file, response) {
                                            return false;
                                        }
                                    };
                                </script>
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
                            <div style="margin-top: 20px" class="form-group col-md-12 ">
                                <label for="street">Address</label>
                                <input type="text" class="form-control" id="street" name="street"
                                    placeholder="Address">
                            </div>
                            <div class="row">
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <div class="form-group col-md-5 ">
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
                                <div class="form-group col-md-5 ">
                                    <label for="provinsi">Province</label>
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
                            <div style="margin-top: 20px" class="form-group col-12 ">
                                <label for="type_property_id">Advertise</label>
                                <select class="form-control" id="type_property_id" name="type_property_id">
                                    <option value="#" disabled selected>Choose Advertise</option>
                                    @foreach ($ad_lists as $ads)
                                        {
                                        <option value="<?= $ads->id ?>">
                                            <?= $ads->title ?>
                                        </option>
                                        }
                                    @endforeach
                                </select>
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
                                            <input type="text" class="form-control" id="property_size"
                                                name="property_size">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="area">Area</label>
                                            <input type="text" class="form-control" id="area" name="area">
                                        </div>
                                        <div style="margin-top: 20px" class="form-group col-12 ">
                                            <label for="features">Features</label>
                                            <textarea class="form-control" id="features" name="features" placeholder="Features of Property"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <button type="submit" style="margin-top: 20px" class="btn btn-primary">Simpan</button>
                                &nbsp;
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
