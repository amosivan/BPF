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

            <div class="row mt-2">
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--green">
                        <h2 class="number text-white"><?= $users ?></h2>
                        <span class="desc text-white">Total Members</span>
                        <div class="icon">
                            <i class="zmdi zmdi-account-o"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--orange">
                        <h2 class="number text-white"><?= $books ?></h2>
                        <span class="desc text-white">Total Bookings</span>
                        <div class="icon">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--blue">
                        <h2 class="number text-white"><?= $hotels ?></h2>
                        <span class="desc text-white">Number of Hotels</span>
                        <div class="icon">
                            <i class="zmdi zmdi-calendar-note"></i>
                        </div>
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