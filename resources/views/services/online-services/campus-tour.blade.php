@extends('layouts.themes.main')
@section('content')
    <div class="container lg-10"> {{-- Changed from .container lg-10 to .container-fluid --}}
        <div class="content-header text-center" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100"
            data-aos-once="false" style="margin-top: 150px;">
            <x-content-header title="Campus Tour" />
        </div>

        <x-breadcrumb :items="[
            ['label' => 'Home', 'url' => route('home'), 'active' => false],
            ['label' => 'Campus Tour', 'url' => '#', 'active' => true],
        ]" />

        <div class="row">
            @if ($contents->isEmpty())
                <div class="col-12">
                    <div class="card h-100 shadow-sm text-center p-4">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">No Data Available</h5>
                            <p class="card-text text-muted">There are no data to display at the moment.
                            </p>
                        </div>
                    </div>
                </div>
            @else
                @foreach ($contents as $content)
                    <div class="col-md-4 mb-4"> <!-- Adjust column size as needed -->
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset('images/contents/' . $content->fcl_image) }}"
                                class="card-img-top img-uniform" alt="{{ $content->fcl_location }}">
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{ $content->fcl_location }}
                                </h5>
                                <p class="card-text">
                                    {!! $content->fcl_details !!}
                                </p>
                            </div>

                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
<style>
    .img-uniform {
        height: 350px;
        object-fit: cover;
        width: 100%;
    }
</style>
