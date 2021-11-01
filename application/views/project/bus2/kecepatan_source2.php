<?php

$konek = mysqli_connect("localhost", "simobusm_1", "sUtwAam3KYbb", "simobusm_bus");

$sql = mysqli_query($konek, "SELECT speed FROM bus WHERE id=2");
$data = mysqli_fetch_array($sql);
$speed = $data['speed'];

if ($speed == "") $speed = 0;
echo $speed;
