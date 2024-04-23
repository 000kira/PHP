<?php

$count = 0;

while($count <= 100){
    if($count === 20 ){
        break;
    }
    if($count %3 == 0 ){
        $count++;
        continue;
    }
    echo $count . "<br />";
    $count++;

}

$i = 0;
do{
    echo $i . "<br />";
    $i++;
}while($i = 0 );

while($i = 2){
    echo $i++;
    break;
}
echo "<br />";

$s=0;

do{
    echo "num = " . $s++ . "<br />";
}while($s<3);
echo "<br />";
echo "<br />";

$Fizz="Fizz";
$Buzz="Buzz";
$FizzBuzz="FizzBuzz";

for($g = 1;$g <=50; $g++ ){
    
    if($g % 15 ==0 ){
        echo $FizzBuzz;
    }elseif($g %3==0 ){
        echo $Fizz;
    }elseif($g %5 ==0){
        echo $Buzz;
    }else{
        echo $g;
    }
    echo "<br />";
}

for($h = 1; $h < 8 ;$h++){
    for($j = 1;$j < 3 ;$j++){
        echo "⚫︎";
    }
    echo "<br />";
}