@extends('layout.app') 

@section('conteudo')
 
 <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero spad set-bg" data-setbg="img/hero-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero__text">
                        <span>Eiusmod tempor incididunt </span>
                        <h2>Take the world's best quality Treadment</h2>
                        <a href="#" class="primary-btn normal-btn">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Consultation Section Begin -->
    <section class="consultation">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="consultation__form">
                        <div class="section-title">
                            <span>REQUEST FOR YOUR</span>
                            <h2>Consultation</h2>
                        </div>
                        <form action="#">
                            <input type="text" placeholder="Name">
                            <input type="text" placeholder="Email">
                            <div class="datepicker__item">
                                <input type="text" placeholder="Date" class="datepicker">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <select>
                                <option value="">Type of service</option>
                                <option value="">Advanced equipment</option>
                                <option value="">Qualified doctors</option>
                                <option value="">Certified services</option>
                                <option value="">Emergency care</option>
                            </select>
                            <button type="submit" class="site-btn">Book appoitment</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="consultation__text">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="consultation__text__item">
                                    <div class="section-title">
                                        <span>Welcon to Aesthetic</span>
                                        <h2>Find Best Doctors With <b>AESTHETIC</b></h2>
                                    </div>
                                    <p>30 Years of experience in Cosmetic Surgery.Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="consultation__video set-bg" data-setbg="img/consultation-video.jpg">
                                    <a href="https://www.youtube.com/watch?v=PXsuI67s2AA" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Consultation Section End -->

    <!-- Chooseus Section Begin -->
    <section class="chooseus spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span>Why choose us?</span>
                        <h2>Offer for you</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="chooseus__item">
                        <img src="img/icons/ci-1.png" alt="">
                        <h5>Advanced equipment</h5>
                        <p>Lorem ipsum amet, consectetur adipiscing elit, sed do eiusmod tempor cididunt facilisis.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="chooseus__item">
                        <img src="img/icons/ci-2.png" alt="">
                        <h5>Qualified doctors</h5>
                        <p>Lorem ipsum amet, consectetur adipiscing elit, sed do eiusmod tempor cididunt facilisis.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="chooseus__item">
                        <img src="img/icons/ci-3.png" alt="">
                        <h5>Certified services</h5>
                        <p>Lorem ipsum amet, consectetur adipiscing elit, sed do eiusmod tempor cididunt facilisis.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="chooseus__item">
                        <img src="img/icons/ci-4.png" alt="">
                        <h5>Emergency care</h5>
                        <p>Lorem ipsum amet, consectetur adipiscing elit, sed do eiusmod tempor cididunt facilisis.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Chooseus Section End -->

    <!-- Services Section Begin -->
    <section class="services spad set-bg" data-setbg="img/services-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6">
                    <div class="section-title">
                        <span>Our services</span>
                        <h2>Offer for you</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__btn">
                        <a href="#" class="primary-btn">Contact us</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="services__item">
                        <div class="services__item__icon">
                            <span class="flaticon-044-aesthetic"></span>
                        </div>
                        <div class="services__item__text">
                            <h5>Body procedures</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor aliqua.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="services__item">
                        <div class="services__item__icon">
                            <span class="flaticon-027-beauty"></span>
                        </div>
                        <div class="services__item__text">
                            <h5>Facial Procedures</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor aliqua.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="services__item">
                        <div class="services__item__icon">
                            <span class="flaticon-031-anatomy"></span>
                        </div>
                        <div class="services__item__text">
                            <h5>Breast procedures</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor aliqua.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="services__item">
                        <div class="services__item__icon">
                            <span class="flaticon-008-abdominoplasty"></span>
                        </div>
                        <div class="services__item__text">
                            <h5>Skin care & Beauty</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor aliqua.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Team Section Begin -->
    <section class="team spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span>Our Team</span>
                        <h2>Our Expert Doctors</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team__item">
                        <img src="img/team/team-1.jpg" alt="">
                        <h5>Caroline Grant</h5>
                        <span>Plastic surgeon</span>
                        <div class="team__item__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team__item">
                        <img src="img/team/team-2.jpg" alt="">
                        <h5>Dr. Maria Angel</h5>
                        <span>Plastic surgeon</span>
                        <div class="team__item__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team__item">
                        <img src="img/team/team-3.jpg" alt="">
                        <h5>Nathan Mullins</h5>
                        <span>Plastic surgeon</span>
                        <div class="team__item__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Gallery Begin -->
    <div class="gallery">
        <div class="gallery__container">
            <div class="grid-sizer"></div>
            <div class="gc__item set-bg" data-setbg="img/gallery/gallery-1.jpg">
                <a href="img/gallery/gallery-1.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
            <div class="gc__item set-bg" data-setbg="img/gallery/gallery-2.jpg">
                <a href="img/gallery/gallery-2.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
            <div class="gc__item set-bg" data-setbg="img/gallery/gallery-3.jpg">
                <a href="img/gallery/gallery-3.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
            <div class="gc__item gc__item__large set-bg" data-setbg="img/gallery/gallery-4.jpg">
                <a href="img/gallery/gallery-4.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
            <div class="gc__item set-bg" data-setbg="img/gallery/gallery-5.jpg">
                <a href="img/gallery/gallery-5.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
            <div class="gc__item set-bg" data-setbg="img/gallery/gallery-6.jpg">
                <a href="img/gallery/gallery-6.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
            <div class="gc__item set-bg" data-setbg="img/gallery/gallery-7.jpg">
                <a href="img/gallery/gallery-7.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
        </div>
    </div>
    <!-- Gallery End -->

    <!-- Latest News Begin -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6">
                    <div class="section-title">
                        <span>Our News</span>
                        <h2>Skin care tips</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="latest__btn">
                        <a href="#" class="primary-btn">View all news</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="latest__item">
                        <h5><a href="#">Here’s how you can get a natural glow this party season</a></h5>
                        <p>Lorem ipsum, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                        <ul>
                            <li><img src="img/blog/blog-author.jpg" alt=""> John Doe</li>
                            <li>Dec 06, 2019</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="latest__item">
                        <h5><a href="#">Get better skin with these top 10 tips for skin care</a></h5>
                        <p>Lorem ipsum, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                        <ul>
                            <li><img src="img/blog/blog-author.jpg" alt=""> John Doe</li>
                            <li>Dec 06, 2019</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="latest__item">
                        <h5><a href="#">8 Ways to Save Your Skin if You Exercise Outside This Winter</a></h5>
                        <p>Lorem ipsum, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                        <ul>
                            <li><img src="img/blog/blog-author.jpg" alt=""> John Doe</li>
                            <li>Dec 06, 2019</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest News End -->

    @endsection