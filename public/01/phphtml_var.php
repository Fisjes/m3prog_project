<?php
$title = "Luek";
$date = date('d-m-Y');
$tijd = date("H:i");
$favorieteGame= "SDVX";
$mooisteGetal= 420;

echo $title;
echo $date;
echo $tijd;
echo $favorieteGame;
echo $mooisteGetal;
?>

<!doctype html>
<html lang="en">
    <head>
        <title><?php echo "Titel van de pagina" ?></title>
    </head>
    <body>
        <h2>De datum vandaag is: <?php echo date('d-m-Y')?>, en de tijd is <?php echo date("H:i")?> uur.
        
        <p><h2>Mijn favoriete game</h2><?php echo "Super metroid";?></p>
    </body>
</html>