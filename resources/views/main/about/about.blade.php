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
                        <h2 class="mb-3">About CMC</h2>
                        <hr>
                    </div>
                    <p class="font-weight-light text-justify">
                        The University of Mindanao acknowledges the vital role of research as a catalyst in the promotion of instruction and extension in higher education. As such, it focuses its strategic direction on the development of a strong research culture that would enable its faculty, staff and students to be engaged in research that is responsive to the local, regional and national development needs.
                    </p>
                    <p class="font-weight-light text-justify">
                        The Research and Publication Center (RPC) was established to manage and implement the research program of the University. It provides inputs to administrators for policy and/or decision-making through conduct of analyses and evaluations of programs and projects. It spearheads capacity development activities aimed at building and upgrading the research skills of faculty, staff and students. It exercises monitoring and facilitating functions for the research projects of the University. It aims to upscale the horizon of knowledge generation and utilization in the sphere where the University of Mindanao is significantly contributing as an academic institution and as a kernel of new knowledge.
                    </p>
                </div>

                <!-- Second Section -->
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2 class="mb-3">Core Competencies</h2>
                        <p>
                            Quality, affordable, and open education
                        </p>
                    </div>

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
                                    <p>
                                        A leading research institution recognized for its significant contribution in the generation of new knowledge for the improvement of the quality of human life.
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
                                    <p>
                                        Central Mindanao Colleges is an academic institution PROVIDING quality instruction.
                                    </p>
                                    <p>
                                        DEVELOPING innovative researchers and ENGAGING in responsive extensions program;
                                    </p>
                                    <p>
                                        That is committed to produce competent and socially responsible individuals who can
                                        carry out responsibilities for local and global communities.
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
                                        Values
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>
                                        CMC is committed to attain its vision and mission guided by the following values:
                                    <ul>
                                        <li>Love for God</li>
                                        <li>Integrity</li>
                                        <li>Family orientation</li>
                                        <li>Excellence</li>
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
                                        Goals
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>
                                        CMC is committed to attain its vision and mission guided by the following goals:
                                    <ol style="list-style: decimal;">
                                        <li>Produce competent graduates that epitomize the values of the institution</li>
                                        <li>Foster innovation in all academic programs</li>
                                        <li>Increase linkages and connections</li>
                                        <li>Provide an enabling environment to intensify employee productivity</li>
                                        <li>Secure financial future</li>
                                    </ol>
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