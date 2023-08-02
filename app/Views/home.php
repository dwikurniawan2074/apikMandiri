<!-- navbar -->
<?= $this->include('template/navbar'); ?>

<style>
    .owl-carousel.home-slider .slider-item .overlay-1 {
        background: #0376BC;
    }

    .owl-carousel.home-slider .slider-item .overlay-2 {
        background: #86d1ff;
    }

    .owl-carousel.home-slider .slider-item .overlay-3 {
        background: #0376BC;
    }

    .owl-carousel.home-slider .slider-item .overlay-4 {
        background: #86d1ff;
    }

    .causes .img {
        border-radius: 5% 5% 0 0;
    }

    .testimony-section {
        padding: 5em 0;
        background: #4c7bcb;
        background: url("<?php echo base_url() ?>/unicare-master/images/moroccan-flower-dark.png");
    }

    .grid-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .grid-item {
        flex-basis: calc(33.33% - 40px);
    }

    .ftco-appointment {
        margin: 100px 0;
    }

    .wrap-about .text .number {
        display: inline-block;
    }

    hr.solid {
        border-top: 1px solid black;
        margin: 2em 6em;
    }

    .kabar-terbaru {
        border-radius: 0 0 0 0;
    }

    .block-27 ul li a,
    .block-27 ul li span {
        padding: 10px;
        display: unset;
        width: 100%;
        border-radius: 5%;
        border: unset;
    }

    .ceritaLengkap {
        display: flex;
        justify-content: flex-end;
    }

    @media screen and (max-width: 767.98px) {
        .wrap-about .counter-wrap {
            margin-top: 30px;
            width: fit-content;
        }
        .text{
            display: inline-block;
        }
    }

</style>

