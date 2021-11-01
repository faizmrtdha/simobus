<!--TABEL MENTAH utk databse koordinat
    Taken from TABLE location_tab in DATABASE wpu_login
-->

<div class="table-responsive">
    <!--//membuat row-->
    <div class="row">
        <div class="col-md-12">

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Latitude</th>
                        <th scope="col">Longitude</th>
                        <th scope="col">Jumlah Penumpang</th>
                        <th scope="col">Date Taken</th>
                    </tr>
                </thead>
                <tbody>
                    <?php //untuk nomor urut
                    $i = 1; ?>
                    <?php foreach ($penumpang as $p) : ?>
                        <?php if ($p['jumlahPenumpang'] >= 1) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td>
                                    <?= $p['locationLatitude']; ?>
                                </td>
                                <td>
                                    <?= $p['locationLongitude']; ?>
                                </td>
                                <td>
                                    <?php
                                    if ($p['jumlahPenumpang'] == 36) $p['jumlahPenumpang'] = 35;
                                    if ($p['jumlahPenumpang'] == -1) $p['jumlahPenumpang'] = 0;
                                    if ($p['jumlahPenumpang'] >= 0) {
                                        echo $p['jumlahPenumpang'];
                                    }
                                    ?>
                                </td>
                                <td><?= date('d M Y H:i:s', strtotime($p['date_taken'])); ?></td>
                            </tr>
                            <?php //utk nomor urut
                            $i++; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
            </table>
        </div>

    </div>
    <!--kolom-->
</div>