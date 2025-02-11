@extends('layouts.themes.main')
@section('content')
    <section class="section ">
        <div class="container">
            <div class="content-header" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100"
                data-aos-once="false" style="margin-top: 150px">
                <x-content-header title="Research & Publication Updates" />
            </div>
            <x-breadcrumb :items="[
                ['label' => 'Home', 'url' => route('home'), 'active' => false],
                [
                    'label' => 'Research & Publication Updates',
                    'url' => '#',
                    'active' => true,
                ],
            ]" />
            <div class="col-md-12 order-2 order-md-2 mt-5">
                <h2 class="text-justify">
                    Central Mindanao Colleges – thru its Research and Publication Office and in collaboration with the
                    Graduate School Education Students, hosts its 2nd International Multidisciplinary Research Conference –
                    Graduate School Category
                </h2>
                <p class="text-justify text-monospace">
                    In commemoration of the 74th Founding Anniversary of Central Mindanao Colleges, the Office of the
                    Research and Publication (also known as the Research and Development Office) in collaboration with the
                    Graduate School Education students, faculty and staff, successfully organized and conducted its Second
                    International Multidisciplinary Research Conference on January 15-16, 2022. The event proceeding was
                    composed of two parts, the first day earmarked for the Plenary Session which featured two keynote
                    speakers and topic discussion.
                </p>
                <p class="text-justify text-monospace">
                    The research conference aimed to enable researchers to discuss, share, and expand boundaries of
                    knowledge and research interest by providing a venue for researchers of various disciplines. To learn
                    and forge partnerships and collaborative agreements between and among/between resource speakers and
                    participants. A showcase opportunity and an exhibit of organizational practices.
                </p>

                <p class="text-justify text-monospace">
                    Research Partners were invited to speak and give their message for the activity. One of the honored
                    guests was Dr. Jeswani Saket, a professor at OP Jindal University, Institute of Management in Sambalpur,
                    Raighar and Dr. Felix C. Chavez, Jr., Proponent of the FCJ Professional Research and Consultation. Dr.
                    Natividad G. Ocon, OIC – Superintendent of the Department of Education (DepEd), Kidapawan City.
                </p>
                <p class="text-justify text-monospace">
                    During the plenary session, the first keynote speaker was Dr. Basheer Hussein Motawe Altarturi,
                    Assistant Professor at the School of Management and Finance, Hebron University in Palestine, who
                    presented and discussed the topic on “Methodological Challenges and Relevant Approaches in the New
                    Normal”. The second keynote speaker was Dr. Kamola Bayram, an Assistant Professor at KTO Karatay
                    University, in Turkey, who presented and discussed the topic on “Recent Advances in Fostering Research
                    Integrity”
                </p>
                <p class="text-justify text-monospace">
                    The second day was designed for the breakout sessions which was a
                    showcase of multidisciplinary
                    researchers presented in an Oral Presentation. Different presenters, as well as participants, coming
                    from different schools such as, the Universidad de Zamboanga, University of Immaculate Conception,
                    University of Mindanao, Jose Maria College and faculty members from the Department of Education,
                    presented researchers of multiple discipline. The clustering was mixed with at least 10-11 presenters
                    per room. At the end of the presentation, Best Papers were determined by the Best Paper Awards
                    Committee, with the following results:
                </p>


                <h3>Best Paper Awardees:</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">
                                Best Paper (1st Place)
                            </th>
                            <th scope="col">Best Paper (1st Place)</th>
                            <th scope="col">Best Paper (1st Place)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Multimedia Literacy Towards Students’ Academic Achievement as Mediated by Academic
                                Adaptability: A Convergent Design</td>
                            <td>Multimedia Literacy Towards Students’ Academic Achievement as Mediated by Academic
                                Adaptability: A Convergent Design</td>
                            <td>Multimedia Literacy Towards Students’ Academic Achievement as Mediated by Academic
                                Adaptability: A Convergent Design</td>
                        </tr>
                        <tr>
                            <td>Junaina M. Dilangalen</td>
                            <td>Junaina M. Dilangalen</td>
                            <td>Junaina M. Dilangalen</td>
                        </tr>
                        <tr>
                            <td>
                                Central Mindanao Colleges
                            </td>
                            <td>
                                Central Mindanao Colleges
                            </td>
                            <td>
                                Central Mindanao Colleges
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
