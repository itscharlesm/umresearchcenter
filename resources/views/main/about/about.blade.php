@extends('layouts.themes.main')
@section('content')
    <!-- About -->
    <section class="section bg-grey">
        <div class="container lg-10">
            <div class="content-header text-center" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100"
                data-aos-once="false" style="margin-top: 150px;">
                <x-content-header title="About Us" />
            </div>

            <x-breadcrumb :items="[
                ['label' => 'Home', 'url' => url('/'), 'active' => false],
                ['label' => 'Research', 'url' => '#', 'active' => true],
            ]" />

            <div class="row">
                <!-- Sidebar -->
                <div class="col-12 col-md-3 mb-3">
                    <div class="content-sidebar">
                        <h5><b>About Us Section</b></h5>
                        <a href="#" class="nav-link tab-link active" data-target="about">About RPC</a>
                        <a href="#" class="nav-link tab-link" data-target="agenda">Research Agenda</a>
                    </div>
                </div>

                <!-- Tab Content -->
                <div class="col-12 col-md-9">
                    <div class="tab-content" id="researchTabsContent">
                        <div class="tab-pane fade show active" id="about">
                            <h2>About RPC</h2>
                            <p class="font-weight-light text-justify">
                                The University of Mindanao acknowledges the vital role of research as a catalyst...
                            </p>
                            <div class="accordion w-100" id="aboutAccordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button"
                                                data-toggle="collapse" data-target="#collapseOne">
                                                Vision
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#aboutAccordion">
                                        <div class="card-body">
                                            <p>A leading research institution recognized for its contribution...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-2">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button"
                                                data-toggle="collapse" data-target="#collapseTwo">
                                                Mission
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#aboutAccordion">
                                        <div class="card-body">
                                            <p>To nurture research culture among faculty, staff, and students...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="agenda">
                            <h2>Research Agenda</h2>
                            <p class="font-weight-light text-justify">
                                In light of the emerging directions under the new Institutional Strategic Plan...
                            </p>
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