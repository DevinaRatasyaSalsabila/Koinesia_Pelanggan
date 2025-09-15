@extends('main')
@section('content')
    <section id="hero-9" class="bg-03 hero-section">
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
    </section>

    <section id="" class="wide-40 about-section division">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-5 col-lg-6">
                    <div class="about-3-img text-center mb-40">
                        <img class="img-fluid" src="{{ asset('files/images/koi-about.png') }}" alt="about-image">
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

    <div class="row">
        <div class="col-md-12">
            <div class="menu-3-title">
                <h3 class="h3-md meat-color">
                    Produk Kami
                </h3>
                <p class="p-md grey-color">
                    Kami menghadirkan pilihan produk yang beragam, terpercaya, dan sesuai dengan kebutuhan Anda.
                </p>
            </div>
        </div>
    </div>

    <section id="menu-6" class="wide-70 menu-section division">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
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
                            <div class="item-rating">
                                <div class="stars-rating stars-lg">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>

                            <div class="like-ico ico-25">
                                <a href="#">
                                    <span class="flaticon-heart"></span>
                                </a>
                            </div>
                            <h5 class="h5-sm">
                                Koi kohaku
                            </h5>
                            {{-- <!-- Description -->
                            <p class="grey-color">
                                Chicken breast, chilli sauce, tomatoes, pickles, coleslaw
                            </p> --}}
                            <div class="menu-6-price bg-coffee">
                                <h5 class="h5-xs yellow-color">
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
@endsection