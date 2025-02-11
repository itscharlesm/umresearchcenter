@extends('admin.layouts.themes.main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                    <h2 class="mb-3">Student Organization Content Management</h2>
                    <a target="_blank" class="btn btn-outline-primary btn-sm text-uppercase" href="#addContent"
                        data-toggle="modal" data-target="#addContent">
                        <i class=" mdi mdi-account mr-1"></i> Add Student Organization
                    </a>
                </div>

                {{-- dili daw ni e table --}}
                <div class="card-body">
                    <div class="row">
                        @if ($contents->isEmpty())
                            <div class="col-12">
                                <div class="card h-100 shadow-sm text-center p-4">
                                    <div class="card-body">
                                        <h5 class="card-title font-weight-bold">No Data Available</h5>
                                        <p class="card-text text-muted">There are no departments to display at the moment.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @else
                            @foreach ($contents as $content)
                                <div class="col-md-4 mb-4">
                                    <div class="card h-100 shadow-sm">
                                        <img src="{{ $content->std_org_image ? asset('images/student-org/' . $content->std_org_image) : asset('images/default-img.png') }}"
                                            class="card-img-top img-uniform" alt="{{ $content->std_org_name }}">
                                        <div class="card-body">
                                            <h5 class="card-title font-weight-bold">{{ $content->std_org_name }}</h5>
                                            <p class="card-text">{!! $content->std_org_description !!}</p><br>
                                            <p class="text-muted">
                                                <strong>Date:</strong>
                                                {{ \Carbon\Carbon::parse($content->std_created_at)->format('F d, Y') }}<br>
                                            </p>
                                        </div>
                                        <div class="card-footer bg-light d-flex justify-content-between">
                                            <button class="btn btn-sm btn-primary"><i class="mdi mdi-pencil"></i>
                                                Edit</button>
                                            <button
                                                class="btn btn-sm btn-{{ $content->std_active ? 'danger' : 'success' }}">
                                                {{ $content->std_active ? 'Deactivate' : 'Activate' }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>

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
                    <form action="{{ url('admin/create-organization') }}" class="row" method="POST"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="col-12 mb-3 text-center">
                            <label for="content_imgLabel">Organization Logo</label>
                            <div class="image-preview-container mb-3">
                                <img id="imagePreview" src="{{ asset('images/default-img.png') }}" alt="Default Image"
                                    class="img-thumbnail" style="max-width: 200px; max-height: 200px;">
                            </div>
                            <input type="file" class="form-control-file" id="content_img" name="content_img"
                                accept="image/*" onchange="previewImage(event)">
                        </div>

                        <div class="col-12 mb-3">
                            <label for="org_name">Organization Name <span style="color:red;">*</span></label>
                            <input type="text" class="form-control mb-3" id="org_name" name="org_name" required>
                        </div>

                        <div class="col-12 mb-3">
                            <label for="org_description">Organization Description <span style="color:red;">*</span></label>
                            <textarea class="summernote" name="org_desc" id="summernote" rows="4" required></textarea>
                        </div>

                        <!-- Date Picker for Established Date -->
                        <div class="col-12 mb-3">
                            <label for="established_date">Established Date <span style="color:red;">*</span></label>
                            <input type="date" class="form-control" id="established_date" name="established_date"
                                required>
                        </div>

                        <!-- Checkbox for Organization Type -->
                        <div class="col-12 mb-3">
                            <label>Organization Type</label>
                            <div>
                                <label class="ml-4">
                                    <input type="radio" name="org_type" value="non_department" id="type_non_department"
                                        required>
                                    Non-Departmental Organization
                                </label>
                            </div>
                        </div>

                        <!-- Non-Departmental Input -->
                        <div class="col-12 mb-3" id="nonDepartmentDropdown" style="display: none;">
                            <label for="dept_id">Select Non Departmental Organization</label>
                            <select class="form-control" id="non_dept_id" name="non_dept_id">
                                <option value="" selected>-- Select --</option>
                                @foreach ($nonDepartmentalOrgs as $nonDeptOrg)
                                    <option value="non_dept_{{ $nonDeptOrg->non_dept_org_id }}">
                                        {{ $nonDeptOrg->non_dept_org_name }}</option>
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

        document.addEventListener('DOMContentLoaded', function() {
            const typeDepartment = document.getElementById('type_department');
            const typeNonDepartment = document.getElementById('type_non_department');
            const departmentDropdown = document.getElementById('departmentDropdown');
            const nonDepartmentDropdown = document.getElementById('nonDepartmentDropdown');

            typeDepartment.addEventListener('change', function() {
                if (this.checked) {
                    departmentDropdown.style.display = 'block';
                    nonDepartmentDropdown.style.display = 'none';
                }
            });

            typeNonDepartment.addEventListener('change', function() {
                if (this.checked) {
                    departmentDropdown.style.display = 'none';
                    nonDepartmentDropdown.style.display = 'block';
                }
            });
        });
    </script>
@endsection
