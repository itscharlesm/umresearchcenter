@extends('layouts.themes.main')
@section('content')
    <section class="section bg-grey">
        <div class="container lg-10">
            <!-- Title -->
            <div class="content-header text-center" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100"
                data-aos-once="false" style="margin-top: 100px;">
                <x-content-header title="INSTITUTE OF SOCIAL WELFARE AND HUMAN DEVELOPMENT STUDIES" />
            </div>
            <!-- Breadcrumb -->
            <x-breadcrumb :items="[
                ['label' => 'Home', 'url' => url('/'), 'active' => false],
                ['label' => 'Institutes', 'url' => '#', 'active' => true],
                ['label' => 'Social Welfare and Human Development Studies', 'url' => '#', 'active' => true],
            ]" />
            <div class="row">
                <!-- Attachments -->
                <div class="col-lg-12">
                    <div class="section-title">
                        <p class="font-weight-light text-justify">
                            The Institute OF Social Welfare and Human Development(ISWHD) takes the lead in advancing studies
                            and analyses on human welfare, institution and social protection, gender and development,
                            governance and community life. It endeavors to generate information that are relevant and useful
                            for policy creation, action planning and social practices. It assumes the pivotal role to bring
                            together the government, socio-civic groups and private, interested societies to discuss matters
                            crucial to human protection, institutional sustainability, welfare goals, improvement of life
                            and social equity. It shall take center stage current debates and discourses that may impact the
                            quality and dignity of public life. For more information, please email
                            <em><strong>iswhd@umindanao.edu.ph</strong></em>
                        </p>
                    </div>
                </div>
            </div>
    </section>
@endsection