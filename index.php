<?php
$lol = "adkasdkakad";
$lenght = strlen($lol);

$a = 'a';

$count =0;
for($i=0;$i<$lenght;$i++){
    if($a == $lol[$i]){
        $count++;
    }
}
echo $count;
