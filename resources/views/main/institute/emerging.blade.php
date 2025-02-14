@extends('layouts.themes.main')
@section('content')
    <section class="section bg-grey">
        <div class="container lg-10">
            <!-- Title -->
            <div class="content-header text-center" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100"
                data-aos-once="false" style="margin-top: 100px;">
                <x-content-header title="EMERGING TECHNOLOGIES AND GREEN INNOVATION STUDIES" />
            </div>
            <!-- Breadcrumb -->
            <x-breadcrumb :items="[
                ['label' => 'Home', 'url' => url('/'), 'active' => false],
                ['label' => 'Institutes', 'url' => '#', 'active' => true],
                ['label' => 'Emerging Technologies and Green Innovation Studies', 'url' => '#', 'active' => true],
            ]" />
            <div class="row">
                <!-- Attachments -->
                <div class="col-lg-12">
                    <div class="section-title">
                        <p class="font-weight-light text-justify">
                            The institute of emerging technologies (IET) focuses on developing technologies that are
                            essential to the community’s progress. Three colleges are working towards this research focus:
                            College of Engineering Education, College of Computing Education, College of Architecture and
                            Fine Arts Education (CAFAE). IET also prides itself in establishing research centers/offices
                            funded by the Department of Science and Technology (DOST) to aid in developing and protecting
                            the intellectual properties of innovative technologies. They are as follows:
                        </p>
                        <p class="font-weight-light text-justify">
                            The <strong>University of Mindanao as Environmental Solutions (UMasenso) Hub</strong> is the University’s Technology Business Incubator established in August 2019. The Hub is assisted by the Department of Science and Technology Philippine Council for Industry, Energy and Emerging Technology Research and Development (DOST-PCIEERD) through its Higher Education Institution Readiness for Innovation and Technopreneurship (HEIRIT) program. Its main objective is to support impact-driven tech startups that will provide solutions to pressing issues and problems found in agriculture, tourism, transportation, and environmental sustainability, among others, by offering tech entrepreneurs a range of services and facilities.
                        </p>
                    </div>
                </div>
            </div>
    </section>
@endsection
