@extends('layouts.themes.main')
@section('content')
    <section class="section bg-grey">
        <div class="container lg-10">
            <!-- Title -->
            <div class="content-header text-center" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100"
                data-aos-once="false" style="margin-top: 100px;">
                <x-content-header title="CGNIES" />
            </div>
            <!-- Breadcrumb -->
            <x-breadcrumb :items="[
                ['label' => 'Home', 'url' => url('/'), 'active' => false],
                ['label' => 'Centers', 'url' => '#', 'active' => true],
                [
                    'label' => 'Green Nanotechnology Innovations for Environmental Solutions (CGNIES)',
                    'url' => '#',
                    'active' => true,
                ],
            ]" />
            <div class="row">
                <!-- Attachments -->
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Center of Green Nanotechnology Innovations for Environmental Solutions (CGNIES)</h2>
                        <p class="font-weight-light text-justify">
                            BACKEND
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection