<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1"><?= $judul ?></h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">

                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Hotel</th>
                                    <th>Arriving Date</th>
                                    <th>Leaving Date</th>
                                    <th>Cost</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($books as $book) :
                                ?>
                                    <tr class="tr-shadow">
                                        <td>
                                            <?= $i++ ?>
                                        </td>
                                        <td>
                                            <?php
                                            foreach ($akun as $a) {
                                                if ($book['id_user'] == $a['id']) :
                                            ?>
                                                    <?= $a['name'] ?>
                                            <?php
                                                endif;
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            foreach ($hotels as $hotel) {
                                                if ($book['id_hotel'] == $hotel['id']) :
                                            ?>
                                                    <?= $hotel['name'] ?>
                                            <?php
                                                endif;
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?= $book['date1'] ?>
                                        </td>
                                        <td>
                                            <?= $book['date2'] ?>
                                        </td>
                                        <td>
                                            IDR. <?= $book['total_price'] ?>
                                        </td>
                                    </tr>
                                    <tr class="spacer"></tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE -->
                </div>
            </div>

            <div class="row mt-5 bg-light">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © <?= date('Y') ?> The Muchda's. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MAIN CONTENT-->