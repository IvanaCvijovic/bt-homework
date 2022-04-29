<?php

$n = $_GET["name"];
$s = $_GET["surname"];
$p = $_GET["password"];
$e = $_GET["email"];
$c = $_GET["course"];
if (empty($n)) echo " Niste uneli sve podatke"; 
if (empty($s)) echo " Niste uneli sve podatke"; 
if (empty($p)) echo " Niste uneli sve podatke";
if (empty($e)) echo " Niste uneli sve podatke";

if (isset($_GET["gender"]) && ($_GET["gender"] == "female")) {
        echo "Postovana $n $s <br> Uspesno ste se registrovali na nas sajt.
        <br> vasa lozinka je $p <br> vas email je $e <br> kursevi su: ";
        print_r($c);
        
    } else if (isset($_GET["gender"]) && ($_GET["gender"] == "male")) {
        echo "Postovani $n $s <br> Uspesno ste se registrovali na nas sajt.
        <br> vasa lozinka je $p <br> vas email je $e <br> kursevi su: ";
        print_r($c);}
    
        else echo " Niste oznacili pol";