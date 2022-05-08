<?php
$a=0;
$s=0;
$t=$_POST["tezina"];

if ($_POST["zanimanje"]=="programer" ||
 $_POST["zanimanje"]=="administrativni radnik" ||
 $_POST["zanimanje"]=="menadzer") $a=100;
 else if ($_POST["zanimanje"]=="policajac" ||
 $_POST["zanimanje"]=="vojnik") $a=200;
 else if ($_POST["zanimanje"]=="sportista") $a=300;
    else $a=150;
    
    

if ($_POST["godine"]>0 && $_POST["godine"]<=3) $s=1.9;
else if ($_POST["godine"]>3 && $_POST["godine"]<=10) $s=1.5;
else if ($_POST["godine"]>10 && $_POST["godine"]<=18) $s=1.2;
else if ($_POST["godine"]>18 && $_POST["godine"]<=26) $s=1;
else if (($_POST["godine"]>26 && $_POST["godine"]<=60) || ($_POST["godine"]>49 && $_POST["godine"]<=60)) $s=0.8;
 else if (($_POST["godine"]>30 && $_POST["godine"]<=35) || ($_POST["godine"]>44 && $_POST["godine"]<=49)) $s=0.7;
 else if (($_POST["godine"]>30 && $_POST["godine"]<=35) || ($_POST["godine"]>44 && $_POST["godine"]<=49)) $s=0.7;
 else if (($_POST["godine"]>35 && $_POST["godine"]<=44) || ($_POST["godine"]>59)) $s=0.6;
 else echo "Niste uneli godine <br>"; 

 if ($t=null) echo "Niste uneli kilazu.";
 else if ($s*$a*$t==0)  echo "Niste uneli kilazu.";
 else echo " Unos kalorija je: " . $s*$a*$t;


 
?>