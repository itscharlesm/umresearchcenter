@extends('layouts.themes.main')
@section('content')
    <section class="section bg-grey">
        <div class="container lg-10">
            <!-- Title -->
            <div class="content-header text-center" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100"
                data-aos-once="false" style="margin-top: 100px;">
                <x-content-header title="MEET OUR TEAM" />
            </div>
            <!-- Breadcrumb -->
            <x-breadcrumb :items="[
                ['label' => 'Home', 'url' => url('/'), 'active' => false],
                ['label' => 'Our Team', 'url' => '#', 'active' => true],
            ]" />
            <div class="row justify-content-center">
                <!-- Maria -->
                <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0" data-aos="zoom-in-left" data-aos-duration="1000"
                    data-aos-delay="100" data-aos-once="false">
                    <div class="card border-0 rounded-0 hover-shadow">
                        <div class="card-img position-relative">
                            <img class="card-img-top rounded-0" src="{{ asset('images/about/image-maria.jpg') }}"
                                alt="event thumb" style="width: 255px; height: 250px; object-fit: cover;">
                        </div>
                        <div class="card-body text-center"
                            style="display: flex; flex-direction: column; align-items: center; gap: 2px;">
                            <p class="font-weight-bold" style="font-size: 13px; margin: 0;">Maria Linda B. Arquiza, Ed.D.
                            </p>
                            <p class="font-weight-light" style="font-size: 11px; color: red; margin: 0;">
                                Vice President - Research and Publication Center & Director, Institute for Popular Opinion
                            </p>
                            <p class="font-weight-light"
                                style="font-size: 10px; margin: 0; display: flex; align-items: center;">
                                <i class="ti-email text-primary mr-2"></i>: malen_arquiza@umindanao.edu.ph
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Milton -->
                <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0" data-aos="zoom-in-left" data-aos-duration="1000"
                    data-aos-delay="100" data-aos-once="false">
                    <div class="card border-0 rounded-0 hover-shadow">
                        <div class="card-img position-relative">
                            <img class="card-img-top rounded-0" src="{{ asset('images/about/image-milton.jpg') }}"
                                alt="event thumb" style="width: 255px; height: 250px; object-fit: cover;">
                        </div>
                        <div class="card-body text-center"
                            style="display: flex; flex-direction: column; align-items: center; gap: 2px;">
                            <p class="font-weight-bold" style="font-size: 13px; margin: 0;">Miltion Norma D. Medina, Ph.D.
                            </p>
                            <p class="font-weight-light" style="font-size: 11px; color: red; margin: 0;">
                                Asst. Vice President - Natural Science and Innovation & Director, Institute for Biodiversity
                                and Environment
                            </p>
                            <p class="font-weight-light"
                                style="font-size: 10px; margin: 0; display: flex; align-items: center;">
                                <i class="ti-email text-primary mr-2"></i>: mnd_medina@umindanao.edu.ph
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Joel -->
                <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0" data-aos="zoom-in-left" data-aos-duration="1000"
                    data-aos-delay="100" data-aos-once="false">
                    <div class="card border-0 rounded-0 hover-shadow">
                        <div class="card-img position-relative">
                            <img class="card-img-top rounded-0" src="{{ asset('images/about/image-joel.jpg') }}"
                                alt="event thumb" style="width: 255px; height: 250px; object-fit: cover;">
                        </div>
                        <div class="card-body text-center"
                            style="display: flex; flex-direction: column; align-items: center; gap: 2px;">
                            <p class="font-weight-bold" style="font-size: 13px; margin: 0;">Joel B. Tan, DBA.</p>
                            <p class="font-weight-light" style="font-size: 11px; color: red; margin: 0;">
                                Director, Institute of Social Welfare and Human Development
                            </p>
                            <p class="font-weight-light"
                                style="font-size: 10px; margin: 0; display: flex; align-items: center;">
                                <i class="ti-email text-primary mr-2"></i>: tan_joel@umindanao.edu.ph
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Chosel -->
                <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0" data-aos="zoom-in-left" data-aos-duration="1000"
                    data-aos-delay="100" data-aos-once="false">
                    <div class="card border-0 rounded-0 hover-shadow">
                        <div class="card-img position-relative">
                            <img class="card-img-top rounded-0" src="{{ asset('images/about/image-chosel.jpg') }}"
                                alt="event thumb" style="width: 255px; height: 250px; object-fit: cover;">
                        </div>
                        <div class="card-body text-center"
                            style="display: flex; flex-direction: column; align-items: center; gap: 2px;">
                            <p class="font-weight-bold" style="font-size: 13px; margin: 0;">Chosel P. Lawagan, Ph.D.</p>
                            <p class="font-weight-light" style="font-size: 11px; color: red; margin: 0;">
                                Director, Emerging Technology and Green Innovation & Head, Center of Green Nanotechnology
                                Innovations for Environmental Solutions
                            </p>
                            <p class="font-weight-light"
                                style="font-size: 10px; margin: 0; display: flex; align-items: center;">
                                <i class="ti-email text-primary mr-2"></i> : clawagon@umindanao.edu.ph
                            </p>
                        </div>
                    </div>
                </div>
                <!-- John -->
                <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0" data-aos="zoom-in-left" data-aos-duration="1000"
                    data-aos-delay="100" data-aos-once="false">
                    <div class="card border-0 rounded-0 hover-shadow">
                        <div class="card-img position-relative">
                            <img class="card-img-top rounded-0" src="{{ asset('images/about/image-john.jpg') }}"
                                alt="event thumb" style="width: 255px; height: 250px; object-fit: cover;">
                        </div>
                        <div class="card-body text-center"
                            style="display: flex; flex-direction: column; align-items: center; gap: 2px;">
                            <p class="font-weight-bold" style="font-size: 13px; margin: 0;">John Vianne B. Murcia, Ph.D.
                            </p>
                            <p class="font-weight-light" style="font-size: 11px; color: red; margin: 0;">
                                Director, Institute for Economy and Enterprise Studies & University Statistician
                            </p>
                            <p class="font-weight-light"
                                style="font-size: 10px; margin: 0; display: flex; align-items: center;">
                                <i class="ti-email text-primary mr-2"></i>: jv_murcia@umindanao.edu.ph
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Analyn -->
                <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0" data-aos="zoom-in-left" data-aos-duration="1000"
                    data-aos-delay="100" data-aos-once="false">
                    <div class="card border-0 rounded-0 hover-shadow">
                        <div class="card-img position-relative">
                            <img class="card-img-top rounded-0" src="{{ asset('images/about/image-analyn.jpg') }}"
                                alt="event thumb" style="width: 255px; height: 250px; object-fit: cover;">
                        </div>
                        <div class="card-body text-center"
                            style="display: flex; flex-direction: column; align-items: center; gap: 2px;">
                            <p class="font-weight-bold" style="font-size: 13px; margin: 0;">Analyn A. CABRAS, Ph.D.</p>
                            <p class="font-weight-light" style="font-size: 11px; color: red; margin: 0;">
                                Director, Institute of Social Welfare and Human Development
                            </p>
                            <p class="font-weight-light"
                                style="font-size: 10px; margin: 0; display: flex; align-items: center;">
                                <i class="ti-email text-primary mr-2"></i>: ann.cabras24@umindanao.edu.ph
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Efrhain -->
                <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0" data-aos="zoom-in-left" data-aos-duration="1000"
                    data-aos-delay="100" data-aos-once="false">
                    <div class="card border-0 rounded-0 hover-shadow">
                        <div class="card-img position-relative">
                            <img class="card-img-top rounded-0" src="{{ asset('images/about/image-efrhain.jpg') }}"
                                alt="event thumb" style="width: 255px; height: 250px; object-fit: cover;">
                        </div>
                        <div class="card-body text-center"
                            style="display: flex; flex-direction: column; align-items: center; gap: 2px;">
                            <p class="font-weight-bold" style="font-size: 13px; margin: 0;">Efrhain Louis P. Pajota</p>
                            <p class="font-weight-light" style="font-size: 11px; color: red; margin: 0;">
                                Manager, UMasenso Hub (Technology Business Incubation Center)
                            </p>
                            <p class="font-weight-light"
                                style="font-size: 10px; margin: 0; display: flex; align-items: center;">
                                <i class="ti-email text-primary mr-2"></i>: efrhain_pajota@umindanao.edu.ph
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Melissa -->
                <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0" data-aos="zoom-in-left" data-aos-duration="1000"
                    data-aos-delay="100" data-aos-once="false">
                    <div class="card border-0 rounded-0 hover-shadow">
                        <div class="card-img position-relative">
                            <img class="card-img-top rounded-0" src="{{ asset('images/about/image-melissa.jpg') }}"
                                alt="event thumb" style="width: 255px; height: 250px; object-fit: cover;">
                        </div>
                        <div class="card-body text-center"
                            style="display: flex; flex-direction: column; align-items: center; gap: 2px;">
                            <p class="font-weight-bold" style="font-size: 13px; margin: 0;">Ma. Melissa T. Misagal</p>
                            <p class="font-weight-light" style="font-size: 11px; color: red; margin: 0;">
                                Technology Officer, UMasenso Hub
                            </p>
                            <p class="font-weight-light"
                                style="font-size: 10px; margin: 0; display: flex; align-items: center;">
                                <i class="ti-email text-primary mr-2"></i>: mmisagalx@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Jomari -->
                <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0" data-aos="zoom-in-left" data-aos-duration="1000"
                    data-aos-delay="100" data-aos-once="false">
                    <div class="card border-0 rounded-0 hover-shadow">
                        <div class="card-img position-relative">
                            <img class="card-img-top rounded-0" src="{{ asset('images/about/image-jomari.jpg') }}"
                                alt="event thumb" style="width: 255px; height: 250px; object-fit: cover;">
                        </div>
                        <div class="card-body text-center"
                            style="display: flex; flex-direction: column; align-items: center; gap: 2px;">
                            <p class="font-weight-bold" style="font-size: 13px; margin: 0;">Jomari Lloyd D. Valdez</p>
                            <p class="font-weight-light" style="font-size: 11px; color: red; margin: 0;">
                                Multimedia Officer, UMasenso Hub
                            </p>
                            <p class="font-weight-light"
                                style="font-size: 10px; margin: 0; display: flex; align-items: center;">
                                <i class="ti-email text-primary mr-2"></i>: jomarivaldez01@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Vanesa -->
                <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0" data-aos="zoom-in-left" data-aos-duration="1000"
                    data-aos-delay="100" data-aos-once="false">
                    <div class="card border-0 rounded-0 hover-shadow">
                        <div class="card-img position-relative">
                            <img class="card-img-top rounded-0" src="{{ asset('images/about/image-vanesa.jpg') }}"
                                alt="event thumb" style="width: 255px; height: 250px; object-fit: cover;">
                        </div>
                        <div class="card-body text-center"
                            style="display: flex; flex-direction: column; align-items: center; gap: 2px;">
                            <p class="font-weight-bold" style="font-size: 13px; margin: 0;">Vanesa Jones P. Balayo, REE.
                            </p>
                            <p class="font-weight-light" style="font-size: 11px; color: red; margin: 0;">
                                Manager, UM Technology Transfer and Intellectual Property Management Office (UM-TTIPMO)
                            </p>
                            <p class="font-weight-light"
                                style="font-size: 10px; margin: 0; display: flex; align-items: center;">
                                <i class="ti-email text-primary mr-2"></i>: balayovanesa@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Francis -->
                <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0" data-aos="zoom-in-left" data-aos-duration="1000"
                    data-aos-delay="100" data-aos-once="false">
                    <div class="card border-0 rounded-0 hover-shadow">
                        <div class="card-img position-relative">
                            <img class="card-img-top rounded-0" src="{{ asset('images/about/image-francis.jpg') }}"
                                alt="event thumb" style="width: 255px; height: 250px; object-fit: cover;">
                        </div>
                        <div class="card-body text-center"
                            style="display: flex; flex-direction: column; align-items: center; gap: 2px;">
                            <p class="font-weight-bold" style="font-size: 13px; margin: 0;">Francis Louise C. Yap</p>
                            <p class="font-weight-light" style="font-size: 11px; color: red; margin: 0;">
                                Intellectual Property Specialist, UM-TTIPMO
                            </p>
                            <p class="font-weight-light"
                                style="font-size: 10px; margin: 0; display: flex; align-items: center;">
                                <i class="ti-email text-primary mr-2"></i>: francislouisecyap@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Karen -->
                <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0" data-aos="zoom-in-left" data-aos-duration="1000"
                    data-aos-delay="100" data-aos-once="false">
                    <div class="card border-0 rounded-0 hover-shadow">
                        <div class="card-img position-relative">
                            <img class="card-img-top rounded-0" src="{{ asset('images/about/image-karen.jpg') }}"
                                alt="event thumb" style="width: 255px; height: 250px; object-fit: cover;">
                        </div>
                        <div class="card-body text-center"
                            style="display: flex; flex-direction: column; align-items: center; gap: 2px;">
                            <p class="font-weight-bold" style="font-size: 13px; margin: 0;">Karen Gale L. Alarcon</p>
                            <p class="font-weight-light" style="font-size: 11px; color: red; margin: 0;">
                                Administrative Assistant
                            </p>
                            <p class="font-weight-light"
                                style="font-size: 10px; margin: 0; display: flex; align-items: center;">
                                <i class="ti-email text-primary mr-2"></i> : rpc@umindanao.edu.ph
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .card {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            flex-grow: 1;
        }
    </style>
@endsection