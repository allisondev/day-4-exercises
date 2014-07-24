<?php

$city = $_GET['city'];

?>

<h1>Welcome to Population Data Online</h1>

<?php

$cities = array(
  'New York'      => 8405837,
  'Boston'        => 636479,
  'Philadelphia'  => 1526006,
  'Seattle'       => 634535,
  'Houston'       => 2161000,

);

if (!$city || !isset($cities[$city])) {

  print 'Please add a city name to your URL. Try <a
          href="/population.php?city=Philadelphia">Philadelphia</a>.';

}
else {

  print 'The population of <strong>'. $city . '</strong> is <strong>' . $cities[$city] . '</strong>.</p>';

}


?>

<h2>Valid Cities:</h2>
<ul>
   <?php
     foreach($cities as $location => $pop_key){
       print '<li><a href="/population.php?city=' . $location . '">' . $location . '</a></li>';
     }
   ?>
</ul>

