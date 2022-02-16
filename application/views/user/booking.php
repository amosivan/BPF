<section class="section-gap">
    <div class="container">

        <div class="section-top-border">

            <div class="row">
                <?php
                if ($this->session->flashdata('message')) {
                    echo $this->session->flashdata('message');
                }
                ?>
            </div>
            <h3 class="mb-30 title_color">Table</h3>
            <div class="progress-table-wrap">
                <div class="progress-table">
                    <div class="table-head">
                        <div class="serial">#</div>
                        <div class="country">Hotel</div>
                        <div class="country">Arrive Date</div>
                        <div class="country">Leave Date</div>
                        <div class="country">Cost</div>
                        <div class="country">Action</div>
                    </div>
                    <?php
                    $i = 1;
                    foreach ($books as $book) :
                    ?>
                        <div class="table-row">
                            <div class="serial"><?= $i++ ?></div>
                            <div class="country"><?= $book['name'] ?></div>
                            <div class="country"><?= $book['date1'] ?></div>
                            <div class="country"><?= $book['date2'] ?></div>
                            <div class="country">IDR. <?= $book['total_price'] ?></div>
                            <div class="country"><a href="<?= base_url('user/payNow/') . $book['id'] ?>" class="genric-btn primary radius">Pay Now</a></div>
                        </div>
                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>