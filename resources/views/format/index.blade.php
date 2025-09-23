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
                                <!-- Isi keranjang akan diisi lewat JS -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Total Keseluruhan -->
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
                            <h5 class="h5-md text-center">Rp 0</h5>
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

    @push('script')
        <script>
            document.addEventListener("DOMContentLoaded", () => {
                let cart = JSON.parse(localStorage.getItem("cart")) || [];
                const tbody = document.querySelector("#myTable tbody");
                const totalKeseluruhanEl = document.querySelector(
                    ".product-price-total-keseluruhan h5");

                tbody.innerHTML = "";
                let totalKeseluruhan = 0;

                if (cart.length === 0) {
                    tbody.innerHTML =
                        "<tr><td colspan='5' class='text-center'>Keranjang kosong</td></tr>";
                } else {
                    cart.forEach((item, index) => {
                        let total = item.harga * item.qty;
                        totalKeseluruhan += total;

                        tbody.innerHTML += `
                <tr>
                    <td data-label="Produk" class="product-name">
                        <div class="cart-product-desc d-flex align-items-center">
                            <img src="${item.gambar}" width="60" style="margin-right:10px; border-radius:6px;">
                            <div>
                                <h5 class="h5-sm mb-1">${item.nama}</h5>
                                <p class="p-sm text-muted">Kode: ${item.id}</p>
                            </div>
                        </div>
                    </td>
                    <td data-label="Harga" class="product-price">
                        <h5 class="h5-md">Rp ${new Intl.NumberFormat('id-ID').format(item.harga)}</h5>
                    </td>
                    <td data-label="Item" class="product-qty">
                        <input class="qty-input" type="number" min="1" value="${item.qty}" data-index="${index}">
                    </td>
                    <td data-label="Total" class="product-price-total text-end">
                        <h5 class="h5-md">Rp ${new Intl.NumberFormat('id-ID').format(total)}</h5>
                    </td>
                    <td data-label="Hapus" class="td-trash text-end">
                        <button class="hapus-btn btn btn-sm btn-danger" data-index="${index}">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>
            `;
                    });
                }

                totalKeseluruhanEl.textContent = "Rp " + new Intl.NumberFormat('id-ID').format(
                    totalKeseluruhan);

                // hapus produk
                document.querySelectorAll(".hapus-btn").forEach(btn => {
                    btn.addEventListener("click", () => {
                        let index = btn.dataset.index;
                        cart.splice(index, 1);
                        localStorage.setItem("cart", JSON.stringify(cart));
                        location.reload();
                    });
                });

                // ubah qty
                document.querySelectorAll(".qty-input").forEach(input => {
                    input.addEventListener("change", () => {
                        let index = input.dataset.index;
                        cart[index].qty = parseInt(input.value);
                        localStorage.setItem("cart", JSON.stringify(cart));
                        location.reload();
                    });
                });
            });
        </script>
    @endpush
@endsection
