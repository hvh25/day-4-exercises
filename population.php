<?php
$city = $_GET['city'];
?>
<h1>Welcome to Population Data Online</h1>

<?php
$connection = mysql_connect('127.0.0.1', 'root', '');
mysql_select_db('day-4-exercises');

// mysql_connect(‘SQLdata.com’, ‘Jones’, ‘un1c0rn’, ‘my_database’);
// Check connection
if (!$connection) {
  die('Unable to connect: ' . mysql_errno());
}
 
if ($connection) {
  $results = mysql_query('SELECT city_name, population FROM population');
  
    // Fetch the data from the result
  while ($row = mysql_fetch_array($results)) {
    if ($row == $city) {
      echo "The population of ". $row['city_name']."is". $row['population']."<br>";
    }
  }
}
?>

<?
if ($city && isset($cities[$city])) {
  print '<p>The population of <strong>' . $city . '</strong> is <strong>' . $cities[$city] . '</strong></p>';
}
 
?>
