<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row justify-content-center">
        <div class="col-sm-3">
            <div class="card text-center">
                <div class="card-header" style="font-size:24px; font-weight: bold">
                    Nilai
                </div>
                <div class="card-body">
                    <h2><span id="ppm"></span>
                    </h2>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card text-center">
                <div class="card-header" style="font-size:24px; font-weight: bold">
                    Status Udara di Toilet
                </div>
                <div class="card-body">
                    <h2> <span id="asap"></span>
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-3">
        <div class="col-sm-6">
            <div class="card text-center">
                <div class="card-header">
                    Parameter
                </div>
                <div class="card-body">
                    <h2> <100 ppm = Normal </h2>
                    <h2> >=100 ppm = Terdeteksi Asap Rokok</h2>
                </div>
            </div>
        </div>
    </div>
    
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

    <!-- <script type="text/javascript" src="<?= base_url('assets/js/'); ?>jquery-3.4.1.min.js">
    </script> -->
    <!-- ambil data ppm realtime dari asapPHP setiap 3dtk-->
    <!-- <script type="text/javascript">
        $(document).ready(function() {
            setInterval(function() {
                $('#asap').load('asapPHP')
            }, 3000);
        });
        $(document).ready(function() {
            setInterval(function() {
                $('#ppm').load('ppmPHP')
            }, 3000);
        });
    </script> -->