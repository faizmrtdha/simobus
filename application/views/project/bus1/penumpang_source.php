<?php

$konek = mysqli_connect("localhost", "simobusm_1", "sUtwAam3KYbb", "simobusm_bus");

$sql = mysqli_query($konek, "SELECT jumlahPenumpang FROM bus WHERE id = 1");
$data = mysqli_fetch_array($sql);
$jumlahPenumpang = $data['jumlahPenumpang'];

if ($jumlahPenumpang == "") $jumlahPenumpang = 0;
if ($jumlahPenumpang == -1) $jumlahPenumpang = 0;
if ($jumlahPenumpang == 36) $jumlahPenumpang = 35;
echo $jumlahPenumpang;
