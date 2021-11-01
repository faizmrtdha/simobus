<?php
/* Database connection settings */
$host = "localhost";
$users = "simobusm_1";
$pass = "sUtwAam3KYbb";
$db = "simobusm_bus";
$mysqli = new mysqli($host, $users, $pass, $db) or die($mysqli->error);

$coordinates = array();
$latitudes = array();
$longitudes = array();

// Select all the rows in the markers table
$location_tab = 'bus';
//print 'Database taken from TABLE: ' . $location_tab;
$query = "SELECT  `locationLatitude`, `locationLongitude` FROM `{$location_tab}` WHERE id=1 ";
$result = $mysqli->query($query) or die('data selection for google map failed: ' . $mysqli->error);

$rowcount = mysqli_num_rows($result);
if ($rowcount > 0) {
    while ($row = mysqli_fetch_array($result)) {

        $latitudes[] = $row['locationLatitude'];
        $longitudes[] = $row['locationLongitude'];
        $coordinates[] = 'new google.maps.LatLng(' . $row['locationLatitude'] . ',' . $row['locationLongitude'] . '),';
    }

    //remove the comaa ',' from last coordinate
    $lastcount = count($coordinates)-1;
    $coordinates[$lastcount] = trim($coordinates[$lastcount], ",");
    
    $okinLat = $latitudes[$lastcount];
    $okinLon = $longitudes[$lastcount];
    //print $okinLat;print',';print $okinLon;
    print $latitudes[$lastcount] . '<br>' . $longitudes[$lastcount];

    //print ',';
    //print $okinLon;
    //----
} else {
    print 'Belum ada data koordinat di database!';
}
