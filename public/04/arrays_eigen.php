<?php

$games = ["sdvx", "chunithm", "wacca", "groove coaster", "taiko"];

print_r($games);

echo count($games). "<br>";

array_push($games, "nog een game");

echo count($games);

echo implode(' >> ', $games);
?>