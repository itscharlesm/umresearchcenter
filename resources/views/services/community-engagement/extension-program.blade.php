@extends('layouts.themes.main')
@section('content')
    <section class="section ">
        <div class="container">
            <div class="content-header" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100"
                data-aos-once="false" style="margin-top: 100px;">
                <x-content-header title="Community Extension Programs" />
            </div>
            <x-breadcrumb :items="[
                ['label' => 'Home', 'url' => route('home'), 'active' => false],
                ['label' => 'Community Extension Programs', 'url' => '#', 'active' => true],
            ]" />


            <div class="col-md-12 mt-5 mb-4 mb-md-0">
                <h3>
                    CENTER FOR SOCIAL ACTION PROGRAMS
                </h3>
                <p class="text-monospace text-justify mr-3" style="line-height: 2rem">
                    The programs of the CSA Office aims to continue its strong engagement in serving the Filipino people
                    and to realize the school’s mission of engaging in responsive extension programs; we encourage the
                    CMCian Community to participate in the programs and activities of their respective departments under
                    our office. We also encourage the participation of the teaching and non – teaching personnel of the
                    institution.
                </p>
                <h4>
                    Our Social Responsibility initiatives under CSA Office focuses on the four-pronged programs:
                </h4>
                <ul>
                    <li class="py-2" style="line-height: 2rem">
                        <b>a. Education Program</b> – this program includes literacy and numeracy, values education, and
                        social
                        awareness. The activities are geared towards the basics of learning and integrating good values,
                        and making them more involved in social issues and concerns that affect their way of living.
                    </li>
                    <li class="py-2" style="line-height: 2rem">
                        <b>b. Livelihood Program</b> – this program is geared towards training the
                        beneficiaries on more labor and cost-efficient methods of doing livelihood projects and
                        providing venues wherein the recipients can acquire basic entrepreneurial skills, livelihood
                        skills, and other related abilities.
                    </li>
                    <li class="py-2" style="line-height: 2rem">
                        <b>c. Environmental Management Program</b> – this program is directed at training people on
                        creating initiatives and working on environmental conservation, preservation, and rehabilitation
                        (CPR) affecting changes and development in the health condition.
                    </li>
                    <li class="py-2" style="line-height: 2rem">
                        <b>d. Health and Wellness Development Program</b>– this program is geared towards providing a
                        venue for people to recognize the importance of self–discipline, sportsmanship, and camaraderie.
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection
