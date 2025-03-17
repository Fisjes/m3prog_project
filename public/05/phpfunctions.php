<?php

$hoeLangIsDitWoord = "scrabblewoord";
$woordlengte = strlen($hoeLangIsDitWoord);
print($woordlengte);

//vraag 1: const
//vraag 2: string
//vraag 3: de lengte van de string

echo "<br>";

$anderLangWoord = "Supercalifragilisticexpialidocious";
$anderWoordLengte = strlen($anderLangWoord);
print($anderWoordLengte);

echo "<br>";

$tweeMacht2 = pow(2,10);

print $tweeMacht2;

//vraag 1: print $variable;

//https://www.php.net/manual/en/function.strtoupper.php

echo "<br>";

$naam = "Wario";
$naamGroot = strtoupper($naam);
print $naamGroot;

echo "<br>";

$naam2 = "WALUIGI";
$naamKlein = strtolower($naam2);
print $naamKlein;



?>