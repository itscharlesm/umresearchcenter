@extends('layouts.themes.main')
@section('content')
    <section class="section ">
        <div class="container">
            <div class="content-header" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100"
                data-aos-once="false" style="margin-top: 100px;">
                <x-content-header title="CENTER FOR SOCAL ACTION PARTNERS" />
            </div>
            <x-breadcrumb :items="[
                ['label' => 'Home', 'url' => route('home'), 'active' => false],
                [
                    'label' => 'CENTER FOR SOCAL ACTION PARTNERS',
                    'url' => '#',
                    'active' => true,
                ],
            ]" />


            <div class="col-md-12 mt-5 mb-4 mb-md-0">
                <h2>
                    CENTER FOR SOCAL ACTION PARTNERS
                </h2>
                <p>
                    Strengthening the programs to serve the partner communities continually, the Center for Social Action
                    Office linked partnership with different organizations such as :
                </p>
                <h3>
                    EDUCATION PROGRAM PARTNERS :
                </h3>
                <ul>
                    <li class="py-2" style="line-height: 2rem">
                        · Department of Education Region 12,
                    </li>
                    <li class="py-2" style="line-height: 2rem">
                        · City Government of Kidapawan,
                    </li>
                    <li class="py-2" style="line-height: 2rem">
                        · Mindanao Youth Development,
                    </li>
                    <li class="py-2" style="line-height: 2rem">
                        · Gawad Kalinga – Cotabato Chapter,
                    </li>
                    <li class="py-2" style="line-height: 2rem">
                        · Felipe Suerte Memorial Elementary School
                    </li>
                </ul>
                <h3>
                    LIVELIHOOD PROGRAM PARTNERS:
                </h3>
                <ul>
                    <li class="py-2" style="line-height: 2rem">
                        · Sangguniang Kabataan Federation,
                    </li>
                    <li class="py-2" style="line-height: 2rem">
                        · Gawad Kaliga – Cotabato Chapter, and
                    </li>
                    <li class="py-2" style="line-height: 2rem">
                        · Kidapawan City Tourism Office
                    </li>
                </ul>
                <h3>
                    ENVIRONMENTAL MANAGEMENT PROGRAM PARTNERS:
                </h3>
                <ul>
                    <li class="py-2" style="line-height: 2rem">
                        · Sustainable Energy and Enterprises Development for Communities (SEED4COM),
                    </li>
                    <li class="py-2" style="line-height: 2rem">
                        · Tree Planting and Parenting Activities;

                    </li>
                    <li class="py-2" style="line-height: 2rem">
                        · Let’s Do it Philippines Kidapawan,
                    </li>
                    <li class="py-2" style="line-height: 2rem">
                        · Metro Kidapawan Water District,
                    </li>
                    <li class="py-2" style="line-height: 2rem">
                        · Junior People Management Association of the Philippines (JPMAP), and
                    </li>
                    <li class="py-2" style="line-height: 2rem">
                        · Provincial Environment and Natural Resources Office
                    </li>
                </ul>
                <h3>
                    HEALTH AND WELLNESS DEVELOPMENT PROGRAM PROGRAM:
                </h3>
                <ul>
                    <li class="py-2" style="line-height: 2rem">
                        · Diabetes Club – Cotabato Chapter,
                    </li>
                    <li class="py-2" style="line-height: 2rem">
                        · City Health Office,
                    </li>
                    <li class="py-2" style="line-height: 2rem">
                        · Bureau of Fire Protection,
                    </li>
                    <li class="py-2" style="line-height: 2rem">
                        · Bureau of Jail Management and Penology, and
                    </li>
                    <li class="py-2" style="line-height: 2rem">
                        · Cotabato Police Provincial Public Safety Forces
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection
