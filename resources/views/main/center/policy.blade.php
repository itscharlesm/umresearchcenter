@extends('layouts.themes.main')
@section('content')
    <section class="section bg-grey">
        <div class="container lg-10">
            @include('layouts.partials.alerts')
            <!-- Title -->
            <div class="content-header text-center" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100"
                data-aos-once="false" style="margin-top: 100px;">
                <x-content-header title="UM PPC" />
            </div>
            <!-- Breadcrumb -->
            <x-breadcrumb :items="[
                ['label' => 'Home', 'url' => url('/'), 'active' => false],
                ['label' => 'Centers', 'url' => '#', 'active' => true],
                [
                    'label' => 'UM Public Policy Center',
                    'url' => '#',
                    'active' => true,
                ],
            ]" />
            <div class="row">
                <!-- Attachments -->
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>UM Public Policy Center</h2>
                        <div>
                            {!! $pol_description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection