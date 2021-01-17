<?php

class Movie {
    public $titolo;


}
$disney = new Movie();

var_dump($disney);
$disney -> $titolo = 'topolino';
var_dump($disney);

$marvel = new Movie();
var_dump($marvel);
$marvel ->$titolo = 'avengers';
var_dump($marvel);
?>
