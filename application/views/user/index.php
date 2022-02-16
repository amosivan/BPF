<!--================Breadcrumb Area =================-->
<section class="gallery_area section_gap">

    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">Hotel Accomodations</h2>
        </div>
        <?php
        if ($this->session->flashdata('message')) {
        ?>
            <div class="justify-content-center">
                <p class="text-center">
                    <?= $this->session->flashdata('message') ?>
                </p>
            </div>
        <?php
        }
        ?>
        <div class="row mb_30">
            <?php
            foreach ($hotels as $hotel) :
            ?>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="<?= base_url('assets/images/hotel/') . $hotel['photo'] ?>" width="400" height="300">
                            <a href="<?= base_url('user/reservation/') . $hotel['id'] ?>" class="btn theme_btn button_hover">Book Now</a>
                        </div>
                        <a href="<?= base_url('user/reservation/') . $hotel['id'] ?>">
                            <h4 class="sec_h4"><?= $hotel['name'] ?></h4>
                        </a>
                        <h5>IDR. <?= $hotel['price'] ?><small>/night</small></h5>
                    </div>
                </div>
            <?php
            endforeach;
            ?>
        </div>
</section>
<!--================Breadcrumb Area =================-->