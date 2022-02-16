<section class="section_gap">
    <div class="container bg-gray">
        <div class="section_title text-center">
            <h2 class="title_color">Hotel Reservation</h2>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <h3 class="align-center"><?= $hotel['name'] ?></h3>
                <p class="text-primary"><i class="fas fa-map-marker-alt"></i> <?= $hotel['address'] ?></p>
                <form action="" method="POST">
                    <input type="hidden" value="<?= $hotel['id'] ?>" name="id_hotel">
                    <input type="hidden" value="<?= $user['id'] ?>" name="id_user">
                    <input type="hidden" value="<?= $hotel['price'] ?>" name="total_price">
                    <div class="mt-10">
                        <div class="book_tabel_item">
                            <div class="form-group">
                                <div class='input-group date' id='datetimepicker11'>
                                    <input type='text' class="form-control" placeholder="Arrival Date" name="date1" />
                                    <span class="input-group-addon">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class='input-group date' id='datetimepicker1'>
                                    <input type='text' class="form-control" placeholder="Leaving Date" name="date2" />
                                    <span class="input-group-addon">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="float-right genric-btn primary radius" type="submit">Book Now</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-4 col-md-4">
                <div class="hotel_img">
                    <img src="<?= base_url('assets/images/hotel/') . $hotel['photo'] ?>" width="400" height="300">
                </div>
            </div>
        </div>
</section>