<!-- 
    attaches itself to the page
    which is the homepage
-->

<!--   
    "()" can accept argument 
    we can tell it that we want to use a different get_header
    get_header('secondary');
  -->

<?php get_header(); ?>

<!-- Hero Banner -->
<section class="landing-page-wrap hero">
    <div class="container ">
        <div class="row align-items-center py-5 pb-5">
            <div class="col-9 col-sm- col-lg-6 mb-5 mb-lg-0 mb-md-5 container">
                <img src="<?php echo get_template_directory_uri(); ?>/images/hero_banner.png"
                    class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6 ">
                <h2 class="mb-3 display-6 text-center hello">Hello, I'm Deeje</h2>
                <h1 class="lh-1 fw-normal display-4 mb-3 text-center">Web Developer</h1>
                <p class="text-center">Currently available for select projects, <br>collaborations and
                    consulting.
                </p>
                <div class="d-grid gap-2 d-md-flex justify-content-center">
                    <button type="button"
                        class="rounded-pill fs-6 fw-semibold btn btn-primary btn-lg px-5 mb-4 py-3 mt-md-3 ">SEE
                        MY
                        WORK</button>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Services -->
<div class="container text-center py-lg-5 py-md-5">

    <h2 class="fw-normal title">SERVICES</h2>

    <div class="card-group gap-5 pb-5">

        <div class="card rounded-3 border-0">
            <div class="card-body p-5">
                <img src="<?php echo get_template_directory_uri(); ?>/images/services_1.png" class="icon-img">
                <h5 class="card-title fw-bold mb-3">WEB DESIGN</h5>
                <hr class="hr-blue">
                <p class="card-text mt-4">Well we're movin' on up to the east side. To a deluxe apartment in the.
                </p>
            </div>
        </div>

        <div class="card border-0 rounded-3 text-white bg-primary">
            <div class="card-body p-5">
                <img src="<?php echo get_template_directory_uri(); ?>/images/services_2.png" class="icon-img">
                <h5 class="card-title fw-bold mb-3 ">MOBILE APP</h5>
                <hr>
                <p class="card-text mt-4">Tracking immunizations has never been easier or more secure.</p>

            </div>
        </div>

        <div class="card rounded-3 border-0">
            <div class="card-body p-5">
                <img src="<?php echo get_template_directory_uri(); ?>/images/services_3.png" class="icon-img">
                <h5 class="card-title fw-bold mb-3">BRANDING</h5>
                <hr class="hr-blue">
                <p class="card-text mt-4">Well we're movin' on up to the east side. To a deluxe apartment in the.
                </p>
            </div>
        </div>

    </div>

</div>


<!-- Portfolio -->
<section class="portfolio t-portfolio text-center py-5">
    <h2 class="fw-normal title">PORTFOLIO</h2>
    <div
        class="swiper mySwiper swiper-initialized swiper-horizontal swiper-grid swiper-grid-column swiper-backface-hidden">
        <div class="swiper-wrapper" id="swiper-wrapper-e10d427795362d2b5" aria-live="polite"
            style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px); transition-delay: 0ms;">
            <div class="swiper-slide swiper-slide-active" role="group"><img
                    src="<?php echo get_template_directory_uri(); ?>/images/portfolio_5.png" class="carousel-img"></div>
            <div class="swiper-slide" role="group"><img
                    src="<?php echo get_template_directory_uri(); ?>/images/portfolio_4.png" class="carousel-img"></div>
            <div class="swiper-slide swiper-slide-next" role="group"> <img
                    src="<?php echo get_template_directory_uri(); ?>/images/portfolio_3.png" class="carousel-img"></div>
            <div class="swiper-slide" role="group"><img
                    src="<?php echo get_template_directory_uri(); ?>/images/portfolio_2.png" class="carousel-img"></div>
            <div class="swiper-slide" role="group"><img
                    src="<?php echo get_template_directory_uri(); ?>/images/portfolio_1.png" class="carousel-img"></div>
            <div class="swiper-slide blue-portfolio">
                <div class="branding-text p-5 ">
                    <p class="card-text text-white ">Branding</p>
                    <h5 class="card-title text-white mb-4">Home Decoration</h5>
                    <hr>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio_6.png" class="carousel-img">
            </div>
            <div class="swiper-slide blue-portfolio">
                <div class="branding-text p-5 ">
                    <p class="card-text text-white ">Branding</p>
                    <h5 class="card-title text-white mb-4">Home Decoration</h5>
                    <hr>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio_6.png" class="carousel-img">
            </div>
            <div class="swiper-slide" role="group"><img
                    src="<?php echo get_template_directory_uri(); ?>/images/portfolio_1.png" class="carousel-img"></div>
            <div class="swiper-slide" role="group"><img
                    src="<?php echo get_template_directory_uri(); ?>/images/portfolio_2.png" class="carousel-img"></div>
            <div class="swiper-slide" role="group"><img
                    src="<?php echo get_template_directory_uri(); ?>/images/portfolio_3.png" class="carousel-img"></div>
            <div class="swiper-slide" role="group"><img
                    src="<?php echo get_template_directory_uri(); ?>/images/portfolio_4.png" class="carousel-img"></div>
            <div class="swiper-slide" role="group"><img
                    src="<?php echo get_template_directory_uri(); ?>/images/portfolio_5.png" class="carousel-img"></div>


        </div>
    </div>
    <div class="mt-5 mb-6 arrow-icons arrow-bg text-center">
        <img class="mx-3 arrow-icon-prev" src="<?php echo get_template_directory_uri(); ?>/images/left_icon.png" alt="">
        <img class="mx-3 arrow-icon-next" src="<?php echo get_template_directory_uri(); ?>/images/right_icon.png"
            alt="">
    </div>

</section>

<section class="portfolio m-portfolio text-center">
    <h2 class="fw-normal title mt-0 mb-5">PORTFOLIO</h2>
    <div class="swiper mySwiper1 swiper-initialized">
        <div class="swiper-wrapper" id="swiper-wrapper-e10d427795362d2b5" aria-live="polite">
            <div class="swiper-slide blue-portfolio">
                <div class="branding-text p-5 ">
                    <p class="card-text text-white ">Branding</p>
                    <h5 class="card-title text-white mb-4">Home Decoration</h5>
                    <hr>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio_6.png" class="carousel-img">
            </div>
            <div class="swiper-slide swiper-slide-active" role="group"><img
                    src="<?php echo get_template_directory_uri(); ?>/images/portfolio_5.png" class="carousel-img"></div>
            <div class="swiper-slide" role="group"><img
                    src="<?php echo get_template_directory_uri(); ?>/images/portfolio_4.png" class="carousel-img"></div>
            <div class="swiper-slide swiper-slide-next" role="group"> <img
                    src="<?php echo get_template_directory_uri(); ?>/images/portfolio_3.png" class="carousel-img"></div>
            <div class="swiper-slide" role="group"><img
                    src="<?php echo get_template_directory_uri(); ?>/images/portfolio_2.png" class="carousel-img"></div>
            <div class="swiper-slide" role="group"><img
                    src="<?php echo get_template_directory_uri(); ?>/images/portfolio_1.png" class="carousel-img"></div>

            <div class="swiper-slide blue-portfolio">
                <div class="branding-text p-5 ">
                    <p class="card-text text-white ">Branding</p>
                    <h5 class="card-title text-white mb-4">Home Decoration</h5>
                    <hr>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio_6.png" class="carousel-img">
            </div>
            <div class="swiper-slide" role="group"><img
                    src="<?php echo get_template_directory_uri(); ?>/images/portfolio_1.png" class="carousel-img"></div>
            <div class="swiper-slide" role="group"><img
                    src="<?php echo get_template_directory_uri(); ?>/images/portfolio_2.png" class="carousel-img"></div>
            <div class="swiper-slide" role="group"><img
                    src="<?php echo get_template_directory_uri(); ?>/images/portfolio_3.png" class="carousel-img"></div>
            <div class="swiper-slide" role="group"><img
                    src="<?php echo get_template_directory_uri(); ?>/images/portfolio_4.png" class="carousel-img"></div>
            <div class="swiper-slide" role="group"><img
                    src="<?php echo get_template_directory_uri(); ?>/images/portfolio_5.png" class="carousel-img"></div>


        </div>
    </div>
    <div class="mt-5 mb-6 arrow-icons text-center">
        <img class="mx-3 arrow-icon-prev" src="<?php echo get_template_directory_uri(); ?>/images/left_icon.png" alt="">
        <img class="mx-3 arrow-icon-next" src="<?php echo get_template_directory_uri(); ?>/images/right_icon.png"
            alt="">
    </div>

</section>

<!-- Call to action -->
<section class="cta">
    <div class="container py-md-5 py-lg-5 py-0">
        <div class="row pt-0 pt-md-5 pt-lg-5 pb-0 pb-md-5 px-lg-5">
            <div class="col-lg-9 px-4">
                <h1 class="lh-1 display-6 fw-light mb-3 ">Make It Awesome!</h1>
                <p class="lh-lg">There's nothing we won't try. Never heard the word impossible. This time there's no
                    stopping us. <br>The year is 1987 and NASA launches the last of Americas deep space probes.
                </p>

            </div>
            <div class="pb-3 col-12 col-sm-8 col-lg-3 text-center">
                <button type="button"
                    class="rounded-pill fs-6 fw-semibold btn btn-outline-primary border-2 px-5 mb-4 py-3 mt-4 ">Hire
                    Me Now!</button>
            </div>
        </div>
    </div>
</section>


<!-- Feedback -->
<section class="landing-page-wrap">
    <div class="container">

        <div class="px-4 pt-5 pb-0 py-lg-5 py-md-5 my-md-5 my-md-5 mb-2 text-center">
            <h1 class="display-5 fw-light">What clients<br>Feedback about me</h1>
            <div class="mySwiper1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="d-block mx-auto mt-5 mb-3 rounded-circle id-picture"
                            src="<?php echo get_template_directory_uri(); ?>/images/id.png" alt="">
                        <div>
                            <h5>ALLEN BELL</h5>
                            <p class=" fw-semibold text-black-50">UX Designer</p>
                        </div>
                        <div class="col-lg-6 mx-auto w-75">
                            <p class="my-5 fw-semibold">Fleeing from the Cylon tyranny the last Battlestar – Galactica -
                                leads a
                                rag-tag
                                fugitive fleet on a lonely quest - a shining planet known as Earth? Texas tea.Its
                                mission - to
                                explore
                                strange new worlds to seek out new life and new civilizations to boldly go where no man
                                has gone
                                before.
                                Doin' it our way.</p>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img class="d-block mx-auto mt-5 mb-3 rounded-circle id-picture"
                            src="<?php echo get_template_directory_uri(); ?>/images/id.png" alt="">
                        <div>
                            <h5>JENNIE KIM</h5>
                            <p class=" fw-semibold text-black-50">UX Designer</p>
                        </div>
                        <div class="col-lg-6 mx-auto w-75">
                            <p class="my-5 fw-semibold">Fleeing from the Cylon tyranny the last Battlestar – Galactica -
                                leads a
                                rag-tag
                                fugitive fleet on a lonely quest - a shining planet known as Earth? Texas tea.Its
                                mission - to
                                explore
                                strange new worlds to seek out new life and new civilizations to boldly go where no man
                                has gone
                                before.
                                Doin' it our way.</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center arrow-icons">
                <img class="mx-3 arrow-icon-prev" src="<?php echo get_template_directory_uri(); ?>/images/left_icon.png"
                    alt="">
                <img class="mx-3 arrow-icon-next"
                    src="<?php echo get_template_directory_uri(); ?>/images/right_icon.png" alt="">
            </div>
        </div>


    </div>

</section>


<!-- Contact -->
<section class="contact-section">
    <div class="container px-4 py-5 my-5 ">


        <h1 class="display-5 text-center my-5 fw-light">Contact Me</h1>

        <form class="row g-3 justify-content-center">

            <div class="col-md-3">
                <label for="inputName4" class="form-label m-0">Name</label>
                <input type="name" class="form-control" id="inputName4">
            </div>
            <div class="col-md-3">
                <label for="inputEmail4" class="form-label  m-0">Email</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-3">
                <label for="inputPhone4" class="form-label  m-0">Phone</label>
                <input type="phone" class="form-control" id="inputName4">
            </div>
            <div class="col-9 mt-5 mb-4">
                <label for="inputAddress" class="form-label  m-0 pb-3">Message</label>
                <input type="textarea" class="form-control" id="inputAddress" placeholder="">
            </div>



            <div class="col-12 text-center ">
                <button type="submit" class="submit-btn btn btn-primary mb-4 ">SUBMIT</button>
            </div>
        </form>


    </div>
</section>

<!-- ---------------------------------------------------------------------- -->

<?php get_footer(); ?>