@extends('layouts.themes.main')
@section('content')
    <section class="section bg-grey">
        <div class="container lg-10">
            @include('layouts.partials.alerts')
            <!-- Title -->
            <div class="content-header text-center" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100"
                data-aos-once="false" style="margin-top: 100px;">
                <x-content-header title="CONTACT US" />
            </div>
            <!-- Breadcrumb -->
            <x-breadcrumb :items="[
                ['label' => 'Home', 'url' => url('/'), 'active' => false],
                ['label' => 'Contact Us', 'url' => '#', 'active' => true],
            ]" />
            <div class="row justify-content-center">
                <!-- Left Section: Contact Information -->
                <div class="col-md-5">
                    <div class="p-4 bg-white shadow-sm rounded">
                        <h4 class="text-danger font-italic">Quick Contact</h4>
                        <p>
                            <i class="fas fa-map-marker-alt text-danger"></i>
                            <strong>Address:</strong> Research and Publication Center, University of Mindanao, Room H1C, DPT
                            Building, Matina Campus, Davao City
                        </p>
                        <p>
                            <i class="fas fa-phone-alt text-danger"></i>
                            <strong>Phone:</strong> 082 305-0645/47 loc 174, 082 244-3457-58 loc 174
                        </p>
                        <p>
                            <i class="fas fa-envelope text-danger"></i>
                            <strong>Email:</strong> rpc@umindanao.edu.ph
                        </p>
                        <p>
                            <i class="fab fa-facebook text-danger"></i>
                            <strong>Facebook:</strong> University of Mindanao Research and Publication Center
                        </p>
                    </div>
                </div>

                <!-- Right Section: Contact Form -->
                <div class="col-md-6">
                    <div class="p-4 bg-white shadow-sm rounded">
                        <form action="{{ url('about/contact-us/message') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name" name="con_name" required>
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="Your Number" name="con_number"
                                    required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Mail" name="con_email"
                                    required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="4" placeholder="Your Message..." name="con_message" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-danger btn-block">
                                SEND MESSAGE
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection