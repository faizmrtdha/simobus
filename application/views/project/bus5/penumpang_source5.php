<?php

$konek = mysqli_connect("localhost", "simobusm_1", "sUtwAam3KYbb", "simobusm_bus");

$sql = mysqli_query($konek, "SELECT jumlahPenumpang FROM bus WHERE id = 5");
$data = mysqli_fetch_array($sql);
$jumlahPenumpang = $data['jumlahPenumpang'];

if ($jumlahPenumpang == "") $jumlahPenumpang = 0;
echo $jumlahPenumpang;
