@extends('layouts.themes.main')
@section('content')
    <section class="section bg-grey">
        <div class="container lg-10">
            <!-- Title -->
            <div class="content-header text-center" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100"
                data-aos-once="false" style="margin-top: 100px;">
                <x-content-header title="INSTITUTE OF BIODIVERSITY AND ENVIRONMENT STUDIES" />
            </div>
            <!-- Breadcrumb -->
            <x-breadcrumb :items="[
                ['label' => 'Home', 'url' => url('/'), 'active' => false],
                ['label' => 'Institutes', 'url' => '#', 'active' => true],
                ['label' => 'Biodiversity and Environment Studies', 'url' => '#', 'active' => true],
            ]" />
            <div class="row">
                <!-- Attachments -->
                <div class="col-lg-12">
                    <div class="section-title">
                        <p class="font-weight-light text-justify">
                            The University of Mindanao Institute for Biodiversity and Environment (UMIBE) is one of the
                            research institutes of the University of Mindanao Research and Publication Center (UMRPC) based
                            in Matina Campus, Davao City Philippines that focuses on conducting basic and applied researches
                            in the field of natural science. Since its establishment in 2017, UMIBE has been involved in
                            various research and conservation activities in the region with both local and international
                            grants. The institute is manned with highly skilled and qualified team members and experts in
                            the fields of Taxonomy, Ecology, Environmental Education, Environmental Science, and
                            Conservation Science. For more information please email at
                            <em><strong>mnd_medina@umindanao.edu.ph</strong></em>
                        </p>
                    </div>
                </div>
            </div>
    </section>
@endsection