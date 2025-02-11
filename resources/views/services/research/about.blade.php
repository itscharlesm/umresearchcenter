@extends('layouts.themes.main')
@section('content')
    <section class="section ">
        <div class="container">
            <div class="content-header" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100"
                data-aos-once="false" style="margin-top: 150px">
                <x-content-header title="About the Research & Publication Office" />
            </div>
            <x-breadcrumb :items="[
                ['label' => 'Home', 'url' => route('home'), 'active' => false],
                ['label' => 'About the Research & Publication Office', 'url' => '#', 'active' => true],
            ]" />
            <div class="col-md-12 order-2 order-md-2 mt-5">
                <h1>
                    About Research and Publications
                </h1>
                <p class="text-justify">
                    Embracing a culture of research, CMC understands the importance and justification that the conduct of
                    research, rests on the fact that research generally precedes development. As an academic function,
                    research is one of the major source of knowledge and innovation. As such, it shall generally support and
                    enhance both instruction and extension services in the institution.
                    As an Institutional Research Agenda, research shall be given primary focus and importance in all
                    programs in order to train faculty and students to conduct independent studies. It is anchored in three
                    Strategic Thrusts:
                </p>
                <h4>
                    First
                </h4>
                <p>
                    Research alignment and conformance to the Commission on Higher Education priorities on NHERA 2.
                </p>
                <h4>
                    Second
                </h4>
                <p>Research focus on:</p>
                <li>Effectiveness</li>
                <li>Efficiency</li>
                <li>Excellence</li>
                <li>Recovery</li>
                <h4 class="mt-1">
                    And Lastly
                </h4>
                <p>Research contributions on:</p>
                <li>Institutional Quality Improvement</li>
                <li>Continuous Process Improvement</li>
                <li>Institutional Cutting Edge Initiatives</li>
                <p class="text-justify">
                    The Research and Development initiatives of the Academic and the Non-academic areas prioritizes the
                    following discipline:
                </p>
                <li>Curriculum development or improvement</li>
                <li>Teaching-Learning process</li>
                <li> Health and Wellness</li>
                <li>Student and Faculty Performance and Evaluation</li>
                <li>Student population or enrollment</li>
                <li>Peace and Development</li>
                <li>Business Management and Marketing</li>
                <li>Gender Issues and other Social Researches</li>
                <li>Environmental promotion and conservation</li>
                <li>Policy oriented researches</li>

            </div>
        </div>
    </section>
@endsection
