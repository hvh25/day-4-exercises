<?php
// Check connection
if (!$connection) {
  die('Unable to connect: ' . mysql_errno());
}
 
if ($connection) {
  $result = mysql_query('SELECT city_name, population FROM day-4-exercises');
  
    // Fetch the data from the result
  while ($row = mysql_fetch_array($result)) {
    echo "The population of ". $row['city_name']."is". $row['population']
  }
?>
