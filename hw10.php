<html>
    <head><title>Domaci 10</title></head>
<body>

<?php

// zadatak 1

$f = 200;
$s = 80;
echo "Prvi broj: " . $f ." Drugi broj: " . $s . "<br>";
echo "Zbir: " . ($f + $s) . "<br>";
echo "Razlika: " . ($f - $s) . "<br>";
echo "Proizvod: " . ($f * $s) . "<br>";
echo "Kolicnik: " . ($f / $s) . "<br>";

// zadatak 2

$d = 3;
if ($d == 0) {
    echo "Danas je ponedeljak!";
} else if ($d == 1) {
    echo "Danas je utorak!";
}else if ($d == 2) {
    echo "Danas je sreda!";
}else if ($d == 3) {
    echo "Danas je cetvrtak!";
}else if ($d == 4) {
    echo "Danas je petak!";
}else if ($d == 5) {
    echo "Danas je subota!";
}else if ($d == 6) {
    echo "Danas je nedelja!";
}

// zadatak 3
$t= rand(0, 10);
$y= rand(0, 10);
$u= rand(0, 10);
$z= $t + $y + $u;
echo "<br> prvi br: $t <br> drugi br: $y <br> treci br: $u <br> zbir: $z" ;

?>

</body>
</html>