<?php
$age =18;
switch(true){
    case ($age>20) :
        echo "You are Adult";
        break;
     
    case ($age<20):
        echo "You are Not Adult";
        break;    
    
    default: 
        echo "Enter the valid age";
        break;

} 
?>