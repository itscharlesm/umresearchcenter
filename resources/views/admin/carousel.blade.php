@extends('admin.themes.layouts.main')
@section('content')
    {{-- Content Header --}}
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Carousel</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ action('App\Http\Controllers\AdminController@home') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Carousel</li>
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
                <div class="card-header bg-warning">
                    List of images in the homepage
                </div>
                <div class="card-body overflow-auto">
                    <table class="table table-hover table-striped table-sm responsive">
                        <thead>
                            <tr>
                                <th style="text-align: center; vertical-align: middle">Image</th>
                                <th style="text-align: center; vertical-align: middle; width: 100px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($messages as $con)
                                <tr style="text-align: center; vertical-align: middle;">
                                    <td style="vertical-align: middle;"></td>
                                    <td style="vertical-align: middle;">
                                        <a class="btn btn-danger btn-sm activate-btn" href="javascript:void(0)"
                                            data-toggle="modal"
                                            data-target="#updateImageModalLabel">
                                            <span class="fa fa-eye"></span> View
                                        </a>
                                    </td>
                                    <div class="modal fade" id="updateImageModal"
                                        tabindex="-1" role="dialog" aria-labelledby="updateImageModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="updateImageModalLabel">Update
                                                        Description</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form
                                                        action=""
                                                        method="POST">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="cour_image">Image:</label>
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
@endsection