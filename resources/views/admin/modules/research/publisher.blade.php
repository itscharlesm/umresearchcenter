@extends('admin.layouts.themes.main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                    <h2 class="mb-3">Research Publisher Management</h2>
                    <a target="_blank" class="btn btn-outline-primary btn-sm text-uppercase" href="#addContent"
                        data-toggle="modal" data-target="#addContent">
                        <i class=" mdi mdi-account mr-1"></i> Add Research Publisher
                    </a>
                </div>

                {{-- dili daw ni e table --}}
                <div class="card-body">
                    <div class="row">
                        @foreach ($publishers as $publisher)
                            <div class="col-md-4 mb-4"> <!-- Adjust column size as needed -->
                                <div class="card h-100 shadow-sm">
                                    <img src="{{ asset('images/research/' . $publisher->pub_image) }}"
                                        class="card-img-top img-uniform" alt="{{ $publisher->pub_name }}">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            {{ $publisher->pub_name }}
                                        </h5>
                                        <p>
                                            <strong>Status:</strong>
                                            {{ $publisher->pub_active == 1 ? 'Active' : 'Deactivated' }}
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <!-- Action Buttons -->
                                        <button class="btn btn-primary btn-sm edit-button" data-toggle="modal"
                                            data-target="#updateContent" data-id="{{ $publisher->pub_id }}"
                                            data-name="{{ $publisher->pub_name }}" data-image="{{ $publisher->pub_image }}">
                                            Edit
                                        </button>


                                        <button
                                            class="btn btn-sm {{ $publisher->pub_active == 0 ? 'btn-success' : 'btn-danger' }}"
                                            data-toggle="modal" data-target="#changeStatus"
                                            data-id="{{ $publisher->pub_id }}" data-status="{{ $publisher->pub_active }}">
                                            {{ $publisher->pub_active == 0 ? 'Activate' : 'Deactivate' }}
                                        </button>


                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Add Content --}}
    <div class="modal fade" id="addContent" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content rounded-0 border-0 p-4">
                <div class="modal-header border-0">
                    <h3>Add Content</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.publishers.create') }}" class="row" method="POST"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="col-12 mb-3 text-center">
                            <label for="pubImgLabel">Publisher Image</label>
                            <div class="image-preview-container mb-3">
                                <img id="imagePreview" src="{{ asset('images/default-img.png') }}" alt="Default Image"
                                    class="img-thumbnail" style="max-width: 200px; max-height: 200px;">
                            </div>
                            <input type="file" class="form-control-file" id="pubImg" name="pubImg" accept="image/*"
                                onchange="previewImage(event)">
                        </div>

                        <div class="col-12 mb-3">
                            <label for="pubNameLabel">Publisher Name <span style="color:red;">*</span></label>
                            <input type="text" class="form-control mb-3" id="pubName" name="pubName"
                                placeholder="New Title">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Change status confirmation --}}
    <div class="modal fade" id="changeStatus" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content rounded-0 border-0 p-4">
                <div class="modal-header border-0">
                    <h3>Update Publisher Status</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form
                        action="{{ route('admin.publishers.update-status', ['id' => $publisher->pub_id, 'status' => $publisher->pub_active]) }}"
                        class="row" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="col-12 mb-3">
                            <label for="pubNameLabel">Are you sure you want to update the status?</label>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Yes</button>
                            <button type="button" class="btn" data-dismiss="modal" aria-label="Close">No</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    {{-- Update Content --}}
    <div class="modal fade" id="updateContent" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content rounded-0 border-0 p-4">
                <div class="modal-header border-0">
                    <h3>Edit Publisher <span id="publisherIdDisplay" class="text-muted" style="font-size: 1rem;"></span>
                    </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.publishers.update', ['id' => $publisher->pub_id]) }}" method="POST"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <!-- Hidden Input for Publisher ID -->
                        <input type="hidden" id="pubId" name="pubId" value="">

                        <div class="col-12 mb-3 text-center">
                            <label for="pubImgLabel">Publisher Image</label>
                            <div class="image-preview-container mb-3">
                                <img id="imagePreview" src="{{ asset('images/research/' . $publisher->pub_image) }}"
                                    alt="Default Image" class="img-thumbnail"
                                    style="max-width: 200px; max-height: 200px;">
                            </div>
                            <input type="file" class="form-control-file" id="pubImg" name="pubImg"
                                accept="image/*" onchange="previewImage(event)">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="pubNameLabel">Publisher Name <span style="color:red;">*</span></label>
                            <input type="text" class="form-control mb-3" id="pubName" name="pubName"
                                placeholder="">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <style>
        .img-uniform {
            height: 350px;
            object-fit: cover;
            width: 100%;
        }
    </style>
    <script>
        $('#summernote').summernote({
            tabsize: 2,
            height: 100
        });

        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const output = document.getElementById('imagePreview');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }

        $('#changeStatus').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var pubId = button.data('id'); // Extract info from data-* attributes
            var pubStatus = button.data('status');
            var newStatus = pubStatus == 0 ? 'Activate' : 'Deactivate'; // Determine action text

            var modal = $(this);
            modal.find('.modal-body label').text(`Are you sure you want to ${newStatus} this publisher?`);
            modal.find('form').attr('action', `/admin/publishers/update-status/${pubId}/${pubStatus == 0 ? 1 : 0}`);
        });

        $('#updateContent').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var pubId = button.data('id');
            var modal = $(this);
            modal.find('form').attr('action', `/admin/publishers/update-publisher/${pubId}`);
        });

        document.addEventListener('DOMContentLoaded', function() {
            const editButtons = document.querySelectorAll('.edit-button');
            const modal = document.getElementById('updateContent');

            editButtons.forEach(button => {
                button.addEventListener('click', () => {
                    // Get data from the clicked button
                    const pubId = button.getAttribute('data-id');
                    const pubName = button.getAttribute('data-name');
                    const pubImage = button.getAttribute('data-image');

                    // Update the modal content
                    document.getElementById('pubName').value = pubName;
                    document.getElementById('imagePreview').src = pubImage;

                    document.getElementById('pubName').placeholder =
                        pubName; // Set placeholder dynamically

                    // Update the hidden input and visible publisher ID
                    document.getElementById('pubId').value = pubId;
                    document.getElementById('publisherIdDisplay').textContent = ` ${pubName}`;
                });
            });
        });
    </script>
@endsection
