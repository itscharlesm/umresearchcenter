@extends('layouts.themes.main')
@section('content')
    <section class="section ">
        <div class="container">
            <div class="content-header" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100"
                data-aos-once="false" style="margin-top: 150px">
                <x-content-header title=" Faculty Researches" />
            </div>
            <x-breadcrumb :items="[
                ['label' => 'Home', 'url' => route('home'), 'active' => false],
                [
                    'label' => ' Faculty Researches',
                    'url' => '#',
                    'active' => true,
                ],
            ]" />
            <div class="row align-items-center mt-5">
                <article class="col-md-6 mb-4 mb-md-0">
                    <a href="#">
                        <img class="img-fluid" data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="100"
                            data-aos-once="false" src="{{ asset('images/research/akademia-1.webp') }}"
                            alt="akademia faculty 1">
                    </a>
                </article>
                <article class="col-md-6 mb-4 mb-md-0">
                    <a href="#">
                        <img class="img-fluid" data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="100"
                            data-aos-once="false" src="{{ asset('images/research/akademia-2.webp') }}"
                            alt="akademia faculty 2">
                    </a>
                </article>
            </div>
        </div>
    </section>
@endsection
