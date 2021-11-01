<!--TABEL MENTAH utk databse koordinat
    Taken from TABLE location_tab in DATABASE wpu_login
-->

<div class="table-responsive">
    <!--//membuat row-->
    <div class="col-md-12">

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Kecepatan</th>
                    <th scope="col">Date Taken</th>

                </tr>
            </thead>
            <tbody>
                <?php //untuk nomor urut
                $i = 1; ?>
                <?php foreach ($kecepatan as $k) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td>
                            <?= $k['speed']; ?>
                        </td>
                        <td><?= date('d M Y H:i:s', strtotime($k['date_taken'])); ?></td>
                    </tr>
                    <?php //utk nomor urut
                    $i++; ?>
                <?php endforeach; ?>
                <?php
                ?>
        </table>
    </div>
    <!--kolom-->
</div>