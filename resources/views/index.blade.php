@extends("layout/master-index-header")
@section("title") {{"index page"}} @endsection
@section("content")
<!-- ======= Start Header Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1">
                <h1 class="text-capitalize">Better Solutions For Your Future</h1>
                <h2 class="text-capitalize">We are recommended learn more study more&comma; grow your future
                </h2>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="#about" class="btn-get-started scrollto">Get Started</a>

                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img">
                <img src="{{url('/storage/logo/hero-img.png')}}" class="img-fluid animated" alt="poster"
                    data-aos="zoom-in" data-aos-delay="2000">
            </div>
        </div>
    </div>

</section>
<!-- End header Hero -->
<!-- ======= About Us Section ======= -->
<section id="about" class="about">
    <div class="container">

        <div class="section-title">
            <h2>About Us</h2>
        </div>

        <div class="row content">
            <div class="col-lg-6 mb-4">
                <div class="container bg-white p-4 rounded shadow about-p">
                    <p class="text-justify">
                        A teacher is responsible for preparing lesson plans and educating students at all levels. Their
                        duties include assigning homework, grading tests, and documenting progress. Teachers must be
                        able to
                        instruct in a variety of subjects and reach students with engaging lesson plans.
                    </p>
                </div>

                <!-- <ul>
                    <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                        consequat</li>
                    <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in
                        voluptate velit</li>
                    <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                        consequat</li>
                </ul> -->
            </div>
            <div class="col-lg-6 mb-4">
                <div class="container bg-white p-4 rounded shadow">
                    <p class="text-justify">
                        We are on the hunt for a self-motivated and experienced teacher to join our qualified team of
                        educators. As a teacher, you will be responsible for cultivating the students’ interest in
                        education
                        and development. Your responsibilities will include grading assignments, evaluating students’
                        progress, and planning educational activities.
                    </p>
                </div>

            </div>
            <div class="col-lg-12 mb-4">
                <div class="container bg-white p-4 rounded shadow">
                    <p class="text-justify">
                        You should be a competent professional with in-depth knowledge of teaching best practices and
                        legal
                        educational processes. In addition to having excellent written and verbal communication skills,
                        our
                        ideal candidate will also demonstrate outstanding presentation and interpersonal abilities.
                    </p>
                </div>

            </div>
            <div class="col-lg-12 text-center mt-4">
                <a href="{{action('App\Http\Controllers\pagesController@about')}}" class="badge bg-primary shadow">
                    About us teacher
                    <i class="fas fa fa-solid fa-arrow-up-right-from-square"></i>
                </a>
            </div>

        </div>

    </div>
</section><!-- End About Us Section -->

<!-- ======= Start motivational Section ======= -->
<section id="why-us" class="why-us section-bg ">
    <div class="container">
        <div class="row">

            <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                <div class="content">
                    <h3> What I Wish I Could Tell Them About Teaching in a Title I School</strong></h3>
                    <p>
                        “I would tell them that students who break rules at our school often don’t receive consequences.
                        Last year our school had a higher number of office referrals and in-school suspensions, so this
                        year teachers have been ‘strongly encouraged’ to deal with discipline problems themselves. That
                        means that unless the offense is severe or dangerous, students remain in class, whether or not
                        their behavior is blatantly defiant.”
                    </p>
                </div>
                <div class="content">
                    <h3> Stop Humiliating Teachers</strong></h3>
                    <p>
                        “There’s an element of this rage at bad teachers that’s hard to talk about, and so it’s often
                        avoided: the dismaying truth that we don’t know how to educate poor inner-city and rural kids in
                        this country.”
                    </p>
                </div>

                <div class="content">
                    <h3>Why Are Teachers and Kids Working in Buildings That Are Falling Apart?</strong></h3>
                    <p>
                        “The condition of a school building may have a stronger influence on student performance than
                        the combined influences of family background, socioeconomic status, school attendance and
                        behavior, according to the National Clearinghouse for Educational Statistics. More specifically,
                        students who attend better buildings have test scores ranging from 5 to 17 percentile points
                        higher than students in substandard facilities.”
                    </p>
                </div>

            </div>

            <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                style='background-image: url("/storage/logo/why-us.png");'>
                &nbsp;
            </div>
        </div>

    </div>
</section>
<!-- End motivational Section -->

<!-- ======= start top motivational Section ======= -->
<section id="skills" class="skills">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 d-flex align-items-center">
                <img src="{{url('/storage/logo/skills.png')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
                <h3>Observe new and seasoned teachers.</h3>
                <p class="fst-italic">
                    “Watching the seasoned veterans is great and useful, but don’t forget to observe new teachers, too.
                    It will give you realistic ideas about what it will be like for you right out of the gate.”
                </p>
                <div class=" pt-4 pt-lg-0 content">
                    <h3>Gather supplies early!</h3>
                    <p class="fst-italic">
                        TOPIC: Inspiration,Life Outside School
                        Career Advice
                        Essential Advice for Every Student Teacher (That We Wish Someone Would Have Told Us!)
                        As a student teacher, you need all the advice you can get as your attempt to figure out the
                        right
                        path for your teaching career. Thankfully, seasoned teachers share their best advice.
                        Danielle N. Barr on December 28, 2016
                        Advice for student teachers
                        Think back to when you were in college, just pursuing your teaching career. What advice for
                        student
                        teachers do you wish YOU would have heard? That’s exactly what Joshua asked on our Teacher
                        Helpline.
                        He said, “I am currently a college freshman pursuing elementary education. Is there anything you
                        wish someone would have told you when you were a freshman? Thank you so much!”

                        Joshua, our teachers have you covered. Here were some of their best responses.

                        1. Observe new and seasoned teachers.
                        “Watching the seasoned veterans is great and useful, but don’t forget to observe new teachers,
                        too.
                        It will give you realistic ideas about what it will be like for you right out of the gate.”
                        —Emily
                        C.

                        2. Gather supplies early!
                        “Begin gathering supplies that can be used as manipulatives in math. Buttons, bottle caps,
                        containers for measurement…anything like that. Over the years I’ve seen new teachers scrambling
                        to
                        find materials.” —Kimberly S.

                        “Find libraries that have book sales. It’s a great way to build your classroom library. Collect
                        books for K-6 because you never know what level your kids will be at.”
                    </p>

                </div>
            </div>

        </div>

    </div>
