<h1>Welcome to the Cupcake Blog!</h1>

<?php

//Connect to MySQL
$connection = mysql_connect('localhost', 'root', '');

//Select 'day_4_exercises')
mysql_select_db('day_4_exercises');

//Check Connection
if(!$connection){
  die('Failed to connect to MySQL: ' . mysql_connect_error());
}

//Get result from the 'articles' table
$result = mysql_query("SELECT title, author, body FROM articles");

//Loop through each row in the 'articles' table
while($row = mysql_fetch_array($result)){
  print '<article>';
  print '<h2>' . $row['title'] . '</h2>';
  print '<em>By: ' . $row['author']  . '</em>';
  print $row['body'];
  print'</article>';
}

?>
