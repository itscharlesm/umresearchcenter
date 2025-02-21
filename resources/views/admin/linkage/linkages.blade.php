@extends('admin.themes.layouts.main')
@section('content')
    {{-- Content Header --}}
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">INSTITUTE OF BIODIVERSITY AND ENVIRONMENT STUDIES</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ action('App\Http\Controllers\AdminController@home') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Institutes</li>
                        <li class="breadcrumb-item active">Biodiversity and Environment Studies</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    {{-- Main Content --}}
    <section class="content">
        <div class="container-fluid">
            @include('layouts.partials.alerts')
            <div class="card">
                <div class="card-body overflow-auto">
                    <div class="card-body overflow-auto">
                        <div class="row">
                            @foreach ($linkages_description as $link)
                                <div class="col-md-6">
                                    <div class="card mb-3 shadow-sm border rounded">
                                        <div class="card-header bg-light text-white">
                                            <h5 class="mb-0">Local and National Linkages</h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">{!! $link->link_local !!}</p>
                                        </div>
                                        <div class="card-footer bg-light text-right">
                                            <a class="btn btn-warning btn-sm activate-btn" href="javascript:void(0)"
                                                data-toggle="modal" data-target="#updateLocalModal-{{ $link->link_id }}">
                                                <span class="fa fa-edit"></span> Update
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card mb-3 shadow-sm border rounded">
                                        <div class="card-header bg-light text-white">
                                            <h5 class="mb-0">International Linkages</h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">{!! $link->link_international !!}</p>
                                        </div>
                                        <div class="card-footer bg-light text-right">
                                            <a class="btn btn-warning btn-sm activate-btn" href="javascript:void(0)"
                                                data-toggle="modal"
                                                data-target="#updateInternationalModal-{{ $link->link_id }}">
                                                <span class="fa fa-edit"></span> Update
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal for Local and National Linkages -->
                                <div class="modal fade" id="updateLocalModal-{{ $link->link_id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="updateLocalModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Update Local and National Linkages</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="POST">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="link_local">Local and National Linkages:</label>
                                                        <textarea class="form-control summernote" name="link_local">{!! $link->link_local !!}</textarea>
                                                    </div>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                        <span class="fa fa-close"></span> Close
                                                    </button>
                                                    <button type="submit" class="btn btn-danger">
                                                        <span class="fa fa-save"></span> Update
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal for International Linkages -->
                                <div class="modal fade" id="updateInternationalModal-{{ $link->link_id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="updateInternationalModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Update International Linkages</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="POST">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="link_international">International Linkages:</label>
                                                        <textarea class="form-control summernote" name="link_international">{!! $link->link_international !!}</textarea>
                                                    </div>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                        <span class="fa fa-close"></span> Close
                                                    </button>
                                                    <button type="submit" class="btn btn-danger">
                                                        <span class="fa fa-save"></span> Update
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
@endsection