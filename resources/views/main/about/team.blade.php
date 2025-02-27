@extends('layouts.themes.main')
@section('content')
    <section class="section bg-grey">
        <div class="container lg-10">
            @include('layouts.partials.alerts')
            <!-- Title -->
            <div class="content-header text-center" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100"
                data-aos-once="false" style="margin-top: 100px;">
                <x-content-header title="MEET OUR TEAM" />
            </div>
            <!-- Breadcrumb -->
            <x-breadcrumb :items="[
                ['label' => 'Home', 'url' => url('/'), 'active' => false],
                ['label' => 'Our Team', 'url' => '#', 'active' => true],
            ]" />
            <div class="row justify-content-center">
                @foreach ($team_descriptions as $team_description)
                    <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0" data-aos="zoom-in-left" data-aos-duration="1000"
                        data-aos-delay="100" data-aos-once="false">
                        <div class="card border-0 rounded-0 hover-shadow">
                            <div class="card-img position-relative d-flex justify-content-center">
                                <img class="card-img-top rounded-0"
                                    src="{{ asset('images/about/team/' . $team_description->team_image) }}"
                                    alt="event thumb" style="width: 255px; height: 250px; object-fit: cover;">
                            </div>
                            <div class="card-body text-center"
                                style="display: flex; flex-direction: column; align-items: center; gap: 2px;">
                                <p class="font-weight-bold" style="font-size: 13px; margin: 0;">
                                    {{ $team_description->team_name }}
                                </p>
                                <p class="font-weight-light" style="font-size: 11px; color: red; margin: 0;">
                                    {{ $team_description->team_position }}
                                </p>
                                <p class="font-weight-light"
                                    style="font-size: 10px; margin: 0; display: flex; align-items: center;">
                                    <i class="ti-email text-primary mr-2"></i>: {{ $team_description->team_email }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <style>
        .card {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            flex-grow: 1;
        }
    </style>
@endsection