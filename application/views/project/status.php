<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <center>
                <h3 class="h3 mb-4 text-gray-800">
                    STATUS BUS
                </h3>

                <h2 class="card-title">
                    <?php
                    if ($status_bus['speed'] == 0 && $status_bus['jumlahPenumpang'] == 0) {
                        print 'Bus Sedang Berhenti';
                    } else {
                        print 'Bus Dalam Perjalanan';
                    }
                    ?>
                </h2>

                <div class="second mb-2">
                    <a class="btn btn-primary btn-lg" href="<?= base_url('Project/penumpang'); ?>" role="button">Lihat Jumlah Penumpang</a>
                </div>
                <div class="third mb-2">
                    <a class="btn btn-warning btn-lg" href="<?= base_url('Project/gps'); ?>" role="button">Lihat Lokasi & Kecepatan Bus</a>
                </div>
                <div class="fifth mb-2">
                    <a class="btn btn-success btn-lg" href="<?= base_url('Project/kecepatan'); ?>" role="button">Lihat Database Kecepatan</a>
                </div>
                <div class="forth">
                    <a class="btn btn-info btn-lg" href="<?= base_url('Project/asap'); ?>" role="button">Lihat Status Udara di Toilet</a>
                </div>
            </center>
        </div>

    </div>

</div>
</div>
<!-- <hr class="sidebar-divider">
    <hr class="sidebar-divider">

    <div class="row">
        <div class="col-md-12">
            <center>
                <h3 class="h3 mb-4 text-gray-800">
                    STATUS BUS 2
                </h3>

                <h2 class="card-title">
                    <?php
                    if ($status_bus2['speed'] == 0 && $status_bus2['jumlahPenumpang'] == 0) {
                        print 'Bus Sedang Berhenti';
                    } else {
                        print 'Bus Dalam Perjalanan';
                    }
                    ?>
                </h2>
                <div class="second mb-2">
                    <a class="btn btn-primary btn-lg" href="<?= base_url('Project/penumpang2') ?>" role="button">Lihat Jumlah Penumpang</a>
                </div>
                <div class="third mb-2">
                    <a class="btn btn-primary btn-lg" href="<?= base_url('Project/gps2') ?>" role="button">Lihat Lokasi & Kecepatan Bus</a>
                </div>
                <div class="forth">
                    <a class="btn btn-primary btn-lg" href="<?= base_url('Project/asap2') ?>" role="button">Lihat Status Udara di Toilet</a>
                </div>

            </center>
        </div>
    </div> -->