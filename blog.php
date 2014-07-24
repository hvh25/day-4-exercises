<h1>Welcome to the Cupcake Blog!</h1>
 
 
<?php
$connection = mysql_connect('127.0.0.1', 'root', '');
mysql_select_db('day-4-exercises');

// mysql_connect(‘SQLdata.com’, ‘Jones’, ‘un1c0rn’, ‘my_database’);
// Check connection
if (!$connection) {
  die('Unable to connect: ' . mysql_errno());
}
 
if ($connection) {
  $result = mysql_query('SELECT name, author, body FROM blog');
  
    // Fetch the data from the result
  while ($row = mysql_fetch_array($result)) {
    echo "Name: ". $row['name']."<br>".
         "Author: ".$row['author']."<br>".
         "Body: ".$row['bod'].'<br>"'.
  }
?>
 
}
 
 
 
?>
