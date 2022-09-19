@extends('layouts.layout.master_main_create')
@include('sweetalert::alert')

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
                        <form method="post" action="{{ route('property.store') }}" id="myForm"
                            enctype="multipart/form-data">
                            @csrf
                            <div style="mt-3 mb-3" class="form-group col-md-12 col-lg-12">
                                <label for="picture">Picture</label>
                                <div class="dropzone" id="dpz-multiple-files">
                                    <div class="dz-message">Drop Image Here To Upload</div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="form-group col-md-4 col-lg-4 ">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control shadow-sm" id="name" name="name"
                                            placeholder="Name">
                                    </div>
                                    <div class="form-group col-md-4 col-lg-4 ">
                                        <label for="price">Price</label>
                                        <input type="price" class="form-control shadow-sm" id="price" name="price"
                                            placeholder="Price">
                                    </div>
                                    <div class="form-group col-md-4 col-lg-4 ">
                                        <label for="status_property" class="form-label">Status</label>
                                        <select class="form-control shadow-sm" id="status_property" name="status_property">
                                            <option value="#" disabled selected>Choose Status</option>
                                            <option value="For Sell">For Sell</option>
                                            <option value="For Rent">For Rent</option>
                                            <option value="Sold Out">Sold out</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4 col-lg-4 ">
                                        <label for="street">Address</label>
                                        <input type="text" class="form-control shadow-sm" id="street" name="street"
                                            placeholder="Address">
                                    </div>
                                    <div class="form-group col-md-4 col-lg-4 ">
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
                                    <div class="form-group col-md-4 col-lg-4 ">
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
                                    <div class="form-group col-md-12 col-lg-12 ">
                                        <label for="deskripsi">Description Property</label>
                                        <textarea class="form-control shadow-sm" id="description" name="description" placeholder="Description Your Property"></textarea>
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 ">
                                        <label for="type_property_id">Type Property</label>
                                        <select class="form-control shadow-sm" id="type_property_id"
                                            name="type_property_id">
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
                                    <div class="form-group col-md-6 col-lg-6 ">
                                        <label for="ads_id">Advertise</label>
                                        <select class="form-control shadow-sm" id="ads_id" name="ads_id">
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
                                    <div class="form-group col-md-12 col-lg-12">
                                        <label for="image_transaction">Receipt of Payment</label>
                                        <div class="input-group">
                                            <input type="file" name="image_transaction"
                                                class="form-control @error('image_transaction') is-invalid @enderror"
                                                id="image_transaction" aria-describedby="image_transaction">
                                            <label for="image_transaction" class="input-group-text"
                                                style="line-height: 1.1rem">Upload</label>
                                            @error('image_transaction')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6">
                                        <label for="bedroom">Bedroom</label>
                                        <input type="number" class="form-control shadow-sm" id="bedroom"
                                            name="bedroom">
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6">
                                        <label for="bathroom">Bathroom</label>
                                        <input type="number" class="form-control shadow-sm" id="bathroom"
                                            name="bathroom">
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6">
                                        <label for="garage">Garage</label>
                                        <input type="number" class="form-control shadow-sm" id="garage"
                                            name="garage">
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6">
                                        <label for="property_size">Property Size</label>
                                        <input type="text" class="form-control shadow-sm" id="property_size"
                                            name="property_size">
                                    </div>
                                    <div class="form-group col-md-12 col-lg-12">
                                        <label for="area">Area</label>
                                        <input type="text" class="form-control shadow-sm" id="area"
                                            name="area">
                                    </div>
                                    <div style="margin-top: 20px" class="form-group col-md-12 col-lg-12">
                                        <label for="features">Features</label>
                                        <textarea class="form-control shadow-sm" id="features" name="features" placeholder="Features of Property"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <button type="submit" style="margin-top: 20px"
                                    class="btn btn-primary shadow rounded">Simpan</button>
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


@push('script-internal')
    <script>
        var uploadedDocumentMap = {}
        Dropzone.options.dpzMultipleFiles = {
            url: '{{ route('property.storeMedia') }}',
            maxFilesize: 5, // MB
            maxFiles: 3,
            clickable: true,
            addRemoveLinks: true,
            acceptedFiles: '.jpeg,.jpg,.png,.gif',
            dictFallbackMessage: "Your browser does not supported",
            dictInvalidFileType: "This type of file cannot be uploaded",
            dictCancelUpload: "Cancel",
            dictCancelUploadConfirmation: "Are you sure to cancel?",
            dictRemoveFile: "Remove File",
            dictMaxFileExceeded: "You exceeded the maximum number of files",
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },

            success: function(file, response) {
                $('form').append('<input type="hidden" name="image[]" value="' + response.name + '">')
                uploadedDocumentMap[file.name] = response.name
            },

            removedfile: function(file) {
                file.previewElement.remove()
                var name = ''
                if (typeof file.file_name !== 'undefined') {
                    name = file.file_name
                } else {
                    name = uploadedDocumentMap[file.name]
                }
                $('form').find('input[name="image[]"][value="' + name + '"]').remove()
            },
        }
    </script>
@endpush
