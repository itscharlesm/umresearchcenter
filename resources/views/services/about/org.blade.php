@extends('layouts.themes.main')
@section('content')
    <section class="section ">
        <div class="container">
            <div class="content-header" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100"
                data-aos-once="false" style="margin-top: 150px">
                <x-content-header title="School Organizational Structure" />
            </div>
            <x-breadcrumb :items="[
                ['label' => 'Home', 'url' => url('/'), 'active' => false],
                ['label' => 'About', 'url' => '#', 'active' => true],
                ['label' => 'School Organizational Structure', 'url' => '#', 'active' => true],
            ]" />
            <div class="row align-items-center">
                <div class="col-md-12 mb-4 mb-md-0">
                    <img class="img-fluid w-100 align-center" data-aos="zoom-in-right" data-aos-duration="1000"
                        data-aos-delay="100" data-aos-once="false"
                        src="{{ asset('images/about/school_org_structure_cmc.webp') }}" alt="organization">
                </div>
            </div>
        </div>
    </section>
@endsection
