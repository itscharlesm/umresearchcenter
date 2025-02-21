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
                        <li class="breadcrumb-item active">Images</li>
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
                    <div class="container">
                        <div class="row">
                            @foreach ($carousel as $index => $cour)
                                <div class="col-md-4 mb-4 d-flex justify-content-center">
                                    <div class="card" style="width: 18rem;">
                                        <img src="{{ asset('images/carousel/' . $cour->cour_image) }}" class="card-img-top" alt="Image">
                                        <div class="card-body text-center">
                                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#updateImageModal{{ $index }}">
                                                <span class="fa fa-edit"></span> Update
                                            </button>
                                        </div>
                                    </div>
                                </div>
                
                                <!-- Modal for updating image -->
                                <div class="modal fade" id="updateImageModal{{ $index }}" tabindex="-1" role="dialog" aria-labelledby="updateImageModalLabel{{ $index }}" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Update Image</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="POST">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="cour_image">Select New Image:</label>
                                                        <input type="file" class="form-control" name="cour_image">
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
                
                                @if (($index + 1) % 3 == 0) 
                                    </div><div class="row">
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>                                
            </div>
        </div>
    </section>
@endsection