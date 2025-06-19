<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Full Stack Web Development Course | Rishikesh</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <style>
        :root {
            --primary-color: #04AA6D;
            --secondary-color: #0E3E53;
            --bg-color: #e4f9ff;
            --white-color: #fff;
            --light-gray: #f8f9fa;
            --dark-gray: #343a40;
            --box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--secondary-color);
            overflow-x: hidden;
        }

        .greentext {
            color: var(--primary-color);
        }

        .light {
            color: var(--secondary-color);
        }

        .bg-primary-color {
            background-color: var(--primary-color);
        }

        .bg-secondary-color {
            background-color: var(--secondary-color);
        }

        .bg-light-section {
            background-color: var(--bg-color);
        }

        .btn-primary-custom {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 30px;
            font-weight: 600;
            transition: var(--transition);
            box-shadow: 0 4px 8px rgba(4, 170, 109, 0.3);
        }

        .btn-primary-custom:hover {
            background-color: #038a5a;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(4, 170, 109, 0.4);
        }

        .btn-outline-custom {
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
            background-color: transparent;
            padding: 10px 25px;
            border-radius: 30px;
            font-weight: 600;
            transition: var(--transition);
        }

        .btn-outline-custom:hover {
            background-color: var(--primary-color);
            color: white;
            transform: translateY(-2px);
        }

        /* Hero Carousel */
        .hero-carousel {
            height: 80vh;
            position: relative;
            overflow: hidden;
        }

        .hero-carousel::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, rgba(14, 62, 83, 0.7), rgba(4, 170, 109, 0.5));
            z-index: 1;
        }

        .hero-carousel img {
            object-fit: cover;
            height: 100%;
            width: 100%;
        }

        .carousel-caption {
            z-index: 2;
            bottom: 30%;
            text-align: left;
            padding: 0 10%;
        }

        .carousel-caption h1 {
            font-size: 3.5rem;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            margin-bottom: 1.5rem;
        }

        .carousel-caption p {
            font-size: 1.2rem;
            max-width: 600px;
            margin-bottom: 2rem;
        }

        /* Highlights Section */
        .highlights-section {
            padding: 80px 0;
            background-color: white;
        }

        .highlight-item {
            background: white;
            border-radius: 15px;
            padding: 30px 20px;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
            height: 100%;
            border-bottom: 4px solid transparent;
        }

        .highlight-item:hover {
            transform: translateY(-10px);
            border-bottom: 4px solid var(--primary-color);
        }

        .highlight-item .icon {
            color: var(--primary-color);
            margin-bottom: 20px;
        }

        .highlight-item .fw-bold {
            font-size: 2rem;
            color: var(--secondary-color);
        }

        /* Course Intro Section */
        .course-intro {
            padding: 80px 0;
            background-color: var(--bg-color);
        }

        .course-intro h1 {
            position: relative;
            margin-bottom: 50px;
        }

        .course-intro h1::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background-color: var(--primary-color);
            border-radius: 2px;
        }

        /* Course Details Section */
        .course-details-section {
            padding: 80px 0;
        }

        .course-image {
            border-radius: 15px;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
        }

        .course-image:hover {
            transform: scale(1.02);
        }

        .course-details {
            padding-left: 40px;
        }

        .course-details h1 {
            font-weight: 700;
            margin-bottom: 25px;
            position: relative;
        }

        .course-details h1::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 70px;
            height: 3px;
            background-color: var(--primary-color);
        }

        .widget {
            margin: 30px 0;
        }

        .widget ul {
            list-style: none;
            padding: 0;
        }

        .widget li {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .widget .bi {
            color: var(--primary-color);
            font-size: 1.5rem;
            margin-right: 15px;
        }

        /* Tools Section */
        .tools-section {
            padding: 80px 0;
            background-color: var(--bg-color);
        }

        .tool-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .tool-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .tool-card img {
            height: 60px;
            width: auto;
            margin-bottom: 15px;
            object-fit: contain;
        }

        /* Advantages Section */
        .advantages-section {
            padding: 80px 0;
        }

        .tab {
            margin-bottom: 40px;
        }

        .tablinks {
            background: none;
            border: none;
            padding: 10px 25px;
            font-weight: 600;
            color: var(--secondary-color);
            position: relative;
            transition: var(--transition);
        }

        .tablinks.active {
            color: var(--primary-color);
        }

        .tablinks.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60%;
            height: 3px;
            background-color: var(--primary-color);
        }

        .tabcontent {
            display: none;
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .list-group-item {
            border: none;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 8px !important;
            background-color: rgba(4, 170, 109, 0.05);
            transition: var(--transition);
        }

        .list-group-item:hover {
            background-color: rgba(4, 170, 109, 0.1);
        }

        .list-group-item img {
            margin-right: 10px;
        }

        /* Projects Section */
        .projects-section {
            padding: 80px 0;
            background-color: var(--bg-color);
        }

        .project-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
            height: 100%;
        }

        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .project-card img {
            height: 200px;
            object-fit: cover;
            transition: var(--transition);
        }

        .project-card:hover img {
            transform: scale(1.05);
        }

        .project-card .card-body {
            padding: 25px;
        }

        .project-card .card-title {
            color: var(--primary-color);
            font-weight: 700;
            margin-bottom: 15px;
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: var(--primary-color) !important;
            background: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            box-shadow: var(--box-shadow);
        }

        .swiper-button-next::after,
        .swiper-button-prev::after {
            font-size: 1.2rem !important;
        }

        /* Trainers Section */
        .trainers-section {
            padding: 80px 0;
        }

        .trainer-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
            height: 100%;
        }

        .trainer-card:hover {
            transform: translateY(-10px);
        }

        .trainer-card img {
            height: 300px;
            object-fit: cover;
        }

        .trainer-card .card-body {
            padding: 25px;
            text-align: center;
        }

        .trainer-card .card-title {
            color: var(--primary-color);
            font-weight: 700;
            margin-bottom: 5px;
        }

        .trainer-card .card-text {
            color: var(--secondary-color);
            margin-bottom: 15px;
        }

        .trainer-card small {
            color: #6c757d;
        }

        /* Certificate Section */
        .certificate-section {
            padding: 80px 0;
            background-color: var(--bg-color);
        }

        .certificate-img {
            max-width: 100%;
            height: auto;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            transition: var(--transition);
        }

        .certificate-img:hover {
            transform: scale(1.03);
        }

        /* FAQ Section */
        .faq-section {
            padding: 80px 0;
        }

        .accordion-item {
            margin-bottom: 15px;
            border-radius: 10px !important;
            overflow: hidden;
            box-shadow: var(--box-shadow);
            border: none;
        }

        .accordion-button {
            font-weight: 600;
            color: var(--secondary-color);
            background-color: white;
        }

        .accordion-button:not(.collapsed) {
            color: var(--primary-color);
            background-color: rgba(4, 170, 109, 0.05);
        }

        .accordion-button:focus {
            box-shadow: none;
            border-color: rgba(4, 170, 109, 0.25);
        }

        /* About Section */
        .about-section {
            padding: 80px 0;
            background-color: var(--bg-color);
        }

        .read-more-btn {
            color: var(--primary-color);
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
            transition: var(--transition);
        }

        .read-more-btn:hover {
            color: #038a5a;
            text-decoration: underline;
        }

        /* Training Section */
        .training-section {
            padding: 80px 0;
        }

        .training-card {
            background: white;
            border-radius: 10px;
            padding: 25px;
            text-align: center;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
            height: 100%;
            border-left: 4px solid var(--primary-color);
        }

        .training-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .training-card p {
            margin: 0;
            font-weight: 600;
            color: var(--secondary-color);
        }

        /* CTA Section */
        .cta-section {
            padding: 60px 0;
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
            color: white;
            text-align: center;
        }

        .cta-section h2 {
            font-weight: 700;
            margin-bottom: 20px;
        }

        .cta-section p {
            max-width: 700px;
            margin: 0 auto 30px;
            font-size: 1.1rem;
        }

        /* Footer */
        .footer {
            background-color: var(--secondary-color);
            color: white;
            padding: 60px 0 20px;
        }

        .footer h5 {
            color: white;
            margin-bottom: 25px;
            position: relative;
        }

        .footer h5::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50px;
            height: 2px;
            background-color: var(--primary-color);
        }

        .footer-links {
            list-style: none;
            padding: 0;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: white;
            padding-left: 5px;
        }

        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            margin-right: 10px;
            color: white;
            transition: var(--transition);
        }

        .social-links a:hover {
            background-color: var(--primary-color);
            transform: translateY(-3px);
        }

        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
            margin-top: 40px;
            text-align: center;
            color: rgba(255, 255, 255, 0.7);
        }

        /* Responsive Adjustments */
        @media (max-width: 992px) {
            .carousel-caption h1 {
                font-size: 2.5rem;
            }

            .course-details {
                padding-left: 0;
                margin-top: 40px;
            }
        }

        @media (max-width: 768px) {
            .hero-carousel {
                height: 60vh;
            }

            .carousel-caption {
                bottom: 20%;
                text-align: center;
            }

            .carousel-caption h1 {
                font-size: 2rem;
            }

            .carousel-caption p {
                font-size: 1rem;
                margin: 0 auto 1.5rem;
            }

            .highlight-item {
                padding: 20px 15px;
            }

            .section-title {
                font-size: 1.8rem;
            }
        }

        @media (max-width: 576px) {
            .hero-carousel {
                height: 50vh;
            }

            .carousel-caption h1 {
                font-size: 1.8rem;
            }

            .btn-primary-custom,
            .btn-outline-custom {
                padding: 10px 20px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body>
    <!-- Hero Carousel -->
    <div id="courseHeroCarousel" class="carousel slide hero-carousel" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="full_stack.png" class="d-block w-100" alt="Full Stack Development">
                <div class="carousel-caption">
                    <h1>Become a Full Stack Developer in 9 Months</h1>
                    <p>Master front-end and back-end technologies with our comprehensive training program in Rishikesh</p>
                    <div class="d-flex gap-3">
                        <button class="btn btn-primary-custom" data-bs-toggle="modal" data-bs-target="#enrollModal">Enroll Now</button>
                        <button class="btn btn-outline-custom">Learn More</button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="full2.png" class="d-block w-100" alt="Web Development">
                <div class="carousel-caption">
                    <h1>Hands-on Training with Industry Experts</h1>
                    <p>Learn by building real-world projects and get 100% job placement assistance</p>
                    <div class="d-flex gap-3">
                        <button class="btn btn-primary-custom" data-bs-toggle="modal" data-bs-target="#enrollModal">Enroll Now</button>
                        <button class="btn btn-outline-custom">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#courseHeroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#courseHeroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Highlights Section -->
    <section class="highlights-section">
        <div class="container">
            <h1 class="text-center mb-5 section-title">
                <span class="light">Web Development <span class="greentext">Course</span> Highlights</span>
            </h1>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4">
                <div class="col">
                    <article class="highlight-item">
                        <span class="fas fa-briefcase fa-3x icon mb-3"></span>
                        <div class="text-container">
                            <span class="fw-bold fs-3 light">100%</span>
                            <p class="card-title fw fs-6">Job Assistance</p>
                        </div>
                    </article>
                </div>
                <div class="col">
                    <article class="highlight-item">
                        <span class="fas fa-cogs fa-3x icon mb-3"></span>
                        <div class="text-container">
                            <span class="fw-bold fs-3 light">16+</span>
                            <p class="card-title fw fs-6">Course Modules</p>
                        </div>
                    </article>
                </div>
                <div class="col">
                    <article class="highlight-item">
                        <span class="fas fa-project-diagram fa-3x icon mb-3"></span>
                        <div class="text-container">
                            <span class="fw-bold fs-3 light">5+</span>
                            <p class="card-title fw fs-6">Real Projects</p>
                        </div>
                    </article>
                </div>
                <div class="col">
                    <article class="highlight-item">
                        <span class="fas fa-tools fa-3x icon mb-3"></span>
                        <div class="text-container">
                            <span class="fw-bold fs-3 light">10+</span>
                            <p class="card-title fw fs-6">Industry Tools</p>
                        </div>
                    </article>
                </div>
                <div class="col">
                    <article class="highlight-item">
                        <span class="fas fa-users fa-3x icon mb-3"></span>
                        <div class="text-container">
                            <span class="fw-bold fs-3 light">24/7</span>
                            <p class="card-title fw fs-6">Mentor Support</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Course Intro Section -->
    <section class="course-intro">
        <div class="container">
            <h1 class="text-center mb-5 section-title">
                <span class="light">Web Development Course in <span class="greentext">Rishikesh</span></span>
            </h1>
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <p class="lead fw-bold mb-4">"Good web design is more than looks; it's about making the experience easy, useful, and inspiring."</p>
                    <p class="mb-4">
                        Looking for a top-quality <strong>Web Development course</strong>? You've come to the right place!
                        <strong><a href="https://websitebanaye.com/" class="greentext text-decoration-none">Website Banaye & Computer Shikhe</a></strong>
                        offers affordable, expert-led <strong>Web Development Courses in Rishikesh</strong> designed to help you grow your skills and advance your career.
                        Our courses include <strong>hands-on training and real-world projects</strong> that prepare you for the challenges of the industry.
                    </p>
                    <p>
                        Web development involves <strong>building and maintaining websites and applications that are functional, interactive, and dynamic.</strong>
                        With our comprehensive training program, you'll learn essential web development technologies such as HTML, CSS, JavaScript, React and backend programming,
                        along with frameworks and tools that will help you build powerful web applications.
                    </p>
                    <a href="#" class="btn btn-primary-custom mt-4">Explore Course Details</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Course Details Section -->
    <section class="course-details-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="Full.png" alt="Full Stack Development Course" class="img-fluid course-image">
                </div>
                <div class="col-lg-6 course-details">
                    <h1>Importance of Web Development Training</h1>
                    <p class="mb-4">
                        Web development training is essential for mastering the skills needed to create and maintain websites.
                        It enhances problem-solving abilities, improves technical knowledge, and opens up career opportunities.
                        With the increasing demand for web developers, proper training ensures you stay competitive, adaptable,
                        and capable of building functional, user-friendly websites.
                    </p>
                    <div class="widget">
                        <ul class="p-0">
                            <li>
                                <i class="bi bi-stopwatch-fill"></i>
                                <span class="ms-2">
                                    <strong class="text-secondary">Duration</strong><br>
                                    <span class="fw-bold">9 Months</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex gap-3 mt-4">
                        <button class="btn btn-primary-custom">Get Brochure</button>
                        <button class="btn btn-outline-custom" data-bs-toggle="modal" data-bs-target="#enrollModal">Enroll Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tools Section -->
    <section class="tools-section">
        <div class="container">
            <h1 class="text-center mb-5 section-title">
                <span class="light">Master Essential <span class="greentext">Web Development</span> Tools</span>
            </h1>
            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6 g-4">
                <div class="col">
                    <div class="tool-card">
                        <img src="html.webp" alt="HTML5" class="img-fluid">
                        <p>HTML5</p>
                    </div>
                </div>
                <div class="col">
                    <div class="tool-card">
                        <img src="css.webp" alt="CSS3" class="img-fluid">
                        <p>CSS3</p>
                    </div>
                </div>
                <div class="col">
                    <div class="tool-card">
                        <img src="boot.jpeg" alt="Bootstrap" class="img-fluid">
                        <p>Bootstrap</p>
                    </div>
                </div>
                <div class="col">
                    <div class="tool-card">
                        <img src="js.webp" alt="JavaScript" class="img-fluid">
                        <p>JavaScript</p>
                    </div>
                </div>
                <div class="col">
                    <div class="tool-card">
                        <img src="Jquery.png" alt="jQuery" class="img-fluid">
                        <p>jQuery</p>
                    </div>
                </div>
                <div class="col">
                    <div class="tool-card">
                        <img src="ajax.jpg" alt="AJAX" class="img-fluid">
                        <p>AJAX</p>
                    </div>
                </div>
                <div class="col">
                    <div class="tool-card">
                        <img src="php.png" alt="PHP" class="img-fluid">
                        <p>PHP</p>
                    </div>
                </div>
                <div class="col">
                    <div class="tool-card">
                        <img src="sql.jpeg" alt="SQL" class="img-fluid">
                        <p>SQL</p>
                    </div>
                </div>
                <div class="col">
                    <div class="tool-card">
                        <img src="myphp.png" alt="phpMyAdmin" class="img-fluid">
                        <p>phpMyAdmin</p>
                    </div>
                </div>
                <div class="col">
                    <div class="tool-card">
                        <img src="codi.png" alt="CodeIgniter" class="img-fluid">
                        <p>CodeIgniter</p>
                    </div>
                </div>
                <div class="col">
                    <div class="tool-card">
                        <img src="lara.jpeg" alt="Laravel" class="img-fluid">
                        <p>Laravel</p>
                    </div>
                </div>
                <div class="col">
                    <div class="tool-card">
                        <img src="git.webp" alt="Git" class="img-fluid">
                        <p>Git</p>
                    </div>
                </div>
                <div class="col">
                    <div class="tool-card">
                        <img src="exjs.webp" alt="Express.js" class="img-fluid">
                        <p>Express.js</p>
                    </div>
                </div>
                <div class="col">
                    <div class="tool-card">
                        <img src="react.webp" alt="React" class="img-fluid">
                        <p>React</p>
                    </div>
                </div>
                <div class="col">
                    <div class="tool-card">
                        <img src="post.webp" alt="Postman" class="img-fluid">
                        <p>Postman</p>
                    </div>
                </div>
                <div class="col">
                    <div class="tool-card">
                        <img src="node.png" alt="Node.js" class="img-fluid">
                        <p>Node.js</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <button class="btn btn-primary-custom" data-bs-toggle="modal" data-bs-target="#enrollModal">Enroll Now to Master These Tools</button>
            </div>
        </div>
    </section>

    <!-- Advantages Section -->
    <section class="advantages-section">
        <div class="container">
            <h1 class="text-center mb-5 section-title">
                <span class="light">Benefits of Our <span class="greentext">Web Development</span> Program</span>
            </h1>
            <div class="row">
                <div class="col-12">
                    <div class="tab gap-3 d-flex justify-content-center flex-wrap">
                        <button type="button" class="tablinks btn" onclick="openAdvantageTab(event, 'industryTools')" id="defaultTab">Industry Tools</button>
                        <button type="button" class="tablinks btn" onclick="openAdvantageTab(event, 'careerSupport')">Career Support</button>
                        <button type="button" class="tablinks btn" onclick="openAdvantageTab(event, 'flexibleLearning')">Flexible Learning</button>
                    </div>
                </div>
            </div>

            <div id="industryTools" class="tabcontent mt-4">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><img src="correct.png" width="20" alt="check"> Lightweight, feature-rich code editor with extensions and integrated debugging tools.</li>
                            <li class="list-group-item"><img src="correct.png" width="20" alt="check"> Built-in tools for inspecting elements, debugging, and optimizing web performance.</li>
                            <li class="list-group-item"><img src="correct.png" width="20" alt="check"> Version control for tracking changes and collaboration in software development projects.</li>
                            <li class="list-group-item"><img src="correct.png" width="20" alt="check"> Bundles JavaScript, CSS, and other assets for optimized web application performance.</li>
                            <li class="list-group-item"><img src="correct.png" width="20" alt="check"> CSS preprocessor that enhances stylesheets with variables, mixins, and nested rules.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><img src="correct.png" width="20" alt="check"> JavaScript runtime environment for building server-side applications and APIs.</li>
                            <li class="list-group-item"><img src="correct.png" width="20" alt="check"> JavaScript library for building dynamic user interfaces with reusable components.</li>
                            <li class="list-group-item"><img src="correct.png" width="20" alt="check"> Front-end framework for responsive design, providing pre-styled UI components and grids.</li>
                            <li class="list-group-item"><img src="correct.png" width="20" alt="check"> Collaborative design tool for creating UI/UX designs and real-time feedback.</li>
                            <li class="list-group-item"><img src="correct.png" width="20" alt="check"> Containerization platform for creating isolated environments and consistent app deployment.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="careerSupport" class="tabcontent mt-4">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><img src="correct.png" width="20" alt="check"> Industry tools of 10 point and one point 10-12 words for web development</li>
                            <li class="list-group-item"><img src="correct.png" width="20" alt="check"> Gain experience and visibility by contributing to open source projects.</li>
                            <li class="list-group-item"><img src="correct.png" width="20" alt="check"> Follow industry blogs, attend webinars, and learn new technologies regularly.</li>
                            <li class="list-group-item"><img src="correct.png" width="20" alt="check"> Use Git and GitHub for version control to collaborate effectively with teams.</li>
                            <li class="list-group-item"><img src="correct.png" width="20" alt="check"> Join developer communities, forums, and attend meetups for learning opportunities.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><img src="correct.png" width="20" alt="check"> Build side projects to gain hands-on experience and demonstrate initiative.</li>
                            <li class="list-group-item"><img src="correct.png" width="20" alt="check"> Master frameworks like React, Node.js, or Laravel for in-demand skills.</li>
                            <li class="list-group-item"><img src="correct.png" width="20" alt="check"> Take on freelance work to build experience and expand your professional network.</li>
                            <li class="list-group-item"><img src="correct.png" width="20" alt="check"> Join hackathons to solve real-world problems and collaborate with others.</li>
                            <li class="list-group-item"><img src="correct.png" width="20" alt="check"> Always improve your skills by taking courses and getting relevant certifications.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="flexibleLearning" class="tabcontent mt-4">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><img src="correct.png" width="20" alt="check"> Structured courses that offer flexibility, ranging from beginner to advanced topics.</li>
                            <li class="list-group-item"><img src="correct.png" width="20" alt="check"> Free video tutorials on a wide range of web development topics.</li>
                            <li class="list-group-item"><img src="correct.png" width="20" alt="check"> Hands-on coding exercises with immediate feedback and progress tracking.</li>
                            <li class="list-group-item"><img src="correct.png" width="20" alt="check"> In-depth resources for learning frameworks, languages, and best practices at your pace.</li>
                            <li class="list-group-item"><img src="correct.png" width="20" alt="check"> Build real-world projects to learn through problem-solving and application.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><img src="correct.png" width="20" alt="check"> Learn on