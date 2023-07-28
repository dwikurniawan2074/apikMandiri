<?= $this->extend('template/pageTemplate'); ?>

<?= $this->section('pageContent'); ?>

<style>
    .ftco-section {
        padding: 9em 0 2em 0;
        position: relative;
    }

    @media (min-width: 768px) {

        .pt-md-5,
        .py-md-5 {
            padding-top: 10px !important;
        }
    }

    .testimony-section {
        padding: 5em 0;
        background: url("<?php echo base_url() ?>/unicare-master/images/moroccan-flower-dark.png");
    }

    .hero-wrap.hero-wrap-2 {
        height: 400px;
    }

    .text-page {
        padding-bottom: 16rem !important;
    }

    a {
        color: #808080;
    }

    .ftco-hireme {
        padding: 30px 0;
    }

    
</style>


<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-10 heading-section text-center ftco-animate fadeInUp ftco-animated">
                <h2>Bantu memberdayakan masyarakat demi terwujudnya kesejahteraan sosial bagi masyarakat Indonesia</h2>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section ftco-no-pt ftco-no-pb" style="margin-bottom: 9em;">
    <div class="container">
        <div class="row d-flex no-gutters">
            <div class="col-md-6 d-flex order-md-last">
                <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url(<?php echo base_url() ?>/logo_lembaga/foto_donasi.jpg);">
                </div>
            </div>
            <div class="col-md-6 pr-md-5 py-md-5">
                <div class="heading-section pt-md-5 mb-4">
                    <h4>Dukungan secara finansial yang anda berikan dapat membantu mewujudkan program pemberdayaan masyarakat lembaga Apik Mandiri</h4>
                    <br>
                    <h6>- Membantu menyediakan makanan sehat bagi orang yang tidak mampu </h6>
                    <h6>- Membantu menyediakan air bersih untuk pesantren-pesantren </h6>
                    <h6>- Membantu menyediakan air bersih untuk desa tertinggal </h6>
                    <h6>- Membantu meratakan akses pendidikan bagi setiap anak </h6>
                    <h6>- Membantu menyediakan akses fasilitas kesehatan </h6>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section testimony-section">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
                <h2>Ayo Salurkan Bantuanmu Melalui Rekening di Bawah ini</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img" style="background-image: url(<?php echo base_url() ?>/unicare-master/images/kitabisa_icons_512.png)">
                            </div>
                            <div class="text pl-4">
                                <p class="name">Kitabisa</p>
                                <span class="position">Apik Mandiri</span>
                                <br>
                                <span class="position"><a href="https://kitabisa.com/orang-baik/139a7377b5a4a78bb31772ca7464e30b" target="_blank"><i><u>Kunjungi Halaman</u></i></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img" style="background-image: url(<?php echo base_url() ?>/logo_lembaga/logo_BNI.png)">
                            </div>
                            <div class="text pl-4">
                                <p class="name">Bank BNI</p>
                                <span class="position">02588762462</span>
                                <br>
                                <span class="position">a/n Apik Mandiri</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img" style="background-image: url(<?php echo base_url() ?>/unicare-master/images/kitabisa_icons_512.png)">
                            </div>
                            <div class="text pl-4">
                                <p class="name">Kitabisa</p>
                                <span class="position">Apik Mandiri</span>
                                <br>
                                <span class="position"><a href="https://kitabisa.com/orang-baik/139a7377b5a4a78bb31772ca7464e30b" target="_blank"><i><u>Kunjungi Halaman</u></i></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img" style="background-image: url(<?php echo base_url() ?>/logo_lembaga/logo_BNI.png)">
                            </div>
                            <div class="text pl-4">
                                <p class="name">Bank BNI</p>
                                <span class="position">02588762462</span>
                                <br>
                                <span class="position">a/n Apik Mandiri</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-hireme bg-secondary">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-8 col-lg-8 d-flex align-items-center">
                <div class="w-100">
                    <h2>Ingin berkolaborasi bersama Apik Mandiri?</h2>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 d-flex align-items-center justify-content-end">
                <p class="mb-0"><a href="https://wa.me/081367600360" target="_blank" class="btn btn-primary py-3 px-4">Hubungi Kami</a></p>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>