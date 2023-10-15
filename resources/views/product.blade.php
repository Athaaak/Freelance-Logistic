@include('template.head')

<body>
    <!-- Spinner Start -->
    @include('template.spinner')
    <!-- Spinner End -->


    <!-- Navbar Start -->
    @include('template.navbar')
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Produk</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white"
                            href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Produk</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

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
