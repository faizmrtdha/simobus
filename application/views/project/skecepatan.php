<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?php echo $title; ?>
        <!--// sama aja kayak < ? php = $title; ?> -->
    </h1>
    <div class="row justify-content-center">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header text-center bg-primary text-white" style="font-size:24px; font-weight: bold">Bus 1</div>
                <p class="ml-3" id="bus">Pengemudi: <?= $nama['bus']; ?></p>

                <div id="autoReloadTabelMentah"></div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card">
                <div class="card-header text-center bg-warning text-white" style="font-size:24px; font-weight: bold">Bus 2</div>
                <p class="ml-3" id="bus">Pengemudi: <?= $name['bus']; ?></p>

                <div id="autoReloadTabelMentah2"></div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="<?= base_url('assets/js/'); ?>jquery-3.4.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            setInterval(function() {
                $('#autoReloadTabelMentah').load('kecepatan_mentah')
            }, 3000);
        });
        $(document).ready(function() {
            setInterval(function() {
                $('#autoReloadTabelMentah2').load('kecepatan_mentah2')
            }, 3000);
        });
    </script>

</div>
</div>