<?php

function sum ($number){
    return $number * 2;
}

echo sum(2);
echo "\n";

function f($a,$b){
    return $a + $b;
}

echo f(3,5);

function a($all){
    $amount=1;
    foreach($all as $number){
        $amount=$amount*$number;
    }
    return $amount;
}
echo a(array(3,5,7,9));

function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
     $max_number = $arr[0];
     foreach($arr as $a){
     //どうしたらいいかわからない・・・・
         if($max_number < $a){
            $max_number = $a;
         }
     }

     return $max_number;
 }
 
 echo max_array(array(1,2,6,4,5));