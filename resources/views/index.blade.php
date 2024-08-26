<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Hotel Hebat</title>

    <meta content="hotel hebat" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/homepage/img/hotel-icon.svg" rel="icon">
    <link href="assets/homepage/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/homepage/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/homepage/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/homepage/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/homepage/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/homepage/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/homepage/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/homepage/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/homepage/css/style.css" rel="stylesheet">
</head>

<body>


    <!- -=======Header=======-->
        <header id="header" class="fixed-top d-flex align-items-center">
            <div class="container d-flex align-items-center justify-content-between">
                <div class="logo">
                    <h1>HOTEL HEBAT</h1>
                </div>
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                        <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                        <li><a class="nav-link scrollto" href="#kamar">Kamar</a></li>
                        <li><a class="nav-link scrollto " href="#fasilitas">Fasilitas</a></li>
                        <li><a class="nav-link scrollto" href="#penilaian">Penilaian</a></li>
                        <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                        <li><a class="getstarted scrollto" href="/login">Log In</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
            </div>
        </header>
        <!-- End Header -->

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h1 data-aos="fade-up">HOTEL HEBAT</h1>
                        <h2 data-aos="fade-up" data-aos-delay="400">
                            Cari hotel atau penginapan di Hotel Hebat yuk! Booking hotel mudah, murah, dan banyak
                            pilihannya hanya di Hotel Hebat.
                        </h2>
                        <div data-aos="fade-up" data-aos-delay="800">
                            <a href="/pesanReservasi" class="btn-get-started scrollto">Pesan <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                        <img src="assets/homepage/img/hotel.jpg" class="img-fluid animated" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- End Hero -->

        <main id="main">

            <!-- ======= About Us Section ======= -->
            <section id="about" class="about">
                <div class="container">
                    <div class="section-title" data-aos="fade-up">
                        <h2>Tentang Kami</h2>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
                            <p>
                                Hotel adalah sebuah bangunan, perusahaan atau usaha yang menyediakan jasa inap dan juga
                                menyediakan makanan dan minuman bagi tamu yang datang serta mempunyai fasilitas jasa
                                lannya. Yang mana semua fasilitasnya juga di peruntukkan bagi masyarakat umum<br>
                                Menginap di hotel atau penginapan yang nyaman merupakan salah satu cara terbaik untuk
                                menikmati perjalanan, baik itu untuk liburan ataupun perjalanan bisnis. Di Hotel Hebat,
                                Anda bisa dengan mudah menemukan hotel atau penginapan yang tepat plus sesuai bujet,
                                mulai dari hotel murah, boutique hotel, hingga hotel bintang 5. Nah, momen mencari hotel
                                terbaik ini juga menjadi hal yang penting, khususnya bagi Anda yang berencana liburan
                                bersama keluarga. Anda perlu melengkapi informasi mengenai fasilitas dan keunikan yang
                                ditawarkan dari masing-masing hotel untuk menyesuaikannya dengan kebutuhan Anda.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End About Us Section -->

            <!-- ======= Features Section ======= -->
            <section id="fasilitas" class="features">
                <div class="container">
                    <div class="section-title" data-aos="fade-up">
                        <h2>Fasilitas Kamar</h2>
                        <p><strong>Terdiri dari beberapa jenis fasilitas yang tersedia :</strong></p>
                    </div>
                </div>
            </section>

            <!-- ======= More Services Section ======= -->
            <section id="more-services" class="more-services">
                <div class="container">
                    <div class="row">
                        @foreach ($fasilitasHotel as $row)
                            <div class="col-md-6 d-flex align-items-stretch">
                                <div class="card" data-aos="fade-up" data-aos-delay="100">
                                    <img src="{{ asset('storage/' . $row->image) }}" alt=" {{ $row->nama_fasilitas }} "
                                        style="height: 100%; object-fit: cover; border-radius: 5px;">
                                    <div class="card-body">
                                        <h3 class="card-title"><a href="#"> {{ $row->nama_fasilitas }} </a></h3>
                                        <p class="card-text" style="text-align: center;"> {{ $row->keterangan }} </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <!-- End More Services Section -->


            <!-- ======= Services Section ======= -->
            <section id="kamar" class="services">
                <div class="container">
                    <div class="section-title" data-aos="fade-up">
                        <h2>Fasilitas Hotel</h2>
                        <p><strong>Terdiri dari beberapa jenis fasilitas kamar berdasarkan jumlah tempat tidur
                                :</strong></p>
                    </div>
                    {{-- <section id="counts" class="counts">
                        <div class="container">
                            <div class="row">
                                <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start"
                                    data-aos="fade-right" data-aos-delay="150">
                                    <img src="assets/homepage/img/hotel1.jpg" class="img-fluid" alt="kamar hotel">
                                </div>
                                <div class="col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left"
                                    data-aos-delay="300">
                                    <div class="content d-flex flex-column justify-content-center">
                                        <div class="row">
                                            <div class="col-md-6 d-md-flex align-items-md-stretch">
                                                <div class="count-box">
                                                    <i class="bi bi-person-fill"></i>
                                                    <span data-purecounter-start="0" data-purecounter-end="10"
                                                        data-purecounter-duration="1" class="purecounter"></span>
                                                    <p>
                                                        <strong>Single Room </strong>
                                                        Terdiri dari satu ruangan yang berisi satu tempat tidur, sofa,
                                                        dan kamar mandi.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6 d-md-flex align-items-md-stretch">
                                                <div class="count-box">
                                                    <i class="bi bi-people-fill"></i>
                                                    <span data-purecounter-start="0" data-purecounter-end="10"
                                                        data-purecounter-duration="1" class="purecounter"></span>
                                                    <p>
                                                        <strong>Twin Room </strong>
                                                        Terdiri dari dua tempat tidur yang disatukan dan diletakkan
                                                        berdampingan.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6 d-md-flex align-items-md-stretch">
                                                <div class="count-box">
                                                    <i class="bi bi-person-plus-fill"></i>
                                                    <span data-purecounter-start="0" data-purecounter-end="10"
                                                        data-purecounter-duration="1" class="purecounter"></span>
                                                    <p>
                                                        <strong>Double Room </strong>
                                                        Terdiri dari tempat tidur berukuran besar yang muat untuk dua
                                                        orang.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6 d-md-flex align-items-md-stretch">
                                                <div class="count-box">
                                                    <i class="bi bi-person-lines-fill"></i>
                                                    <span data-purecounter-start="0" data-purecounter-end="10"
                                                        data-purecounter-duration="1" class="purecounter"></span>
                                                    <p>
                                                        <strong>Family Room </strong>
                                                        Terdiri dari satu tempat tidur besar dan kecil, dan ruangan
                                                        lebih besar.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> --}}
                    <div class="row justify-content-center">
                        @foreach ($fasilitasKamar as $row)
                            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                                    <h3 class="title"><a href="#"> {{ $row->tipe_kamar }} </a></h3>
                                    <p class="description"> {{ $row->fasilitas }} </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <!-- End Services Section -->


            <!-- ======= Testimonials Section ======= -->
            <section id="penilaian" class="testimonials section-bg">
                <div class="container">
                    <div class="section-title" data-aos="fade-up">
                        <h2 style="color: white">Penilaian</h2>
                    </div>
                    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-wrap">
                                    <div class="testimonial-item">
                                        <img src="assets/homepage/img/testimonials/testimonials-1.jpg"
                                            class="testimonial-img" alt="">
                                        <h3>Alexsander</h3>
                                        <h4>Ceo &amp; Founder</h4>
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            Akses lokasi strategis. Kamar luas dengan kebersihan yg baik. Kamar tersedia
                                            sabun, handuk, keset, ketel, listrik, air mineral dan set gelas.
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-wrap">
                                    <div class="testimonial-item">
                                        <img src="assets/homepage/img/testimonials/testimonials-7.jpg"
                                            class="testimonial-img" alt="">
                                        <h3>Jesica</h3>
                                        <h4>Artis</h4>
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            Ini adalah hotel yang nyaman, apabila ada fasilitas breakfast akan lebih
                                            baik, kebersihan perlu di jaga, taman yang menjadi spot menarik dari hotel
                                            ini perlu di pelihara.
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-wrap">
                                    <div class="testimonial-item">
                                        <img src="assets/homepage/img/testimonials/testimonials-8.jpg"
                                            class="testimonial-img" alt="">
                                        <h3>Mark Zuckerberg</h3>
                                        <h4>Pemogram</h4>
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            Hotelnya bersih walaupun terlihat seperti bangunan lama, deket ke destinasi
                                            wisata terutama di pusat kota, anak-anak happy apalagi ada kolam renangnya,
                                            mudah mencari jajanan.
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-wrap">
                                    <div class="testimonial-item">
                                        <img src="assets/homepage/img/testimonials/testimonials-9.jpg"
                                            class="testimonial-img" alt="">
                                        <h3>Jack Ma</h3>
                                        <h4>Pebisnis</h4>
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            Kamarnya cukup luas, ruangan terbuka, kolam renang bersih, lokasi dalam
                                            kota. Cocok untuk keluarga dan anak. Makan pun bisa di kamar, pinjam
                                            peralatan makan hotelnya.
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-wrap">
                                    <div class="testimonial-item">
                                        <img src="assets/homepage/img/testimonials/testimonials-6.jpg"
                                            class="testimonial-img" alt="">
                                        <h3>Akbar Fauzan</h3>
                                        <h4>Pelajar</h4>
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            Lokasi yang dekat kemana mana, bisa jalan kaki ke kuliner, oleh oleh,
                                            staffnya baik, mobil selalu sudah bersih dipagi hari, kebersihan baik.
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </section>
            <!-- End Testimonials Section -->

            <!-- ======= Contact Section ======= -->
            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
                <div class="container">
                    <div class="section-title" data-aos="fade-up">
                        <h2>Kontak Kami</h2>
                        <p>Hubungi kami untuk pertanyaan, saran, atau informasi lebih lanjut.</p>
                    </div>

                    <div class="row">
                        <!-- Contact Information -->
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="contact-about">
                                <h3>Hotel Hebat</h3>
                                <p>Temukan kenyamanan dan layanan terbaik di Hotel Hebat. Kami siap membantu Anda kapan
                                    saja.</p>
                                <div class="social-links">
                                    <a href="#" class="twitter" aria-label="Twitter"><i
                                            class="bi bi-twitter"></i></a>
                                    <a href="#" class="facebook" aria-label="Facebook"><i
                                            class="bi bi-facebook"></i></a>
                                    <a href="#" class="instagram" aria-label="Instagram"><i
                                            class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Form -->
                        <div class="col-lg-8 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="contact-form">
                                <h4>Kirimkan Pesan</h4>
                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="Nama" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="email" name="email" class="form-control" id="email"
                                                placeholder="Email" required>
                                        </div>
                                        <div class="col-12 form-group">
                                            <input type="text" name="subject" class="form-control" id="subject"
                                                placeholder="Subjek" required>
                                        </div>
                                        <div class="col-12 form-group">
                                            <textarea name="message" class="form-control" id="message" rows="5" placeholder="Pesan" required></textarea>
                                        </div>
                                        <div class="col-12 form-group">
                                            <button type="submit" class="btn">Kirim Pesan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- End Contact Section -->

        </main>
        <!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6 text-lg-left text-center">
                        <div class="copyright">
                            &copy; Copyright <strong>Hotel Hebat</strong>. All Rights Reserved
                        </div>
                        <div class="credits">
                            Designed by <p>M. Akbar Fauzan Susetyo</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
                            <a href="#" class="scrollto">Home</a>
                            <a href="#about" class="scrollto">About</a>
                            <a href="#">Privacy Policy</a>
                            <a href="#">Terms of Use</a>
                        </nav>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"
            aria-label="Back to Top"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="assets/homepage/vendor/purecounter/purecounter.js"></script>
        <script src="assets/homepage/vendor/aos/aos.js"></script>
        <script src="assets/homepage/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/homepage/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/homepage/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/homepage/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/homepage/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/homepage/js/main.js"></script>

</body>

</html>
