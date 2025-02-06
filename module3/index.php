<?php


$score=63;

if{$score<=100 && $score>80}{
    echo "Best Grade 5";
}
elseif($score<=80 && $score>=71){
    echo "4"
}
elseif($score<=70 && $score>=59){
    echo "3"
}
elseif($score<=60 && $score>=49){
    echo "2"
}
elseif($score<=50 && $score>=0){
    echo "1"
}







$day ="MONDAY";

switch($day){
    case "monday":
    echo "ski";
    break;
    case "tuesday":
    echo "ki"
    break;
    case "wednesday":
    echo "ski"
    break;
    case "thursday":
    echo "ki"
    break;
    case "Friday":
    echo "ski";
    break;
    default:
    echo "Vikend";
    break;
}






$x=0
for($x = 50, $x<=100;$x+=2){
    echo "$x <br>":
}

$students =  array ('Anik''Daris''Eden''Andi')
foreach(students as $x){
    echo "$x <br>"
}
$strinng = "Aniku dhe And Dopsira"

while(strlen($strinng)<10){
    echo ($strinng);
    $strinng = $strinng.'a';
    
}
?>