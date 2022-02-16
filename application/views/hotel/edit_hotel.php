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

            <div class="row mt-3">
                <div class="col-md-8">
                    <div class="card px-3 py-3">
                        <form action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $hotel['id'] ?>">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="name" class=" form-control-label">Hotel Name</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="name" name="name" class="form-control" value="<?= $hotel['name'] ?>">
                                    <small class="text-danger"><?= form_error('name') ?></small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="address" class=" form-control-label">Address</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="address" name="address" class="form-control" value="<?= $hotel['address'] ?>">
                                    <small class="text-danger"><?= form_error('address') ?></small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="price" class=" form-control-label">Price</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="price" name="price" class="form-control" value="<?= $hotel['price'] ?>">
                                    <small class="text-danger"><?= form_error('price') ?></small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-12">
                                    <img src="<?= base_url('assets/images/hotel/') . $hotel['photo']; ?>" width="300" class="img-thumbnail mb-3">
                                    <div class="custom-file">
                                        <input type="file" name="photo" id="photo">
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group float-right">
                                <button type="submit" class="btn btn-primary btn-sm mx-2">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm mr-3">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                        </form>
                    </div>
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