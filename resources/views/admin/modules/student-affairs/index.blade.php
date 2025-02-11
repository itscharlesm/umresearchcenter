@extends('admin.layouts.themes.main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                    <h2 class="mb-3">Student Affairs Content Management</h2>
                    <a target="_blank" class="btn btn-outline-primary btn-sm text-uppercase" href="#addContent"
                        data-toggle="modal" data-target="#addContent">
                        <i class=" mdi mdi-account mr-1"></i> Add Content
                    </a>
                </div>

                {{-- dili daw ni e table --}}
                <div class="card-body">
                    <div class="row">
                        @foreach ($contents as $content)
                            <div class="col-md-4 mb-4">
                                <div class="card h-100 shadow-sm">

                                    <div class="card-body">
                                        <h5 class="card-title">
                                            {{ $content->std_title }}
                                        </h5>
                                        <p class="card-text mr-3">
                                            {!! $content->std_content !!}
                                        </p>
                                        <p>
                                            <strong>Date Created:</strong>
                                            {{ \Carbon\Carbon::parse($content->std_created_at)->format('F d, Y') }}<br>
                                            <strong>Status:</strong>
                                            {{ $content->std_active ? 'Activated' : 'Deactivated' }}<br>
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <!-- Action Buttons -->
                                        <button class="btn btn-primary btn-sm">Edit</button>
                                        <button class="btn btn-danger btn-sm">Activate</button>
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
                    <form action="{{ url('admin/create-content') }}" class="row" method="POST"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="col-12 mb-3">
                            <label for="res_titleLabel">Content Title <span style="color:red;">*</span></label>
                            <input type="text" class="form-control mb-3" id="content_title" name="content_title">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="res_abstractLabel">Content Description<span style="color:red;">*</span></label>
                            <textarea class="summernote" name="content" id="summernote" rows="4" required></textarea>
                        </div>
                        <div class="col-12 mb-3 text-center">
                            <label for="cnt_atch_label">Content Attachment</label>
                            <input type="file" class="form-control-file" id="cnt_atch" name="cnt_atch" accept="file/*">
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
    </script>
@endsection
