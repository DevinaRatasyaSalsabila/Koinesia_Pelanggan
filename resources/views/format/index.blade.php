@extends('main')
@section('content')
    <div id="cart-page" class="page-hero-section division">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="hero-txt text-center white-color">
                        <div id="breadcrumb">
                            <div class="row">
                                <div class="col">
                                    <div class="breadcrumb-nav">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item">
                                                    <a href="demo-1.html">Pesanan</a>
                                                </li>
                                                <li class="breadcrumb-item active" aria-current="page">
                                                    Format Pesanan
                                                </li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="h2-xl">Format Pesanan</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="cart-1" class="wide-100 cart-page division">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cart-table mb-70">
                        <table id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">Produk</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Item</th>
                                    <th scope="col" class="text-center">Total</th>
                                    <th scope="col" class="text-end">Hapus</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td data-label="Product" class="product-name">
                                        <div class="cart-product-desc">
                                            <h5 class="h5-sm">Koi Ukuran 9</h5>
                                            <p class="p-sm">
                                                Dengan kwalitas terjamin dan terpecaya
                                            </p>
                                        </div>

                                    </td>
                                    <td data-label="Price" class="product-price">
                                        <h5 class="h5-md">
                                            Rp80.095
                                        </h5>
                                    </td>
                                    <td data-label="Quantity" class="product-qty">
                                        <input class="qty" type="number" min="1" max="20" value="1">
                                    </td>
                                    <td data-label="Total" class="product-price-total">
                                        <h5 class="h5-md text-end">
                                            Rp80.095
                                        </h5>
                                    </td>
                                    <td data-label="Delete" class="td-trash text-end">
                                        <i class="far fa-trash-alt"></i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <table>
                <thead>
                    <tr>
                        <td colspan="3"></td>
                        <td>
                            <h5 class="h5-md meat-color text-end">
                                Total Keseluruhan : 
                            </h5>
                        </td>
                        <td colspan="2" class="product-price-total-keseluruhan">
                            <h5 class="h5-md text-center">
                                Rp80.095
                            </h5>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5" class="text-end">
                            <a href="#" class="btn btn-lg btn-meat tra-white-hover">
                                <i class="fa-brands fa-whatsapp"></i>
                                Kirim Pesanan
                            </a>
                        </td>
                    </tr>
                </thead>
            </table>
        </div>
    </section>
@endsection
