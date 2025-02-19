@extends('layouts.themes.main')
@section('content')
    <section class="section bg-grey">
        <div class="container lg-10">
            @include('layouts.partials.alerts')
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
                                <div>
                                    {!! $rpc_description !!}
                                </div>
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
                                            <div>
                                                {!! $vmgo_vision !!}
                                            </div>
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
                                            <div>
                                                {!! $vmgo_mission !!}
                                            </div>
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
                                            <div>
                                                {!! $vmgo_goals !!}
                                            </div>
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
                                            <div>
                                                {!! $vmgo_objectives !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="agenda">
                            <div class="section-title">
                                <h2>Research Agenda</h2>
                                <div>
                                    {!! $agpr_agenda !!}
                                </div>
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
                                <div>
                                    {!! $agpr_priority !!}
                                </div>
                            </div>
                            <div class="text-center">
                                <img src="{{ asset('images/about/priority.png') }}" alt="logo"
                                    style="height: 395px; width: 430px;">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="programs">
                            <div class="section-title">
                                <h2>Research Programs</h2>
                                <div>
                                    {!! $prfu_program !!}
                                </div>
                            </div>
                            <div class="section-title">
                                <h2>Research Fundings</h2>
                                <div>
                                    {!! $prfu_funding !!}
                                </div>
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