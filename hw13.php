<?php


//ukupna povrsina svih bazena

function povrsinaSvaTri ($a, $b, $r){
    return (M_PI*$r**2 + $b*$a + $b*($a-$b/2)+(M_PI*($b**2)/4)/2);
}
echo povrsinaSvaTri(1,1,1) . "<br>";


//krug

function povrsinaKruga ($r){
    return (M_PI*$r*$r);
}
echo povrsinaKruga(1)  . "<br>";

//pravougaonik

function povrsinaPravougaonika ($a, $b){
    return ($b*$a);
}
echo povrsinaPravougaonika(1,1)  . "<br>";

//mix

function povrsinaMix ($a, $b){
    $r=$b/2;
    $c=$a-$r;
    return ($b*$c+(M_PI*$r*$r/2));
}
echo povrsinaMix(1,1)  . "<br>";
//echo povrsinaMix(1,1)  + povrsinaPravougaonika(1,1) + povrsinaKruga(1);
// mix2 - mesani bazen nacin drugi
function povrsinaMix2 ($a, $b){
    $z=$b**2/2;
    $y=$b*$b*M_PI/8;
    $x=$z-$y;
    return($a*$b-$x); // odnosno ($a*$b-((4-M_PI)*$b**2)/8);
}
echo povrsinaMix2(1,1)  . "<br>";



?>