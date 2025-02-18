<?php



$my_file = fopen("file1.txt","w");

fclose($my_file);


$filename = "ds.txt";

$file = fopen ($filename,"r");

$size = filesize($filename);

$myfiledata = fread($file,$size);
echo $myfiledata ."<br>";


$myfile = fopen ("example_txt", "r");

while(!feof($myfile)) {
    echo fgets($myfile). "<br>";     
}





?>