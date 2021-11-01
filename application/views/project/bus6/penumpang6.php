<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-- Penumpang -->
    <div class="row justify-content-center">
        <div class="col-sm-3">
            <div class="card text-center">
                <div class="card-header" style="font-size:24px; font-weight: bold">
                    Jumlah Penumpang
                </div>
                <div class="card-body">
                    <h2><span id="jumlah6"></span></h2>
                </div>
            </div>
        </div>
        <!-- Akhir Penumpang -->

        <!-- Maksimal Penumpang -->
        <div class="col-sm-3">
            <div class="card text-center">
                <div class="card-header" style="font-size:24px; font-weight: bold">
                    Maksimal Penumpang
                </div>
                <div class="card-body">
                    <h2>35</h2>
                </div>
            </div>
        </div>
        <!-- Akhir Maksimal Penumpang -->
    </div>

    <div class="row justify-content-center">
        <div class="col-sm-3">
            <div class="card text-center">
                <div class="card-header" style="font-size:24px; font-weight: bold">
                    Status
                </div>
                <div class="card-body">
                    <h2><span id="statuspenumpang6"></span></h2>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">Lokasi Penumpang naik</div>
                <p id="bus" style="padding-left: 2%;">Plat No. Bus:<br><?= $nama['bus']; ?></p>
                <div id="autopenumpang6"></div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->