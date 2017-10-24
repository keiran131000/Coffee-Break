
<?php
$fp=$_POST['fp']; //add this to the code!

$myfile = fopen($fp, "w") or die("Unable to open file!");

$a=$_POST['1'];
$b=$_POST['2'];
$c=$_POST['3'];
$d=$_POST['4'];


$txt = $1 ;
fwrite($myfile, $txt);

//comma
$txt = "," ;
fwrite($myfile, $txt);


$txt = $2 ;
fwrite($myfile, $txt);
//comma
$txt = "," ;
fwrite($myfile, $txt);
$txt = $3 ;
fwrite($myfile, $txt);
//comma
$txt = "," ;
fwrite($myfile, $txt);
$txt = $4 ;




fclose($myfile);


?>