<section class="hero-wrap js-fullheight">
    <div class="home-slider js-fullheight owl-carousel">
        <div class="slider-item js-fullheight" style="background-image:url(<?php echo base_url() ?>/landing_photo1.jpg);">
            <div class="overlay-1"></div>
            <div class="overlay-2"></div>
            <div class="overlay-3"></div>
            <div class="overlay-4"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center">
                    <div class="col-md-10 col-lg-7 ftco-animate">
                        <div class="text w-100">
                            <h2>Ayo bantu masyarakat sekitarmu</h2>
                            <h1 class="mb-3">Bantu Menyejahterakan Masyarakat Melalui Lembaga Pemberdayaan Sosial</h1>
                            <div class="d-flex meta">
                                <div class="">
                                    <p class="mb-0"><a href="#" class="btn btn-secondary py-3 px-2 px-md-4">Ayo Berdonasi!</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight" style="background-image:url(<?php echo base_url() ?>/landing_photo2.jpeg);">
            <div class="overlay-1"></div>
            <div class="overlay-2"></div>
            <div class="overlay-3"></div>
            <div class="overlay-4"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center">
                    <div class="col-md-10 col-lg-7 ftco-animate">
                        <div class="text w-100">
                            <h2>Bantu anak-anak kecil agar hidup lebih layak</h2>
                            <h1 class="mb-3">Pemerataan akses pendidikan ke seluruh anak sebagai visi Apik Mandiri</h1>
                            <div class="d-flex meta">
                                <div class="">
                                    <p class="mb-0"><a href="#" class="btn btn-secondary py-3 px-2 px-md-4">Ayo Berdonasi!</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight" style="background-image:url(<?php echo base_url() ?>/landing_photo3.jpg);">
            <div class="overlay-1"></div>
            <div class="overlay-2"></div>
            <div class="overlay-3"></div>
            <div class="overlay-4"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center">
                    <div class="col-md-10 col-lg-7 ftco-animate">
                        <div class="text w-100">
                            <h2>Makan Makanan Sehat</h2>
                            <h1 class="mb-3">Setiap orang berhak untuk makan makanan yang sehat</h1>
                            <div class="d-flex meta">
                                <div class="">
                                    <p class="mb-0"><a href="#" class="btn btn-secondary py-3 px-2 px-md-4">Ayo Berdonasi!</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-7 wrap-about py-5">
                <div class="heading-section pr-md-5 pt-md-5">
                    <span class="subheading"></span>
                    <h2 class="mb-4">Selamat Datang di Website Apik Mandiri</h2>
                    <h5>Lembaga pemberdayaan sosial yang sudah berdiri sejak tahun 2003 yang bergerak di bidang pemberdayaan dan rehabilitasi pemerlu pelayanan kesejahteraan sosial (PPKS) dan telah terkareditasi B oleh Kementerian Sosial.</h5>
                </div>
                <div class="row my-md-5">
                    <div class="col-md-6 d-flex counter-wrap">
                        <div class="block-18 d-flex">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-volunteer"></span>
                            </div>
                            <div class="desc">
                                <div id="mitra-number" class="text mitra-number" >
                                    <strong class="number mitra-number" data-number="18">0</strong>
                                    <strong class="number mitra-number">+</strong>
                                </div>
                                <div class="text">
                                    <span>Mitra</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex counter-wrap">
                        <div class="block-18 d-flex">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-volunteer"></span>
                            </div>
                            <div class="desc">
                                <div class="text mitra-number">
                                    <strong class="number mitra-number" data-number="30">0</strong>
                                    <strong class="number mitra-number">+</strong>
                                </div>
                                <div class="text">
                                    <span>Campaign</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <p><a href="#" class="btn btn-secondary btn-outline-secondary">Become A Volunteer</a></p> -->
            </div>
            <div class="col-md-5 wrap-about py-5">
                <img class="img-fluid" src="<?php echo base_url() ?>/landing_photo4.jpg" alt="Foto Landing Page" style="height: 100%;">
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated">
                <span class="subheading">Program Kerja</span>
                <h2>4 Program Kerja Utama Apik Mandiri</h2>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-md-3 d-flex align-items-stretch">
                <div class="services">
                    <div class="text text-center bg-secondary">
                        <h3>Kesehatan</h3>
                        <p>Membantu menyediakan akses fasilitas kesehatan bagi masyarakat yang kurang mampu</p>
                    </div>
                    <div class="img border-2" style="background-image: url(https://img.kitabisa.cc/size/1000/f32aea7e-7d10-45ec-ab56-3aa234540fcf.jpg);">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-stethoscope"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-stretch">
                <div class="services">
                    <div class="text text-center bg-tertiary">
                        <h3>Makanan</h3>
                        <p>Membantu menyediakan makanan-makanan sehat bagi orang yang tidak mampu</p>
                    </div>
                    <div class="img border-3" style="background-image: url(https://scontent.fkno6-1.fna.fbcdn.net/v/t39.30808-6/284284589_555924489412892_8853826041985453049_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeGBr4s1gHhXZxa2924teiFCcDpjvybOSd9wOmO_Js5J37T6cplPMepc8D0i85ijsLW-nhtAq1YcpTlPmppOXByn&_nc_ohc=JgrHF_Vho9gAX8eOeqD&_nc_ht=scontent.fkno6-1.fna&oh=00_AfB42R9G4gj4mFtMaBMKLG-08EHZyRG17JYaoYBhJzoniA&oe=64CF4C34);">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-bread"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-stretch">
                <div class="services">
                    <div class="text text-center bg-primary">
                        <h3>Air</h3>
                        <p>Membantu menyediakan air bersih untuk pesantren-pesantren dan daerah tertinggal</p>
                    </div>
                    <div class="img border-1" style="background-image: url(https://drive.google.com/uc?export=view&id=1fv9MvP15gpHw5U5w28NE8dUPntTugJK1);">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-water-drop"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-stretch">
                <div class="services">
                    <div class="text text-center bg-quarternary">
                        <h3>Pendidikan</h3>
                        <p>Membantu dalam mewujudkan sistem pendidikan yang merata bagi setiap anak indonesia</p>
                    </div>
                    <div class="img border-4" style="background-image: url(<?php echo base_url() ?>/landing_photo3.jpg);">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-university"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pb">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Campaigns</span>
                <h2>Campaign Yang Sedang Berjalan</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="causes causes-2 text-center ftco-animate">
                    <a href="#" class="img w-100" style="background-image: url(https://kitabisa.com/_next/image?url=https%3A%2F%2Fimgix.kitabisa.com%2Fmaster%2F34918bef-09fa-11ee-94c6-d6c536cdd306_1D68D5722B6E5325.png%3Fauto%3Dformat%26ch%3DWidth%2CDPR%2CSave-Data%2CViewport-Width&w=640&q=75);"></a>
                    <div class="text p-3">
                        <h2><a href="https://kitabisa.com/campaign/apikdonasiuntuklansia">Donasi Rutin Bantu Puluhan Lansia di Panti Jompo</a></h2>
                        <p>Terdapat 80 lansia yang tinggal di Panti Jompo Werdha, Natar, Lampung Selatan.</p>
                        <p><a href="https://kitabisa.com/campaign/apikdonasiuntuklansia" target="_blank" class="btn btn-light w-100">Lihat Detail</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="causes causes-2 text-center ftco-animate">
                    <a href="#" class="img w-100" style="background-image: url(https://img.kitabisa.cc/size/1000/7c4c78e9-1586-42c8-a49f-eaeb16685c76.jpg);"></a>
                    <div class="text p-3">
                        <h2><a href="https://kitabisa.com/campaign/perlengkapansekolahanaktps">MIRIS! 20 Pemulung Cilik Cari Nafkah Demi Sekolah</a></h2>
                        <p>Penuh keringat, kisah perjuangan anak-anak di TPS Bakung sungguh menyayat hati. </p>
                        <p><a href="https://kitabisa.com/campaign/perlengkapansekolahanaktps" target="_blank" class="btn btn-light w-100">Lihat Detail</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="causes causes-2 text-center ftco-animate">
                    <a href="#" class="img w-100" style="background-image: url(https://lh3.googleusercontent.com/Em8rCYOjzcdFXlgoNHeeZC0U4zb0U8GesxmftlGMqhpWd-rPigBAb4UiY-rFJ9m7k09k_xYatLqkgjAh5Aa6DHnwMFOYj7yy8eeSdG7DOxF-U_TRiFZwqMOuri9oWWwlOHM18AVGBDcCVgdaeDgfgbM);"></a>
                    <div class="text p-3">
                        <h2><a href="https://kitabisa.com/campaign/apiksebatangkara">Sebatang Kara, Sakit-sakitan, Hidup Dari Layangan</a></h2>
                        <p>Walau dagangannya sering sepi pembeli, kakek tetap giat mencari selembar dua lembar rupiah.</p>
                        <p><a href="https://kitabisa.com/campaign/apiksebatangkara" target="_blank" class="btn btn-light w-100">Lihat Detail</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="causes causes-2 text-center ftco-animate">
                    <a href="#" class="img w-100" style="background-image: url(https://img.kitabisa.cc/size/750/1e739637-80d1-4b3e-8706-c03723a4ffa0.jpg);"></a>
                    <div class="text p-3">
                        <h2><a href="https://kitabisa.com/campaign/untuklansiaapik">Ayah ‘Totol’ Sering Dihina Saat Cari Nafkah</a></h2>
                        <p>Selama 47 tahun hidup, Pak Misna tak henti-hentinya mendengar hinaan dan cacian tentang fisiknya. </p>
                        <p><a href="https://kitabisa.com/campaign/untuklansiaapik" target="_blank" class="btn btn-light w-100">Lihat Detail</a></p>
                    </div>
                </div>
            </div>
        </div>

        <hr class="solid" style="padding-bottom: 5em;">

        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Berita</span>
                <h2>Kabar-Kabar Terbaru</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="causes causes-2 text-center ftco-animate kabar-terbaru">
                    <a href="<?php echo base_url() ?>kabar1" class="img w-100" style="background-image: url(https://img.kitabisa.cc/size/720/fad2a66a-83d7-4715-a880-68d5d63ad720.jpg);"></a>
                    <div class="text p-3">
                        <h2><a href="<?php echo base_url() ?>kabar1" target="_blank">Single Mom Berjuang Sembuhkan 2 Anak Sakit Kanker</a></h2>
                        <p>Alfathir (2 tahun) dan Nadhira (1 tahun) sejak lahir sama-sama divonis kanker mata.</p>
                        <p><a href="<?php echo base_url() ?>kabar1" target="_blank" class="btn btn-light w-100">Lihat Detail</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="causes causes-2 text-center ftco-animate kabar-terbaru">
                    <a href="<?php echo base_url() ?>kabar2" class="img w-100" style="background-image: url(https://kitabisa.com/_next/image?url=https%3A%2F%2Fimgix.kitabisa.com%2F6d6df985-168f-4c62-9b7b-5999c52bc2be.jpg%3Fauto%3Dformat%26ch%3DWidth%2CDPR%2CSave-Data%2CViewport-Width&w=640&q=75);"></a>
                    <div class="text p-3">
                        <h2><a href="<?php echo base_url() ?>kabar2">Bayar Fidyah Rp20 Ribu = Beri Makan Lansia Dhuafa</a></h2>
                        <p>Penuh keringat, kisah perjuangan anak-anak di TPS Bakung sungguh menyayat hati. </p>
                        <p><a href="<?php echo base_url() ?>kabar2" target="_blank" class="btn btn-light w-100">Lihat Detail</a></p>
                    </div>
                </div>
            </div>

        </div>

        <div class="row mt-2 mb-5">
            <div class="col text-center">
                <h5><a href="<?php echo base_url() ?>kabarList"><i><u>Lihat Kabar Lebih Banyak ></u></i></a></h5>
            </div>
        </div>
    </div>
