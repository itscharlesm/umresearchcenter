@extends('admin.themes.layouts.main')
@section('content')
    {{-- Content Header --}}
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Agenda and Priority</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ action('App\Http\Controllers\AdminController@home') }}">Home</a>
                        <li class="breadcrumb-item active">Agenda and Priority</li>
                        </li>
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
                    <table class="table table-hover table-striped table-sm responsive">
                        <thead>
                            <tr>
                                <th style="text-align: center; vertical-align: middle">Agenda</th>
                                <th style="text-align: center; vertical-align: middle">Priority</th>
                                <th style="text-align: center; vertical-align: middle; width: 100px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($agpr_descriptions as $agpr)
                                <tr style="vertical-align: middle;">
                                    <td style="vertical-align: middle;">{!! $agpr->agpr_agenda !!}</td>
                                    <td style="vertical-align: middle;">{!! $agpr->agpr_priority !!}</td>
                                    <td style="vertical-align: middle;">
                                        <a class="btn btn-warning btn-sm activate-btn" href="javascript:void(0)"
                                            data-toggle="modal" data-target="#updateDescriptionModal-">
                                            <span class="fa fa-edit"></span> Update
                                        </a>
                                    </td>
                                    <div class="modal fade" id="updateDescriptionModal-" tabindex="-1" role="dialog"
                                        aria-labelledby="updateDescriptionModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="updateDescriptionModalLabel">Update Descriptions</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form
                                                        action="{{ url('admin/about/agenda-priority/update/' . $agpr->agpr_id) }}"
                                                        method="POST">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="agpr_agenda">Agenda Description:</label>
                                                                    <textarea class="form-control summernote" name="agpr_agenda">{!! $agpr->agpr_agenda !!}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="agpr_priority">Priority Description:</label>
                                                                    <textarea class="form-control summernote" name="agpr_priority">{!! $agpr->agpr_priority !!}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal"><span class="fa fa-close"></span>
                                                            Close</button>
                                                        <button type="submit" class="btn btn-danger"><span
                                                                class="fa fa-save"></span> Update</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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