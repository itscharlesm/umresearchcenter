@extends('layouts.themes.main')
@section('content')
    <section class="section bg-grey">
        <div class="container lg-10">
            <!-- Title -->
            <div class="content-header text-center" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100"
                data-aos-once="false" style="margin-top: 100px;">
                <x-content-header title="ABOUT US" />
            </div>
            <!-- Breadcrumb -->
            <x-breadcrumb :items="[
                ['label' => 'Home', 'url' => url('/'), 'active' => false],
                ['label' => 'About Us', 'url' => '#', 'active' => true],
            ]" />
            <div class="row">
                <!-- Sidebar -->
                <div class="col-12 col-md-3 mb-3">
                    <div class="content-sidebar">
                        <h5><b>Sections</b></h5>
                        <a href="#" class="nav-link tab-link active" data-target="about">About RPC and its VMGO</a>
                        <a href="#" class="nav-link tab-link" data-target="agenda">Research Agenda and Priority
                            Areas</a>
                        <a href="#" class="nav-link tab-link" data-target="programs">Research Programs and
                            Fundings</a>
                    </div>
                </div>
                <!-- Tab Content -->
                <div class="col-12 col-md-9">
                    <div class="tab-content" id="researchTabsContent">
                        <div class="tab-pane fade show active" id="about">
                            <div class="section-title">
                                <h2>About RPC</h2>
                                <p class="font-weight-light text-justify">
                                    The University of Mindanao acknowledges the vital role of research as a catalyst in the
                                    promotion of
                                    instruction and extension in higher education. As such, it focuses its strategic
                                    direction on the
                                    development of a strong research culture that would enable its faculty, staff and
                                    students to be
                                    engaged in research that is responsive to the local, regional and national development
                                    needs.
                                </p>
                                <p class="font-weight-light text-justify">
                                    The Research and Publication Center (RPC) was established to manage and implement the
                                    research
                                    program of the University. It provides inputs to administrators for policy and/or
                                    decision-making
                                    through conduct of analyses and evaluations of programs and projects. It spearheads
                                    capacity
                                    development activities aimed at building and upgrading the research skills of faculty,
                                    staff and
                                    students. It exercises monitoring and facilitating functions for the research projects
                                    of the
                                    University. It aims to upscale the horizon of knowledge generation and utilization in
                                    the sphere
                                    where the University of Mindanao is significantly contributing as an academic
                                    institution and as a
                                    kernel of new knowledge.
                                </p>
                            </div>
                            <div class="accordion w-100" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button"
                                                data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Vision
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text-justify">
                                                A leading research institution recognized for its significant contribution
                                                in the
                                                generation of new knowledge for the improvement of the quality of human
                                                life.
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
                                                To nurture research culture among faculty, staff, and students demonstrating
                                                the
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
                                                <li>To develop skilled, committed, conscientious, and prudent researchers.
                                                </li>
                                                <li>To upgrade research-support mechanisms such as facilities, devices,
                                                    policies,
                                                    and systems.</li>
                                                <li>To produce, present, publish and practice researches that respond to the
                                                    needs
                                                    of the time and contribute to the sustainable development of society.
                                                </li>
                                                <li>To establish and sustain strategic linkages with external agencies for
                                                    purposes
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
                                                <li>To initiate educational activities such as trainings and immersion aimed
                                                    at
                                                    building/enhancing skills, commitment, conscientiousness and prudence in
                                                    research.</li>
                                                <li>To implement a recognition/reward system that acclaims outstanding
                                                    research
                                                    performances and achievements.</li>
                                                <li>To participate in research fora and conferences with the intention of
                                                    updating
                                                    knowledge and expertise.</li>
                                            </ul>
                                            </p>
                                            <p class="text-justify">
                                                <strong>For the advancement of research support mechanisms:</strong>
                                            <ul style="list-style-type: disc;">
                                                <li>To assess and improve policies and systems towards facilitation of
                                                    effective
                                                    conduct of research.</li>
                                                <li>To acquire new and innovative facilities and devices needed in research
                                                    undertakings.</li>
                                            </ul>
                                            </p>
                                            <p class="text-justify">
                                                <strong>For the generation, dissemination, publication and utilization of
                                                    relevant
                                                    researches:</strong>
                                            <ul style="list-style-type: disc;">
                                                <li>To conduct researches in accordance with the University research agenda.
                                                </li>
                                                <li>To provide for the dissemination of research findings through public
                                                    lectures,
                                                    fora and paper presentations.</li>
                                                <li>To publish research findings for utilization of stakeholders.</li>
                                            </ul>
                                            </p>
                                            <p class="text-justify">
                                                <strong>For the establishment and sustainability of strategic
                                                    linkages:</strong>
                                            <ul style="list-style-type: disc;">
                                                <li>To join and be involved in research-related professional organizations.
                                                </li>
                                                <li>To engage in consultancy services that are compatible to the
                                                    University’s
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
                        <!-- Sidebar -->
                        <div class="tab-pane fade" id="agenda">
                            <div class="section-title">
                                <h2>Research Agenda</h2>
                                <p class="font-weight-light text-justify">
                                    In light of the emerging directions under the new Institutional Strategic Plan for
                                    2017-2022,
                                    the Research and Publication Center developed its new agenda framework to address the
                                    third key
                                    result area “Excellence in Research”. The research excellence indicators include:
                                    international
                                    research reputation, production of high quality research outputs which have demonstrable
                                    and
                                    measurable impacts, sustained support from external funders, and a supportive research
                                    environment for both faculty and students.
                                </p>
                            </div>
                            <div class="section-title">
                                <h2>Delivering Research Excellence</h2>
                                <p class="font-weight-bold text-justify">
                                    1. Research Reputation
                                </p>
                                <p class="font-weight-light text-justify">
                                    The RPC shall be a highly responsive research center by providing focus and capitalizing
                                    on its critical mass and interdisciplinary capabilities. It shall establish and earn
                                    reputation through the establishment of the following institutes: 1.1 Biodiversity and
                                    environmental studies 1.2 Economy and enterprise studies 1.3 Social welfare and
                                    well-being studies 1.4 Emerging technologies These institutes shall practice the highest
                                    standards of research integrity which are essential elements of quality.
                                </p>
                                <p class="font-weight-bold text-justify">
                                    2. Research Impact
                                </p>
                                <p class="font-weight-light text-justify">
                                    The RPC shall maximize knowledge exchange between the University and the wider society.
                                    It aims to do this through its regular public lectures where research findings are
                                    shared with stakeholders for utilization. It shall continue to publish its research
                                    journal in the world-wide Open Directory of Open Access Journals. It shall sustain its
                                    dissemination activities through paper presentations in various research conferences. It
                                    shall also maximize the impact of its research on public policy, and political
                                    stakeholders through its Institute of Popular Opinion (IPO) which shall take massive
                                    efforts to produce policy papers and press releases. RPC shall also seek to bring to
                                    market the intellectual property arising from our faculty/students’ works through its
                                    Innovation Technology Support Office (ITSO).
                                </p>
                                <p class="font-weight-bold text-justify">
                                    3. Research Funds
                                </p>
                                <p class="font-weight-light text-justify">
                                    The RPC shall draw upon its already established linkages, increase research
                                    collaborations with external experts in order to augment its funding resources. Research
                                    proposals shall be regularly submitted to funding agencies.
                                </p>
                                <p class="font-weight-bold text-justify">
                                    4. Support for Research
                                </p>
                                <p class="font-weight-light text-justify">
                                    The RPC shall upscale its research arsenal through the acquisition of current software
                                    and technology. It shall enhance its training program to capacitate faculty and students
                                    to produce quality research and effectively communicate their findings.
                                </p>
                            </div>
                            <div class="section-title">
                                <h2>Research Priority Areas</h2>
                                <p class="font-weight-light text-justify">
                                    Based on the evaluation of UM’s Sustainable Development Agenda Framework (2012-2017) and
                                    aligned with the Harmonized National Research and Development Agenda (HNRDA) of the DOST
                                    and the research priority clusters of the National Higher Education Research Agenda
                                    (NHERA), UM shall focus on the following interdisciplinary research themes for the next
                                    five years:
                                </p>
                            </div>
                            <div class="text-center">
                                <img src="{{ asset('images/about/priority.png') }}" alt="logo"
                                    style="height: 395px; width: 430px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript for Dynamic Tabs -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const tabLinks = document.querySelectorAll(".tab-link");
            const tabPanes = document.querySelectorAll(".tab-pane");

            tabLinks.forEach(link => {
                link.addEventListener("click", function(e) {
                    e.preventDefault();

                    // Remove 'active' class from all tabs
                    tabLinks.forEach(item => item.classList.remove("active"));
                    tabPanes.forEach(item => item.classList.remove("show", "active"));

                    // Add 'active' class to the clicked tab
                    this.classList.add("active");
                    document.getElementById(this.getAttribute("data-target")).classList.add("show",
                        "active");
                });
            });
        });
    </script>
@endsection