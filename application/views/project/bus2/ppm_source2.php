<?php

$konek = mysqli_connect("localhost", "simobusm_1", "sUtwAam3KYbb", "simobusm_bus");

$sql = mysqli_query($konek, "SELECT ppm FROM bus WHERE id=2");
$data = mysqli_fetch_array($sql);
$ppm = $data['ppm'];

if ($ppm == "") $ppm = 0;
echo $ppm . " " . "ppm";
