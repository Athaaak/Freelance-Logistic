@include('template.head')

<body>
    <!-- Spinner Start -->
    @include('template.spinner')
    <!-- Spinner End -->


    <!-- Navbar Start -->
    @include('template.navbar')
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 remove-padding">
        <div class="owl-carousel header-carousel position-relative mb-5">
            <div class="owl-carousel-item position-relative">
                <div class="parallax">
                </div>
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Agriculture
                                    Product and Solution</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4 font-size-header">#1 Solusi
                                    <span class="font-green">Pupuk</span> <br>Pertanian Anda</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2 header-desc">Temukan berbagai kebutuhan
                                    pupuk
                                    berkualitas yang diproses secara professional sekarang juga.
                                </p>
                                <a href="{{ route('service') }}"
                                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Transport & Logistics Solution</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">#1 Place For Your <span class="text-primary">Transport</span> Solution</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Free Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container about py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/about.jpg"
                            style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="text-secondary text-uppercase mb-3">tentang Kami</h6>
                    <h1 class="mb-5">PT. Pemuda Timur Cahaya Nusantara</h1>
                    <p class="mb-5">PT. Pemuda Timur Cahaya Nusantara adalah sebuah perusahaan
                        bergerak di bidang pupuk. Kami berkomitmen untuk mendukung sumber pangan utama di seluruh dunia
                        dengan menjadi penyedia solusi pertanian yang berkompeten.

                    </p>
                    <div class="row g-4 mb-5">
                        <div class="wow fadeIn" data-wow-delay="0.5s">
                            <img width="50" height="50" src="https://img.icons8.com/ios/50/chemical-plant-3.png"
                                alt="chemical-plant-3" />
                            <h5>Lokasi Pabrik Kami</h5>
                            <p class="m-0">Lokasi Pabrik terletak di Jl. Raya Daendels Km. 47,2,
                                RT.001, RW.001, Desa
                                Bolo, Kecamatan Ujungpangkah, Kab. Gresik, Provinsi Jawa Timur.
                            </p>
                        </div>
                    </div>
                    <div class="row g-4 mb-5">
                        <div class="wow fadeIn" data-wow-delay="0.5s">
                            <img width="50" height="50" src="https://img.icons8.com/ios/50/link-company-parent.png"
                                alt="link-company-parent" />
                            <h5>Lokasi Kantor Kami</h5>
                            <p class="m-0">Ruko nginden intan A2 Street no 11,
                                Surabaya City, East Java, Indonesia
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Feature Start -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0 bg-color-green">
        <div class="container feature py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 feature-text wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="font-white text-uppercase mb-3">Keunggulan kami</h6>
                    <h1 class="mb-5 font-white">Telah Dipercaya Lebih Dari <br> 15 Tahun</h1>
                    <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.7s">
                        <img width="50" height="50" src="img/eco.png" alt="delivery--v1" />
                        <div class="ms-4 font-white">
                            <h5 class="font-white">100% Eco-friendly</h5>
                            <p class="mb-0 font-white">Pada saat proses produksi kami mengedepankan prinsip
                                eco-friendly.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.3s">
                        <img width="50" height="50" src="img/delivery.png" alt="delivery--v1" />
                        <div class="ms-4 font-white">
                            <h5 class="font-white">Pengiriman Seluruh Indonesia</h5>
                            <p class="mb-0 font-white">Memiliki jaringan pemasaran dan distribusi di seluruh Indonesia.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.3s">
                        <img width="50" height="50" src="img/quality.png" alt="delivery--v1" />
                        <div class="ms-4 font-white">
                            <h5 class="font-white">Produk Berkualitas</h5>
                            <p class="mb-0 font-white">Kami menyediakan pupuk dengan bahan berkualitas yang dipilih dan
                                diolah dengan langsung secara professional.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.7s">
                        <img width="50" height="50" src="img/legality.png" alt="delivery--v1" />
                        <div class="ms-4 font-white">
                            <h5 class="font-white">Dokumen Legal Lengkap</h5>
                            <p class="mb-0 font-white">Memiliki kelengkapan semua dokumen legal yang dibutuhkan untuk
                                edar pupuk.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.7s">
                        <img width="50" height="50" src="img/affordable.png" alt="delivery--v1" />
                        <div class="ms-4 font-white">
                            <h5 class="font-white">Terjangkau</h5>
                            <p class="mb-0 font-white">Harga yang lebih terjangkau daripada pupuk yang ada dipasaran.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex mb-0 wow fadeInUp" data-wow-delay="0.7s">
                        <img width="50" height="50" src="img/customize.png" alt="delivery--v1" />
                        <div class="ms-4 font-white">
                            <h5 class="font-white">Kustomisasi</h5>
                            <p class="mb-0 font-white">Kami sadar akan perbedaan karakteristik tanah pada negara yang
                                berbeda,
                                Maka dari itu, kami menyediakan opsi formula yang dapat dikostumisasi sesuai kebutuhan
                                pembeli.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/feature.jpg"
                            style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Fact Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">Some Facts</h6>
                    <h1 class="mb-5">#1 Place To Manage All Of Your Shipments</h1>
                    <p class="mb-5">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                        eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                    </p>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-headphones fa-2x flex-shrink-0 bg-primary p-3 text-white"></i>
                        <div class="ps-4">
                            <h6>Call for any query!</h6>
                            <h3 class="text-primary m-0">+012 345 6789</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-6">
                            <div class="bg-primary p-4 mb-4 wow fadeIn" data-wow-delay="0.3s">
                                <i class="fa fa-users fa-2x text-white mb-3"></i>
                                <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                                <p class="text-white mb-0">Happy Clients</p>
                            </div>
                            <div class="bg-secondary p-4 wow fadeIn" data-wow-delay="0.5s">
                                <i class="fa fa-ship fa-2x text-white mb-3"></i>
                                <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                                <p class="text-white mb-0">Complete Shipments</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="bg-success p-4 wow fadeIn" data-wow-delay="0.7s">
                                <i class="fa fa-star fa-2x text-white mb-3"></i>
                                <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                                <p class="text-white mb-0">Customer Reviews</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Fact End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Produk Kami</h6>
                <h1 class="mb-5">Jelajahi Produk Kami</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/product1.png" alt="">
                        </div>
                        <h4 class="mb-3">Bio Fertilizer</h4>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Bio Fertilizer</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                    class="active">
                                                </li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block" src="img/product1.png" width="400px"
                                                        height="auto">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block" src="img/product1-details1.jpg" width="400px"
                                                        height="auto">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block" src="img/product1-details2.jpg" width="400px"
                                                        height="auto">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators"
                                                role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"
                                                    style="background-color: black;"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators"
                                                role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"
                                                    style="background-color: black;"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                        <div class="product-desc">
                                            <div class="details">
                                                <div class="details-label">Product Details</div>
                                                <div class="details-img"><img src="img/product-details1.png"
                                                        width="650px" height="auto"></div>
                                                <div class="specs-label">Product Specifications</div>
                                                <div class="details-img"><img src="img/product-specs1.png" width="550px"
                                                        height="auto"></div>
                                                <div class="specs-label">Product Order</div>
                                                <div class="details-img"><a href="javascript:void(0)"
                                                        onclick="window.open('https://wa.me/6281359225792?text=Halo,%20saya%20tertarik%20dengan%20produk%20pupuk%20Bio%20Fertilizer%20anda%20','blank')">
                                                        <img width="auto" height="48" src="img/contactus.png"
                                                            alt="whatsapp--v1" />
                                                    </a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#exampleModalCenter">
                            Selengkapnya
                        </button>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/product2.png" alt="">
                        </div>
                        <h4 class="mb-3">Organic Fertilizer</h4>
                        <!-- <p>Pembenah tanah (soil conditioner) untuk mempercepat pemulihan kualitas tanah.</p> -->
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Organic Fertilizer</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div id="carouselExampleIndicators2" class="carousel slide"
                                            data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators2" data-slide-to="0"
                                                    class="active">
                                                </li>
                                                <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block" src="img/product2.png" width="400px"
                                                        height="auto">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block" src="img/product2-details.jpg" width="400px"
                                                        height="auto">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators2"
                                                role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"
                                                    style="background-color: black;"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators2"
                                                role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"
                                                    style="background-color: black;"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                        <div class="product-desc">
                                            <div class="details">
                                                <div class="details-label">Product Details</div>
                                                <div class="details-img"><img src="img/product-details2.png"
                                                        width="650px" height="auto"></div>
                                                <div class="specs-label">Product Specifications</div>
                                                <div class="details-img"><img src="img/product-specs2.png" width="550px"
                                                        height="auto"></div>
                                                <div class="specs-label">Product Order</div>
                                                <div class="details-img"><a href="javascript:void(0)"
                                                        onclick="window.open('https://wa.me/6281359225792?text=Halo,%20saya%20tertarik%20dengan%20produk%20pupuk%20Organic%20Fertilizer%20anda%20','blank')">
                                                        <img width="auto" height="48" src="img/contactus.png"
                                                            alt="whatsapp--v1" />
                                                    </a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#exampleModalCenter2">
                            Selengkapnya
                        </button>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/product3.png">
                        </div>
                        <h4 class="mb-3">SPTRO Extra Phospat</h4>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">SPTRO Extra Phospat</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div id="carouselExampleIndicators3" class="carousel slide"
                                            data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators3" data-slide-to="0"
                                                    class="active">
                                                </li>
                                                <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block" src="img/product3.png" width="400px"
                                                        height="auto">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block" src="img/product3-details.jpg" width="400px"
                                                        height="auto">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators3"
                                                role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"
                                                    style="background-color: black;"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators3"
                                                role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"
                                                    style="background-color: black;"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                        <div class="product-desc">
                                            <div class="details">
                                                <div class="details-label">Product Details</div>
                                                <div class="details-img"><img src="img/product-details3.png"
                                                        width="650px" height="auto"></div>
                                                <div class="specs-label">Product Specifications</div>
                                                <div class="details-img"><img src="img/product-specs3.png" width="550px"
                                                        height="auto"></div>
                                                <div class="specs-label">Product Order</div>
                                                <div class="details-img"><a href="javascript:void(0)"
                                                        onclick="window.open('https://wa.me/6281359225792?text=Halo,%20saya%20tertarik%20dengan%20produk%20pupuk%20SPTRO%20Extra%20Phospat%20anda%20','blank')">
                                                        <img width="auto" height="48" src="img/contactus.png"
                                                            alt="whatsapp--v1" />
                                                    </a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#exampleModalCenter3">
                            Selengkapnya
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Pricing Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Pricing Plan</h6>
                <h1 class="mb-5">Perfect Pricing Plan</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="price-item">
                        <div class="border-bottom p-4 mb-4">
                            <h5 class="text-primary mb-1">Basic Plan</h5>
                            <h1 class="display-5 mb-0">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">$</small>49.00<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                            </h1>
                        </div>
                        <div class="p-4 pt-0">
                            <p><i class="fa fa-check text-success me-3"></i>HTML5 & CSS3</p>
                            <p><i class="fa fa-check text-success me-3"></i>Bootstrap v5</p>
                            <p><i class="fa fa-check text-success me-3"></i>FontAwesome Icons</p>
                            <p><i class="fa fa-check text-success me-3"></i>Responsive Layout</p>
                            <p><i class="fa fa-check text-success me-3"></i>Cross-browser Support</p>
                            <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Order
                                    Now</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="price-item">
                        <div class="border-bottom p-4 mb-4">
                            <h5 class="text-primary mb-1">Standard Plan</h5>
                            <h1 class="display-5 mb-0">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">$</small>99.00<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                            </h1>
                        </div>
                        <div class="p-4 pt-0">
                            <p><i class="fa fa-check text-success me-3"></i>HTML5 & CSS3</p>
                            <p><i class="fa fa-check text-success me-3"></i>Bootstrap v5</p>
                            <p><i class="fa fa-check text-success me-3"></i>FontAwesome Icons</p>
                            <p><i class="fa fa-check text-success me-3"></i>Responsive Layout</p>
                            <p><i class="fa fa-check text-success me-3"></i>Cross-browser Support</p>
                            <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Order
                                    Now</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="price-item">
                        <div class="border-bottom p-4 mb-4">
                            <h5 class="text-primary mb-1">Advanced Plan</h5>
                            <h1 class="display-5 mb-0">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">$</small>149.00<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                            </h1>
                        </div>
                        <div class="p-4 pt-0">
                            <p><i class="fa fa-check text-success me-3"></i>HTML5 & CSS3</p>
                            <p><i class="fa fa-check text-success me-3"></i>Bootstrap v5</p>
                            <p><i class="fa fa-check text-success me-3"></i>FontAwesome Icons</p>
                            <p><i class="fa fa-check text-success me-3"></i>Responsive Layout</p>
                            <p><i class="fa fa-check text-success me-3"></i>Cross-browser Support</p>
                            <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Order
                                    Now</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Pricing End -->


    <!-- Quote Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">Get A Quote</h6>
                    <h1 class="mb-5">Request A Free Qoute!</h1>
                    <p class="mb-5">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                        eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-headphones fa-2x flex-shrink-0 bg-primary p-3 text-white"></i>
                        <div class="ps-4">
                            <h6>Call for any query!</h6>
                            <h3 class="text-primary m-0">+012 345 6789</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="bg-light text-center p-5 wow fadeIn" data-wow-delay="0.5s">
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Name"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Your Email"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Mobile"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;">
                                        <option selected>Select A Freight</option>
                                        <option value="1">Freight 1</option>
                                        <option value="2">Freight 2</option>
                                        <option value="3">Freight 3</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Special Note"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Quote End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <!-- <h6 class="text-secondary text-uppercase">Our Team</h6> -->
                <h1 class="mb-5">Kami Terdaftar Di</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img src="img/kemendag.svg">
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp text-align" data-wow-delay="0.5s">
                    <img src="img/kemenkumham.png" width="auto" height="100" style="text-align: center !important;">
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp text-align" data-wow-delay="0.5s">
                    <img src="img/kementan.png" width="auto" height="100" style="text-align: center !important;">
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <img src="img/kan.png" width="auto" height="100">
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