</section>

<!-- dicomment sementara -->
<!-- <section class="ftco-counter" id="section-counter">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-5 mb-md-0 text-center text-md-left">
                <h2 class="font-weight-bold" style="color: #fff; font-size: 22px;">We're on a mission to help all your problems</h2>
                <a href="#" class="btn btn-white btn-outline-white">Donate Now</a>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="88984">0</strong>
                            </div>
                            <div class="text">
                                <span>Donation Campaigns are running</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="65000">0</strong>
                            </div>
                            <div class="text">
                                <span>Professional and kind volunteers</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="77000">0</strong>
                            </div>
                            <div class="text">
                                <span>Funds we raised till now on site</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="50">0</strong>
                            </div>
                            <div class="text">
                                <span>Dedicated Donors</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="ftco-section testimony-section">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
                <span class="subheading">Mitra</span>
                <h2>Daftar Mitra Yang Sudah Tergabung Bersama Apik Mandiri</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img" style="background-image: url(<?php echo base_url() ?>/logo_lembaga/logo_kemensos.png)">
                            </div>
                            <div class="text pl-4">
                                <p class="name">Kementrian Sosial RI</p>
                                <span class="position">Mitra</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img" style="background-image: url(<?php echo base_url() ?>/logo_lembaga/logo_stc.png)">
                            </div>
                            <div class="text pl-4">
                                <p class="name">Save The Children</p>
                                <span class="position">Mitra</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img" style="background-image: url(<?php echo base_url() ?>/logo_lembaga/logo_kemensos.png)">
                            </div>
                            <div class="text pl-4">
                                <p class="name">Dinas Sosial Lampung</p>
                                <span class="position">Mitra</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img" style="background-image: url(<?php echo base_url() ?>/logo_lembaga/logo_disnaker.png)">
                            </div>
                            <div class="text pl-4">
                                <p class="name">Dinas Tenaga Kerja</p>
                                <span class="position">Mitra</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img" style="background-image: url(<?php echo base_url() ?>/logo_lembaga/logo_perbankan.png)">
                            </div>
                            <div class="text pl-4">
                                <p class="name">Dunia Perbankan</p>
                                <span class="position">Mitra</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img" style="background-image: url(<?php echo base_url() ?>/logo_lembaga/logo_BUMN.png)">
                            </div>
                            <div class="text pl-4">
                                <p class="name">BUMN</p>
                                <span class="position">Mitra</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img" style="background-image: url(<?php echo base_url() ?>/logo_lembaga/logo_kemenkes.png)">
                            </div>
                            <div class="text pl-4">
                                <p class="name">Dinas Kesehatan</p>
                                <span class="position">Mitra</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img" style="background-image: url(<?php echo base_url() ?>/logo_lembaga/logo_disdukcapil.svg)">
                            </div>
                            <div class="text pl-4">
                                <p class="name">DISDUKCAPIL</p>
                                <span class="position">Mitra</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img" style="background-image: url(<?php echo base_url() ?>/logo_lembaga/logo_kakanwilHam.png)">
                            </div>
                            <div class="text pl-4">
                                <p class="name">Kakanwil Hukum dan HAM</p>
                                <span class="position">Mitra</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img" style="background-image: url(<?php echo base_url() ?>/logo_lembaga/logo_lapasBapas.png)">
                            </div>
                            <div class="text pl-4">
                                <p class="name">Lapas dan Bapas Se Provinsi Lampung</p>
                                <span class="position">Mitra</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img" style="background-image: url(<?php echo base_url() ?>/logo_lembaga/logo_kemenag.png)">
                            </div>
                            <div class="text pl-4">
                                <p class="name">Kementrian Agama</p>
                                <span class="position">Mitra</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img" style="background-image: url(<?php echo base_url() ?>/logo_lembaga/logo_muslimatNU.png)">
                            </div>
                            <div class="text pl-4">
                                <p class="name">Muslimat NU</p>
                                <span class="position">Mitra</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img" style="background-image: url(<?php echo base_url() ?>/logo_lembaga/logo_kemensos.png)">
                            </div>
                            <div class="text pl-4">
                                <p class="name">Balai Rumbai Pekan Baru</p>
                                <span class="position">Mitra</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img" style="background-image: url(<?php echo base_url() ?>/logo_lembaga/logo_kemensos.png)">
                            </div>
                            <div class="text pl-4">
                                <p class="name">Balai Ciungwanara Bogor</p>
                                <span class="position">Mitra</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img" style="background-image: url(<?php echo base_url() ?>/logo_lembaga/logo_kemensos.png)">
                            </div>
                            <div class="text pl-4">
                                <p class="name">Balai Budhi Dharma Bekasi</p>
                                <span class="position">Mitra</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img" style="background-image: url(<?php echo base_url() ?>/logo_lembaga/logo_kemensos.png)">
                            </div>
                            <div class="text pl-4">
                                <p class="name">Balai Inten Suweno Bogor</p>
                                <span class="position">Mitra</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img" style="background-image: url(<?php echo base_url() ?>/unicare-master/images/kitabisa_icons_512.png)">
                            </div>
                            <div class="text pl-4">
                                <p class="name">Kitabisa.com</p>
                                <span class="position">Mitra</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- footer -->
<?= $this->include('template/footer') ?>