@extends('admin.themes.layouts.main')
@section('content')
    {{-- Content Header --}}
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Manage IPO Press Release</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ action('App\Http\Controllers\AdminController@home') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Publications</li>
                        <li class="breadcrumb-item active">IPO</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    {{-- Main Content --}}
    <section class="content">
        <div class="container-fluid">
            @include('layouts.partials.alerts')
            <div class="row">
                <div class="col-md-12">
                    <div class="timeline">
                        <div class="time-label">
                            <span class="bg-warning"><i class="fa fa-bullhorn"></i> IPO</span>
                            <a class="btn btn-warning float-right" href="javascript:void(0)" data-toggle="modal"
                                data-target="#createIPOModal"><i class="fa fa-comment"></i> Compose</a>
                        </div>
                        @foreach ($ipo_releases as $ipo_release)
                            <div>
                                <i class="fas fa-newspaper bg-red"></i>
                                <div class="timeline-item">
                                    <span class="time"><i class="fas fa-clock"></i>
                                        {{ \Carbon\Carbon::parse($ipo_release->ipo_date_created)->diffForHumans() }}</span>
                                    <h3 class="timeline-header">{{ $ipo_release->ipo_title }}</h3>
                                    <div class="timeline-body">
                                        @if ($ipo_release->ipo_image != '')
                                            <div class="thumbnail">
                                                <a href="{{ asset('images/ipo/' . $ipo_release->ipo_image) }}">
                                                    <img src="{{ asset('images/ipo/' . $ipo_release->ipo_image) }}"
                                                        alt="" style="width:100%">
                                                </a>
                                                <hr>
                                                <div class="caption">
                                                    <p>{!! $ipo_release->ipo_content !!}</p>
                                                </div>
                                            </div>
                                        @else
                                            <p>{!! $ipo_release->ipo_content !!}</p>
                                        @endif
                                    </div>
                                    <div class="timeline-footer">
                                        <a class="btn btn-secondary btn-sm activate-btn" href="javascript:void(0)"
                                            data-toggle="modal" data-target="#updateIPOModal-{{ $ipo_release->ipo_id }}">
                                            <span class="fa fa-edit"></span> Update
                                        </a>
                                        <form action="{{ url('admin/publications/ipo/delete/' . $ipo_release->ipo_id) }}"
                                            method="POST" style="display:inline;">
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Modal for Creating IPO --}}
    <div class="modal fade" id="createIPOModal" tabindex="-1" role="dialog" aria-labelledby="createIPOModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createIPOModalLabel">Create IPO Press Release</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('admin/publications/ipo/create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="ipo_title">Title <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" id="ipo_title" name="ipo_title" placeholder="Title"
                                required />
                        </div>
                        <div class="form-group">
                            <label for="ipo_content">Message Content <span style="color:red;">*</span></label>
                            <textarea class="form-control summernote" id="ipo_content" name="ipo_content"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="ipo_image">Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="ipo_image"
                                    accept=".jpg, .jpeg, .png" />
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                            <small id="fileHelp" class="form-text text-muted">Please upload a valid image file in jpg or
                                png
                                format. Size of image should not be more than 3MB.</small>
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

    {{-- Modal for Updated IPO --}}
    @foreach ($ipo_releases as $ipo_release)
        <div class="modal fade" id="updateIPOModal-{{ $ipo_release->ipo_id }}" tabindex="-1" role="dialog"
            aria-labelledby="updateIPOModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateIPOModalLabel">Update IPO Press Release</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ url('admin/publications/ipo/update/' . $ipo_release->ipo_id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="ipo_title">Title <span style="color:red;">*</span></label>
                                <input type="text" class="form-control" id="ipo_title" name="ipo_title"
                                    placeholder="Title" value="{{ $ipo_release->ipo_title }}" required />
                            </div>
                            <div class="form-group">
                                <label for="ipo_content">Message Content <span style="color:red;">*</span></label>
                                <textarea class="form-control summernote" id="ipo_content" name="ipo_content">{{ $ipo_release->ipo_content }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="ipo_image">Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="ipo_image"
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
                                <img src="{{ asset('images/ipo/' . $ipo_release->ipo_image) }}" alt="carousel-item-1"
                                    class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
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
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>

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