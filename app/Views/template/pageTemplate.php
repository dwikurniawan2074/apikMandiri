<!-- navbar -->
<?= $this->include('template/navbar'); ?>

<section class="hero-wrap hero-wrap-2" style="background-image: url(<?php echo base_url()?>/unicare-master/images/bg_2.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5 text-page">
                <h1 class="mb-0 bread"><?= $title; ?></h1>
            </div>
        </div>
    </div>
</section>

<?= $this->renderSection('pageContent'); ?>

<!-- footer -->
<?= $this->include('template/footer'); ?>