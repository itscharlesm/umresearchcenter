@extends('layouts.themes.main')
@section('content')
    <div class="container lg-10"> {{-- Changed from .container lg-10 to .container-fluid --}}
        <div class="content-header text-center" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100"
            data-aos-once="false" style="margin-top: 150px;">
            <x-content-header title="Academic Departments" />
        </div>

        <x-breadcrumb :items="[
            ['label' => 'Home', 'url' => route('home'), 'active' => false],
            ['label' => 'Academic Departments', 'url' => '#', 'active' => true],
        ]" />

        <div class="row">
            @if ($departments->isEmpty())
                <div class="col-12">
                    <div class="card h-100 shadow-sm text-center p-4">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">No Data Available</h5>
                            <p class="card-text text-muted">There are no departments to display at the moment.
                            </p>
                        </div>
                    </div>
                </div>
            @else
                @foreach ($departments as $content)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm text-center border-0">
                            <div class="card-header bg-white border-0">
                                <img src="{{ $content->dept_image ? asset('images/department-images/' . $content->dept_image) : asset('images/default-img.png') }}"
                                    class="card-img-top img-fluid mx-auto" alt="{{ $content->dept_name }}">
                            </div>

                            <div class="card-body">
                                <p class=" mb-3">{{ $content->dept_name }}</p>
                                <a href="#" class="btn btn-sm btn-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
