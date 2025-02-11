@extends('layouts.themes.main')
@section('content')
    <div class="container lg-10"> {{-- Changed from .container lg-10 to .container-fluid --}}
        <div class="content-header text-center" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100"
            data-aos-once="false" style="margin-top: 150px;">
            <x-content-header title="Admission" />
        </div>

        <x-breadcrumb :items="[
            ['label' => 'Home', 'url' => route('home'), 'active' => false],
            ['label' => 'Admission', 'url' => '#', 'active' => true],
        ]" />

        <div class="row">
            {{-- Sidebar - Full width on small screens, 3 columns on medium and up --}}
            <div class="col-12 col-md-3 mb-3">
                <x-admission-sidebar activePage="requirements" />
            </div>

            {{-- Accordion Section - Full width on small screens, 9 columns on medium and up --}}
            <div class="col-12 col-md-9">
                <h3>
                    Admission Requirements
                </h3>
                <div class="accordion" id="accordionExample">
                    @foreach ($contents as $index => $content)
                        <div class="card mb-3">
                            <div class="card-header" style="background: #1a1a37;" id="heading{{ $index }}">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left w-100"
                                        style="color: #ffbc3b; font-size: 1rem; text-align: left;" type="button"
                                        data-toggle="collapse" data-target="#collapse{{ $index }}"
                                        aria-expanded="true" aria-controls="collapse{{ $index }}">
                                        {{ $content->rac_title }}
                                    </button>
                                </h2>
                            </div>

                            <div id="collapse{{ $index }}"
                                class="collapse @if ($loop->first) show @endif"
                                aria-labelledby="heading{{ $index }}" data-parent="#accordionExample">
                                <div class="card-body">
                                    {!! $content->rac_content !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
