@extends('pages.home.index')

@section('content')
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container">
            <div class="header-container d-flex align-items-center">
                <div class="logo mr-auto">
                    <h1 class="text-light"><a href="{{ route('landing-page') }}"><span>SMP IT Nurul Ittihad</span></a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    {{-- <a href="{{ route('landing-page') }}"><img src="{{ asset('assets/img/logo.png') }}" alt=""
                            class="img-fluid"></a> --}}
                </div>

                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li class="active"><a href="#header">Beranda</a></li>
                        <li><a href="{{ route('hasil') }}">Hasil Pendaftaran</a></li>
                        {{-- <li><a href="#about">Tentang</a></li>
            <li><a href="#services">Fasilitas</a></li>
            <li><a href="#portfolio">Prestasi</a></li>
            <li><a href="#team">Pendiri</a></li>
            <li><a href="#contact">Kontak</a></li> --}}
                        <li class="get-started"><a href="{{ route('login') }}">Login</a></li>
                    </ul>
                </nav><!-- .nav-menu -->
            </div><!-- End Header Container -->
        </div>
    </header>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
            <h1>Selamat Datang di SMP IT Nurul Ittihad </h1>
            <h2>Unggul Dalam Membangun & Mendidik Sumber Daya manusia yang cerdas, terampil, dan berkarakter sesuai
                perkembangan <br> IPTEK & IMPTAQ</h2>
            <a href="{{ route('daftar') }}" class="btn-get-started scrollto">Daftar Sekarang</a>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row content">
                    <div class="col-lg-5" data-aos="fade-right" data-aos-delay="100">
                        <img width="80%" src="{{ asset('assets/img/kepala-sekolah.jpeg') }}" alt=""
                            class="img-fluid">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
                        <p class="font-italic">
                            "Pendidikan adalah pintu gerbang menuju pengetahuan dan pemahaman yang mendalam. Ia bukan
                            sekadar
                            proses belajar, melainkan perjalanan eksplorasi untuk mengembangkan potensi yang tersembunyi
                            dalam diri setiap individu. Dalam setiap kelas, kita membangun fondasi untuk masa depan,
                            meletakkan batu demi batu kebijaksanaan yang akan membimbing langkah-langkah menuju sukses".
                        </p><br>
                        <p>
                            Sekolah SMP IT Nurul Ittihad didirikan pada tahun 2022 untuk memenuhi kebutuhan akademik yang
                            semakin
                            berkembang di Cianjur. Dengan tujuan :
                        <ol class="list-group">
                            <li class="list-group-item">Menumbuhkankembangkan keimanan dan ketaqwaan terhadap Allah SWT</li>
                            <li class="list-group-item">Menerapkan akhlaqul karimah</li>
                            <li class="list-group-item">Mengembangkan kemampuan baca tulis Al-Qur'an (BTQ)</li>
                            <li class="list-group-item">Meningkatkan rasa nasionalisme yang tinggi</li>
                        </ol>
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-right">
                        <div class="content">
                            <h3>Kenapa Memilih Sekolah Ini?</h3>
                            <p>
                                SMP IT Nurul Ittihad Cianjur adalah wadah pembelajaran yang menginspirasi dan membentuk
                                siswa menjadi pribadi unggul. Dipandu oleh kepemimpinan visioner, kami menyediakan
                                pendidikan berkualitas dengan fokus holistik. Fasilitas modern kami menciptakan lingkungan
                                belajar yang mendukung perkembangan siswa, sementara kurikulum yang relevan menghadirkan
                                pembelajaran yang sesuai dengan tuntutan masa depan. SMP IT Nurul Ittihad yang saling
                                mendukung, menciptakan suasana positif untuk pertumbuhan dan pencapaian setiap siswa. SMP IT
                                Nurul Ittihad Cianjur, tempat di mana pendidikan bukan hanya tentang mengajar, tetapi
                                membentuk fondasi untuk masa depan yang cerah.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-receipt"></i>
                                        <h4>Ruang Kelas</h4>
                                        <p>Ruang kelas didesain agar anak merasa
                                            nyaman dan dapat berinteraksi dengan guru serta teman-temannya dengan leluasa.
                                            Laboratorium Komputer,Ruang Kesehatan, Kantin Sekolah, Ruang Aula,
                                            Perpustakaan, Mushola, dan Lapangan Olahraga.</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-cube-alt"></i>
                                        <h4>Lebih Menekankan Kepada Pendidikan Karakter</h4>
                                        <p>Memungkinkan Siswa Lebih Aktif, Inovatif dan Kreatif, Lebih Responsif Terhadap
                                            Fenomena Sosial yang Ada, Proses Penilaian Dilakukan Dari Semua Aspek Lembaga
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-images"></i>
                                        <h4>Prestasi Yang Didapatkan</h4>
                                        <p>JKami dengan bangga mengumumkan prestasi terkini sekolah kami, mencakup
                                            keberhasilan luar biasa di bidang akademis, seni, dan olahraga. Ini adalah
                                            cerminan komitmen kami untuk membina keunggulan dalam setiap aspek pendidikan.
                                            Ikuti terus update prestasi terbaru kami untuk melihat perjalanan gemilang
                                            siswa-siswa kami </p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="section-title" data-aos="fade-right">
                            <h2>Fasilitas</h2>
                            <p>Fasilitas belajar merupakan sarana dan prasarana pembelajaran. Prasarana meliputi kantin,
                                ruang belajar, lapangan olahraga, dll.</p>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-6 d-flex align-items-stretch">
                                <div class="icon-box align-self-center" data-aos="zoom-in" data-aos-delay="100">
                                    <img src="{{ asset('assets/img/kelas1.jpeg') }}" class="img-fluid" alt="">
                                </div>
                            </div>

                            <div class="col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                                <div class="icon-box align-self-center" data-aos="zoom-in" data-aos-delay="200">
                                    <img src="{{ asset('assets/img/kelas2.jpeg') }}" class="img-fluid" alt="">
                                </div>
                            </div>

                            <div class="col-md-6 d-flex align-items-stretch mt-4">
                                <div class="icon-box align-self-center" data-aos="zoom-in" data-aos-delay="300">
                                    <img src="{{ asset('assets/img/kelas4.jpeg') }}" class="img-fluid" alt="">
                                </div>
                            </div>

                            <div class="col-md-6 d-flex align-items-stretch mt-4">
                                <div class="icon-box align-self-center" data-aos="zoom-in" data-aos-delay="400">
                                    <img src="{{ asset('assets/img/ruangan1.jpeg') }}" class="img-fluid" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title" data-aos="fade-left">
                    <h2>Prestasi</h2>
                    <p>Dibawah ini adalah bukti dokumentasi prestasi yang didapatkan oleh sekolah kami :</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-akademik">Akademik</li>
                            <li data-filter=".filter-olahraga">Olahraga</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-akademik">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/img/juara.jpeg') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Vocal Group</h4>
                                <p>Juara 1</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('assets/img/vocal group.jpg') }}" data-gall="portfolioGallery"
                                        class="venobox" title="Akademik"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 portfolio-item filter-olahraga">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/img/SILAT.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Pencak Silat</h4>
                                <p>Juara 1</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('assets/img/SILAT.jpg') }}" data-gall="portfolioGallery"
                                        class="venobox" title="Olahraga"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="section-title" data-aos="fade-right">
                            <h2>Guru Sekolah dan Staff</h2>
                            <p>Para guru dan staff sekolah yang berasal dari latar belakang berbeda namun bisa satu tujuan
                                untuk masa depan generasi yang cemerlang.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                                    <div class="pic"><img src="{{ asset('assets/img/kepala-sekolah.jpeg') }}"
                                            class="img-fluid" alt=""></div>
                                    <div class="member-info">
                                        <h4>Abdul Hanan</h4>
                                        <span>Kepala Sekolah</span>
                                        <p>Pendidikan mempunyai akar yang pahit, tapi buahnya manis</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mt-4 mt-lg-0">
                                <div class="member" data-aos="zoom-in" data-aos-delay="200">
                                    <div class="pic"><img src="{{ asset('assets/img/guru3.jpg') }}" class="img-fluid"
                                            alt=""></div>
                                    <div class="member-info">
                                        <h4>A Suny Hikam S.Pd.</h4>
                                        <span>Kepala TU & Operator</span>
                                        <p>Meningkatkan kreativitas untuk mencerdaskan generasi bangsa</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mt-4">
                                <div class="member" data-aos="zoom-in" data-aos-delay="300">
                                    <div class="pic"><img src="{{ asset('assets/img/guru4.jpeg') }}"
                                            class="img-fluid" alt=""></div>
                                    <div class="member-info">
                                        <h4>Nazah</h4>
                                        <span>Guru</span>
                                        <p>Salah satu amal yang terus mengalir sampai nanti di surga, adalah ilmu yang
                                            bermanfaat</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mt-4">
                                <div class="member" data-aos="zoom-in" data-aos-delay="400">
                                    <div class="pic"><img src="{{ asset('assets/img/guru2.jpg') }}" class="img-fluid"
                                            alt=""></div>
                                    <div class="member-info">
                                        <h4>Hesah Anjani</h4>
                                        <span>Guru</span>
                                        <p>Sesulit apapun pelajaran, jangan pernah meragukan potensimu sendiri.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <div class="section-title">
                            <h2>Kontak</h2>
                            <p>Untuk info lebih lanjut bisa menghubungi kontak yang tercantum.</p>
                        </div>
                    </div>

                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                        <iframe style="border:0; width: 100%; height: 300px;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3316.8043377415893!2d107.08520744871342!3d-6.818984643138804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e684dbb772cdb43%3A0xa9686e9f58bb209a!2sYAYASAN%20PENDIDIKAN%20ISLAM%20AL-AGHNIA!5e1!3m2!1sid!2sid!4v1703312836519!5m2!1sid!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                        <div class="info mt-4">
                            <i class="icofont-google-map"></i>
                            <h4>Alamat :</h4>
                            <p>JL. Benjot RT/RW 001 004 Desa Benjot Kec. Cugenang Kab. Cianjur</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mt-4">
                                <div class="info">
                                    <i class="icofont-envelope"></i>
                                    <h4>Email :</h4>
                                    <p>ypialaghnia.cianjur@gmail.com</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="info w-100 mt-4">
                                    <i class="icofont-phone"></i>
                                    <h4>Telepon :</h4>
                                    <p>0853 - 2065 - 4693</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Contact Section -->

    </main>
    <!-- End #main -->
@endsection
