<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>DigiExpert : Custom Portfolio Template</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top menu shadow">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/images/logo.png" class="img-fluid" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">News</a>
                    </li>

                    <li class="nav-item d-lg-none d-sm-none d-md-none d-xl-none">
                        <a class="nav-link" href="#">contact</a>
                    </li>
                </ul>

                <button type="button" class="d-none d-sm-block d-md-block d-lg-block d-xl-block rounded-pill btn-rounded">
                    <span>Contact</span>
                </button>
            </div>
        </div>
    </nav>

    <!-- Header introduction section -->

    <div class="intro-section mt-5" id="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-7 justify-content-start">
                    <h1 class="display-1__header-title lh-md fw-bold">
                        Engage in development of products based on <span>WordPress.</span>
                    </h1>
                    <p class="display-1__header-description pb-3 pt-3">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque voluptate repudiandae doloribus temporibus modi eligendi hic magnam placeat in ratione ad, asperiores pariatur labore ipsa minus nemo, animi sint nam!
                    </p>
                    <button type="button" class="rounded-pill btn-rounded">
                        <span class="display-1__header-button">Get Started</span>
                    </button>
                </div>
                <div class="col-md-5 col-lg-5 justify-content-end">
                    <img src="assets/images/header.png" class="img-fluid" />
                </div>

            </div>
        </div>
    </div>

    <div id="about" class="about">

        <div class="row g-0">
            <div class="col-md-6">
                <img src="assets/images/about.jpg" class="img-fluid" />
            </div>
            <div class="col-md-6">
                <div class="about-info p-5">
                    <h2 class="display-2__title fw-bold lh-md">We are Expert in UI and UX Development.</h2>
                    <h3 class="display-2__subtitle mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque </h3>
                    <p class="display-2__description mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque, cupiditate voluptates porro consequuntur fugiat ipsa facilis inventore in excepturi recusandae molestiae numquam laborum hic laudantium, rerum animi! Temporibus, pariatur hic.</p>
                    <button type="button" class="mt-5 rounded-pill btn-rounded">
                        <span>Download Profile</span>
                    </button>
                </div>

            </div>
        </div>

    </div>

    <!-- My services section -->
    <div id="services" class="services">
        <div class="container">
            <div class="row pt-5 pb-5 text-center ">
                <h2 class="display-2__title fw-bold lh-md">Our Expert</h2>
                <h3 class="display-2__subtitle mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque </h3>
                <div class="services__service-list mt-5">
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="service-box">
                            <div class="service-box__info">
                                <div class="service-box__info__icon">
                                    <i class="fas fa-bullhorn"></i>
                                </div>
                                <div class="service-box__info__caption mt-3 lh-md">
                                    Digital Marketing
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="service-box">
                            <div class="service-box__info">
                                <div class="service-box__info__icon">
                                    <i class="far fa-edit"></i>
                                </div>
                                <div class="service-box__info__caption mt-3">
                                    UI/UX Design
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="service-box">
                            <div class="service-box__info">
                                <div class="service-box__info__icon">
                                    <i class="fas fa-mail-bulk"></i>
                                </div>
                                <div class="service-box__info__caption mt-3">
                                    PPC Management
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="service-box">
                            <div class="service-box__info">
                                <div class="service-box__info__icon">
                                    <i class="fab fa-wordpress-simple"></i>
                                </div>
                                <div class="service-box__info__caption mt-3">
                                    WordPress Development
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>

    <!-- Portfolio section  -->
    <div id="portfolio" class="portfolio">
        <div class="container">
            <div class="row pt-5 pb-5 text-center ">

                <h2 class="display-2__title fw-bold lh-md">Our Recent Projects</h2>
                <h3 class="display-2__subtitle mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque </h3>

            </div>

            <div class="row pt-5 pb-5">
                <div class="col-md-6">

                    <div class="portfolio-box ">
                        <img src="assets/images/portfolio/project-1.jpg" alt="" class="img-fluid" />
                        <div class="portfolio-info">
                            <div class="caption">
                                <h4>Admin Panel Development</h4>
                                <p>Bootstrap,ReactJS </p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-6">

                    <div class="portfolio-box ">
                        <img src="assets/images/portfolio/project-2.jpg" alt="" class="img-fluid" />
                        <div class="portfolio-info">
                            <div class="caption">
                                <h4>eCommerce Website </h4>
                                <p>Design,WooCommerce </p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-6">

                    <div class="portfolio-box ">
                        <img src="assets/images/portfolio/project-3.jpg" alt="" class="img-fluid" />
                        <div class="portfolio-info">
                            <div class="caption">
                                <h4>Digital Marketing</h4>
                                <p>Digital,SEO,web </p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-6">

                    <div class="portfolio-box ">
                        <img src="assets/images/portfolio/project-4.jpg" alt="" class="img-fluid" />
                        <div class="portfolio-info">
                            <div class="caption">
                                <h4>PPC Campeign Management</h4>
                                <p>Marketing,web </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    </div>

    <div id="testimonials" class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">

                </div>
            </div>
        </div>
    </div>

    <div id="blog" class="blog">
        <div class="container">
            <div class="row pt-5 pb-5 text-center ">

                <h2 class="display-2__title fw-bold lh-md">Latest News</h2>
                <h3 class="display-2__subtitle mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque </h3>

            </div>

            <div class="row pt-5 pb-5">

                <div class="col-md-4">

                    <div class="blog-box ">
                        <img src="assets/images/blog-post/blog-post-1.jpg" alt="" class="img-fluid" />
                        <div class="blog-info">
                            <div class="caption">
                                <p class="text-sm">Aug 21, 2021</p>
                                <h4>What the beatles could learn from watch live sport</h4>
                                <a href="#" class="fw-bold">Learn More <span><i class="fas fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-4">

                    <div class="blog-box ">
                        <img src="assets/images/blog-post/blog-post-2.jpg" alt="" class="img-fluid" />
                        <div class="blog-info">
                            <div class="caption">
                                <p class="text-sm">Aug 21, 2021</p>
                                <h4>15 facts about inspirational quotes that will impress your friends</h4>
                                <a href="#" class="fw-bold">Learn More <span><i class="fas fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-4">

                    <div class="blog-box ">
                        <img src="assets/images/blog-post/blog-post-3.jpg" alt="" class="img-fluid" />
                        <div class="blog-info">
                            <div class="caption">
                                <p class="fs-6">Aug 21, 2021</p>
                                <h4>Why you'll never succeed at accessories</h4>
                                <a href="#" class="fw-bold">Learn More <span><i class="fas fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>

                </div>



            </div>
        </div>
    </div>

    <!-- Footer section -->
    <div id="footer" class="footer">
        <div class="container">
            <div class="row pt-5 pb-5">
                <div class="col-md-6">
                    <h2 class="display-2__title fw-bold lh-md">Talk About your project</h2>

                    <ul class="contact-list">
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone-calling" width="36" height="36" viewBox="0 0 24 24" stroke-width="1" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                                <line x1="15" y1="7" x2="15" y2="7.01" />
                                <line x1="18" y1="7" x2="18" y2="7.01" />
                                <line x1="21" y1="7" x2="21" y2="7.01" />
                            </svg>
                            +1 258 965
                        </li>

                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="36" height="36" viewBox="0 0 24 24" stroke-width="1" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <rect x="3" y="5" width="18" height="14" rx="2" />
                                <polyline points="3 7 12 13 21 7" />
                            </svg>
                            info@gmail.com
                        </li>

                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="36" height="36" viewBox="0 0 24 24" stroke-width="1" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="12" cy="11" r="3" />
                                <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                            </svg>
                            125,abc street,India
                        </li>
                    </ul>


                </div>
                <div class="col-12 col-lg-6">

                    <h1 class="display-2__subtitle lh-lg">We are ready to take new assignment..</h1>

                    <div class="form w-100 pb-2" autocomplete="off">
                        <form class="mt-5 mb-5">
                            <div class="col-lg-12 mb-3">

                                <input type="text" class="form-control transparent-input form-control-lg" id="name" placeholder="Name" aria-describedby="nameHelp" autocomplete=off>

                            </div>
                            <div class="input-group col-lg-12 mb-3">
                                <div class="col-lg-6 mb-3">
                                    <input type="email" class="form-control transparent-input form-control-lg" id="email" placeholder="Email" aria-describedby="subjectHelp" autocomplete=off>
                                </div>
                                <span> </span>
                                <div class="col-lg-6 mb-3">
                                    <input type="subject" class="form-control transparent-input form-control-lg" placeholder="Subject" id="subject" aria-describedby="subjectHelp" autocomplete=off>
                                </div>

                            </div>
                            <div class="col-lg-12 mb-3">
                                <input type="text" class="form-control transparent-input form-control-lg" placeholder="Message" id="message" aria-describedby="messageHelp" autocomplete=off>
                            </div>

                            <button type="submit" class="btn btn-rounded">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row text-center text-white pt-5 pb-5">
                <span>&COPY; 2021 All Right Reserved <a href="">DigiExpert</a></span>

            </div>
        </div>
    </div>
    <script src="assets/js/bootstrap.bundle.js"></script>
</body>

</html>