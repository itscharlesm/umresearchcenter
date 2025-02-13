@extends('layouts.themes.main')
@section('content')
    <section class="section mb-5">
        <div class="container">
            <div class="content-header" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100"
                data-aos-once="false" style="margin-top: 150px">
                <x-content-header title="History" />
            </div>
            <x-breadcrumb :items="[
                ['label' => 'Home', 'url' => url('/'), 'active' => false],
                ['label' => 'History', 'url' => '#', 'active' => true],
            ]" />
            <div class="col-md-12 order-1 order-md-1 mb-4 mb-md-0">
                <img class="img-fluid w-100" data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="100"
                    data-aos-once="false" src="{{ asset('images/about/history.webp') }}" alt="about image">
            </div>
            <div class="col-md-12 order-2 order-md-2 mt-5">
                <h3 class="section-title" data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="100"
                    data-aos-once="false">𝐂𝐄𝐍𝐓𝐑𝐀𝐋 𝐌𝐈𝐍𝐃𝐀𝐍𝐀𝐎 𝐂𝐎𝐋𝐋𝐄𝐆𝐄𝐒: 𝐀 𝐋𝐄𝐆𝐀𝐂𝐘 𝐎𝐅
                    𝐄𝐗𝐂𝐄𝐋𝐋𝐄𝐍𝐂𝐄 𝐀𝐍𝐃 𝐈𝐍𝐍𝐎𝐕𝐀𝐓𝐈𝐎𝐍</h3>
                <h4 data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100" data-aos-once="false">𝐂𝐌𝐂
                    𝐇𝐢𝐬𝐭𝐨𝐫𝐲</h4>
                <p class="text-justify">In the aftermath of World War II, emerged a beacon of hope and enlightenment –
                    Central Mindanao Colleges (CMC). Founded on July 3, 1947, by the forward-thinking Datu Udtog Matalam,
                    CMC was more than just an educational institution; it was a testament to resilience, vision, and the
                    unwavering commitment to shape a brighter future for generations to come. From its humble beginnings in
                    Kidapawan City, North Cotabato, CMC has evolved into an educational powerhouse, leaving an indelible
                    mark on the landscape of Philippine education. As we explore into CMC’s rich history, we uncover a
                    legacy of excellence, leadership,
                    and transformative impact that continues to inspire and empower minds across Central Mindanao and
                    beyond.</p>
                <p class="text-justify">Under the leadership of Ms. Esperanza Abellera Sabulao, who helmed the institution
                    from 1947 to 1997,
                    it underwent a metamorphosis into a Non-sectarian Co-educational Higher Education Institution,
                    championing both academic excellence and community empowerment. Sabulao’s unyielding dedication,
                    complemented by her scholarly background, steered CMC’s trajectory towards a dual mission of academic
                    prowess and
                    societal responsibility, thereby etching a profound legacy that continues to inspire generations and
                    solidify
                    CMC’s standing as a bastion of education and empowerment within the region.
                </p>
                <p class="text-justify">
                    Since 1997, a succession of visionary leaders including Dr. Cesar M. Sabulao, Dr. Sylvia M. Ybañez, and
                    Dr. Beatriz D. Gosadan have preserved
                    CMC’s legacy of academic distinction. In June 2015, the mantle of leadership was assumed by Dr. Cynthia
                    Sabulao Asuncion, heralding an era
                    defined by innovation and an unwavering commitment to educational excellence. Dr. Asuncion’s tenure has
                    been marked by a steadfast
                    dedication to promoting excellence across all facets of the institution, engaging CMC into a forerunner
                    of educational advancement.
                    Under her stewardship, CMC embraces the transformative power of technology and globalization, equipping
                    students with the tools necessary
                    for steering the complexities of the modern world and ensuring a holistic educational experience
                    conducive to lifelong success.
                </p>
                <p class="text-justify">
                    CMC stands as a paragon of educational excellence, offering a comprehensive array of academic programs
                    spanning Secondary :
                    K-12 Senior High School Program, Tertiary, and Graduate levels. Renowned for its distinguished offerings
                    in Education, Criminology,
                    Business Administration, Engineering,
                    and Computer Science, CMC has remained at the forefront of delivering quality education.
                </p>
                <p class="text-justify">
                    In 2023, CMC has achieved a significant milestone by introducing new undergraduate programs, including
                    Bachelor of Library and Information Science, Bachelor of Science in Entrepreneurship, Bachelor of
                    Science in Industrial Security Management,
                    Bachelor of Science in Social Work and Bachelor in Early Childhood Education, addressing societal needs
                    and industry demands.
                    Concurrently, CMC expanded its academic offerings to encompass Graduate School Education, featuring
                    master’s programs in Education,
                    with major in Educational Administration, English, Mathematics, Science, Filipino, and Social Studies,
                    thus enabling professionals to
                    pursue advanced studies. Furthermore, strategic collaborations with the Technical Education and Skills
                    Development Authority (TESDA)
                    facilitated the implementation of practical initiatives such as the Computer Servicing program, ensuring
                    students acquire pertinent
                    technical skills aligned with industry requirements. Through these deliberate expansions and
                    partnerships,
                    CMC reaffirms its steadfast commitment to delivering quality education,
                    empowering students for future success, and promoting socio-economic development on local and global
                    scales.
                </p>
                <p class="text-justify">
                    CMC’s dedication to excellence is further emphasized by its accreditation milestones. Attainment of
                    Level I Status accreditation in 2013
                    from the Association of Christian Schools Colleges and Universities-Accrediting Council Incorporated,
                    and subsequent achievement of
                    Level III Accreditation across various disciplines,
                    reflect CMC’s relentless pursuit of academic distinction and adherence to rigorous standards.
                </p>
                <p class="text-justify">
                    Beyond academe, CMC engages in impactful research endeavors, addressing pressing societal issues with
                    the support of
                    dedicated faculty and its student support services and resources. Collaborations with communities,
                    governments,
                    and global organizations exemplify CMC’s commitment to effecting real-world change and empowering
                    students to become
                    catalysts for positive transformation. Additionally, through outreach programs and internationalization
                    initiatives,
                    CMC extends its influence locally and globally,
                    promoting cross-cultural understanding and driving positive change.
                </p>
                <p class="text-justify">
                    As CMC celebrates its 77th anniversary and embarks on the construction of the CMC Annex Building, it
                    symbolizes a transformative journey
                    reaffirming its dedication to nurturing future leaders and professionals.
                    It stands at the threshold of a new era, poised to embark on a journey of even greater significance and
                    impact.
                </p>
                <p class="text-justify">
                    With each passing year, CMC reaffirms its commitment to excellence, innovation, and societal progress,
                    guided by the principles
                    instilled by its visionary founders and nurtured by generations of dedicated educators and leaders. As
                    we look towards the future,
                    let us remember that the legacy of CMC is not merely measured in years or accolades,
                    but in the countless lives it has touched, the minds it has ignited, and the transformative changes it
                    has sparked.
                </p>
                <p class="text-justify">
                    With its unwavering dedication, boundless determination, and a shared vision of a brighter tomorrow,
                    Central Mindanao Colleges will
                    continue to brighten the path forward,
                    shaping the destiny of generations yet to come.
                </p>
                <b data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="100" data-aos-once="false">By Erolle
                    Linus T. Miranda,</b>
                <p>Institutional Marketing and</p>
                <p>Communications Officer</p>
                <p>Onward CMC!</p>
                <p> <b>𝗖𝗛𝗢𝗢𝗦𝗘 𝗖𝗠𝗖,</b></p>
                <p><b>𝗖𝗛𝗢𝗢𝗦𝗘 𝗘𝗫𝗖𝗘𝗟𝗟𝗘𝗡𝗖𝗘!</b></p>
                <p>#Choose𝗖𝗠𝗖 #KidapawanCity</p>
                <p>#cmcignitinghopeempoweringlives</p>
                <p>#CMC77YearsCommittedExcellence</p>
            </div>
        </div>
    </section>
@endsection
