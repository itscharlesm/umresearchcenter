@extends('admin.themes.layouts.main')
@section('content')
    {{-- Content Header --}}
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">INSTITUTE OF SOCIAL WELFARE AND HUMAN DEVELOPMENT STUDIES</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ action('App\Http\Controllers\AdminController@home') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Institutes</li>
                        <li class="breadcrumb-item active">Social Welfare and Human Development Studies</li>
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
                    <div class="row">
                        @foreach ($soc_description as $soc)
                            <div class="col-md-12">
                                <div class="card mb-3 shadow-sm border rounded">
                                    <div class="card-header bg-light text-white">
                                        <h5 class="mb-0">Description:</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">{!! $soc->soc_description !!}</p>
                                    </div>
                                    <div class="card-footer bg-light text-right">
                                        <a class="btn btn-warning btn-sm activate-btn" href="javascript:void(0)"
                                            data-toggle="modal" data-target="#updateDescriptionModal-{{ $soc->soc_id }}">
                                            <span class="fa fa-edit"></span> Update
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal for Social -->
                            <div class="modal fade" id="updateDescriptionModal-{{ $soc->soc_id }}" tabindex="-1"
                                role="dialog" aria-labelledby="updateDescriptionModal" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Update Description</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ url('admin/institute/social/update/' . $soc->soc_id) }}"
                                                method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="soc_description">Description:</label>
                                                    <textarea class="form-control summernote" name="soc_description">{!! $soc->soc_description !!}</textarea>
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
                    ['insert', ['link']],
                    ['insert', ['picture']],
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