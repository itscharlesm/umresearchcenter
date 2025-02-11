@extends('layouts.themes.main')
@section('content')
    <section class="section ">
        <div class="container">
            <div class="content-header" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100"
                data-aos-once="false" style="margin-top: 100px">
                <x-content-header title=" Compendium of Abstracts" />
            </div>
            <x-breadcrumb :items="[
                ['label' => 'Home', 'url' => route('home'), 'active' => false],
                [
                    'label' => ' Compendium of Abstracts',
                    'url' => '#',
                    'active' => true,
                ],
            ]" />

            <div class="row align-items-center">
                <article class="col-md-6">
                    <x-research-content-header title=" Latest" />
                    <div
                        class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow mb-3 p-3">
                        <h4 class="text-justify card-title">
                            <a href="#">EXPLORING TEACHERS’ PERSPECTIVES ON ADAPTING EDUCATION IN A POST-PANDEMIC ERA:
                                A QUALITATIVE STUDY</a>
                        </h4>
                        <div class="card-body">
                            <!-- post meta -->
                            <ul class="list-inline mb-3">
                                <!-- post date -->
                                <li class="list-inline-item mr-3 ml-0">Stephanie S. Villegas</li>
                                <li class="list-inline-item mr-3 ml-0"> Published : 2024-11-28</li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow mb-3 p-3">
                        <h4 class="text-justify card-title">
                            <a href="#">EXPLORING TEACHERS’ PERSPECTIVES ON ADAPTING EDUCATION IN A POST-PANDEMIC ERA:
                                A QUALITATIVE STUDY</a>
                        </h4>
                        <div class="card-body">
                            <!-- post meta -->
                            <ul class="list-inline mb-3">
                                <!-- post date -->
                                <li class="list-inline-item mr-3 ml-0">Stephanie S. Villegas</li>
                                <li class="list-inline-item mr-3 ml-0"> Published : 2024-11-28</li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow mb-3 p-3">
                        <h4 class="text-justify card-title">
                            <a href="#">EXPLORING TEACHERS’ PERSPECTIVES ON ADAPTING EDUCATION IN A POST-PANDEMIC ERA:
                                A QUALITATIVE STUDY</a>
                        </h4>
                        <div class="card-body">
                            <!-- post meta -->
                            <ul class="list-inline mb-3">
                                <!-- post date -->
                                <li class="list-inline-item mr-3 ml-0">Stephanie S. Villegas</li>
                                <li class="list-inline-item mr-3 ml-0"> Published : 2024-11-28</li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow mb-3 p-3">
                        <h4 class="text-justify card-title">
                            <a href="#">EXPLORING TEACHERS’ PERSPECTIVES ON ADAPTING EDUCATION IN A POST-PANDEMIC ERA:
                                A QUALITATIVE STUDY</a>
                        </h4>
                        <div class="card-body">
                            <!-- post meta -->
                            <ul class="list-inline mb-3">
                                <!-- post date -->
                                <li class="list-inline-item mr-3 ml-0">Stephanie S. Villegas</li>
                                <li class="list-inline-item mr-3 ml-0"> Published : 2024-11-28</li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow mb-3 p-3">
                        <h4 class="text-justify card-title">
                            <a href="#">EXPLORING TEACHERS’ PERSPECTIVES ON ADAPTING EDUCATION IN A POST-PANDEMIC ERA:
                                A QUALITATIVE STUDY</a>
                        </h4>
                        <div class="card-body">
                            <!-- post meta -->
                            <ul class="list-inline mb-3">
                                <!-- post date -->
                                <li class="list-inline-item mr-3 ml-0">Stephanie S. Villegas</li>
                                <li class="list-inline-item mr-3 ml-0"> Published : 2024-11-28</li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow mb-3 p-3">
                        <h4 class="text-justify card-title">
                            <a href="#">EXPLORING TEACHERS’ PERSPECTIVES ON ADAPTING EDUCATION IN A POST-PANDEMIC ERA:
                                A QUALITATIVE STUDY</a>
                        </h4>
                        <div class="card-body">
                            <!-- post meta -->
                            <ul class="list-inline mb-3">
                                <!-- post date -->
                                <li class="list-inline-item mr-3 ml-0">Stephanie S. Villegas</li>
                                <li class="list-inline-item mr-3 ml-0"> Published : 2024-11-28</li>
                            </ul>
                        </div>
                    </div>
                </article>

                <article class="col-md-6">
                    <x-research-content-header title=" Most Viewed" />
                    {{-- content 1 --}}
                    <div
                        class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow mb-3 p-3">
                        <h4 class="text-justify card-title">
                            <a href="#">ACADEMIC CHALLENGES OF INDIGENOUS PEOPLES: A QUALITATIVE STUDY</a>
                        </h4>
                        <div class="card-body">
                            <!-- post meta -->
                            <ul class="list-inline mb-3">
                                <!-- post date -->
                                <li class="list-inline-item mr-3 ml-0">Marissa E. Casas Victor G. Quiambao Jr.</li>
                                <li class="list-inline-item mr-3 ml-0">Published : Sep 26, 2024 </li>
                            </ul>
                        </div>
                    </div>
                    {{-- content 2 --}}
                    <div
                        class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow mb-3 p-3">
                        <h4 class="text-justify card-title">
                            <a href="#">ACADEMIC CHALLENGES OF INDIGENOUS PEOPLES: A QUALITATIVE STUDY</a>
                        </h4>
                        <div class="card-body">
                            <!-- post meta -->
                            <ul class="list-inline mb-3">
                                <!-- post date -->
                                <li class="list-inline-item mr-3 ml-0">Marissa E. Casas Victor G. Quiambao Jr.</li>
                                <li class="list-inline-item mr-3 ml-0">Published : Sep 26, 2024 </li>
                            </ul>
                        </div>
                    </div>
                    {{-- content 1 --}}
                    <div
                        class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow mb-3 p-3">
                        <h4 class="text-justify card-title">
                            <a href="#">ACADEMIC CHALLENGES OF INDIGENOUS PEOPLES: A QUALITATIVE STUDY</a>
                        </h4>
                        <div class="card-body">
                            <!-- post meta -->
                            <ul class="list-inline mb-3">
                                <!-- post date -->
                                <li class="list-inline-item mr-3 ml-0">Marissa E. Casas Victor G. Quiambao Jr.</li>
                                <li class="list-inline-item mr-3 ml-0">Published : Sep 26, 2024 </li>
                            </ul>
                        </div>
                    </div>
                    {{-- content 2 --}}
                    <div
                        class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow mb-3 p-3">
                        <h4 class="text-justify card-title">
                            <a href="#">ACADEMIC CHALLENGES OF INDIGENOUS PEOPLES: A QUALITATIVE STUDY</a>
                        </h4>
                        <div class="card-body">
                            <!-- post meta -->
                            <ul class="list-inline mb-3">
                                <!-- post date -->
                                <li class="list-inline-item mr-3 ml-0">Marissa E. Casas Victor G. Quiambao Jr.</li>
                                <li class="list-inline-item mr-3 ml-0">Published : Sep 26, 2024 </li>
                            </ul>
                        </div>
                    </div>
                    {{-- content 1 --}}
                    <div
                        class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow mb-3 p-3">
                        <h4 class="text-justify card-title">
                            <a href="#">ACADEMIC CHALLENGES OF INDIGENOUS PEOPLES: A QUALITATIVE STUDY</a>
                        </h4>
                        <div class="card-body">
                            <!-- post meta -->
                            <ul class="list-inline mb-3">
                                <!-- post date -->
                                <li class="list-inline-item mr-3 ml-0">Marissa E. Casas Victor G. Quiambao Jr.</li>
                                <li class="list-inline-item mr-3 ml-0">Published : Sep 26, 2024 </li>
                            </ul>
                        </div>
                    </div>
                    {{-- content 2 --}}
                    <div
                        class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow mb-3 p-3">
                        <h4 class="text-justify card-title">
                            <a href="#">ACADEMIC CHALLENGES OF INDIGENOUS PEOPLES: A QUALITATIVE STUDY</a>
                        </h4>
                        <div class="card-body">
                            <!-- post meta -->
                            <ul class="list-inline mb-3">
                                <!-- post date -->
                                <li class="list-inline-item mr-3 ml-0">Marissa E. Casas Victor G. Quiambao Jr.</li>
                                <li class="list-inline-item mr-3 ml-0">Published : Sep 26, 2024 </li>
                            </ul>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection
