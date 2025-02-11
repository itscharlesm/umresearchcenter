@extends('layouts.themes.main')
@section('content')
    <section class="section">
        <div class="container ">
            <div data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100" data-aos-once="false"
                style="margin-top: 100px">
                <x-content-header title="Institutional Learning Outcomes" />
            </div>
            <x-breadcrumb :items="[
                ['label' => 'Home', 'url' => route('home'), 'active' => false],
                ['label' => 'Institutional Learning Outcomes', 'url' => '#', 'active' => true],
            ]" />
            <div class="row align-items-center">
                <div class="col-md-12 order-1 order-md-2 mb-4 mb-md-0 mt-5">
                    <img class="img-fluid w-100" src="{{ asset('images/about/outcomes.webp') }}" alt="about image">
                </div>
            </div>
        </div>
    </section>
@endsection
