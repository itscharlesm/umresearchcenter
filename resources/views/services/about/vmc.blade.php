@extends('layouts.themes.main')
@section('content')
    <section class="section ">
        <div class="container mt-5">
            <div class="content-header" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100"
                data-aos-once="false" style="margin-top:150px">
                <x-content-header title="Vision, Mission, Values and Goals" />
            </div>
            <x-breadcrumb :items="[
                ['label' => 'Home', 'url' => url('/'), 'active' => false],
                ['label' => 'Vision, Mission, Values and Goals', 'url' => '#', 'active' => true],
            ]" />
            <div class="row align-items-center">
                <div class="accordion col-md-6 order-1 order-md-2" id="accordionExample">
                    <div class="card">
                        <div class="card-header" style="background: 1a1a37;" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" style="color: ffbc3b;" type="button"
                                    data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    Vision
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                A premier academic institution providing holistic education in pursuit for global excellence
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
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>
                                    Central Mindanao Colleges is an academic institution PROVIDING quality instruction.
                                </p>
                                <p>
                                    DEVELOPING innovative researchers and ENGAGING in responsive extensions program;
                                </p>
                                <br>
                                that is committed to produce competent and socially responsible individuals who can carry
                                out responsibilities for the local communities and global community.
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
                                CMC is committed to attain its vision and mission guided by the following values:
                                <li>Love for God</li>
                                <li>Integrity</li>
                                <li>Family orientation</li>
                                <li>Excellence</li>
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
                                CMC is committed to attain its vision and mission guided by the following values:
                                <ol style="list-style: decimal;" class="pl-auto">
                                    <li>Produce competent graduates that epitomize the values of the institution</li>
                                    <li>Faster innovation to all the academic programs</li>
                                    <li>Increase Linkages and Connections</li>
                                    <li>Provide an enabling environment to intensify employee productivity</li>
                                    <li>Secure financial Future</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 order-2 order-md-2 mb-4 mb-md-0">
                    <img class="img-fluid w-100" src="{{ asset('images/about/vmc_cmc.webp') }}" alt="about image">
                </div>
            </div>

        </div>
    </section>
@endsection
