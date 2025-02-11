@extends('admin.layouts.themes.main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                    <h2 class="mb-3">Events Management</h2>
                    <a target="_blank" class="btn btn-outline-primary btn-sm text-uppercase" href="#addContent"
                        data-toggle="modal" data-target="#addContent">
                        <i class=" mdi mdi-account mr-1"></i> Add Content
                    </a>
                </div>

                {{-- dili daw ni e table --}}
                <div class="card-body">
                    <div class="row">
                        @foreach ($contents as $content)
                            <div class="col-md-4 mb-4"> <!-- Adjust column size as needed -->
                                <div class="card h-100 shadow-sm">
                                    <img src="{{ asset('images/contents/' . $content->contr_img) }}"
                                        class="card-img-top img-uniform" alt="{{ $content->contr_title }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $content->contr_title }}</h5>
                                        <p class="card-text">{{ strip_tags($content->contr_desc) }}</p>
                                        <p>
                                            <strong>Category:</strong> {{ $content->contr_type }}<br>
                                            <strong>Date:</strong> {{ $content->created_at }}<br>
                                            <strong>Status:</strong> {{ $content->status == 1 ? 'Posted' : 'Not Posted' }}
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <!-- Action Buttons -->
                                        <button class="btn btn-primary btn-sm">Edit</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
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
                    <form action="{{ route('admin.content.create') }}" class="row" method="POST"
                        enctype="multipart/form-data">
                        {{-- enctype="multipart/form-data" --}}
                        {{ csrf_field() }}

                        <div class="col-12 mb-3 text-center">
                            <label for="contentImgLabel">Content Image</label>
                            <div class="image-preview-container mb-3">
                                <img id="imagePreview" src="{{ asset('images/default-img.png') }}" alt="Default Image"
                                    class="img-thumbnail" style="max-width: 200px; max-height: 200px;">
                            </div>
                            <input type="file" class="form-control-file" id="contentImg" name="contentImg"
                                accept="image/*" onchange="previewImage(event)">
                        </div>

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
                        <div class="col-12 mb-3">
                            <label for="contentCategory">Content Type (Optional)</label>
                            <select class="form-control" id="contentCategory" name="contentCategory">
                                <option value="" selected>-- Select Category --</option>
                                @foreach ($contentTypes as $contentType)
                                    <option value="{{ $contentType->contr_id }}">
                                        {{ $contentType->contr_type }}</option>
                                @endforeach
                            </select>
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
