<?php
$a1=$_POST["a1"];
$a2=$_POST["a2"];
$b1=$_POST["b1"];
$b2=$_POST["b2"];
//povrsina zida
$a=$a1*$a2;
//povrsina plocice
$b=$b1*$b2;
if ($a/$b<1 && $a/$b>0 ) echo "Plocice su vece od zida,potrebno je " . $a/$b . " plocice" ;
else if ($a/$b>=1) echo "Potrebno je: " . $a/$b . "plocica da bi se poplocao ceo zid.";


?>