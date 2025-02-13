@extends('layouts.themes.main')
@section('content')
    <section class="section ">
        <div class="container">
            <div class="content-header" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100"
                data-aos-once="false" style="margin-top: 150px">
                <x-content-header title="About CMC" />
            </div>
            <x-breadcrumb :items="[
                ['label' => 'Home', 'url' => url('/'), 'active' => false],
                ['label' => 'About CMC', 'url' => '#', 'active' => true],
            ]" />
            <div class="col-md-12 order-2 order-md-2 mt-5">
                <p class="text-justify">
                    <b>CENTRAL MINDANAO COLLEGES</b> demonstrates an unwavering commitment to achieving excellence in all
                    facets of its academic pursuits. The institution focuses on shaping graduates who embody its core
                    values, fostering innovation throughout academic programs to encourage creativity.
                </p>
                <p class="text-justify">
                    Additionally, the college prioritizes creating an enabling environment to maximize employee
                    productivity, contributing not only to staff development but also to the overall success of the
                    institution. Aligned with its strategic vision, CMC is dedicated to securing a stable financial future,
                    implementing sound financial practices to support its mission and goals.
                </p>
            </div>
        </div>
    </section>
@endsection
