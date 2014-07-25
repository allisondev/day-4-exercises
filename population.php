
<h1>Welcome to Population Data Online</h1>

<?php

//Connect to MySQL
$connection = mysql_connect('localhost', 'root', '');

//Select 'day_4_exercises'
mysql_select_db('day_4_exercises');

//Check Connection
if(!$connection){
  die('Failed to connec to MySQL: ' . mysql_connect_error());
}

//Get result from the 'population' table
$result = mysql_query("SELECT city_name, population FROM population");

//Get city from the URL
$city = $_GET['city'];

//Check if city was provided in URL
if (!$city) {

  print 'Please add a city name to your URL. Try <a
          href="/day-4-exercises/population.php?city=Philadelphia">Philadelphia</a>.';

}
else {

  //Loop through all query results to find match with $city input from URL
  while($row = mysql_fetch_array($result)){

    if ($row['city_name'] === $city){
      
      print "The population of <strong>". $city . "</strong> is <strong>" . $row['population'] . "</strong>.</p>";

    }

  }
}

print '<h2>Try these cities:</h2>';
print '<ul>';

$result = mysql_query('SELECT city_name, population FROM population');

//Loop through all cities to create list of links
while($row = mysql_fetch_array($result)){
    print "<li><a href='/day-4-exercises/population.php?city=" . $row['city_name'] . "'>" . $row['city_name'] . "</a></li>";
}

print '</ul>';

?>
