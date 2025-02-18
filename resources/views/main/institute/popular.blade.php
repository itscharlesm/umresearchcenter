@extends('layouts.themes.main')
@section('content')
    <section class="section bg-grey">
        <div class="container lg-10">
            @include('layouts.partials.alerts')
            <!-- Title -->
            <div class="content-header text-center" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100"
                data-aos-once="false" style="margin-top: 100px;">
                <x-content-header title="INSTITUTE OF POPULAR OPINION" />
            </div>
            <!-- Breadcrumb -->
            <x-breadcrumb :items="[
                ['label' => 'Home', 'url' => url('/'), 'active' => false],
                ['label' => 'Institutes', 'url' => '#', 'active' => true],
                ['label' => 'Popular Opinion', 'url' => '#', 'active' => true],
            ]" />
            <div class="row">
                <!-- Attachments -->
                <div class="col-lg-12">
                    <div class="section-title">
                        <p class="font-weight-light text-justify">
                            The Institute for Popular Opinion (IPO) is the pioneering institute in Davao that makes use of
                            the academe as a reliable and impartial source of information on public opinion. IPO provides
                            timely, relevant and scientifically-drawn survey results on relevant issues that are of interest
                            to the people of Davao City. IPO has earned for the University a reputable research track record
                            as its survey results were utilized by various media outfits to advance social issues. IPO is
                            now recognized as the first and the only academic-based social weather station in Davao
                            City.<em><strong>
                                    For more information, please email malen_arquiza@umindanao.edu.ph</strong></em>
                        </p>
                    </div>
                </div>
            </div>
    </section>
@endsection