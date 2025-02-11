@extends('admin.layouts.themes.main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                    <h2 class="mb-3">Homepage Content Management</h2>
                    <a target="_blank" class="btn btn-outline-primary btn-sm text-uppercase" href="#addContent"
                        data-toggle="modal" data-target="#addContent">
                        <i class=" mdi mdi-account mr-1"></i> Add Content
                    </a>
                </div>

                {{-- dili daw ni e table --}}
                <div class="card-body">
                    <div class="row">
                        {{-- @foreach ($contents as $content) --}}
                        <div class="col-md-4 mb-4"> <!-- Adjust column size as needed -->
                            <div class="card h-100 shadow-sm">
                                {{-- <img src="{{ asset('images/contents/' . $content->contr_img) }}"
                                        class="card-img-top img-uniform" alt="{{ $content->contr_title }}"> --}}
                                <div class="card-body">
                                    <h5 class="card-title">

                                    </h5>
                                    <p class="card-text"></p>
                                    <p>
                                        <strong>Category:</strong> <br>
                                        <strong>Date:</strong> <br>
                                        <strong>Status:</strong>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <!-- Action Buttons -->
                                    <button class="btn btn-primary btn-sm">Edit</button>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </div>
                            </div>
                        </div>
                        {{-- @endforeach --}}
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
                    <form action="#" class="row" method="POST" enctype="multipart/form-data">
                        {{-- enctype="multipart/form-data" --}}
                        {{ csrf_field() }}
                        {{-- add image here --}}
                        <div class="col-12 mb-3">
                            <label for="contentTitleLabel">Content Title <span style="color:red;">*</span></label>
                            <input type="text" class="form-control mb-3" id="contentTitle" name="contentTitle"
                                placeholder="New Title">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="contentDescriptionLabel">Content Description <span
                                    style="color:red;">*</span></label>
                            <textarea class="summernote" name="contentDescription" id="summernote" rows="4" required></textarea>
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
    </script>
@endsection
