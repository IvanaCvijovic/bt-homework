<?php
//zadatak 1
echo "<b>Zadatak 1</b>";
echo "<br><br>";
$emails=['zika@gmail.com', 'zoka' , 'boka' , 'pera@yahoo.com', 'vera@gmail.com', 'joca@gmail.com', 'zvonko@gmail.com', ];
function checkEmail($array){
    $correctEmails=[];
    foreach ($array as $key=>$email){
        if (strpos($email, '@')!==false){
        $correctEmails[$key]=$email;
        }
    }
    print_r($correctEmails);
}
echo "<br>Pocetni niz<br><br>";
print_r($emails);
echo "<br><br>Rezultat<br><br>";
print_r(checkEmail($emails));
echo "<br><br><br><br>";


//zadatak 2
echo "<b>Zadatak 2</b>";
echo "<br><br>";

$niz=[354,6,8,12,334,33,86,34];
function operations ($array, $sign='+'){
    $result1=0;
    $result2=1;
    foreach ($array as $value){
        if ($sign=='+') {
            $result1=$result1+$value;     
        }
        if ($sign=='-') {
            $result1=$result1-$value;        
        }
        if ($sign=='*') {
            $result2=$result2*$value;            
        }
        if ($sign=='/') {
            $result2=$result2/$value;
        }
    }
    if ($result1==0){
        echo "Rezultat je  $result2";
    } else echo "Rezultat je  $result1";
}
echo operations($niz);
echo "<br><br><br><br>";

//zadatak 3
echo "<b>Zadatak 3</b>";
echo "<br><br>";

$asocijativni=array(
    'name'=>"Jovana",
    'last_name'=>"Jovic",
    'age'=>"22",
    'gender'=>'female',
    'avg_rating'=>9.2,
    'married'=>false,
    'courses'=>['laravel', 'react',]
);
$kljuc="genderr";
function proveraKljuca ($array,$needle){
    $flag=0;
    foreach($array as $key=>$value){
        if($key==$needle){
           $flag=1;
        } 
    }
    if($flag==1){
        echo "Kljuc postoji.";
    } else  echo "Kljuc ne postoji.";
}
echo proveraKljuca($asocijativni,$kljuc);

?>
