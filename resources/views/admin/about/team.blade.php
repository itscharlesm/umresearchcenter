@extends('admin.themes.layouts.main')
@section('content')
    {{-- Content Header --}}
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Manage Team</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ action('App\Http\Controllers\AdminController@home') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active">About</li>
                        <li class="breadcrumb-item active">Teams</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    {{-- Main Content --}}
    <section class="content">
        <div class="container lg-10">
            @include('layouts.partials.alerts')
            <div class="card">
                <div class="card-body overflow-auto">
                    <div class="row justify-content-center">
                        @foreach ($team_descriptions as $team_description)
                            <div class="col-lg-3 col-sm-6 mb-5" data-aos="zoom-in-left" data-aos-duration="1000"
                                data-aos-delay="100" data-aos-once="false">
                                <div class="card border-0 rounded-0 hover-shadow">
                                    <div class="card-img position-relative d-flex justify-content-center">
                                        <img class="card-img-top rounded-0"
                                            src="{{ asset('images/about/team/' . $team_description->team_image) }}"
                                            alt="event thumb" style="width: 260px; height: 250px; object-fit: cover;">
                                    </div>
                                    <div class="card-body text-center"
                                        style="display: flex; flex-direction: column; align-items: center; gap: 2px;">
                                        <p class="font-weight-bold" style="font-size: 13px; margin: 0;">
                                            {{ $team_description->team_name }}
                                        </p>
                                        <p class="font-weight-light" style="font-size: 11px; color: red; margin: 0;">
                                            {{ $team_description->team_position }}
                                        </p>
                                        <p class="font-weight-light"
                                            style="font-size: 10px; margin: 0; display: flex; align-items: center;">
                                            {{ $team_description->team_email }}
                                        </p>
                                    </div>
                                    <a class="btn btn-warning btn-xs activate-btn" href="javascript:void(0)"
                                        data-toggle="modal" data-target="#updateTeamModal-{{ $team_description->team_id }}">
                                        <span class="fa fa-plus"></span> Update
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="card-footer bg-light text-right">
                    <a class="btn btn-warning btn-sm activate-btn" href="javascript:void(0)" data-toggle="modal"
                        data-target="#addTeamModal">
                        <span class="fa fa-plus"></span> Add a Team
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Modal for Update Team --}}
    @foreach ($team_descriptions as $team_description)
        <div class="modal fade" id="updateTeamModal-{{ $team_description->team_id }}" tabindex="-1" role="dialog"
            aria-labelledby="updateNewsModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header d-flex justify-content-between align-items-center">
                        <h5 class="modal-title" id="updateNewsModalLabel">Update Information</h5>
                        <div class="d-flex align-items-center">
                            <form action="{{ url('admin/about/team/delete/' . $team_description->team_id) }}" method="POST"
                                enctype="multipart/form-data" class="mr-2">
                                @csrf
                                <button type="submit" class="btn btn-warning btn-sm"><span
                                        class="fa fa-trash"></span></button>
                            </form>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <form action="{{ url('admin/about/team/update/' . $team_description->team_id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="team_name">Title <span style="color:red;">*</span></label>
                                <input type="text" class="form-control" id="team_name" name="team_name"
                                    placeholder="Title" value="{{ $team_description->team_name }}" required />
                            </div>
                            <div class="form-group">
                                <label for="team_position">Title <span style="color:red;">*</span></label>
                                <input type="text" class="form-control" id="team_position" name="team_position"
                                    placeholder="Title" value="{{ $team_description->team_position }}" required />
                            </div>
                            <div class="form-group">
                                <label for="team_email">Title <span style="color:red;">*</span></label>
                                <input type="text" class="form-control" id="team_email" name="team_email"
                                    placeholder="Title" value="{{ $team_description->team_email }}" required />
                            </div>
                            <div class="form-group">
                                <label for="team_image">Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="team_image"
                                        accept=".jpg, .jpeg, .png" />
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                                <small id="fileHelp" class="form-text text-muted">Please upload a valid image file in jpg
                                    or
                                    png
                                    format. Size of image should not be more than 3MB.</small>
                            </div>
                            <div class="image-container"
                                style="width: 100%; height: 400px; display: flex; justify-content: center; align-items: center; overflow: hidden;">
                                <img src="{{ asset('images/about/team/' . $team_description->team_image) }}"
                                    alt="carousel-item-1" class="img-fluid"
                                    style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><span
                                    class="fa fa-close"></span> Close</button>
                            <button type="submit" class="btn btn-danger"><span class="fa fa-save"></span> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 200,
                styleWithSpan: false, // Ensures proper list styling
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']]
                ],
                callbacks: {
                    onInit: function() {
                        // Ensure lists have correct styles on initialization
                        $('.note-editable').find('ul').css('list-style-type', 'disc');
                        $('.note-editable').find('ol').css('list-style-type', 'decimal');
                    },
                    onBlur: function(e) {
                        // Apply styles only to existing lists instead of resetting content
                        $('.note-editable').find('ul').css('list-style-type', 'disc');
                        $('.note-editable').find('ol').css('list-style-type', 'decimal');
                    }
                }
            });
        });
    </script>

    <style>
        .card {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            flex-grow: 1;
        }
    </style>
@endsection