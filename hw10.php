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

$d = array("ponedeljak", "utorak", "sreda", "cetvrtak", "petak", "subota", "nedelja");
echo "Danas je "; print_r ($d[rand(0, 6)]); echo "! <br>";

// zadatak 3
$t = 2;
$y = 6;
$u = 9;
$z = $t + $y + $u;
echo "Zbir brojeva: " . $t .", " . $y . " i " . $u . " je " . $z;

?>

</body>
</html>
</html>