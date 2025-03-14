<?php

$eenBoolVariable =false;
$opvoorraad =false;
$aantaalOpVoorraad = 0;
$opvoorraad = $aantaalOpVoorraad > 0;

if($opvoorraad ==false)
{
    echo "niet op voorraad";
}

else
{
    echo "artiekel is op voorraad";
    echo "<br>";
    echo "aantal op vooraad = ";
    echo $aantaalOpVoorraad;

    //extratje toegevoegd om te kijken of dat werkte : )
}

?>