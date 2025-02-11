@extends('admin.layouts.themes.main')
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                    <h2>Academic Colleges</h2>
                    <a target="_blank" class="btn btn-outline-primary btn-sm text-uppercase" href="#registerCollege"
                        data-toggle="modal" data-target="#registerCollege">
                        <i class=" mdi mdi-account mr-1"></i> Add College Program
                    </a>
                </div>

                <div class="card-body">
                    <div class="basic-data-table">
                        <table id="basic-data-table" class="table nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Logo</th>
                                    <th>Program Name</th>
                                    <th>Program Description</th>
                                    <th>Program Code</th>
                                    <th>Program Objectives</th>
                                    <th>Student Objectives</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger</td>
                                    <td>Nixon</td>
                                    <td>System Architect</td>
                                    <td>Nixon</td>
                                    <td>System Architect</td>
                                    <td>Nixon</td>
                                </tr>
                                <tr>
                                    <td>Garrett</td>
                                    <td>Winters</td>
                                    <td>Accountant</td>
                                    <td>Nixon</td>
                                    <td>System Architect</td>
                                    <td>Nixon</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- Add Colleges --}}
    <div class="modal fade" id="registerCollege" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content rounded-0 border-0 p-4">
                <div class="modal-header border-0">
                    <h3>Register College Program</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('admin/create-college') }}" class="row" method="POST">
                        {{ csrf_field() }}
                        <div class="col-12 mb-3 text-center">
                            <label for="content_imgLabel">Colleges Promotional Image</label>
                            <div class="image-preview-container mb-3">
                                <img id="imagePreview" src="{{ asset('images/default-img.png') }}" alt="Default Image"
                                    class="img-thumbnail" style="max-width: 200px; max-height: 200px;">
                            </div>
                            <input type="file" class="form-control-file" id="content_img" name="content_img"
                                accept="image/*" onchange="previewImage(event)">
                        </div>

                        <div class="col-12">
                            <label for="college_name">College Name <span style="color:red;">*</span></label>
                            <input type="text" class="form-control mb-3" id="college_name" name="college_name"
                                placeholder="Program Name">
                        </div>
                        <div class="col-12">
                            <label for="college_acrnonym">College Acronym <span style="color:red;">*</span></label>
                            <input type="text" class="form-control mb-3" id="college_acrnonym" name="college_acrnonym"
                                placeholder="Program Code">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="college_description">College Overview <span style="color:red;">*</span></label>
                            <textarea class="summernote" name="college_description" id="college_description" rows="4" required></textarea>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="college_objective">College Objective <span style="color:red;">*</span></label>
                            <textarea class="summernote" name="college_objective" id="college_objective" rows="4" required></textarea>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="stud_summernote">Student Outcomes <span style="color:red;">*</span></label>
                            <textarea class="summernote" name="stud_objective" id="stud_summernote" rows="4" required></textarea>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="careerPath">Career Path <span style="color:red;">*</span></label>
                            <textarea class="summernote" name="career_path" id="career_path" rows="4" required></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script>
        $('#college_objective').summernote({
            tabsize: 2,
            height: 100
        });
        $('#college_description').summernote({
            tabsize: 2,
            height: 100
        });
        $('#stud_summernote').summernote({
            tabsize: 2,
            height: 100
        });
        $('#career_path').summernote({
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
