@extends('layouts.themes.main')
@section('content')
    <section class="section ">
        <div class="container">
            <div class="content-header" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100"
                data-aos-once="false" style="margin-top: 100px">
                <x-content-header title=" Journal of Business Management Research" />
            </div>
            <x-breadcrumb :items="[
                ['label' => 'Home', 'url' => route('home'), 'active' => false],
                [
                    'label' => ' Journal of Business Management Research',
                    'url' => '#',
                    'active' => true,
                ],
            ]" />
            <center>
                <article class="col-md-12">
                    <img class="img-fluid" data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="100"
                        data-aos-once="false" src="{{ asset('images/research/criminal-justice-studies.webp') }}"
                        alt="criminal justice studies">
                </article>
            </center>

            <article class="col-md-12 order-2 order-md-2 mt-5">
                <h3 class="text-justify">
                    <a href="#">Job Performance and Job Satisfaction in Relation to The Turnover Intention of
                        Employees in A Selected College in Kidapawan City</a>
                </h3>
                <div class="row align-items-space-between">
                    <div class="col-md-8">
                        <h6>Gwendoleen L. Halangdon, Wenberly A. Duropan, Maychelle C. Tuting, Maria Eliza V. Waga, Analieza
                            L. Dahan Jerico I. Lozado, Blessilda D. Bayoy, R-nel R. Belgira</h6>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="btn btn-primary btn-sm">Read More</a>
                    </div>
                </div>
            </article>
            <article class="col-md-12 order-2 order-md-2 mt-5">
                <h3 class="text-justify">
                    <a href="#">Job Performance and Job Satisfaction in Relation to The Turnover Intention of
                        Employees in A Selected College in Kidapawan City</a>
                </h3>
                <div class="row align-items-space-between">
                    <div class="col-md-8">
                        <h6>Gwendoleen L. Halangdon, Wenberly A. Duropan, Maychelle C. Tuting, Maria Eliza V. Waga, Analieza
                            L. Dahan Jerico I. Lozado, Blessilda D. Bayoy, R-nel R. Belgira</h6>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="btn btn-primary btn-sm">Read More</a>
                    </div>
                </div>
            </article>
            <article class="col-md-12 order-2 order-md-2 mt-5">
                <h3 class="text-justify">
                    <a href="#">Job Performance and Job Satisfaction in Relation to The Turnover Intention of
                        Employees in A Selected College in Kidapawan City</a>
                </h3>
                <div class="row align-items-space-between">
                    <div class="col-md-8">
                        <h6>Gwendoleen L. Halangdon, Wenberly A. Duropan, Maychelle C. Tuting, Maria Eliza V. Waga, Analieza
                            L. Dahan Jerico I. Lozado, Blessilda D. Bayoy, R-nel R. Belgira</h6>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="btn btn-primary btn-sm">Read More</a>
                    </div>
                </div>
            </article>
            <article class="col-md-12 order-2 order-md-2 mt-5">
                <h3 class="text-justify">
                    <a href="#">Job Performance and Job Satisfaction in Relation to The Turnover Intention of
                        Employees in A Selected College in Kidapawan City</a>
                </h3>
                <div class="row align-items-space-between">
                    <div class="col-md-8">
                        <h6>Gwendoleen L. Halangdon, Wenberly A. Duropan, Maychelle C. Tuting, Maria Eliza V. Waga, Analieza
                            L. Dahan Jerico I. Lozado, Blessilda D. Bayoy, R-nel R. Belgira</h6>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="btn btn-primary btn-sm">Read More</a>
                    </div>
                </div>
            </article>
            <article class="col-md-12 order-2 order-md-2 mt-5">
                <h3 class="text-justify">
                    <a href="#">Job Performance and Job Satisfaction in Relation to The Turnover Intention of
                        Employees in A Selected College in Kidapawan City</a>
                </h3>
                <div class="row align-items-space-between">
                    <div class="col-md-8">
                        <h6>Gwendoleen L. Halangdon, Wenberly A. Duropan, Maychelle C. Tuting, Maria Eliza V. Waga, Analieza
                            L. Dahan Jerico I. Lozado, Blessilda D. Bayoy, R-nel R. Belgira</h6>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="btn btn-primary btn-sm">Read More</a>
                    </div>
                </div>
            </article>
        </div>
    </section>
@endsection
