@extends('layouts.themes.main')
@section('content')
    <section class="section ">
        <div class="container">
            <div class="content-header" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100"
                data-aos-once="false" style="margin-top: 100px;">
                <x-content-header title="Publications" />
            </div>
            <x-breadcrumb :items="[
                ['label' => 'Home', 'url' => route('home'), 'active' => false],
                [
                    'label' => 'Publications',
                    'url' => '#',
                    'active' => true,
                ],
            ]" />

            <div class="row align-content-center">
                <div class="col-md-6 mt-5 mb-4 mb-md-0">
                    <img class="align-center img-fluid" data-aos="zoom-in-right" data-aos-duration="1000"
                        data-aos-delay="100" data-aos-once="false"
                        src="{{ asset('images/community-engagement/soc-action-1.webp') }}"
                        alt="About the Center for Social Action">
                </div>
                <div class="col-md-6 mt-5 mb-4 mb-md-0">
                    <img class="align-center img-fluid" data-aos="zoom-in-right" data-aos-duration="1000"
                        data-aos-delay="100" data-aos-once="false"
                        src="{{ asset('images/community-engagement/soc-action-2.webp') }}"
                        alt="About the Center for Social Action">
                </div>
            </div>

        </div>
    </section>
@endsection
