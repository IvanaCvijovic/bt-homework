<!DOCTYPE html>
<html>
<body>

<?php
function brojKamiona($brasno, $krofna,$flag = null){
    if ($brasno<$krofna){
        echo "Nema dovoljno goriva.";
    } else {
        if ($flag==true){	
            $ostatak=$brasno%$krofna;
            echo "Ostatak goriva je " . $ostatak;
        } 
        else if ($flag==false || $flag==null) {
              echo "Ukupno kamiona " . floor( $brasno/$krofna);
        }
    }
}
echo brojKamiona(15,4);
?>

</body>
</html>
