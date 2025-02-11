@extends('layouts.themes.main')
@section('content')
    <section class="section ">
        <div class="container">
            <div class="content-header" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100"
                data-aos-once="false" style="margin-top: 100px;">
                <x-content-header title="Project Implemented" />
            </div>
            <x-breadcrumb :items="[
                ['label' => 'Home', 'url' => route('home'), 'active' => false],
                ['label' => 'Project Implemented', 'url' => '#', 'active' => true],
            ]" />


            <div class="col-md-12 mt-5 mb-4 mb-md-0">
                <h3>
                    A. EDUCATION PROGRAM
                    Initiatives on this program highlight the following activities:
                </h3>
                <ul>
                    <li>· Parenting Seminar;

                    </li>
                    <li>· Service-learning tutorial program;

                    </li>
                    <li>· Literacy and Numeracy, social awareness activities; and

                    </li>
                    <li>· Community Anti-terrorism Advocacy

                    </li>
                </ul>
                <h3>
                    B. LIVELIHOOD PROGRAM
                </h3>
                <ul>
                    <li class="py-2" style="line-height: 2rem">
                        · Meat processing seminar;
                    </li>
                    <li class="py-2" style="line-height: 2rem">
                        · Entrepreneurial Workshops;
                    </li>
                    <li class="py-2" style="line-height: 2rem">
                        · Rag Making; and
                    </li>
                    <li class="py-2" style="line-height: 2rem">
                        · Livelihood training
                    </li>
                </ul>
                <h3>
                    C. ENVIRONMENTAL MANAGEMENT PROGRAM
                </h3>
                <ul>
                    <li class="py-2" style="line-height: 2rem">
                        · Clean-Up Drives;

                    </li>
                    <li class="py-2" style="line-height: 2rem">
                        · Tree Planting and Parenting Activities;

                    </li>
                    <li class="py-2" style="line-height: 2rem">
                        · Environmental awareness Issues training Activity; and

                    </li>
                    <li class="py-2" style="line-height: 2rem">
                        · Solid Waste Management

                    </li>
                </ul>
                <h3>
                    D. HEALTH AND WELLNESS DEVELOPMENT PROGRAM
                </h3>
                <ul>
                    <li class="py-2" style="line-height: 2rem">
                        · Medical and Dental Services;
                    </li>
                    <li class="py-2" style="line-height: 2rem">
                        · Youth Empowerment Seminar;
                    </li>
                    <li class="py-2" style="line-height: 2rem">
                        · Self Defense Training;
                    </li>
                    <li class="py-2" style="line-height: 2rem">
                        · Physical and Mental Awareness Seminar;
                    </li>
                    <li class="py-2" style="line-height: 2rem">
                        · Violence Against Women and Children ( VAWC) Seminar; and
                    </li>
                </ul>
                <h3>
                    OTHER ENGAGEMENTS ON COMMUNITY EXTENSION PROGRAMS SUCH AS:
                </h3>
                <ul>
                    <li class="py-2" style="line-height: 2rem">
                        · Gift Giving Initiatives;
                    </li>
                    <li class="py-2" style="line-height: 2rem">
                        · Libreng Gupit;
                    </li>
                    <li class="py-2" style="line-height: 2rem">
                        · Libreng Tsinelas; and
                    </li>
                    <li class="py-2" style="line-height: 2rem">
                        · Mass Feeding Program
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection
