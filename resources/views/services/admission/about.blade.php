@extends('layouts.themes.main')
@section('content')
    <section class="section ">
        <div class="container">
            <div data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100" data-aos-once="false"
                style="margin-top: 150px">
                <x-content-header title="About the Admissions Office" />
            </div>

            <x-breadcrumb :items="[
                ['label' => 'Home', 'url' => route('home'), 'active' => false],
                ['label' => 'About the Admission Office', 'url' => '#', 'active' => true],
            ]" />
            <div class="col-md-12 order-2 order-md-2 mt-5">
                <h3 class="section-title" data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="100"
                    data-aos-once="false">CMC OFFICE OF THE ADMISSIONS</h3>
                <p class="text-justify">
                    The CMC Office of the Admissions is a forefront unit tasked with the initial evaluation and reception of
                    student documents for enrollment purposes. In sum, the office aims to abide by reasonable and just
                    requirements for admission of students anchored on social and constitutional grounds.
                </p>
                <p class="text-justify">
                    The office aims to provide a seamless admission procedure anchored on the constitutional mandate that
                    educational institutions implement just and equitable admission procedures and requirements.
                </p>
                <p class="text-justify">
                    The Office of the Admissions coordinates closely with other colleges departments for updates and recent
                    developments in educational systems and government issuances.
                </p>
                <p class="text-justify">
                    Furthermore, it is the sincere hope of the office to create and continue to develop a seamless enrolment
                    system geared at giving the utmost opportunity to deserving and qualified applicants.
                </p>
                <p class="text-justify">
                    <b>SOCIAL MEDIA PAGE:</b> <a href="https://www.facebook.com/CMCadmissions" target="_BLANK">
                        https://www.facebook.com/CMCadmissions</a>
                </p>
            </div>
        </div>
        </div>
    </section>
@endsection
