@extends('layouts.main')

@section('container')
    <section>
        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h1>Sistem Pengelolaan Toko Bunga Modern</h1>
                        <h2>Kelola stok bunga segar, monitor pesanan bouquet, dan atur keuangan toko bunga Anda dengan lebih mudah, efektif, dan efisien.</h2>
                        <div>
                            <a href="/inventory" class="btn-get-started scrollto">Coba Inventory</a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img">
                        <img src="assets/img/section-img.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>

        </section><!-- End Hero -->

        <main id="main">

            <!-- ======= About Section ======= -->
            <section id="about" class="about">
                <div class="container">

                    <div class="row justify-content-between">
                        <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
                            <img src="assets/img/tentang-kami.png" class="img-fluid" alt="" data-aos="zoom-in">
                        </div>
                        <div class="col-lg-6 pt-5 pt-lg-0">
                            <h3 data-aos="fade-up">Tentang Kami</h3>
                            <p data-aos="fade-up" data-aos-delay="100">
                                Sistem Informasi Manajemen Toko Bunga ini dirancang khusus untuk membantu mengoptimalkan operasional bisnis florist secara digital. Mulai dari pengelolaan inventaris berbagai jenis bunga segar, pencatatan transaksi penjualan bouquet, hingga pemantauan kas masuk dan keluar secara real-time. Dengan sistem ini, pengelolaan bisnis toko bunga menjadi jauh lebih terstruktur dan produktif.
                            </p>
                            <div class="row">
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <i class="bi bi-flower1"></i>
                                    <h4>Manajemen Stok Florist</h4>
                                    <p>Pantau ketersediaan bunga potong, kertas bouquet, dan aksesoris florist lainnya agar tidak kehabisan bahan baku.
                                    </p>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-wallet"></i>
                                    <h4>Transaksi Aman</h4>
                                    <p>Pencatatan kasir penjualan bouquet atau dekorasi yang cepat, tepat, dan terintegrasi langsung dengan keuangan.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section><!-- End About Section -->

            <!-- ======= Services Section ======= -->
            <section id="services" class="services section-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-title2">
                        <h2>Layanan Pengelolaan</h2>
                        <p>Fitur unggulan untuk mempermudah bisnis Florist Anda</p>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-handbag"></i></div>
                                <h4 class="title"><a href="">Inventaris Bunga</a></h4>
                                <p class="description">Melacak stok bunga hidup, jenis bouquet, tingkat kesegaran, dan bahan pembungkus secara berkala dan akurat.</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-wallet2"></i></div>
                                <h4 class="title"><a href="">Kasir Penjualan</a></h4>
                                <p class="description">Mengefisiensi proses transaksi pemesanan karangan bunga maupun bouquet wisuda dengan pencatatan yang rapi.</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-currency-dollar"></i></div>
                                <h4 class="title"><a href="">Laporan Keuangan</a></h4>
                                <p class="description">Analisis untung-rugi penjualan bunga harian hingga bulanan secara otomatis lewat grafik pie chart yang interaktif.</p>
                            </div>
                        </div>

                    </div>

                </div>
            </section><!-- End Services Section -->

            <!-- ======= Contact Us Section ======= -->
            <section id="contact" class="contact">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Hubungi Kami</h2>
                        <p>Kirimkan kendala atau saran Anda mengenai sistem florist ini</p>
                    </div>

                    <div class="row">

                        <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                            <div class="info">
                                <div class="address">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Lokasi Toko:</h4>
                                    <p>Jl. Raya Pajajaran, Kota Bogor, Jawa Tengah</p>
                                </div>

                                <div class="email">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>admin.florist@gmail.com</p>
                                </div>

                                <div class="phone">
                                    <i class="bi bi-phone"></i>
                                    <h4>Telepon:</h4>
                                    <p>+62 812-3456-7890</p>
                                </div>

                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.4147425178125!2d106.8041133107021!3d-6.595232993372488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5db70e83b13%3A0x1c1ed0f0e0df6a17!2sUniversitas%20Pakuan!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid" 
                                    frameborder="0" style="border:0; width: 100%; height: 290px;"
                                    allowfullscreen>
                                </iframe>
                            </div>

                        </div>

                        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-delay="200">
                            <form action="{{ route('store-contact-us') }}" method="POST" role="form" class="php-email-form">
                                @csrf
                                <div class="row">
                                    <div class="form-group">
                                      <label for="nama">Nama</label>
                                      <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama" required>
                                    </div>
                                  </div>
                                  <div class="form-group mt-3 mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan email" required>
                                  </div>
                                  <label for="perihal">Perihal</label>
                                  <select class="form-select rounded-0 mb-3" aria-label="Default select example" name="perihal" required>
                                    <option value="Pelayanan Pelanggan" selected>Pelayanan Pelanggan</option>
                                    <option value="Umpan Balik">Umpan Balik</option>
                                  </select>
                                  <div class="form-group mt-3 mb-3">
                                    <label for="judul">Judul</label>
                                    <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan judul" required>
                                  </div>
                                  <div class="form-group mt-3 mb-3">
                                    <label for="pesan">Pesan</label>
                                    <textarea class="form-control" name="pesan" rows="10" placeholder="Tulis pesan" required></textarea>
                                  </div>
                                  <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                  </div>
                                  <div class="text-center"><button type="submit">Submit</button></div>
                            </form>
                        </div>

                    </div>

                </div>
            </section><!-- End Contact Us Section -->

        </main><!-- End #main -->
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>
    </section>
@endsection