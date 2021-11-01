<?php
//Database
$host = "localhost";
$username = "simobusm_1";
$password = "sUtwAam3KYbb";
$database = "simobusm_bus";
//

//table
//echo $user['device_ID'];
//

function parseToXML($htmlStr)
{
  $xmlStr = str_replace('<', '&lt;', $htmlStr);
  $xmlStr = str_replace('>', '&gt;', $xmlStr);
  $xmlStr = str_replace('"', '&quot;', $xmlStr);
  $xmlStr = str_replace("'", '&apos;', $xmlStr);
  $xmlStr = str_replace("&", '&amp;', $xmlStr);
  return $xmlStr;
}

// Opens a connection to a mySQL server
$connection = new mysqli($host, $username, $password, $database) or die($mysqli->error);
//backup $connection=mysql_connect ("localhost", $username, $password);


// Set the active mySQL database
/*$db_selected = mysql_select_db($database, $connection);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
}*/
// 'locationLatitude','locationLongitude'
// Select all the rows in the markers table
$query = "SELECT * FROM bus WHERE id = 6";
//$result = mysql_query($query);
$result = $connection->query($query);
if (!$result) {
  die('Invalid query: ' . $connection->error);
}

header("Content-type: text/xml");

// Start XML file, echo parent node
echo '<markers>';

// Iterate through the rows, printing XML nodes for each
while ($row = $result->fetch_assoc()) {
  //while ($row = @mysql_fetch_assoc($result)){
  // ADD TO XML DOCUMENT NODE
  echo '<marker ';
  //echo 'name="' . parseToXML('&','&amp;', $row['name']) . '" ';
  echo 'lat="' . $row['locationLatitude'] . '" ';
  echo 'lng="' . $row['locationLongitude'] . '" ';
  echo 'date_taken="' . parseToXML(date('d M Y H:i:s', strtotime($row['date_taken']))) . '" ';
  //echo(date("Y-m-d h:i:sa",$epoch));
  //date('d M Y H:i:s', $row['date_taken']);
  //echo 'type="' . $row['type'] . '" ';
  echo '/>';
}

// End XML file
echo '</markers>';
