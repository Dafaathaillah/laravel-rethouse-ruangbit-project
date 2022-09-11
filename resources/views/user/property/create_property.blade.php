@extends('layouts.layout.master_main_create')

@section('title')
    | Create Property
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="mb-3">
                <div class="shadow card mb-3 rounded" style="width: 48rem;">
                    <div class="card-header bg-primary text-white">
                        Add Property
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('property.store') }}" id="myForm"
                            enctype="multipart/form-data">
                            @csrf
                            <div style="mt-3 mb-3" class="form-group col-12">
                                <label for="picture">Picture</label>
                                <div class="shadow dropzone dz-clickable @error('image') is-invalid @enderror" name="image[]"
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
                            <div class="container">
                                <div class="row">
                                    <div class="form-group col-4 ">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control shadow-sm" id="name" name="name" placeholder="Name">
                                    </div>
                                    <div class="form-group col-4 ">
                                        <label for="price">Price</label>
                                        <input type="price" class="form-control shadow-sm" id="price" name="price"
                                            placeholder="Price">
                                    </div>
                                    <div class="form-group col-4 ">
                                        <label for="status_property" class="form-label shadow-sm">Status</label>
                                        <select class="form-control" id="status_property" name="status_property">
                                            <option value="#" disabled selected>Choose Status</option>
                                            <option value="For Sell">For Sell</option>
                                            <option value="For Rent">For Rent</option>
                                            <option value="Sold OUt">Sold out</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4 ">
                                        <label for="street">Address</label>
                                        <input type="text" class="form-control shadow-sm" id="street" name="street"
                                            placeholder="Address">
                                    </div>
                                    <div class="form-group col-4 ">
                                        <label for="city_id">City</label>
                                        <select class="form-control shadow-sm" id="city_id" name="city_id">
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
                                    <div class="form-group col-4 ">
                                        <label for="provinsi">Province</label>
                                        <select class="form-control shadow-sm" id="provience_id" name="provience_id">
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
                                    <div class="form-group col-12 ">
                                        <label for="deskripsi">Description Property</label>
                                        <textarea class="form-control shadow-sm" id="description" name="description" placeholder="Description Your Property"></textarea>
                                    </div>
                                    <div class="form-group col-6 ">
                                        <label for="type_property_id">Type Property</label>
                                        <select class="form-control shadow-sm" id="type_property_id" name="type_property_id">
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
                                    <div class="form-group col-6 ">
                                        <label for="type_property_id">Advertise</label>
                                        <select class="form-control shadow-sm" id="type_property_id" name="type_property_id">
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
                                    <div class="form-group col-6">
                                        <label for="bedroom">Bedroom</label>
                                        <input type="number" class="form-control shadow-sm" id="bedroom" name="bedroom">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="bathroom">Bathroom</label>
                                        <input type="number" class="form-control shadow-sm" id="bathroom" name="bathroom">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="garage">Garage</label>
                                        <input type="number" class="form-control shadow-sm" id="garage" name="garage">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="property_size">Property Size</label>
                                        <input type="text" class="form-control shadow-sm" id="property_size"
                                            name="property_size">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="area">Area</label>
                                        <input type="text" class="form-control shadow-sm" id="area" name="area">
                                    </div>
                                    <div style="margin-top: 20px" class="form-group col-12 ">
                                        <label for="features">Features</label>
                                        <textarea class="form-control shadow-sm" id="features" name="features" placeholder="Features of Property"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <button type="submit" style="margin-top: 20px" class="btn btn-primary shadow rounded">Simpan</button>
                                &nbsp;
                                <a href="{{ route('property.index') }}" style="margin-top: 20px" type="button"
                                    class="btn btn-warning shadow rounded">
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
