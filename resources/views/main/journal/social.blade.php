@extends('layouts.themes.main')
@section('content')
    <section class="section bg-grey">
        <div class="container lg-10">
            @include('layouts.partials.alerts')
            <!-- Title -->
            <div class="content-header text-center" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100"
                data-aos-once="false" style="margin-top: 100px;">
                <x-content-header title="JSWHDS - UPCOMING" />
            </div>
            <!-- Breadcrumb -->
            <x-breadcrumb :items="[
                ['label' => 'Home', 'url' => url('/'), 'active' => false],
                ['label' => 'Journals', 'url' => '#', 'active' => true],
                ['label' => 'JSWHDS', 'url' => '#', 'active' => true],
            ]" />
            <div class="row">
                <!-- Attachments -->
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Journal of Social Welfare and Human Development Studies (JSWHDS) - upcoming...</h2>
                        <div>
                            {!! $soc_description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection