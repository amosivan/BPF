<section class="section_gap bg-secondary">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">Payment</h2>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <?php
                foreach ($hotel as $h) :
                    if ($book['id_hotel'] == $h['id']) :
                ?>
                        <h3 class="text-dark mt-3"><?= $h['name'] ?></h3>
                <?php
                    endif;
                endforeach;
                ?>
                <form action="" method="POST">
                    <input type="hidden" value="<?= $book['id'] ?>" name="id_booking">
                    <input type="hidden" value="<?= $book['id_user'] ?>" name="id_user">
                    <input type="hidden" value="<?= $book['id_hotel'] ?>" name="id_hotel">
                    <div class="mt-10">
                    </div>
                    <div class="mt-10">
                        <input type="text" name="total_cost" value="<?= $book['total_price'] ?>" aria-disabled="true" required class="single-input-primary" />
                    </div>
                    <div class="mt-4">
                        <button class="float-right genric-btn primary radius" type="submit">Pay Now</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-4 col-md-4">
                <div class="hotel_img">
                    <?php
                    foreach ($hotel as $h) :
                        if ($book['id_hotel'] == $h['id']) :
                    ?>
                            <img src="<?= base_url('assets/images/hotel/') . $h['photo'] ?>" width="400" height="300">
                    <?php
                        endif;
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
</section>