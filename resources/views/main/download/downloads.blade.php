@extends('layouts.themes.main')
@section('content')
    <section class="section bg-grey">
        <div class="container lg-10">
            <!-- Title -->
            <div class="content-header text-center" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100"
                data-aos-once="false" style="margin-top: 100px;">
                <x-content-header title="DOWNLOADS" />
            </div>
            <!-- Breadcrumb -->
            <x-breadcrumb :items="[
                ['label' => 'Home', 'url' => url('/'), 'active' => false],
                ['label' => 'Downloads', 'url' => '#', 'active' => true],
            ]" />
            <div class="row">
                <!-- Attachments -->
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2 class="mb-3">Important Attachments</h2>
                        <ul style="list-style-type: disc; padding-left: 20px;">
                            <li style="margin-bottom: 10px;"><a
                                    href="{{ asset('images/download/Certificate of Completed Title Defense.pdf') }}"
                                    target="_blank">Certificate of Completed Title Defense.pdf</a></li>
                            <li style="margin-bottom: 10px;"><a
                                    href="{{ asset('images/download/Professional Schools - Research Presentation and Evaluation - Title.pdf') }}"
                                    target="_blank">Professional Schools - Research Presentation and Evaluation -
                                    Title.pdf</a></li>
                            <li style="margin-bottom: 10px;"><a
                                    href="{{ asset('images/download/Research Final Defense Evaluation Form - RPC.pdf') }}"
                                    target="_blank">Research Final Defense Evaluation Form - RPC.pdf</a></li>
                            <li style="margin-bottom: 10px;"><a
                                    href="{{ asset('images/download/Research Outline Evaluation Form - RPC.pdf') }}"
                                    target="_blank">Research Outline Evaluation Form - RPC.pdf</a></li>
                            <li style="margin-bottom: 10px;"><a
                                    href="{{ asset('images/download/Research Personnel Evaluation Form.pdf') }}"
                                    target="_blank">Research Personnel Evaluation Form.pdf</a></li>
                            <li style="margin-bottom: 10px;"><a
                                    href="{{ asset('images/download/Research Ranking Form.pdf') }}" target="_blank">Research
                                    Ranking Form.pdf</a></li>
                            <li style="margin-bottom: 10px;"><a
                                    href="{{ asset('images/download/Research Title Evaluation Sheet.pdf') }}"
                                    target="_blank">Research Title Evaluation Sheet.pdf</a></li>
                            <li style="margin-bottom: 10px;"><a
                                    href="{{ asset('images/download/Title Defense Guide.pdf') }}" target="_blank">Title
                                    Defense Guide.pdf</a></li>
                            <li style="margin-bottom: 10px;"><a
                                    href="{{ asset('images/download/Thesis & Capstone I - Title and Outline Evaluation Form.pdf') }}"
                                    target="_blank">Thesis & Capstone I - Title and Outline Evaluation Form.pdf</a></li>
                            <li style="margin-bottom: 10px;"><a
                                    href="{{ asset('images/download/Thesis & Capstone II - Evaluation Form.pdf') }}"
                                    target="_blank">Thesis & Capstone II - Evaluation Form.pdf</a></li>
                            <li style="margin-bottom: 10px;"><a
                                    href="{{ asset('images/download/Thesis Final Defense Evaluation Form - For Students.pdf') }}"
                                    target="_blank">Thesis Final Defense Evaluation Form - For Students.pdf</a></li>
                            <li style="margin-bottom: 10px;"><a
                                    href="{{ asset('images/download/Thesis Outline Defense Evaluation Form - For Students.pdf') }}"
                                    target="_blank">Thesis Outline Defense Evaluation Form - For Students.pdf</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
