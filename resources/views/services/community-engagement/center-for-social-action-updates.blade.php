@extends('layouts.themes.main')
@section('content')
    <section class="section ">
        <div class="container">
            <div class="content-header" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100"
                data-aos-once="false" style="margin-top: 100px;">
                <x-content-header title="Center of Social Action Updates" />
            </div>
            <x-breadcrumb :items="[
                ['label' => 'Home', 'url' => route('home'), 'active' => false],
                ['label' => 'Center of Social Action Updates', 'url' => '#', 'active' => true],
            ]" />

            <div class="row align-items-center mb-5">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img class="align-center img-fluid" data-aos="zoom-in-right" data-aos-duration="1000"
                        data-aos-delay="100" data-aos-once="false"
                        src="{{ asset('images/community-engagement/soc-action-1.webp') }}"
                        alt="About the Center for Social Action">
                </div>
                <div class="col-md-6 mt-5 mb-4 mb-md-0">
                    <h3>
                        NEWSBIT | CMC Links with PESO
                        for its Livelihood Initiatives
                    </h3>
                    <p class="text-monospace text-justify mr-3" style="line-height: 1.5rem">
                        The CMC Center for Social Action had a meeting with the Public Employment Service Office (PESO)
                        Kidapawan on September 21, 2021, at PESO Kidapawan City Office.
                    </p>
                    <p class="text-monospace text-justify mr-3" style="list-style-type: disc; line-height: 1.5rem;">
                        The said meeting has aimed to creating sustainable livelihood initiatives benefiting the CMCs
                        adopted community – Barangay Sudapin.
                    </p>
                    <p class="text-monospace text-justify mr-3" style="list-style-type: disc; line-height: 1.5rem;">
                        Dr. Jaymie A. Rellon, CMC Community Extension and External Linkages Officer, spearheaded the
                        coordination meeting with the CMC College of Accountancy and Business Management Education (CABME),
                        Dean Dr. Maria Regina E. Carlos, together with the Public Employment Service Office (PESO) Kidapawan
                        City Manager, Ms. Herminia Infanta.
                    </p>
                    <p class="text-monospace text-justify mr-3" style="list-style-type: disc; line-height: 1.5rem;">
                        One of the highlights of the meeting was the inception of the livelihood program project for the
                        adopted communities. The said initiative will provide free livelihood starter kits and equipment to
                        CMCs beneficiaries to start a sustainable business that will be identified, monitored, and assessed
                        by the CMC Center for Social Action, CABME, and in partnership with the PESO Kidapawan Office.
                    </p>
                    <p class="text-monospace text-justify mr-3" style="list-style-type: disc; line-height: 1.5rem;">
                        The Public Employment Service Office (PESO) is a non-fee charging multi-dimensional employment
                        service facility or entity established in all Local Government Units (LGUs) in coordination with the
                        Department of Labor and Employment (DOLE) pursuant to R.A. No. 8759 or the PESO Act of 1999 as
                        amended by R.A. No. 10691. (ElbmuhEb | ICMC)
                    </p>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-md-6 mt-5 mb-4 mb-md-0">
                    <h3>
                        NEWSBIT | Kamustahan sa Barangay Sudapin
                    </h3>
                    <p class="text-monospace text-justify mr-3" style="line-height: 1.5rem">
                        True to Central Mindanao Colleges’ mission to engage in responsive extension programs, the CMC
                        Center for Social Action conducted an ocular visit to its adopted community on September 20, 2021,
                        at Barangay Sudapin Kidapawan City.
                    </p>
                    <p class="text-monospace text-justify mr-3" style="list-style-type: disc; line-height: 1.5rem;">
                        CMCs Community Extension and External Linkages Officer, Dr. Jaymie A. Rellon, has led the CMC team
                        during the barangay visit.
                    </p>
                    <p class="text-monospace text-justify mr-3" style="list-style-type: disc; line-height: 1.5rem;">
                        Along with the barangay officials and daycare workers, the said visit has identified the current
                        needs in the pandemic situation and community resources available to meet our partner’s needs and
                        specified gaps. Barangay Sudapin, led by Barangay Captian Jon Karl T. Sibug has also shared
                        significant issues in their community.
                    </p>
                    <p class="text-monospace text-justify mr-3" style="list-style-type: disc; line-height: 1.5rem;">
                        Barangay Sudapin has been a partner community of CMC since the inception and realization of CMC-CSA
                        in 2015. During the onsite visit, health and safety protocols were observed. (ElbmuhEb | ICMC)
                    </p>
                </div>
                <div class="col-md-6 mb-4 mb-md-0">
                    <img class="align-center img-fluid" data-aos="zoom-in-right" data-aos-duration="1000"
                        data-aos-delay="100" data-aos-once="false"
                        src="{{ asset('images/community-engagement/soc-action-2.webp') }}"
                        alt="About the Center for Social Action">
                </div>
            </div>

        </div>
    </section>
@endsection
