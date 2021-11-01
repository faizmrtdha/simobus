<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-sm-6">
            <div class="card text-center">
                <div class="card-header text-center mb-1 bg-primary text-white" style="font-size:24px; font-weight: bold;">
                    Bus 1
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-body" style="font-size:24px; font-weight: bold"> Status Udara di Toilet
                            <h2> <span id="asap"></span>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card text-center">
                <div class="card-header text-center mb-1 text-white bg-warning" style="font-size:24px; font-weight: bold">
                    Bus 2
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-body" style="font-size:24px; font-weight: bold"> Status Udara di Toilet
                            <h2> <span id="asap2"></span>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script type="text/javascript" src="<?= base_url('assets/js/'); ?>jquery-3.4.1.min.js">
</script>
<!-- ambil data ppm realtime dari asapPHP setiap 3dtk-->
<script type="text/javascript">
    $(document).ready(function() {
        setInterval(function() {
            $('#asap').load('asapPHP')
        }, 3000);
    });
    $(document).ready(function() {
        setInterval(function() {
            $('#asap2').load('asapPHP2')
        }, 3000);
    });
</script>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->