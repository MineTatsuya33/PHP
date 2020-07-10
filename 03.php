<?php

$name = "Tatsuya";
if($name = "Tatsuya"){
echo "私はTatsuyaです";
}else{
echo "あなたの名前ではありません";
}

$total = 0;
for ($i = 0; $i <= 10000; $i++){
$total += $i;
}
echo $total;

$fruits = array("apple","banana","lemon","grape","orange");
foreach($fruits as $fruit){
echo $fruit;
}

$start = 1;
$end = 101;

for($i = $start; $i < $end; $i++){

  if($i % 5 == 0){
    echo $i;
  }
}