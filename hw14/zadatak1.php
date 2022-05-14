<?php

if(empty($_POST['dd'])) {die ("Nije unet dan!");}
if(empty($_POST['mm'])) {die ("Nije unet mesec!");}
if(empty($_POST['yy'])) {die ("Nije uneta godina!");}

$dd=$_POST['dd'];
$mm=$_POST['mm'];
$yy=$_POST['yy'];


if(!is_int($mm) && $mm<0 || $mm>12){
    die ("Neispravan mesec!");
}
if(!is_int($yy) && $yy<1970){
    die ("Neispravna godina!");
}

echo "<br>";


for ($i=1;$i<=12;$i++){
    if($i==$mm && $mm==2){
        if ($yy%4==0 && $yy%100!==0 || $yy%400==0){
            if(!is_int($dd) && $dd<0 || $dd>29){
                die ("Neispravan dan!");
            } else echo "Datum(godina je prestupna): $dd. $mm. $yy.";
        }
        else   {
            if(!is_int($dd) && $dd<0 || $dd>28){
                die ("Godina nije prestupna, februar ima 28 dana!");
            } else echo "Datum: $dd. $mm. $yy.";
        }
    }
    else if ($i==$mm && $mm==4 || $mm==6 || $mm==9 || $mm==11){
        if(!is_int($dd) && $dd<0 || $dd>30){
            die ("Neispravan dan!");
        } else echo "Datum: $dd. $mm. $yy.";
    }
    else if ($i==$mm){
        if(!is_int($dd) && $dd<0 || $dd>31){
            die ("Neispravan dan!");
        } else echo "Datum: $dd. $mm. $yy.";
    }
}
?>