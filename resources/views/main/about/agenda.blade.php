@extends('layouts.themes.main')
@section('content')
    <!-- About -->
    <section class="section bg-grey">
        <div class="container-fluid px-5">
            <div class="row">
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <x-breadcrumb :items="[
                            ['label' => 'Home', 'url' => url('/'), 'active' => false],
                            ['label' => 'Research Agenda and Priority Areas', 'url' => '#', 'active' => true],
                        ]" />
                        <hr>
                    </div>
                    <!-- First Section -->
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>Research Agenda</h2>
                            <p class="font-weight-light text-justify">
                                In light of the emerging directions under the new Institutional Strategic Plan for 2017-2022,
                                the Research and Publication Center developed its new agenda framework to address the third key
                                result area “Excellence in Research”. The research excellence indicators include: international
                                research reputation, production of high quality research outputs which have demonstrable and
                                measurable impacts, sustained support from external funders, and a supportive research
                                environment for both faculty and students.
                            </p>
                        </div>
                    </div>

                    <!-- Second Section -->
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>Research Agenda</h2>
                            <p class="font-weight-light text-justify">
                                In light of the emerging directions under the new Institutional Strategic Plan for 2017-2022,
                                the Research and Publication Center developed its new agenda framework to address the third key
                                result area “Excellence in Research”. The research excellence indicators include: international
                                research reputation, production of high quality research outputs which have demonstrable and
                                measurable impacts, sustained support from external funders, and a supportive research
                                environment for both faculty and students.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection