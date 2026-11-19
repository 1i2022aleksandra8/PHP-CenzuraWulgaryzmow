<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wykrywacz wulgaryzmów</title>
</head>
<body>

<?php
$plik = "pliczek.txt";
$wulgaryzmy = ['dupa', 'cholera', 'ciul'];

function cenzura($plik, $wulgaryzmy) {
    $tekst = file_get_contents($plik);

    foreach ($wulgaryzmy as $slowo) {
        $tekst = str_replace($slowo, "-cenzura-", $tekst);
    }

    echo $tekst;
}

cenzura($plik, $wulgaryzmy);
?>

</body>
</html>

<!-- napisz funkcje ktora sprawdzi dany plik pod katem obecnosci wulgaryzmow, jesli jakies znajdzie zastapi je -cenzura-  -->
<!-- 
dupa
ziemniaczek
cholera
ciul
kartofel
sianko
ciuszek
zieciulstwo 
-->