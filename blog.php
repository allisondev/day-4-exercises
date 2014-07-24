<h1>Welcome to the Cupcake Blog!</h1>

<?php

$articles = array();

$article = new stdClass();
$article->name = 'Frosting Adventures';
$article->author = 'Mr.Frosting';
$article->body = '<p>Applicake jujubes tart toffee unerdwear.com gummies powder jelly beans toffee. Donut brownie marzipan toffee liquorice. Cupcake bear claw dragée unerdwear.com sugar plum.</p>';
$articles[] = $article;

$article = new stdClass();
$article->name = 'Sprinkles Craze';
$article->author = 'Missy Sprinkles';
$article->body = '<p>Tootsie roll muffin chocolate cake sugar plum marzipan candy cake jelly-o macaroon. Toffee gingerbread carrot cake macaroon
brownie. Gummi bears gummi bears chocolate sugar plum unerdwear.com cookie carrot cake lollipop gummies. Pudding danish chocolate cake marzipan carrot cake pudding sugar plum cake gingerbread.</p>';
$articles[] = $article;

$article = new stdClass();
$article->name = 'What\'s Your Flavor?';
$article->author = 'Vanilla Ice';
$article->body = '<p>Candy canes caramels fruitcake croissant macaroon carrot cake. Bear claw chocolate cake oat cake powder soufflé wafer candy pastry dessert. Gummies lollipop pie jujubes gingerbread tiramisu applicake.</p>';
$articles[] = $article;

foreach ($articles as $article){
    print '<article>';
    print '<h2>' . $article->name . '</h2>';
    print '<em>By: ' . $article->author . '</em><br/>';
    print $article->body;
    print '</article>';
}

?>
