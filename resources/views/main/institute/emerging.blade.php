@extends('layouts.themes.main')
@section('content')
    <section class="section bg-grey">
        <div class="container lg-10">
            @include('layouts.partials.alerts')
            <!-- Title -->
            <div class="content-header text-center" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100"
                data-aos-once="false" style="margin-top: 100px;">
                <x-content-header title="INSTITUTE OF EMERGING TECHNOLOGIES AND GREEN INNOVATION STUDIES" />
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
                            The <em><strong>University of Mindanao as Environmental Solutions (UMasenso) Hub</strong></em>
                            is the
                            University’s Technology Business Incubator established in August 2019. The Hub is assisted by
                            the Department of Science and Technology Philippine Council for Industry, Energy and Emerging
                            Technology Research and Development (DOST-PCIEERD) through its Higher Education Institution
                            Readiness for Innovation and Technopreneurship (HEIRIT) program. Its main objective is to
                            support impact-driven tech startups that will provide solutions to pressing issues and problems
                            found in agriculture, tourism, transportation, and environmental sustainability, among others,
                            by offering tech entrepreneurs a range of services and facilities.
                        </p>
                        <p class="font-weight-light text-justify">
                            The <em><strong>University of Mindanao Technology Transfer and Intellectual Property Management
                                    Office (UM-TTIPMO)</strong></em>, established in September 2021, aims to capacitate and
                            assist
                            the University in setting up technology transfer processes, facilitating commercialization of
                            University-owned technologies, and intellectual property management. The office seeks to
                            commercialize and protect the research outputs of the University researchers and students.
                            Currently, the office focuses on training the faculty and students in Intellectual Property
                            Protection. Other pipeline activities are proposing an incentive disclosure, IP inventory, and
                            training for technology transfer.
                        </p>
                        <p class="font-weight-light text-justify">
                            <em><strong>Center of Green Nanotechnology Innovations for Environmental Solutions
                                    (CGNIES)</strong></em>
                            is a newly established research center (December 2021). CGNIES emphasizes the green approaches
                            in developing nanomaterials and their integration to micro- and macro-structures for
                            technological solutions to environmental problems. Furthermore, CGNIES vision is to create
                            sustainable, scalable, and economical routes to functional nanostructured materials. Hence,
                            promoting green innovations in Mindanao, a solution that cares for both the environment and
                            humanity.
                        </p>
                        <p class="font-weight-light text-justify">
                            For more information, please email <em><strong>ieti@umindanao.edu.ph</strong></em>
                        </p>
                    </div>
                </div>
            </div>
    </section>
@endsection