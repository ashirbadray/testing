<?php
$array =[
    ['id'=>"1","name"=>"Ashirbad","age"=>20],
    ['id'=>"2","name"=>"Alok","age"=>30],
    ['id'=>"3","name"=>"Pradip","age"=>30],
];
$newarray = array_column($array,'name','id');
echo "<pre>";
print_r($newarray);
echo "</pre>";
?>