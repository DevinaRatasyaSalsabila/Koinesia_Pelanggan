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
                                                    Pesanan
                                                </li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="h2-xl"> Pesanan</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="wide-100 cart-page division">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="card mt-5 bg-meat text-light">
                        <div class="card-body">
                            <p>
                                <i class="bi bi-info-circle-fill"></i>
                                Semua pesanan akan diproses berdasarkan urutan antrian. Kami berkomitmen memproses dan
                                mengirimkan pesanan secepat mungkin sesuai jadwal yang telah ditetapkan.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-holder">
                                    <form name="contactform" class="row contact-form">

                                        <div class="col-md-12 col-lg-6">
                                            <label for="">Nama Penerima</label>
                                            <input type="text" name="nama_penerima" class="form-control "
                                                placeholder="Masukkan Nama Penerima">
                                        </div>

                                        <div class="col-md-12 col-lg-6">
                                            <label for="">Nomor Telepon</label>
                                            <input type="number" name="telepon" class="form-control "
                                                placeholder="Masukkan Nomor Telepon">
                                        </div>

                                        <div class="col-md-12 col-lg-12">
                                            <label for="">Alamat Lengkap</label>
                                            <textarea name="alamat" class="form-control " placeholder="Masukkan Alamat Lengkap"></textarea>
                                        </div>

                                        <div class="col-md-12 contact-form-msg text-center">
                                            <div class="sending-msg"><span class="loading"></span></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
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
                                        <th scope="col">Pilih</th>
                                        <th scope="col">Produk</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Item</th>
                                        <th scope="col" class="text-center">Total</th>
                                        <th scope="col" class="text-end">Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- isi keranjang diisi lewat JS -->
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
                                <h5 class="h5-md meat-color text-end">Total Keseluruhan :</h5>
                            </td>
                            <td colspan="2" class="product-price-total-keseluruhan">
                                <h5 id="total-harga" class="h5-md text-center">Rp 0</h5>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5" class="text-end">
                                <a href="{{ route('format') }}" class="btn btn-lg btn-meat ">
                                    <i class="fa-brands fa-whatsapp"></i>
                                    Kirim Pesanan
                                </a>
                            </td>
                        </tr>
                    </thead>
                </table>
            </div>
        </section>
    </section>

    @push('script')
        <script>
            document.addEventListener("DOMContentLoaded", () => {
                let checkout = JSON.parse(localStorage.getItem("checkout")) || [];
                const tbody = document.querySelector("#myTable tbody");
                const totalKeseluruhanEl = document.querySelector("#total-harga");

                function renderTable() {
                    tbody.innerHTML = "";
                    let totalKeseluruhan = 0;

                    if (checkout.length === 0) {
                        tbody.innerHTML = "<tr><td colspan='6' class='text-center'>Tidak ada produk dipilih</td></tr>";
                    } else {
                        checkout.forEach((item, index) => {
                            let total = item.harga * item.qty;
                            if (item.dipilih) {
                                totalKeseluruhan += total;
                            }

                            tbody.innerHTML += `
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" class="pilih-checkbox" data-index="${index}" ${item.dipilih ? "checked" : ""}>
                                </td>
                                <td>
                                    <div class="cart-product-desc d-flex align-items-center">
                                        <img src="${item.gambar}" width="60" style="margin-right:10px; border-radius:6px;">
                                        <div>
                                            <h5 class="h5-sm mb-1">${item.nama}</h5>
                                            <p class="p-sm text-muted">Kode: ${item.id}</p>
                                        </div>
                                    </div>
                                </td>
                                <td><h5>Rp ${new Intl.NumberFormat('id-ID').format(item.harga)}</h5></td>
                                <td><h5>${item.qty}</h5></td>
                                <td><h5>Rp ${new Intl.NumberFormat('id-ID').format(total)}</h5></td>
                                <td class="text-end">
                                    <button class="hapus-btn btn btn-sm btn-outline-danger" data-index="${index}">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                        `;
                        });
                    }

                    totalKeseluruhanEl.textContent = "Rp " + new Intl.NumberFormat('id-ID').format(totalKeseluruhan);

                    // Event listener untuk hapus
                    document.querySelectorAll(".hapus-btn").forEach(btn => {
                        btn.addEventListener("click", e => {
                            let idx = e.currentTarget.getAttribute("data-index");
                            checkout.splice(idx, 1);
                            localStorage.setItem("checkout", JSON.stringify(checkout));
                            renderTable();
                        });
                    });

                    // Event listener untuk checkbox
                    document.querySelectorAll(".pilih-checkbox").forEach(checkbox => {
                        checkbox.addEventListener("change", e => {
                            let idx = e.currentTarget.getAttribute("data-index");
                            checkout[idx].dipilih = e.currentTarget.checked;
                            localStorage.setItem("checkout", JSON.stringify(checkout));
                            renderTable();
                        });
                    });
                }

                renderTable();
            });
        </script>
    @endpush
@endsection
