@extends('admin.themes.layouts.main')
@section('content')
    {{-- Content Header --}}
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Manage News</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ action('App\Http\Controllers\AdminController@home') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Publications</li>
                        <li class="breadcrumb-item active">News</li>
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
                            <span class="bg-warning"><i class="fa fa-bullhorn"></i> News</span>
                            @if (session('usr_type') != 3)
                                <a class="btn btn-warning float-right" href="javascript:void(0)" data-toggle="modal"
                                    data-target="#newAnnouncementModal"><i class="fa fa-comment"></i> Compose</a>
                            @endif
                        </div>
                        @foreach ($news_descriptions as $news_description)
                            <div>
                                <i class="fas fa-newspaper bg-yellow"></i>
                                <div class="timeline-item">
                                    <span class="time"><i class="fas fa-clock"></i>
                                        {{ \Carbon\Carbon::parse($news_description->news_date_created)->diffForHumans() }}</span>
                                    <h3 class="timeline-header">{{ $news_description->news_title }}</h3>
                                    <div class="timeline-body">
                                        @if ($news_description->news_image != '')
                                            <div class="thumbnail">
                                                <a href="{{ asset('images/news/' . $news_description->news_image) }}">
                                                    <img src="{{ asset('images/news/' . $news_description->news_image) }}"
                                                        alt="" style="width:100%">
                                                </a>
                                                <div class="caption">
                                                    <p>{{ $news_description->news_content }}</p>
                                                </div>
                                            </div>
                                        @else
                                            <p>{{ $news_description->news_content }}</p>
                                        @endif
                                    </div>
                                    @if (session('usr_type') != 3)
                                        <div class="timeline-footer">
                                            <a class="btn btn-danger btn-sm"
                                                href="{{ action('App\Http\Controllers\AnnouncementController@delete', [$news_description->news_uuid]) }}"><i
                                                    class="fa fa-trash"></i> Delete</a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Modal for Creating New Announcement --}}
    <div class="modal fade" id="newAnnouncementModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create New Announcement</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ action('App\Http\Controllers\AnnouncementController@save') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="news_title">Title <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" id="news_title" name="news_title" placeholder="Title"
                                required />
                        </div>
                        <div class="form-group">
                            <label for="news_content">Message Content <span style="color:red;">*</span></label>
                            <textarea class="form-control" id="news_content" name="news_content" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="custom-file">
                                <label for="news_image">Image</label>
                                <input type="file" class="custom-file-input" id="customFile" name="news_image" />
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

    <script>
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
@endsection