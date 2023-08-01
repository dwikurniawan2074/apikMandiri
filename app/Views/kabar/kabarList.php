<?= $this->extend('template/pageTemplate'); ?>

<?= $this->section('pageContent'); ?>

<style>
    .ftco-section {
        padding: 4em 0;
    }
    
</style>

<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate fadeInUp ftco-animated">
                <h2 class="mb-3 ">Daftar Kabar-Kabar Campaign Terbaru</h2>

                <!-- kabar1 -->
                <div class="about-author d-flex p-4 bg-light" style="margin-top: 50px;">
                    <div class="bio mr-5 col-lg-3" style="vertical-align: middle;">
                        <img src="https://lh5.googleusercontent.com/edIqD0ZXVHOHRVw2zgERWj2SkNmLrmjOSzEySC9tiV-cfGLzWjfpqmgo-N3XppNIYeuQKRHfdXjbzCEGLMrsOODceo4f85xo0ZvfNvWzf4FLmnu7j28BaNM6NlILyhNaMtdkrbbhmHsOBxVB0EwsTN4" alt="Image placeholder" class="img-fluid">
                    </div>
                    <div class="desc">
                        <h5>Single Mom Berjuang Sembuhkan 2 Anak Sakit Kanker</h5>
                        <p>Sumber : Kita Bisa</p>
                        <span class="position"><a href="<?php echo base_url() ?>kabar1" target="_blank"><i><u>Baca Selengkapnya >></u></i></a></span>
                    </div>
                </div>

                <!-- kabar2 -->
                <div class="about-author d-flex p-4 bg-light" style="margin-top: 50px;">
                    <div class="bio mr-5 col-lg-3" style="vertical-align: middle;">
                        <img src="https://img.kitabisa.cc/size/1000/794d93b6-c5bf-4ce4-93fb-ca9761a48121.jpg" alt="Image placeholder" class="img-fluid">
                    </div>
                    <div class="desc">
                        <h5>Bayar Fidyah Rp20 Ribu = Beri Makan Lansia Dhuafa</h5>
                        <p>Sumber : Kita Bisa</p>
                        <span class="position"><a href="<?php echo base_url() ?>kabar2" target="_blank"><i><u>Baca Selengkapnya >></u></i></a></span>
                    </div>
                </div>


            </div> <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar pl-lg-5 ftco-animate fadeInUp ftco-animated" style="margin: 3em 0 0 0;">
                <div class="sidebar-box ftco-animate fadeInUp ftco-animated">
                    <div class="categories">
                        <h3>Menu</h3>
                        <li><a href="<?php echo base_url() ?>">Home <span class="fa fa-chevron-right"></span></a></li>
                        <li><a href="<?php echo base_url() ?>gallery">Gallery <span class="fa fa-chevron-right"></span></a></li>
                        <li><a href="<?php echo base_url() ?>profil">Profil Lembaga <span class="fa fa-chevron-right"></span></a></li>
                        <li><a href="<?php echo base_url() ?>donate">Donasi <span class="fa fa-chevron-right"></span></a></li>
                    </div>
                </div>

                <div class="sidebar-box ftco-animate fadeInUp ftco-animated">
                    <h3>Kabar Terbaru Lainnya</h3>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(https://img.kitabisa.cc/size/720/fad2a66a-83d7-4715-a880-68d5d63ad720.jpg);"></a>
                        <div class="text">
                            <h3 class="heading"><a href="<?php echo base_url() ?>kabar1">Single Mom Berjuang Sembuhkan 2 Anak Sakit Kanker</a></h3>
                        </div>
                    </div>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(https://img.kitabisa.cc/size/1000/794d93b6-c5bf-4ce4-93fb-ca9761a48121.jpg);"></a>
                        <div class="text">
                            <h3 class="heading"><a href="<?php echo base_url() ?>kabar2">Bayar Fidyah Rp20 Ribu = Beri Makan Lansia Dhuafa</a></h3>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?= $this->endSection(); ?>