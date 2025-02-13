@extends('layouts.themes.main')
@section('content')
    <br><br><br><br><br>
    <!-- About -->
    <section class="section bg-grey">
        <div class="container-fluid px-5">
            <div class="row">
                <!-- First Section -->
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2 class="mb-3">Research Agenda</h2>
                        <hr>
                    </div>
                    <p class="font-weight-light text-justify">
                        In light of the emerging directions under the new Institutional Strategic Plan for 2017-2022, the Research and Publication Center developed its new agenda framework to address the third key result area “Excellence in Research”. The research excellence indicators include: international research reputation, production of high quality research outputs which have demonstrable and measurable impacts, sustained support from external funders, and a supportive research environment for both faculty and students.
                    </p>
                </div>

                <!-- Second Section -->
                <div class="col-lg-12">
                    <!-- Accordion Section -->
                    <div class="accordion w-100" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Vision
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <p class="text-justify">
                                        A leading research institution recognized for its significant contribution in the
                                        generation of new knowledge for the improvement of the quality of human life.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card mt-2">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        Mission
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <p class="text-justify">
                                        To nurture research culture among faculty, staff, and students demonstrating the
                                        love for truth and upholding the values of rigor, artistry and ethics.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-header " id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Goals
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <p class="text-justify">
                                    <ul style="list-style-type: disc;">
                                        <li>To develop skilled, committed, conscientious, and prudent researchers.</li>
                                        <li>To upgrade research-support mechanisms such as facilities, devices, policies,
                                            and systems.</li>
                                        <li>To produce, present, publish and practice researches that respond to the needs
                                            of the time and contribute to the sustainable development of society.</li>
                                        <li>To establish and sustain strategic linkages with external agencies for purposes
                                            of collaboration and funding.</li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-2">
                            <div class="card-header" id="headingFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        Objectives
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <p class="text-justify">
                                        <strong>For the development of researcher competence:</strong>
                                    <ul style="list-style-type: disc;">
                                        <li>To initiate educational activities such as trainings and immersion aimed at
                                            building/enhancing skills, commitment, conscientiousness and prudence in
                                            research.</li>
                                        <li>To implement a recognition/reward system that acclaims outstanding research
                                            performances and achievements.</li>
                                        <li>To participate in research fora and conferences with the intention of updating
                                            knowledge and expertise.</li>
                                    </ul>
                                    </p>
                                    <p class="text-justify">
                                        <strong>For the advancement of research support mechanisms:</strong>
                                    <ul style="list-style-type: disc;">
                                        <li>To assess and improve policies and systems towards facilitation of effective
                                            conduct of research.</li>
                                        <li>To acquire new and innovative facilities and devices needed in research
                                            undertakings.</li>
                                    </ul>
                                    </p>
                                    <p class="text-justify">
                                        <strong>For the generation, dissemination, publication and utilization of relevant
                                            researches:</strong>
                                    <ul style="list-style-type: disc;">
                                        <li>To conduct researches in accordance with the University research agenda.</li>
                                        <li>To provide for the dissemination of research findings through public lectures,
                                            fora and paper presentations.</li>
                                        <li>To publish research findings for utilization of stakeholders.</li>
                                    </ul>
                                    </p>
                                    <p class="text-justify">
                                        <strong>For the establishment and sustainability of strategic linkages:</strong>
                                    <ul style="list-style-type: disc;">
                                        <li>To join and be involved in research-related professional organizations.</li>
                                        <li>To engage in consultancy services that are compatible to the University’s
                                            research agenda and expertise.</li>
                                        <li>To establish research partnership with external organizations.</li>
                                        <li>To avail of local, national and international research grants.</li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection