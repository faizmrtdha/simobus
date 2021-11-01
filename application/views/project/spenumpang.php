<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card">
            <div class="card-header" style="font-size: 24px; font-weight: bold; text-align: center;">
                Bus 1
            </div>
            <!-- Penumpang -->
            <div class="row justify-content-center">
                <div class="col-sm-3">
                    <div class="card text-center">
                        <div class="card-header" style="font-size:24px; font-weight: bold">
                            Jumlah Penumpang
                        </div>
                        <div class="card-body">
                            <h2><span id="jumlah"></span></h2>
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

                <div class="col-sm-3">
                    <div class="card text-center">
                        <div class="card-header" style="font-size:24px; font-weight: bold">
                            Status
                        </div>
                        <div class="card-body">
                            <h2><span id="statuspenumpang"></span></h2>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>
    <div class="card mt-3">
        <div class="card-header" style="font-size: 24px; font-weight: bold; text-align: center;">
            Bus 2
        </div>
        <!-- Penumpang -->
        <div class="row justify-content-center">
            <div class="col-sm-3">
                <div class="card text-center">
                    <div class="card-header" style="font-size:24px; font-weight: bold">
                        Jumlah Penumpang
                    </div>
                    <div class="card-body">
                        <h2><span id="jumlah2"></span></h2>
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
            <div class="col-sm-3">
                <div class="card text-center">
                    <div class="card-header" style="font-size:24px; font-weight: bold">
                        Status
                    </div>
                    <div class="card-body">
                        <h2><span id="statuspenumpang2"></span></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="<?= base_url('assets/js/'); ?>jquery-3.4.1.min.js">
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            setInterval(function() {
                $('#jumlah').load('penumpangPHP')
            }, 3000);
        });
        $(document).ready(function() {
            setInterval(function() {
                $('#statuspenumpang').load('statuspenumpangPHP')
            }, 3000);
        });
        $(document).ready(function() {
            setInterval(function() {
                $('#jumlah2').load('penumpangPHP2')
            }, 3000);
        });
        $(document).ready(function() {
            setInterval(function() {
                $('#statuspenumpang2').load('statuspenumpangPHP2')
            }, 3000);
        });
    </script>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->