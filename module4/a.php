<?php

$emra= ["Anik","Daris","Eden","Nili"];

array_push($emra,"Selatin");
$count = count($emra);

for($i=0; $i<$count; $i++){
    echo "<br>". $emra[$i];
}

echo "<br>";

array_pop($emra);
print_r($emra);
echo "<br>";

array_unshift($emra, "AJROPORT");
print_r($emra);
echo "<br>";

array_shift($emra);
print_r($emra);
echo "<br>";

$emra_slice= array_slice($emra, 1,1);

print_r($emra_slice);



echo "<br>";

$moshat=[16,14,13,15,16,14,15];

$shuma=array_sum($moshat);

$count= count($moshat);

print_r($shuma / $count);




?>