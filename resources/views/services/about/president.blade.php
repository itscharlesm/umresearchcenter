@extends('layouts.themes.main')
@section('content')
    <section class="section ">
        <div class="container mt-5">
            <div class="content-header" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100"
                data-aos-once="false">
                <x-content-header title="CMC President" />
            </div>
            <x-breadcrumb :items="[
                ['label' => 'Home', 'url' => url('/'), 'active' => false],
                ['label' => 'CMC President', 'url' => '#', 'active' => true],
            ]" />
            <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0 mt-5">
                <img class="img-fluid w-50 h-50" src="{{ asset('images/about/president_cmc.webp') }}" alt="about image">
            </div>
            <div class="col-md-12 order-2 order-md-2 mt-5">
                <h3 class="section-title" data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="100"
                    data-aos-once="false">President of Central Mindanao College</h3>
                <p class="text-justify">
                    Welcome to Central Mindanao Colleges, and thank you for taking the time to learn more about us by
                    visiting this website.
                    It contains many resources for you to learn about CMC.
                </p>
                <p class="text-justify">“Education is not preparation for life. Education is life itself.” This famous
                    quotation by John Dewey is,
                    I believe, the most important reason we are all here at Central Mindanao Colleges. Ours is
                    community-centered on our students’ excellence and success, providing exceptional experiences and
                    connections to successful careers.
                    Here you will find exceptional experiences that allow you to grow and develop, explore new interests,
                    and fully realize your potential.
                </p>
                <p class="text-justify">
                    We provide you with holistic education to pursue global excellence, and career-ready graduates have
                    always been central to our vision.
                    Through a process that includes career exploration and professional preparation,
                    we connect you with career paths and foster the skills and mindset needed for professional advancement.
                    Our mission is to provide you with quality instruction, develop innovative research, and engage you in
                    responsive extension programs committed to producing competent and socially responsible individuals who
                    can carry out responsibilities for the local and global communities.[/one_half]
                </p>
                <p class="text-justify">
                    By becoming a CMCian means, you are part of a close-knit community, which we nurture the value of family
                    orientation that will support you
                    from day one and helps you achieve your vision of success. Learning in the new normal is truly
                    challenging, but you will all be ready to face the world of work with God’s grace and assistance from
                    all our teachers. You will find mentors in our faculty, staff and,
                    through our campus’ rich social and cultural life, you will make connections and friendships that will
                    last a lifetime.
                </p>
                <p class="text-justify">
                    Here, you will find the guidance and support to do this. Whether you want to develop your leadership
                    skills,
                    explore your passion for the arts, serve our community, conduct your research,
                    or pursue a career-defining internship.
                </p>
                <p class="text-justify">
                    And today, we convey its importance to you.
                    All together, we can assist you in pursuing your educational goals and aspirations here at Central
                    Mindanao Colleges.
                </p>
                <p class="text-justify">
                    When you walk across the stage as CMCian graduates at commencement, you will have more than just a
                    degree from Central Mindanao Colleges.
                    You will have career direction and the confidence needed for success in your chosen field.
                </p>
                <p class="text-justify">
                    As we move towards our 74th year, I welcome you all our dear students. We are so happy and proud that
                    you have chosen CMC as your school of choice. With the new normal, we are engaged in flexible learning
                    modalities.
                    On behalf of management, we warmly welcome all our new students and loyal students to the college and
                    formally induct and celebrate new students’ entry into higher education.
                </p>
                <p class="text-justify">
                    Stay with us at CMC, and I am very confident that you can surely face the world equipped with all the
                    knowledge, skills,
                    and values you have gained here when you graduate.
                </p>
                <p class="text-justify">
                    With best wishes with your LIFE here at CMC.
                </p>
                <b data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="100" data-aos-once="false">DR. CYNTHIA
                    S. ASUNCION</b>
            </div>
        </div>
    </section>
@endsection
