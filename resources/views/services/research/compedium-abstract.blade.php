@extends('layouts.themes.main')
@section('content')
    <section class="section ">
        <div class="container">
            <div class="content-header" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100"
                data-aos-once="false" style="margin-top: 150px">
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
            <div class="col-md-12 order-2 order-md-2 mt-5">
                <x-research-content-header title=" Abstract" />

                <h3 class="text-justify">
                    <a href="#">CATEGORIZING RESEARCH SKILLS OF GRADUATE STUDENTS: EXPLORATORY STUDY</a>
                </h3>
                <h4>December 10, 2023</h4>
                <p class="text-justify text-monospace">
                    This study aimed to categorize the research skills among graduate students through Exploratory
                    Sequential Design. The underlying factors which emerge for each item analysis include Researchers’
                    skills and Capabilities, Researchers’ Excellent Qualities, and Researchers’ Excellent Characteristics.
                    There were 17 respondents used in the study. The data gathered through interviews, focus group
                    discussions, and survey questionnaires. It was found out in the KMO and Bartlett’s test of sphericity
                    that the factors loading of the emerging themes...
                </p>
                <a href="#" class="btn btn-primary btn-sm">Read More</a>
            </div>
            <div class="col-md-12 order-2 order-md-2 mt-5">
                <x-research-content-header title=" Abstract" />

                <h3 class="text-justify">
                    <a href="#">ANALYSIS OF THE FACTOR STRUCTURE OF EFFECTIVE TEACHER CHARACTERISTICS IN PUBLIC
                        ELEMENTARY SCHOOLS: A SEQUENTIAL EXPLORATORY DESIGN</a>
                </h3>
                <h4>December 10, 2023</h4>
                <p class="text-justify text-monospace">
                    This mixed methods study focuses on identifying the effective teacher characteristics in public
                    elementary schools in the Municipality of Makilala. A sequential exploratory mixed method design was
                    used, and it is a type of design in which qualitative and quantitative data are collected in parallel,
                    analyzed separately, and then merged. For the gathering of qualitative data, a total of 10 participants
                    participated in the In-Depth Interview and 7 participants for the Focus Group Discussion. In...
                </p>
                <a href="#" class="btn btn-primary btn-sm">Read More</a>
            </div>
            <div class="col-md-12 order-2 order-md-2 mt-5">
                <x-research-content-header title=" Abstract" />

                <h3 class="text-justify">
                    <a href="#">A SYSTEMATIC REVIEW OF STRATEGIES IN HANDLING CLASSROOM BULLYING IN SCHOOLS</a>
                </h3>
                <h4>December 10, 2023</h4>
                <p class="text-justify text-monospace">
                    This study aimed to examine the strategies in handling classroom bullying in schools, There is no
                    respondents in this study. A systematic review was used, it is the type of design that uses systematic
                    methods to collect secondary data, critically appraise research studies, and synthesize findings
                    qualitatively or quantitatively. It is designed to provide a complete, exhaustive summary of current
                    evidence relevant to a research question. The finding revealed, that the common strategies used
                    across...
                </p>
                <a href="#" class="btn btn-primary btn-sm">Read More</a>
            </div>
            <div class="col-md-12 order-2 order-md-2 mt-5">
                <x-research-content-header title=" Abstract" />

                <h3 class="text-justify">
                    <a href="#">A STRUCTURAL MODEL OF STUDENT’S ACADEMIC MOTIVATION AS PREDICTED BY PARENTAL
                        INVOLVEMENT, INSTRUCTIONAL STRATEGIES AND SCHOOL ENVIRONMENT</a>
                </h3>
                <h4>December 10, 2023</h4>
                <p class="text-justify text-monospace">
                    This study aimed to examine the performance of a structural model of student’s academic motivation as
                    predicted by parental involvement, instructional strategies and school environment of Matalam South
                    District and Matalam Central District. The respondents of this study are the 300 teachers of Matalam
                    South District and Matalam Central District. A path analysis was employed using adopted survey
                    questionnaire. The mean standard deviation, regression analysis and structural equation modeling were
                    used as statistical tools. The...
                </p>
                <a href="#" class="btn btn-primary btn-sm">Read More</a>
            </div>
            <div class="col-md-12 order-2 order-md-2 mt-5">
                <x-research-content-header title=" Abstract" />

                <h3 class="text-justify">
                    <a href="#">SCHOOL HEAD’S MANAGEMENT STYLE AND ACADEMIC OPTIMISM AS PREDICTORS OF TEACHERS
                        PROFESSIONALISM: A CONVERGENT APPROACH</a>
                </h3>
                <h4>December 10, 2023</h4>
                <p class="text-justify text-monospace">
                    This study aimed to determine School Heads’ Management Style and Academic Optimism as predictors of
                    Teacher professionalism in six schools of Kidapawan City District I, Kidapawan City Division. A
                    convergent approach was used and it is a type of design in which qualitative and quantitative data are
                    collected in parallel, analyzed separately, and then merged. A total of 205 teachers were selected using
                    the purposive sampling technique. Sets of adopted survey tools and interview guide...
                </p>
                <a href="#" class="btn btn-primary btn-sm">Read More</a>
            </div>
        </div>
    </section>
@endsection
