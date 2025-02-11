@extends('layouts.themes.main')
@section('content')
    <section class="section ">
        <div class="container">
            <div class="content-header" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100"
                data-aos-once="false" style="margin-top: 100px;">
                <x-content-header title="About the Center for Social Action" />
            </div>
            <x-breadcrumb :items="[
                ['label' => 'Home', 'url' => route('home'), 'active' => false],
                ['label' => 'About the Center for Social Action', 'url' => '#', 'active' => true],
            ]" />
            <div class="col-md-12 mb-4 mb-md-0">
                <img class="align-center img-fluid" data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="100"
                    data-aos-once="false" src="{{ asset('images/community-engagement/community-engagement-cmc.webp') }}"
                    alt="About the Center for Social Action">

            </div>
            <div class="col-md-12 mt-5 mb-4 mb-md-0">
                <p class="text-monospace text-justify mr-3" style="line-height: 1.5rem">
                    Central Mindanao Colleges, through the Center for Social Action Office, aims to share the
                    institution’s academic resources and intellectual expertise in upholding social awareness and
                    responsiveness, to encourage productive and self-reliant action geared towards change in the
                    socio-economic condition of the people, to support holistic human development and to push further
                    the promotion of environmental sustainability and expand internal and external linkages.
                </p>
                <p class="text-monospace text-justify mr-3" style="list-style-type: disc; line-height: 1.5rem;">
                    CMC CARES: Collaborative Action and Responsive Extension Services is aligned with our school
                    objectives in Upholding social awareness, improving the socio-economic conditions of the Community,
                    and promoting environmental sustainability by initiating the development and implementation of
                    socially responsive programs.
                </p>
                <h3>
                    CONTACT INFORMATION
                </h3>
                <p><b> Dr. Jaymie A. Rellon</b> – Community Extension and External Affairs Officer</p>
                <p class="text-bold">
                    Email: cmccsa.1947@gmail.com
                </p>
            </div>

        </div>
    </section>
@endsection
