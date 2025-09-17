@extends('main')
@section('content')
    {{-- <section id="hero-9" class="bg-03 hero-section">
        <div class="bg-fixed bg-inner division">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="hero-9-txt text-center white-color">
                            <h2>Azza Koi Farm</h2>
                            <p class="p-xl">
                                Nikmati koleksi koi terbaik dengan warna memukau, sehat, dan dirawat dengan penuh
                                ketelatenan.
                            </p>
                            <a href="#" class="btn btn-lg btn-meat tra-white-hover">
                                Tentang Kami
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- HERO-4
                                                           ============================================= -->
    <section id="hero-4" class="bg-fixed hero-section division">
        <div class="container">
            <div class="row d-flex align-items-center">


                <!-- HERO IMAGE -->
                <div class="col-md-7">
                    <div class="hero-4-img text-center">

                        <img class="img-fluid" src="{{ asset('files/images/koi-about.png') }}" alt="hero-image">

                        <!-- Price Badge -->
                        <div class="price-badge-md bg-fixed 1white-color">
                            <div class="badge-txt">
                                <h4 class="h4-xs">Koleksi</h4>
                                <h3 class="h6-lg">Koi Istimewa</h3>
                            </div>
                        </div>

                    </div>
                </div>


                <!-- HERO TEXT -->
                <div class="col-md-5">
                    <div class="hero-4-txt text-center white-color">

                        <!-- Title -->
                        <h2>Azza Koi </h2>
                        <h3>Farm</h3>

                        <!-- Text -->
                        <p class="p-md">
                            Nikmati koleksi koi terbaik dengan warna memukau, sehat, dan dirawat dengan penuh
                            ketelatenan.
                        </p>

                        <!-- Button -->
                        <a href="#" class="btn btn-md btn-yellow tra-white-hover">Tentang Kami</a>

                    </div>
                </div> <!-- END HERO TEXT -->


            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- END HERO-4 -->



    <section id="" class="wide-40 about-section division">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-5 col-lg-6">
                    <div class="about-3-img text-center mb-40">
                        <img class="img-fluid" src="{{ asset('files/images/about-8.png') }}" alt="about-image">
                    </div>
                </div>

                <div class="col-md-7 col-lg-6">
                    <div class="about-3-txt mb-40">
                        <h2 class="h2-sm">Tentang Kami – Azza Koi Farm</h2>
                        <p class="p-md grey-color">
                            Azza Koi Farm adalah tempat budidaya koi yang berfokus pada kualitas, kesehatan, dan keindahan
                            setiap ekor ikan. Kami percaya bahwa koi bukan hanya sekadar ikan hias, tetapi juga simbol
                            ketenangan, keberuntungan, dan seni alami yang menambah nilai estetika pada kolam Anda.
                        </p>
                        <div class="abox-2-wrapper ico-70">
                            <div class="row text-center">
                                <div class="col-sm-3">
                                    <div class="abox-2">
                                        <div class="abox-2-ico grey-color">
                                            {{-- <span class="flaticon-fish"></span> --}}
                                            <i class="fa-solid fa-fish fs-1"></i>
                                        </div>
                                        <h6 class="h6-lg">Kualitas Terjamin</h6>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="abox-2">
                                        <div class="abox-2-ico grey-color">
                                            {{-- <span class="flaticon-fried-chicken"></span> --}}
                                            <i class="fa-regular fa-handshake fs-1"></i>
                                        </div>
                                        <h6 class="h6-lg">Kepercayaan Pelanggan</h6>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="abox-2">
                                        <div class="abox-2-ico grey-color">
                                            {{-- <span class="flaticon-best-price"></span> --}}
                                            <i class="fa-solid fa-hand-holding-dollar fs-1"></i>
                                        </div>
                                        <h6 class="h6-lg">Harga Bersahabat</h6>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="abox-2">
                                        <div class="abox-2-ico grey-color">
                                            {{-- <span class="flaticon-moped"></span> --}}
                                            <i class="fa-regular fa-headphones fs-1"></i>
                                        </div>
                                        <h6 class="h6-lg">Pelayanan Profesional</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="menu-6" class="wide-70 menu-section division">
        <div class="container">
            <div class="text-center">
                <h3 class="h3-md meat-color">
                    Produk Kami
                </h3>
                <p class="p-md grey-color">
                    Kami menghadirkan pilihan produk yang beragam, terpercaya, dan sesuai dengan kebutuhan Anda.
                </p>
            </div>
            <div class="row">
                <div class="col-sm-4 col-lg-3">
                    <div class="menu-6-item bg-white">
                        <div class="menu-6-img rel">
                            <div class="hover-overlay">
                                <img class="img-fluid" src="{{ asset('files/images/produk-koi.png') }}" alt="menu-image" />
                                <span class="item-code bg-tra-dark">Code: 6464</span>
                                <div class="menu-img-zoom ico-25">
                                    <a href="{{ asset('files/images/produk-koi.png') }}" class="image-link">
                                        <span class="flaticon-zoom"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="menu-6-txt rel">
                            {{-- <div class="item-rating">
                                <div class="stars-rating stars-lg">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div> --}}

                            <div class="like-ico ico-25">
                                <a href="#">
                                    <span class="flaticon-heart"></span>
                                </a>
                            </div>
                            <h5 class="h5-sm">
                                Koi kohaku
                            </h5>
                            <!-- Description -->
                            <p class="grey-color">
                                Chicken breast, chilli sauce, tomatoes, pickles, coleslaw
                            </p>
                            <div class="menu-6-price bg-meat">
                                <h5 class="h6-xs yellow-color">
                                    Rp30.000
                                </h5>
                            </div>
                            <div class="add-to-cart bg-yellow ico-10">
                                <a href="#">
                                    <span class="flaticon-shopping-bag"></span>
                                    Keranjang
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-3">
                    <div class="menu-6-item bg-white">
                        <div class="menu-6-img rel">
                            <div class="hover-overlay">
                                <img class="img-fluid" src="{{ asset('files/images/produk-koi.png') }}" alt="menu-image" />
                                <span class="item-code bg-tra-dark">Code: 6464</span>
                                <div class="menu-img-zoom ico-25">
                                    <a href="{{ asset('files/images/produk-koi.png') }}" class="image-link">
                                        <span class="flaticon-zoom"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="menu-6-txt rel">
                            {{-- <div class="item-rating">
                                <div class="stars-rating stars-lg">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div> --}}

                            <div class="like-ico ico-25">
                                <a href="#">
                                    <span class="flaticon-heart"></span>
                                </a>
                            </div>
                            <h5 class="h5-sm">
                                Koi kohaku
                            </h5>
                            <!-- Description -->
                            <p class="grey-color">
                                Chicken breast, chilli sauce, tomatoes, pickles, coleslaw
                            </p>
                            <div class="menu-6-price bg-meat">
                                <h5 class="h6-xs yellow-color">
                                    Rp30.000
                                </h5>
                            </div>
                            <div class="add-to-cart bg-yellow ico-10">
                                <a href="#">
                                    <span class="flaticon-shopping-bag"></span>
                                    Keranjang
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-3">
                    <div class="menu-6-item bg-white">
                        <div class="menu-6-img rel">
                            <div class="hover-overlay">
                                <img class="img-fluid" src="{{ asset('files/images/produk-koi.png') }}"
                                    alt="menu-image" />
                                <span class="item-code bg-tra-dark">Code: 6464</span>
                                <div class="menu-img-zoom ico-25">
                                    <a href="{{ asset('files/images/produk-koi.png') }}" class="image-link">
                                        <span class="flaticon-zoom"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="menu-6-txt rel">
                            {{-- <div class="item-rating">
                                <div class="stars-rating stars-lg">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div> --}}

                            <div class="like-ico ico-25">
                                <a href="#">
                                    <span class="flaticon-heart"></span>
                                </a>
                            </div>
                            <h5 class="h5-sm">
                                Koi kohaku
                            </h5>
                            <!-- Description -->
                            <p class="grey-color">
                                Chicken breast, chilli sauce, tomatoes, pickles, coleslaw
                            </p>
                            <div class="menu-6-price bg-meat">
                                <h5 class="h6-xs yellow-color">
                                    Rp30.000
                                </h5>
                            </div>
                            <div class="add-to-cart bg-yellow ico-10">
                                <a href="#">
                                    <span class="flaticon-shopping-bag"></span>
                                    Keranjang
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-3">
                    <div class="menu-6-item bg-white">
                        <div class="menu-6-img rel">
                            <div class="hover-overlay">
                                <img class="img-fluid" src="{{ asset('files/images/produk-koi.png') }}"
                                    alt="menu-image" />
                                <span class="item-code bg-tra-dark">Code: 6464</span>
                                <div class="menu-img-zoom ico-25">
                                    <a href="{{ asset('files/images/produk-koi.png') }}" class="image-link">
                                        <span class="flaticon-zoom"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="menu-6-txt rel">
                            {{-- <div class="item-rating">
                                <div class="stars-rating stars-lg">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div> --}}

                            <div class="like-ico ico-25">
                                <a href="#">
                                    <span class="flaticon-heart"></span>
                                </a>
                            </div>
                            <h5 class="h5-sm">
                                Koi kohaku
                            </h5>
                            <!-- Description -->
                            <p class="grey-color">
                                Chicken breast, chilli sauce, tomatoes, pickles, coleslaw
                            </p>
                            <div class="menu-6-price bg-meat">
                                <h5 class="h6-xs yellow-color">
                                    Rp30.000
                                </h5>
                            </div>
                            <div class="add-to-cart bg-yellow ico-10">
                                <a href="#">
                                    <span class="flaticon-shopping-bag"></span>
                                    Keranjang
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-3">
                    <div class="menu-6-item bg-white">
                        <div class="menu-6-img rel">
                            <div class="hover-overlay">
                                <img class="img-fluid" src="{{ asset('files/images/produk-koi.png') }}"
                                    alt="menu-image" />
                                <span class="item-code bg-tra-dark">Code: 6464</span>
                                <div class="menu-img-zoom ico-25">
                                    <a href="{{ asset('files/images/produk-koi.png') }}" class="image-link">
                                        <span class="flaticon-zoom"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="menu-6-txt rel">
                            {{-- <div class="item-rating">
                                <div class="stars-rating stars-lg">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div> --}}

                            <div class="like-ico ico-25">
                                <a href="#">
                                    <span class="flaticon-heart"></span>
                                </a>
                            </div>
                            <h5 class="h5-sm">
                                Koi kohaku
                            </h5>
                            <!-- Description -->
                            <p class="grey-color">
                                Chicken breast, chilli sauce, tomatoes, pickles, coleslaw
                            </p>
                            <div class="menu-6-price bg-meat">
                                <h5 class="h6-xs yellow-color">
                                    Rp30.000
                                </h5>
                            </div>
                            <div class="add-to-cart bg-yellow ico-10">
                                <a href="#">
                                    <span class="flaticon-shopping-bag"></span>
                                    Keranjang
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-3">
                    <div class="menu-6-item bg-white">
                        <div class="menu-6-img rel">
                            <div class="hover-overlay">
                                <img class="img-fluid" src="{{ asset('files/images/produk-koi.png') }}"
                                    alt="menu-image" />
                                <span class="item-code bg-tra-dark">Code: 6464</span>
                                <div class="menu-img-zoom ico-25">
                                    <a href="{{ asset('files/images/produk-koi.png') }}" class="image-link">
                                        <span class="flaticon-zoom"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="menu-6-txt rel">
                            {{-- <div class="item-rating">
                                <div class="stars-rating stars-lg">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div> --}}

                            <div class="like-ico ico-25">
                                <a href="#">
                                    <span class="flaticon-heart"></span>
                                </a>
                            </div>
                            <h5 class="h5-sm">
                                Koi kohaku
                            </h5>
                            <!-- Description -->
                            <p class="grey-color">
                                Chicken breast, chilli sauce, tomatoes, pickles, coleslaw
                            </p>
                            <div class="menu-6-price bg-meat">
                                <h5 class="h6-xs yellow-color">
                                    Rp30.000
                                </h5>
                            </div>
                            <div class="add-to-cart bg-yellow ico-10">
                                <a href="#">
                                    <span class="flaticon-shopping-bag"></span>
                                    Keranjang
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-3">
                    <div class="menu-6-item bg-white">
                        <div class="menu-6-img rel">
                            <div class="hover-overlay">
                                <img class="img-fluid" src="{{ asset('files/images/produk-koi.png') }}"
                                    alt="menu-image" />
                                <span class="item-code bg-tra-dark">Code: 6464</span>
                                <div class="menu-img-zoom ico-25">
                                    <a href="{{ asset('files/images/produk-koi.png') }}" class="image-link">
                                        <span class="flaticon-zoom"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="menu-6-txt rel">
                            {{-- <div class="item-rating">
                                <div class="stars-rating stars-lg">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div> --}}

                            <div class="like-ico ico-25">
                                <a href="#">
                                    <span class="flaticon-heart"></span>
                                </a>
                            </div>
                            <h5 class="h5-sm">
                                Koi kohaku
                            </h5>
                            <!-- Description -->
                            <p class="grey-color">
                                Chicken breast, chilli sauce, tomatoes, pickles, coleslaw
                            </p>
                            <div class="menu-6-price bg-meat">
                                <h5 class="h6-xs yellow-color">
                                    Rp30.000
                                </h5>
                            </div>
                            <div class="add-to-cart bg-yellow ico-10">
                                <a href="#">
                                    <span class="flaticon-shopping-bag"></span>
                                    Keranjang
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-3">
                    <div class="menu-6-item bg-white">
                        <div class="menu-6-img rel">
                            <div class="hover-overlay">
                                <img class="img-fluid" src="{{ asset('files/images/produk-koi.png') }}"
                                    alt="menu-image" />
                                <span class="item-code bg-tra-dark">Code: 6464</span>
                                <div class="menu-img-zoom ico-25">
                                    <a href="{{ asset('files/images/produk-koi.png') }}" class="image-link">
                                        <span class="flaticon-zoom"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="menu-6-txt rel">
                            {{-- <div class="item-rating">
                                <div class="stars-rating stars-lg">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div> --}}

                            <div class="like-ico ico-25">
                                <a href="#">
                                    <span class="flaticon-heart"></span>
                                </a>
                            </div>
                            <h5 class="h5-sm">
                                Koi kohaku
                            </h5>
                            <!-- Description -->
                            <p class="grey-color">
                                Chicken breast, chilli sauce, tomatoes, pickles, coleslaw
                            </p>
                            <div class="menu-6-price bg-meat">
                                <h5 class="h6-xs yellow-color">
                                    Rp30.000
                                </h5>
                            </div>
                            <div class="add-to-cart bg-yellow ico-10">
                                <a href="#">
                                    <span class="flaticon-shopping-bag"></span>
                                    Keranjang
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="reviews-1" class="bg-image bg-scroll reviews-section division">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 testimonials white-color">


                    <!-- TRANSPARENT QUOTE ICON -->
                    <div class="quote-icon"></div>


                    <!-- TESTIMONIALS CONTENT -->
                    <div class="flexslider">
                        <ul class="slides text-center">


                            <!-- TESTIMONIAL-1 -->
                            <li class="review-1">
                                <div class="review-1-txt">

                                    <!-- Testimonial Author Avatar -->
                                    <img src="{{ asset('files/images/review-author-1.jpg') }}" alt="testimonial-avatar">

                                    <!-- Text -->
                                    <p>" Etiam sapien sem at sagittis congue augue massa varius sodales sapien undo tempus
                                        dolor
                                        egestas magna suscipit magna tempus aliquet porta sodales augue suscipit luctus
                                        neque "
                                    </p>

                                    <!-- Rating -->
                                    <div class="review-rating">
                                        <div class="stars-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                    </div>

                                    <!-- Testimonial Author -->
                                    <p class="testimonial-autor">by Sean McMarthy</p>

                                </div>
                            </li>


                            <!-- TESTIMONIAL-2 -->
                            <li class="review-1">
                                <div class="review-1-txt">

                                    <!-- Testimonial Author Avatar -->
                                    <img src="{{ asset('files/images/review-author-2.jpg') }}" alt="testimonial-avatar">

                                    <!-- Text -->
                                    <p>" At sagittis congue augue egestas egestas magna ipsum vitae purus ipsum primis in
                                        cubilia
                                        laoreet augue egestas luctus donec diam ociis nullam tempor sapien, eget orci
                                        gravida porta "
                                    </p>

                                    <!-- Rating -->
                                    <div class="review-rating">
                                        <div class="stars-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>

                                    <!-- Testimonial Author -->
                                    <p class="testimonial-autor">by Evelyn Martinez</p>

                                </div>

                            </li>


                            <!-- TESTIMONIAL-3 -->
                            <li class="review-1">
                                <div class="review-1-txt">

                                    <!-- Testimonial Author Avatar -->
                                    <img src="{{ asset('files/images/review-author-3.jpg') }}" alt="testimonial-avatar">

                                    <!-- Text -->
                                    <p>" Mauris donec ociis et magnis sapien etiam sapien sem sagittis congue augue. An orci
                                        nullam
                                        tempor sapien, eget orci gravida donec enim ipsum porta justo integer at odio velna
                                        auctor "
                                    </p>

                                    <!-- Rating -->
                                    <div class="review-rating">
                                        <div class="stars-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                    </div>

                                    <!-- Testimonial Author -->
                                    <p class="testimonial-autor">by Robert Peterson</p>

                                </div>

                            </li>
                        </ul>
                    </div>


                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </div> <!-- END TESTIMONIALS-1 -->


    <section id="kontak" class="py-5">
        <div class="container">
            <div class="row g-4">

                <!-- Kolom Kiri -->
                <div class="col-md-6">
                    <h3 class="fw-bold meat-color mb-3">Informasi Kontak Kami</h3>
                    <p>Hubungi kami dengan mudah melalui Informasi Kontak Kami yang mencakup alamat, telepon, dan jam
                        operasional.</p>

                    <!-- Alamat -->
                    <div class="card mb-3 border-0 shadow-sm">
                        <div class="card-body d-flex align-items-center">
                            <i class="fa-solid fa-map-location-dot fs-3 me-3 text-white p-2 rounded"
                                style="background-color:#a0522d;"></i>
                            <div>
                                <h5 class="fw-bold mb-1">Alamat</h5>
                                <p class="mb-0">Ruko Niaga 3 Kavling 3<br>Jl. Kalimantan Sananwetan Kota Blitar</p>
                            </div>
                        </div>
                    </div>

                    <!-- Kontak -->
                    <div class="card mb-3 border-0 shadow-sm">
                        <div class="card-body d-flex align-items-center">
                            <i class="fa-solid fa-address-book fs-3 me-3 text-white p-2 rounded"
                                style="background-color:#a0522d;"></i>
                            <div>
                                <h5 class="fw-bold mb-1">Kontak</h5>
                                <p class="mb-0">WhatsApp: +62 82 142 222 142<br>Instagram: @arrebeautybar</p>
                            </div>
                        </div>
                    </div>

                    <!-- Jam Operasional -->
                    <div class="card mb-3 border-0 shadow-sm">
                        <div class="card-body d-flex align-items-center">
                            <i class="fa-solid fa-clock fs-3 me-3 text-white p-2 rounded"
                                style="background-color:#a0522d;"></i>
                            <div>
                                <h5 class="fw-bold mb-1">Jam Operasional</h5>
                                <p class="mb-0">Setiap Hari : 10:00 - 20:30 WIB</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kolom Kanan -->
                <div class="col-md-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.9320477314495!2d112.32966517412606!3d-8.108401881120022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7895dae64834b5%3A0xfd3f89b1af065dcc!2sBasecamp%20Aza%20Koi%20Farms!5e0!3m2!1sid!2sid!4v1758073424053!5m2!1sid!2sid"
                        width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        </div>
    </section>


    <section id="about-7" class="bg-05 about-section division">
        <div class="container white-color">
            <div class="abox-4-wrapper ico-80">

                <h2 class="mb-4 text-center">FAQ (Frequently Asked Questions)</h2>
                <div class="accordion container my-5" id="faqAccordion">

                    <!-- 6 -->
                    <div class="accordion-item" style="background-color: transparent; border: 1px solid #fff;">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed text-white" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq6"
                                style="background-color: rgba(0,0,0,0.2);">
                                Berapa biaya ongkir untuk pembelian ikan koi?
                            </button>
                        </h2>
                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-white">
                                Ongkir bervariasi tergantung lokasi dan jumlah pembelian. Estimasi ongkir akan muncul
                                saat checkout, atau bisa hubungi admin untuk detail lebih lanjut.
                            </div>
                        </div>
                    </div>

                    <!-- 7 -->
                    <div class="accordion-item" style="background-color: transparent; border: 1px solid #fff;">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed text-white" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq7"
                                style="background-color: rgba(0,0,0,0.2);">
                                Apakah bisa request ukuran atau jenis koi tertentu?
                            </button>
                        </h2>
                        <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-white">
                                Bisa. Silakan hubungi kami melalui WhatsApp atau form kontak, kami akan cek ketersediaan
                                stok sesuai permintaan Anda.
                            </div>
                        </div>
                    </div>

                    <!-- 8 -->
                    <div class="accordion-item" style="background-color: transparent; border: 1px solid #fff;">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed text-white" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq8"
                                style="background-color: rgba(0,0,0,0.2);">
                                Apakah ada perawatan khusus setelah koi sampai di rumah?
                            </button>
                        </h2>
                        <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-white">
                                Ya. Biarkan koi beradaptasi dengan air baru terlebih dahulu (proses aklimatisasi sekitar
                                15–30 menit) sebelum dilepas ke kolam.
                            </div>
                        </div>
                    </div>

                    <!-- 9 -->
                    <div class="accordion-item" style="background-color: transparent; border: 1px solid #fff;">
                        <h2 class="accordion-header" id="headingNine">
                            <button class="accordion-button collapsed text-white" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq9"
                                style="background-color: rgba(0,0,0,0.2);">
                                Apakah ada diskon untuk pembelian dalam jumlah banyak (grosir)?
                            </button>
                        </h2>
                        <div id="faq9" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-white">
                                Ada. Untuk pembelian dalam jumlah besar, silakan hubungi admin untuk mendapatkan harga
                                spesial.
                            </div>
                        </div>
                    </div>

                    <!-- 10 -->
                    <div class="accordion-item" style="background-color: transparent; border: 1px solid #fff;">
                        <h2 class="accordion-header" id="headingTen">
                            <button class="accordion-button collapsed text-white" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq10"
                                style="background-color: rgba(0,0,0,0.2);">
                                Apakah bisa datang langsung ke tempat untuk melihat koi?
                            </button>
                        </h2>
                        <div id="faq10" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-white">
                                Bisa, tentu saja. Kami juga melayani kunjungan langsung ke farm/kolam dengan perjanjian
                                terlebih dahulu.
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div> <!-- End container -->
    </section> <!-- END ABOUT-7 -->
@endsection
