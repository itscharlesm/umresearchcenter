@extends('admin.layouts.themes.main')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h2 class="mb-0">Admission Content Management</h2>
                <button class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#addContent">
                    <i class="mdi mdi-plus-circle"></i> Add Content
                </button>
            </div>
            {{-- dili daw ni e table --}}
            <div class="card-body">
                <form method="GET" action="{{ route('admin.admission') }}">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <input type="text" id="searchContent" name="search" value="{{ request('search') }}"
                                class="form-control" placeholder="Search by title or content..."
                                oninput="this.form.submit()">
                        </div>
                        <div class="col-md-4">
                            <select id="filterType" name="filterType" class="form-control" onchange="this.form.submit()">
                                <option value="">-- Filter by Type --</option>
                                @foreach ($ractypes as $ractype)
                                    <option value="{{ $ractype->rac_type_id }}"
                                        {{ request('filterType') == $ractype->rac_type_id ? 'selected' : '' }}>
                                        {{ $ractype->rac_type_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </form>


                <div class="row">
                    @foreach ($contents as $content)
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 shadow-sm">

                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold">{{ $content->rac_title }}</h5>
                                    <p class="card-text">{!! $content->rac_content !!}</p><br>
                                    <p class=" text-muted">
                                        <strong>Date:</strong>
                                        {{ \Carbon\Carbon::parse($content->rac_created_at)->format('F d, Y') }}<br>
                                        <strong>Type:</strong> {{ $content->rac_type_name ?? 'N/A' }}<br>
                                        <strong>Status:</strong>
                                        <span class="badge badge-{{ $content->rac_status ? 'success' : 'secondary' }}">
                                            {{ $content->rac_status ? 'Activated' : 'Deactivated' }}
                                        </span><br>
                                        <strong>Published by:</strong> {{ $content->usr_first_name }}
                                        {{ $content->usr_last_name }}
                                    </p>
                                </div>
                                <div class="card-footer bg-light d-flex justify-content-between">
                                    <button class="btn btn-sm btn-primary"><i class="mdi mdi-pencil"></i> Edit</button>
                                    <button class="btn btn-sm btn-{{ $content->rac_status ? 'danger' : 'success' }}">
                                        {{ $content->rac_status ? 'Deactivate' : 'Activate' }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    {{-- Add Content Modal --}}
    <div class="modal fade" id="addContent" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Add Content</h3>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('admin/admissions/create') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Content Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="rac_title" required>
                        </div>
                        <div class="form-group">
                            <label>Content Description <span class="text-danger">*</span></label>
                            <textarea class="summernote" name="rac_content" rows="4" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Content Type</label>
                            <select class="form-control" name="rac_type_id">
                                <option value="">-- Select Type --</option>
                                @foreach ($ractypes as $ractype)
                                    <option value="{{ $ractype->rac_type_id }}">{{ $ractype->rac_type_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('.summernote').summernote({
            tabsize: 2,
            height: 120
        });

        document.getElementById('searchContent').addEventListener('input', function() {
            let searchValue = this.value.toLowerCase();
            let contents = document.querySelectorAll('.content-item');

            contents.forEach(content => {
                let title = content.getAttribute('data-title');
                content.style.display = title.includes(searchValue) ? 'block' : 'none';
            });
        });

        document.getElementById('filterType').addEventListener('change', function() {
            let filterValue = this.value;
            let contents = document.querySelectorAll('.content-item');

            contents.forEach(content => {
                let type = content.getAttribute('data-type');
                content.style.display = (filterValue === '' || type === filterValue) ? 'block' : 'none';
            });
        });
    </script>
@endsection
