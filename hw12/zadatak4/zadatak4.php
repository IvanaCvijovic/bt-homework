<html>
<body>
<?php
$d=0;
$j=100;
for($i=1;$i*$d<$i*$j;$i++){
	$d=$d+3;
    $j=$j+1;
    echo "Dan $i : puz je presao " . $d . 
    " a drvo je visoko " . $j . "<br>";
}
echo "Popeo se za " . ($i-1) . " dana.";
?>

</body>
</html>