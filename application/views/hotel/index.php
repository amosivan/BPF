<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1"><?= $judul ?></h2>
                        <a href="<?= base_url('hotel/insert') ?>" class="au-btn au-btn-icon au-btn--blue">
                            <i class="zmdi zmdi-plus"></i>add hotel</a>
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
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($hotels as $hotel) :
                                ?>
                                    <tr class="tr-shadow">
                                        <td>
                                            <?= $i++ ?>
                                        </td>
                                        <td><img src="<?= base_url('assets/images/hotel/') . $hotel['photo'] ?>" width="450"></td>
                                        <td>
                                            <?= $hotel['name'] ?>
                                        </td>
                                        <td><?= $hotel['address'] ?></td>
                                        <td>IDR . <?= $hotel['price'] ?></td>
                                        <td>
                                            <div class="table-data-feature">
                                                <a href="<?= base_url('hotel/edit/') . $hotel['id'] ?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </a>
                                                <a href="<?= base_url('hotel/delete/') . $hotel['id'] ?>" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </a>
                                            </div>
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