@extends('layouts.themes.main')
@section('content')
    <section class="section bg-grey">
        <div class="container lg-10">
            @include('layouts.partials.alerts')
            <!-- Title -->
            <div class="content-header text-center" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100"
                data-aos-once="false" style="margin-top: 100px;">
                <x-content-header title="LINKAGES" />
            </div>
            <!-- Breadcrumb -->
            <x-breadcrumb :items="[
                ['label' => 'Home', 'url' => url('/'), 'active' => false],
                ['label' => 'Linkages', 'url' => '#', 'active' => true],
            ]" />
            <div class="row">
                <!-- Attachments -->
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2 class="mb-3">INTERNATIONAL LINKAGES</h2>
                        <ul style="list-style-type: disc; padding-left: 20px;">
                            <li style="margin-bottom: 10px;">
                                <p>Australia Awards (Australia Global Alumni), Australia</p>
                            </li>
                            <li style="margin-bottom: 10px;">
                                <p>Biomass Japan, Japan</p>
                            </li>
                            <li style="margin-bottom: 10px;">
                                <p>California Academy of Science, USA</p>
                            </li>
                            <li style="margin-bottom: 10px;">
                                <p>Daugavpils University, Latvia</p>
                            </li>
                            <li style="margin-bottom: 10px;">
                                <p>National Geographic, Inc., Washington, USA</p>
                            </li>
                            <li style="margin-bottom: 10px;">
                                <p>Save the Children International & Action Against Hunger International</p>
                            </li>
                            <li style="margin-bottom: 10px;">
                                <p>Canada Museum of Nature, Canada</p>
                            </li>
                        </ul>                        
                    </div>
                    <div class="section-title">
                        <h2 class="mb-3">LOCAL AND NATIONAL LINKAGES</h2>
                        <ul style="list-style-type: disc; padding-left: 20px;">
                            <li style="margin-bottom: 10px;">
                                <p>Commission on Higher Education</p>
                            </li>
                            <li style="margin-bottom: 10px;">
                                <p>Davao Intellectual Property Society</p>
                            </li>
                            <li style="margin-bottom: 10px;">
                                <p>Davao Colleges and Universities Network (DACUN)</p>
                            </li>
                            <li style="margin-bottom: 10px;">
                                <p>Davao City Water District (DCWD)</p>
                            </li>
                            <li style="margin-bottom: 10px;">
                                <p>Davao Region Industry Energy and Engineering Research and Development Consortium (DRIEERDC)</p>
                            </li>
                            <li style="margin-bottom: 10px;">
                                <p>Davao Oriental State College of Science and Technology</p>
                            </li>
                            <li style="margin-bottom: 10px;">
                                <p>Department of Interior and Local Government</p>
                            </li>
                            <li style="margin-bottom: 10px;">
                                <p>Department of Environment and Natural Resources Office XI</p>
                            </li>
                            <li style="margin-bottom: 10px;">
                                <p>Department of Science and Technology XI</p>
                            </li>
                            <li style="margin-bottom: 10px;">
                                <p>Franklin Baker</p>
                            </li>
                            <li style="margin-bottom: 10px;">
                                <p>Research Association of Colleges and Universities in Region XI (RACUR XI)</p>
                            </li>
                            <li style="margin-bottom: 10px;">
                                <p>Idealsearch Consulting Company</p>
                            </li>
                            <li style="margin-bottom: 10px;">
                                <p>IPOPHIL</p>
                            </li>
                            <li style="margin-bottom: 10px;">
                                <p>Konrad Adenauer Stiftung - Democratic Leadership and Active Civil Society Employment</p>
                            </li>
                            <li style="margin-bottom: 10px;">
                                <p>Mindanao Development Authority</p>
                            </li>
                            <li style="margin-bottom: 10px;">
                                <p>Nippon Steel & Sumikin Engineering Co. Ltd.</p>
                            </li>
                            <li style="margin-bottom: 10px;">
                                <p>Protected Area Management Board of Mt. Hamiguitan Range Wildlife and Sanctuary</p>
                            </li>
                            <li style="margin-bottom: 10px;">
                                <p>Peace and Equity Foundation</p>
                            </li>
                            <li style="margin-bottom: 10px;">
                                <p>Philippine National Police - Special Action Force</p>
                            </li>
                            <li style="margin-bottom: 10px;">
                                <p>PNP RHS-XI</p>
                            </li>
                            <li style="margin-bottom: 10px;">
                                <p>Sagittarius Mines, Incorporated</p>
                            </li>
                            <li style="margin-bottom: 10px;">
                                <p>Sultan Kudarat State University, Sultan Kudarat</p>
                            </li>
                            <li style="margin-bottom: 10px;">
                                <p>Western Mindanao State University, Zamboanga City</p>
                            </li>
                        </ul>                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection