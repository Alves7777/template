@extends('site.master.layout')

@section('content')
    @foreach($sectionone as $sectionones)
        <style>
            #hero h1 span {
                color: {{ $sectionones->color_title }};
            }

            #hero a span {
                color: {{ $sectionones->color_text_video }};
            }

            #hero .btn-get-started {
                background-color: {{ $sectionones->color_button }};
            }

            #hero {
                background: url("{{ asset("/storage/$sectionones->image") }}");
            }

        </style>
        <section id="hero" class="d-flex align-items-center">
            <div class="container" id="test" data-aos="zoom-out" data-aos-delay="100">
                <h1><span>{{ $sectionones->title }}</span></h1>
                <h2>{{ $sectionones->description }}</h2>
                <div class="d-flex">
                    <a href="{{ $sectionones->url_button }}"
                       class="btn-get-started scrollto">{{ $sectionones->text_button }}</a>
                    <a href="{{ $sectionones->url_video }}" class="glightbox btn-watch-video">
                        <i style="color: {{ $sectionones->color_icon_video }}"
                           class="{{ $sectionones->icon_video }}"></i><span>{{ $sectionones->text_video }}</span></a>
                </div>
            </div>
        </section>
    @endforeach
    <!-- End Hero -->
    <main id="main">
        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container" data-aos="fade-up">
                <div class="row" id="row">
                    @foreach($getSectionTwo as $sectionTwo)
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon" style="color: {{ $sectionTwo['color_icon'] }}"><i
                                    class="{{ $sectionTwo['icon'] }}"></i></div>
                            <h4 class="title" id=""><a
                                    href="{{ $sectionTwo['url'] }}"></a>{{ $sectionTwo['title'] }}</h4>
                            <p class="description" id="">{{ $sectionTwo['description'] }}</p>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section><!-- End Featured Services Section -->

        <!-- ======= About Section ======= -->
        @foreach($sectionthree as $item)
            <section id="about" class="about section-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h3>{{ $item->title }}</h3>
                        <p>{{ $item->text }}</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                            <img src="{{ asset("/storage/$item->photo") }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center"
                             data-aos="fade-up" data-aos-delay="100">
                            <h3>{{ $item->title_two }}</h3>
                            <p class="fst-italic">
                                {{ $item->text_two }}
                            </p>
                            <ul>
                                <li>
                                    <i class="{{ $item->icon }}" style="color: {{ $item->color_icon }}"></i>
                                    <div>
                                        <h5>{{ $item->sub_title }}</h5>
                                        <p>{{ $item->sub_text }}</p>
                                    </div>
                                </li>
                            </ul>
                            <p>{{ $item->text_three }}</p>
                        </div>
                    </div>

                </div>
                @endforeach
            </section><!-- End About Section -->

            <!-- ======= Skills Section ======= -->
            <section id="skills" class="skills">
                @foreach($progress as $item)
                    <div class="container" data-aos="fade-up">

                        <div class="row skills-content">
                            <div class="col-lg-12">
                                <div class="progress">
                                    <span class="skill">{{ $item->progress_name }} <i
                                            class="val">{{ $item->percentage . "%" }}</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar"
                                             aria-valuenow="{{ $item->percentage }}"
                                             aria-valuemin="0"
                                             aria-valuemax="100"></div> <!--Value %-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </section><!-- End Skills Section -->

            <!-- ======= Counts Section ======= -->
            <section id="counts" class="counts">
                <div class="container" data-aos="fade-up">

                    <div class="row">
                        @foreach($getScore as $score)
                            <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                                <div class="count-box">
                                    <i class="{{ $score->icon }}"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="{{ $score->number }}"
                                          data-purecounter-duration="1"
                                          class="purecounter"></span>
                                    <p>{{ $score->name }}</p>
                                </div>
                            </div>
                @endforeach
            </section><!-- End Counts Section -->

            <section id="services" class="services">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h3 style="color: {{ $title_1->color_title }}"><div>{{ $title_1->title }}</div>
                        </h3>
                        <p>{{ $title_1->text }}</p>
                    </div>
                    <div class="row">
                        @foreach($getSectionFour as $section_four)
                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                                 data-aos-delay="100">
                                <div class="icon-box">
                                    <div class="icon"><i class="{{ $section_four->icon }}"></i></div>
                                    <h4><a href="{{ $section_four->url }}">{{ $section_four->sub_title }}</a></h4>
                                    <p>{{ $section_four->sub_text }}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
            </section><!-- End Services Section -->

            <!-- ======= Testimonials Section ======= -->
            <section id="testimonials" class="testimonials">
                <div class="container" data-aos="zoom-in">

                    <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                         alt="">
                                    <h3>Saul Goodman</h3>
                                    <h4>Ceo &amp; Founder</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                        suscipit
                                        rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen
                                        aliquam,
                                        risus at semper.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                         alt="">
                                    <h3>Sara Wilsson</h3>
                                    <h4>Designer</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Export tempor illum tamen malis malis eram quae irure esse labore quem
                                        cillum
                                        quid
                                        cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat
                                        irure
                                        amet
                                        legam anim culpa.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                         alt="">
                                    <h3>Jena Karlis</h3>
                                    <h4>Store Owner</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla
                                        quem
                                        veniam duis minim tempor labore quem eram duis noster aute amet eram fore
                                        quis
                                        sint
                                        minim.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="/assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                         alt="">
                                    <h3>Matt Brandon</h3>
                                    <h4>Freelancer</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export
                                        minim
                                        fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit
                                        fore
                                        quem
                                        dolore labore illum veniam.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="/assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                         alt="">
                                    <h3>John Larson</h3>
                                    <h4>Entrepreneur</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor
                                        noster
                                        veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam
                                        esse
                                        veniam
                                        culpa fore nisi cillum quid.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </section><!-- End Testimonials Section -->

            <!-- ======= Portfolio Section ======= -->
            <section id="portfolio" class="portfolio">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h3 style="color: {{ $title_2->color_title }}"><div>{{ $title_2->title }}</div>
                        </h3>
                        <p>{{ $title_2->text }}</p>
                    </div>

                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">All</li>
                                <li data-filter=".filter-app">App</li>
                                <li data-filter=".filter-card">Card</li>
                                <li data-filter=".filter-web">Web</li>
                            </ul>
                        </div>
                    </div>

                    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <img src="/assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 1</h4>
                                <p>App</p>
                                <a href="/assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                                   class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <img src="/assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <a href="/assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery"
                                   class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <img src="/assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 2</h4>
                                <p>App</p>
                                <a href="/assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
                                   class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <img src="/assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 2</h4>
                                <p>Card</p>
                                <a href="/assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
                                   class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <img src="/assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 2</h4>
                                <p>Web</p>
                                <a href="/assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery"
                                   class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <img src="/assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 3</h4>
                                <p>App</p>
                                <a href="/assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"
                                   class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <img src="/assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 1</h4>
                                <p>Card</p>
                                <a href="/assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"
                                   class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <img src="/assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 3</h4>
                                <p>Card</p>
                                <a href="/assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery"
                                   class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <img src="/assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <a href="/assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery"
                                   class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>

                    </div>

                </div>
            </section><!-- End Portfolio Section -->

            <!-- ======= Team Section ======= -->
            <section id="team" class="team section-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h3 style="color: {{ $title_3->color_title }}"><div>{{ $title_3->title }}</div>
                        </h3>
                        <p>{{ $title_3->text }}</p>
                    </div>

                    <div class="row">

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                             data-aos-delay="100">
                            <div class="member">
                                <div class="member-img">
                                    <img src="/assets/img/team/team-1.jpg" class="img-fluid" alt="">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>Walter White</h4>
                                    <span>Chief Executive Officer</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                             data-aos-delay="200">
                            <div class="member">
                                <div class="member-img">
                                    <img src="/assets/img/team/team-2.jpg" class="img-fluid" alt="">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>Sarah Jhonson</h4>
                                    <span>Product Manager</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                             data-aos-delay="300">
                            <div class="member">
                                <div class="member-img">
                                    <img src="/assets/img/team/team-3.jpg" class="img-fluid" alt="">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>William Anderson</h4>
                                    <span>CTO</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                             data-aos-delay="400">
                            <div class="member">
                                <div class="member-img">
                                    <img src="/assets/img/team/team-4.jpg" class="img-fluid" alt="">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>Amanda Jepson</h4>
                                    <span>Accountant</span>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </section><!-- End Team Section -->

            <!-- ======= Frequently Asked Questions Section ======= -->
            <section id="faq" class="faq section-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h3 style="color: {{ $title_4->color_title }}"><div>{{ $title_4->title }}</div>
                        </h3>
                        <p>{{ $title_4->text }}</p>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <ul class="faq-list">

                                <li>
                                    <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non
                                        consectetur a
                                        erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i
                                            class="bi bi-chevron-up icon-close"></i></div>
                                    <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                                        <p>
                                            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat
                                            lacus
                                            laoreet non curabitur gravida. Venenatis lectus magna fringilla urna
                                            porttitor
                                            rhoncus dolor purus non.
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat
                                        scelerisque varius morbi enim nunc faucibus a pellentesque? <i
                                            class="bi bi-chevron-down icon-show"></i><i
                                            class="bi bi-chevron-up icon-close"></i></div>
                                    <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                                        <p>
                                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi.
                                            Id
                                            interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                            scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper
                                            dignissim.
                                            Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit
                                        amet
                                        consectetur adipiscing elit pellentesque habitant morbi? <i
                                            class="bi bi-chevron-down icon-show"></i><i
                                            class="bi bi-chevron-up icon-close"></i></div>
                                    <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                                        <p>
                                            Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis
                                            orci.
                                            Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit
                                            amet
                                            nisl
                                            suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis
                                            convallis
                                            convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi
                                            quis
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio
                                        tempor
                                        orci dapibus. Aliquam eleifend mi in nulla? <i
                                            class="bi bi-chevron-down icon-show"></i><i
                                            class="bi bi-chevron-up icon-close"></i></div>
                                    <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                                        <p>
                                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi.
                                            Id
                                            interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                            scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper
                                            dignissim.
                                            Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus
                                        quam
                                        pellentesque nec nam aliquam sem et tortor consequat? <i
                                            class="bi bi-chevron-down icon-show"></i><i
                                            class="bi bi-chevron-up icon-close"></i></div>
                                    <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                                        <p>
                                            Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim
                                            suspendisse in est ante in. Nunc vel risus commodo viverra maecenas
                                            accumsan.
                                            Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis
                                            blandit
                                            turpis cursus in
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor
                                        vitae
                                        purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor?
                                        <i
                                            class="bi bi-chevron-down icon-show"></i><i
                                            class="bi bi-chevron-up icon-close"></i></div>
                                    <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                                        <p>
                                            Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae
                                            ultricies
                                            leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit
                                            amet.
                                            Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate
                                            eu
                                            scelerisque. Pellentesque diam volutpat commodo sed egestas egestas
                                            fringilla
                                            phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim
                                            nec.
                                        </p>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>
            </section><!-- End Frequently Asked Questions Section -->

            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h3 style="color: {{ $title_5->color_title }}"><div>{{ $title_5->title }}</div>
                        </h3>
                        <p>{{ $title_5->text }}</p>
                    </div>

                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-6">
                            <div class="info-box mb-4">
                                <i class="bx bx-map"></i>
                                <h3>Our Address</h3>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="info-box  mb-4">
                                <i class="bx bx-envelope"></i>
                                <h3>Email Us</h3>
                                <p>contact@example.com</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="info-box  mb-4">
                                <i class="bx bx-phone-call"></i>
                                <h3>Call Us</h3>
                                <p>+1 5589 55488 55</p>
                            </div>
                        </div>

                    </div>

                    <div class="row" data-aos="fade-up" data-aos-delay="100">

                        <div class="col-lg-6 ">
                            <iframe class="mb-4 mb-lg-0"
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                                    frameborder="0" style="border:0; width: 100%; height: 384px;"
                                    allowfullscreen></iframe>
                        </div>

                        <div class="col-lg-6">
                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div class="row">
                                    <div class="col form-group">
                                        <input type="text" name="name" class="form-control" id="name"
                                               placeholder="Your Name" required>
                                    </div>
                                    <div class="col form-group">
                                        <input type="email" class="form-control" name="email" id="email"
                                               placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                           placeholder="Subject" required>
                                </div>
                                <div class="form-group">
                                                        <textarea class="form-control" name="message" rows="5"
                                                                  placeholder="Message"
                                                                  required></textarea>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center">
                                    <button type="submit">Send Message</button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        {{--        <div class="footer-newsletter">--}}
        {{--            <div class="container">--}}
        {{--                <div class="row justify-content-center">--}}
        {{--                    <div class="col-lg-6">--}}
        {{--                        <h4>Join Our Newsletter</h4>--}}
        {{--                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>--}}
        {{--                        <form action="" method="post">--}}
        {{--                            <input type="email" name="email"><input type="submit" value="Subscribe">--}}
        {{--                        </form>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>BizLand<span>.</span></h3>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>BizLand</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

@endsection

<script>

    import Vue from "vue";


    let API = 'http://127.0.0.1:8001/api/freight/list';
    {{--{{ $responseGet }}--}}
    fetch(API)
        .then(response => response.json())
        .then(response => {
            console.log(response.data[0])
            document.getElementById('plateId').innerHTML = response.data[0].plate
            document.getElementById('vehicleOwnerId').innerHTML = response.data[0].vehicle_owner

        })


</script>
