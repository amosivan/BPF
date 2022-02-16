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
                        <div class="country">Arriving Date</div>
                        <div class="country">Leaving</div>
                        <div class="country">Cost</div>
                    </div>
                    <?php
                    $i = 1;
                    foreach ($payments as $payment) :
                    ?>
                        <div class="table-row">
                            <div class="serial"><?= $i++ ?></div>
                            <?php
                            foreach ($hotel as $h) :
                                if ($payment['id_hotel'] == $h['id']) :
                            ?>
                                    <div class="country"><?= $h['name'] ?></div>
                            <?php
                                endif;
                            endforeach;
                            ?>

                            <?php
                            foreach ($booking as $b) :
                                if ($payment['id_booking'] == $b['id']) :
                            ?>
                                    <div class="country"><?= $b['date1'] ?></div>
                                    <div class="country"><?= $b['date2'] ?></div>
                            <?php
                                endif;
                            endforeach;
                            ?>
                            <div class="country">IDR. <?= $payment['total_cost'] ?></div>
                        </div>
                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>