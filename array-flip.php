<?php

setcookie("set_cookie_name", "test", time()+3600);  
print $_COOKIE['set_cookie_name'];
 $var_value = $_COOKIE['set_cookie_name'];
 If(isset($var_value)) {
 echo $var_value;
 }
else {    die('User has not been registered or wrong username or password.');
 }
?>