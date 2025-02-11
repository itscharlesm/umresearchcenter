@extends('admin.layouts.themes.main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                    <h2 class="mb-3">Research Publication Management</h2>
                    <a target="_blank" class="btn btn-outline-primary btn-sm text-uppercase" href="#addContent"
                        data-toggle="modal" data-target="#addContent">
                        <i class=" mdi mdi-account mr-1"></i> Add Research Publication
                    </a>
                </div>

                {{-- dili daw ni e table --}}
                <div class="card-body">
                    <div class="row">
                        @foreach ($researches as $research)
                            <div class="col-md-4 mb-4"> <!-- Adjust column size as needed -->
                                <div class="card h-100 shadow-sm">
                                    <img src="{{ $research->res_thumbnail ? asset('images/research/' . $research->res_thumbnail) : asset('images/research/default.webp') }}"
                                        class="card-img-top img-uniform" alt="{{ $research->res_title }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $research->res_title }}</h5>
                                        <h6>{{ $research->authors }}</h6>
                                        <p class="card-text">
                                            {{ \Illuminate\Support\Str::limit($research->res_abstract, 150, '...') }}
                                        </p>
                                        <p>
                                            <strong>Category:</strong> {{ $research->tags ?? 'N/A' }}<br>
                                            <strong>Date:</strong>
                                            {{ \Carbon\Carbon::parse($research->res_published_date)->format('F d, Y') }}<br>
                                            <strong>Status:</strong>
                                            {{ $research->res_active ? 'Posted' : 'Not Posted' }}<br>
                                            <strong>Publisher:</strong> {{ $research->publisher_name ?? 'N/A' }}
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
                    <h3>Add Research Publication</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('admin/publish-research') }}" class="row" method="POST"
                        enctype="multipart/form-data">
                        {{-- enctype="multipart/form-data" --}}
                        {{ csrf_field() }}

                        <div class="col-12 mb-3 text-center">
                            <label for="res_imageLabel">Research Thumbnail</label>
                            <div class="image-preview-container mb-3">
                                <img id="imagePreview" src="{{ asset('images/default-img.png') }}" alt="Default Image"
                                    class="img-thumbnail" style="max-width: 200px; max-height: 200px;">
                            </div>
                            <input type="file" class="form-control-file" id="res_image" name="res_image" accept="image/*"
                                onchange="previewImage(event)">
                        </div>

                        <div class="col-12 mb-3">
                            <label for="res_titleLabel">Research Title <span style="color:red;">*</span></label>
                            <input type="text" class="form-control mb-3" id="res_title" name="res_title"
                                placeholder="Research Title">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="res_abstractLabel">Research Abstract<span style="color:red;">*</span></label>
                            <textarea class="summernote" name="res_abstract" id="summernote" rows="4" required></textarea>
                        </div>

                        <div class="col-12 mb-3">
                            <label for="res_file_attachmentLabel">Research Manuscript <span
                                    style="color:red;">*</span></label>

                            <input type="file" class="form-control-file" id="res_file_attachment"
                                name="res_file_attachment" accept=".pdf">
                        </div>

                        {{-- Author --}}
                        <div class="col-12 mb-3">
                            <label for="authors">Authors <span style="color:red;">*</span></label>
                            <div id="authorInputs">
                                <div class="row mb-2 author-row">
                                    <div class="col-md-4">
                                        <input type="text" name="authors[0][first_name]" class="form-control"
                                            placeholder="First Name" required>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="authors[0][middle_name]" class="form-control"
                                            placeholder="Middle Name">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="authors[0][last_name]" class="form-control"
                                            placeholder="Last Name" required>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-success" onclick="addAuthorRow()">Add Author</button>
                        </div>


                        {{-- Tags --}}
                        <div class="col-12 mb-3">
                            <label for="tags">Tags <span style="color:red;">*</span></label>
                            <div id="tagsInputs">
                                <div class="input-group mb-2">
                                    <input type="text" name="tags[]" class="form-control"
                                        placeholder="Enter Research tag(s)">
                                    <div class="input-group-append">
                                        <button class="btn btn-success" type="button"
                                            onclick="addTagsField()">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-12 mb-3">
                            <label for="pub_id">Publisher</label>
                            <select class="form-control" id="pub_id" name="pub_id">
                                <option value="" selected>-- Select Publisher --</option>
                                @foreach ($publishers as $publisher)
                                    <option value="{{ $publisher->pub_id }}">
                                        {{ $publisher->pub_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Date Publish -->
                        <div class="col-12 mb-3">
                            <label for="date_publish">Date Publish <span style="color:red;">*</span></label>
                            <input type="date" class="form-control" id="date_publish" name="res_date_publish"
                                required>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Publish</button>
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

        $(document).ready(function() {
            $('.select2').select2({
                placeholder: "Select states"
            });
        });

        let authorIndex = 1;

        function addAuthorRow() {
            const authorInputs = document.getElementById("authorInputs");

            const row = document.createElement("div");
            row.classList.add("row", "mb-2", "author-row");

            row.innerHTML = `
            <div class="col-md-4">
                <input type="text" name="authors[${authorIndex}][first_name]" class="form-control" placeholder="First Name" required>
            </div>
            <div class="col-md-4">
                <input type="text" name="authors[${authorIndex}][middle_name]" class="form-control" placeholder="Middle Name">
            </div>
            <div class="col-md-4">
                <div class="input-group">
                    <input type="text" name="authors[${authorIndex}][last_name]" class="form-control" placeholder="Last Name" required>
                    <div class="input-group-append">
                        <button type="button" class="btn btn-danger" onclick="removeAuthorRow(this)">Remove</button>
                    </div>
                </div>
            </div>
        `;

            authorInputs.appendChild(row);
            authorIndex++;
        }

        function removeAuthorRow(button) {
            const row = button.closest('.author-row');
            row.remove();
        }

        function addTagsField() {
            const authorInputs = document.getElementById("tagsInputs");

            const inputGroup = document.createElement("div");
            inputGroup.classList.add("input-group", "mb-2");

            const inputField = document.createElement("input");
            inputField.type = "text";
            inputField.name = "tags[]";
            inputField.classList.add("form-control");
            inputField.placeholder = "Enter Research tag(s)";

            const inputGroupAppend = document.createElement("div");
            inputGroupAppend.classList.add("input-group-append");

            const removeButton = document.createElement("button");
            removeButton.type = "button";
            removeButton.classList.add("btn", "btn-danger");
            removeButton.textContent = "-";
            removeButton.onclick = function() {
                authorInputs.removeChild(inputGroup);
            };

            inputGroupAppend.appendChild(removeButton);
            inputGroup.appendChild(inputField);
            inputGroup.appendChild(inputGroupAppend);
            authorInputs.appendChild(inputGroup);
        }
    </script>
@endsection