</section>
<!-- End top motivational Section -->

<!-- ======= Start Services Section ======= -->
<section id="services" class="services section-bg">
    <div class="container">

        <div class="section-title">
            <h2>Services</h2>
        </div>

        <div class="row">
            <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos-delay="100">
                <div class="icon-box">
                    <div class="icon"><i class="fa fa sfa-solid fa-pen-clip"></i></div>
                    <h4><a href="/">Exam</a></h4>
                    <p class="text-justify">An examination; a test. Examination. The definition of an exam is a test
                        administered to assess
                        someone's level of understanding or knowledge, or a medical procedure designed to determine
                        something about the state of your health. A test you take to gain admittance to a school is an
                        example of an entrance exam.</p>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos-delay="200">
                <div class="icon-box">
                    <div class="icon"><i class="fas fa fa-solid fa-video"></i></div>
                    <h4><a href="/">Video tutorial</a></h4>
                    <p class="text-justify">Tutoring is academic support provided by a master teacher; someone with deep
                        knowledge or defined
                        expertise in a particular subject or set of subjects. A tutor, formally also called an academic
                        tutor, is a person who provides assistance or tutelage to one or more people on certain subject
                        areas or skills.</p>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos-delay="300">
                <div class="icon-box">
                    <div class="icon"><i class="fas fa fa-solid fa-book-open"></i></div>
                    <h4><a href="">Education</a></h4>
                    <p class="text-justify">Education is the process of facilitating learning, or the acquisition of
                        knowledge, skills,
                        values, morals, beliefs, habits, and personal development. Education originated as transmission
                        of cultural heritage from one generation to the next. Today, educational goals increasingly
                        encompass new ideas such as liberation of learners, critical thinking about presented
                        information, skills needed for the modern society, empathy and complex vocational skills.</p>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- End Services Section -->

<!-- ======= start motivational section ======= -->
<section id="cta" class="cta">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 text-center text-lg-start">
                <a class="cta-btn align-middle" href="#">
                    <h3>Education is the power</h3>
                </a>
            </div>
            <div class="col-lg-6 cta-btn-container text-center">
                <a class="cta-btn align-middle" href="#">
                    <h3>Education is the peace</h3>
                </a>
            </div>
        </div>

    </div>
</section>
<!-- End motivational Section -->

<!-- ======= Tutorials Section ======= -->
<section id="post" class="portfolio">
    <div class="container mb-4">

        <div class="section-title">
            <h2>Tutorials</h2>
            <p>We are provide some courses videos&period;Now you can watch this video and learn more batter&period;</p>
        </div>


        <div class="row mt-4">
            <!-- tutorials content -->
            @foreach($tutorial as $row)
            <div class=" col-lg-4 col-md-6 col-sm-12 mb-4 border pt-2 pb-2">
                <div class="poster-area">
                    <a href="{{url('/watch/'.Hash::make($row->t_id))}}" class="poster-thumnail">
                        <img src="{{url($row->thumnail)}}" alt="turtorials" />
                        <span class="video-duration"><i class="fas fa fa-duotone fa-play"></i></span>
                    </a>
                    <div class="video-course mt-2">{{$row->course_name}}</div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
<!-- End tutorial Section -->


<!-- ======= Post Section ======= -->
<section id="faq" class="faq section-bg">
    <div class="container">

        <div class="section-title mb-4">
            <h2>Post</h2>
            <p>
                A person or thing regarded with especial preference or liking&period; A favourite book&period; Sport a
                competitor thought likely to win&period;
                <a href="{{action('App\Http\Controllers\pagesController@post')}}" class="badge bg-primary">
                    More post
                    <i class="fas fa fa-solid fa-arrow-up-right-from-square"></i>
                </a>
            </p>
        </div>

        <div class="row ">
            <!-- post article -->
            @foreach($post as $row)
            <div class="col-lg-12  mb-4">
                <div class="col-lg-12  mb-4">
                    <div class="shadow rounded table-responsive p-4 text-justify">
                        {!! $row->post !!}
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-lg-12  mt-4 text-center table-responsive">
                <a href="{{action('App\Http\Controllers\pagesController@post')}}" class="btn btn-primary">
                    More post
                    <i class="fas fa fa-solid fa-arrow-up-right-from-square"></i>
                </a>
            </div>
        </div>

    </div>
</section>
<!-- End Post Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>Contact</h2>

        </div>

        <div class="row">

            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>A108 Adam Street, New York, NY 535022</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>info@example.com</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Call:</h4>
                        <p>+1 5589 55488 55s</p>
                    </div>

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                        frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Your Name</label>
                            <input type="text" name="name" class="form-control" id="name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Your Email</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Subject</label>
                        <input type="text" class="form-control" name="subject" id="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Message</label>
                        <textarea class="form-control" name="message" rows="10" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>

        </div>

    </div>
</section>
<!-- End Contact Section -->




@endsection