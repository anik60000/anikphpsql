<?php

function find_max($nr1,$nr2){
    if ($nr1>$nr2){
    return $nr1;
}
else{
    return $nr2;
}
}
echo find_max(95,30);

function findnum($nrs1){
    if($nrs1%2==0){
    echo "Numer cift";
}
else{
    echo "Jo numer qift ";
}
}
echo findnum(8);



?>