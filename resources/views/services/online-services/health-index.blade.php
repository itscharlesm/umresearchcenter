@extends('layouts.themes.main')
@section('content')
    <div class="container lg-10"> {{-- Changed from .container lg-10 to .container-fluid --}}
        <div class="content-header text-center" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100"
            data-aos-once="false" style="margin-top: 150px;">
            <x-content-header title="Health Services" />
        </div>

        <x-breadcrumb :items="[
            ['label' => 'Home', 'url' => route('home'), 'active' => false],
            ['label' => 'Health Services', 'url' => '#', 'active' => true],
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
                    <div class="col-md-12 mb-4">
                        <div class="card h-100 shadow-sm">

                            <div class="card-body">
                                <h5 class="card-title">{{ $content->hlt_title }}</h5>
                                <p class="card-text mr-3">
                                    {!! $content->hlt_desc !!}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
