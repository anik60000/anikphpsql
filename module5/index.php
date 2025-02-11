<?php

$cars = array (

    array("BMW","1975","GERMANY"),
    array("MCLAREN","1968","FRANCE"),
    array("OPEL","2025","ITALY"),
);

echo $cars [0][0]. "Vendi". $cars [0][1] ."Lloji"  ."Viti"[0][2] $cars "<br>";
echo $cars [1][0]. "Vendi". $cars [1][1] ."Lloji"  ."Viti"[1][2] $cars"<br>";
echo $cars [2][0]. "Vendi". $cars [2][1] ."Lloji"  ."Viti"[2][2] $cars "<br>";

for($row=0;$row<3;$row++){
    echo "<p><b>Row Number $row</br></p>";
    echo "<ul>"
    for($col=0;$col<3;$col++){
        echo "<li>".$cars[$row][$col]."</li>"
    }   
}
echo "</ul>"

$arrays = array(
    arrray (1,2,3),
    arrray (1,2,3),
    arrray (1,2,3),

);

for($i=0;$i<3;$i++){
    for($j=0;$j<3;$j++){
        echo "Array: $i Element: $j <br>"
    }
}

$grade = array (
    "Math"=>"3",
    "Art" =>"5"
    "History"=>"4",
    "Music"=>"5",
)

foreach($grades as $key => $value){
    echo "Subject:" .$key. ",Grade:" .$value;
    echo "<br>";
}
b                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
?>