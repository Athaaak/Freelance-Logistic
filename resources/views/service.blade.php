@include('template.head')

<body>
    <!-- Spinner Start -->
    @include('template.spinner')
    <!-- Spinner End -->


    <!-- Navbar Start -->
    @include('template.navbar')
    <!-- Navbar End -->

    <!-- Floating Social Media bar Starts -->
    <div class="float-sm">
        <!-- <div class="fl-fl float-fb">
            <i class="fa fa-facebook"></i>
            <a href="" target="_blank"> Like us!</a>
        </div>
        <div class="fl-fl float-tw">
            <i class="fa fa-twitter"></i>
            <a href="" target="_blank">Follow us!</a>
        </div> -->
        <a href="" style="text-decoration: none; color:inherit">
            <div class="fl-fl float-gp">
                <img width="40" height="40" src="https://img.icons8.com/color/48/whatsapp--v1.png" alt="whatsapp--v1" />
                <span style="margin-left: 10px; font-weight:600; color: white">Our Whatsapp</span>
            </div>
        </a>
        <a href="" style="text-decoration: none; color: inherit">
            <div class="fl-fl float-rs">
                <img width="40" height="40" src="https://img.icons8.com/color/48/telegram-app--v1.png"
                    alt="telegram-app--v1" />
                <span href="" target="_blank" style="margin-left: 10px; font-weight:600; color: white">Our
                    Telegram</span>
            </div>
        </a>
        <!-- <div class="fl-fl float-ig">
            <i class="fa fa-instagram"></i>
            <a href="" target="_blank">Follow us!</a>
        </div>
        <div class="fl-fl float-pn">
            <i class="fa fa-pinterest"></i>
            <a href="" target="_blank">Follow us!</a>
        </div> -->
    </div>
    <!-- Floating Social Media bar Ends -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Company Value</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white"
                            href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Company Value</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Feature Start -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0 bg-color-green">
        <div class="container feature px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s" style="text-align: center;">
                    <div class="mb-5 wow fadeInUp" data-wow-delay="0.7s">
                        <h6 class="font-white text-uppercase">Why us?</h6>
                        <h1 class="font-white font-size-feature">OUR COMPANY VALUE</h1>
                    </div>
                </div>
                <div class="d-flex col-lg-6 wow fadeInUp"
                    style="display: flex; flex-direction:column; padding-left: 50px;" data-wow-delay="0.1s">
                    <div class="d-flex mb-5 wow fadeInUp box-feature box-text" data-wow-delay="0.7s">
                        <img width="50" height="50"
                            src="https://img.icons8.com/fluency-systems-regular/50/document-1.png" alt="document-1" />
                        <div class="ms-4 font-white-box">
                            <h5 class="font-white-box" style="font-size: 22px;">Complete Document Legality</h5>
                            <p class="mb-0 font-white-box" style="font-size: 18px;">Have all required documents required
                                for export.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex mb-5 wow fadeInUp box-feature" data-wow-delay="0.7s">
                        <img width="50" height="50" src="https://img.icons8.com/ios/50/eco-driving-indicator.png"
                            alt="eco-driving-indicator" />
                        <div class="ms-4 font-white-box">
                            <h5 class="font-white-box" style="font-size: 22px;">Eco-friendly</h5>
                            <p class="mb-0 font-white-box" style="font-size: 18px;">Production process
                                are following the
                                principles of eco-friendly.</p>
                        </div>
                    </div>

                    <div class="d-flex mb-5 wow fadeInUp box-feature" data-wow-delay="0.3s">
                        <img width="50" height="50" src="https://img.icons8.com/ios/50/warranty-card.png"
                            alt="warranty-card" />
                        <div class="ms-4 font-white-box">
                            <h5 class="font-white-box" style="font-size: 22px;">Top Quality Product</h5>
                            <p class="mb-0 font-white-box" style="font-size: 18px;">We provide fertilizers from the best
                                raw materials and
                                processed by professionals to produce quality
                                products constantly.</p>
                        </div>
                    </div>

                </div>
                <div class="d-flex col-lg-6 mb-5 wow"
                    style="display: flex; flex-direction:column; padding-right: 50px;">
                    <div class="d-flex mb-5 wow fadeInUp box-feature" data-wow-delay="0.3s">
                        <img width="50" height="50" src="https://img.icons8.com/windows/50/work.png" alt="work" />
                        <div class="ms-4 font-white-box">
                            <h5 class="font-white-box" style="font-size: 22px;">Experienced</h5>
                            <p class="mb-0 font-white-box" style="font-size: 18px;">We have 15 years of experience in
                                the field of fertilizer.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex mb-5 wow fadeInUp box-feature" data-wow-delay="0.7s">
                        <img width="50" height="50" src="https://img.icons8.com/wired/50/cheap.png" alt="cheap" />
                        <div class="ms-4 font-white-box">
                            <h5 class="font-white-box" style="font-size: 22px;">Affordable</h5>
                            <p class="mb-0 font-white-box" style="font-size: 18px;">Our prices are more
                                affordable than
                                fertilizer on the market.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex mb-0 wow fadeInUp box-feature" data-wow-delay="0.7s">
                        <img width="48" height="48" src="https://img.icons8.com/ios/48/maintenance--v1.png"
                            alt="maintenance--v1" />
                        <div class="ms-4 font-white-box">
                            <h5 class="font-white-box" style="font-size: 22px;">Customized Order</h5>
                            <p class="mb-0 font-white-box" style="font-size: 18px;">We are aware for soils differences.
                                Therefore, we available
                                costumized formulas for buyers needs. Contact us for more info.</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Feature End -->



    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <!-- <h6 class="text-secondary text-uppercase">Our Team</h6> -->
                <h1 class="mb-5">We Are Registered On</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s" style="text-align: center;">
                    <img src="img/kemendag.svg" width="auto" height="100" style="text-align: center !important;">
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp text-align" data-wow-delay="0.5s">
                    <img src="img/kemenkumham.png" width="auto" height="100" style="text-align: center !important;">
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp text-align" data-wow-delay="0.5s">
                    <img src="img/inaexport.png" width="280" height="100" style="text-align: center !important;">
                </div>

            </div>
        </div>
    </div>

    <!-- Team End -->


    <!-- Testimonial Start -->
    <!-- <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="text-center">
                <h6 class="text-secondary text-uppercase">Testimonial</h6>
                <h1 class="mb-0">Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <img class="img-fluid flex-shrink-0" src="img/testimonial-1.jpg"
                            style="width: 80px; height: 80px;">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos.
                        Clita erat ipsum et lorem et sit.</p>
                </div>
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <img class="img-fluid flex-shrink-0" src="img/testimonial-2.jpg"
                            style="width: 80px; height: 80px;">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos.
                        Clita erat ipsum et lorem et sit.</p>
                </div>
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <img class="img-fluid flex-shrink-0" src="img/testimonial-3.jpg"
                            style="width: 80px; height: 80px;">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos.
                        Clita erat ipsum et lorem et sit.</p>
                </div>
                <div class="testimonial-item p-4 my-5">
                    <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                    <div class="d-flex align-items-end mb-4">
                        <img class="img-fluid flex-shrink-0" src="img/testimonial-4.jpg"
                            style="width: 80px; height: 80px;">
                        <div class="ms-4">
                            <h5 class="mb-1">Client Name</h5>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos.
                        Clita erat ipsum et lorem et sit.</p>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Testimonial End -->


    <!-- Footer Start -->
    @include('template.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
