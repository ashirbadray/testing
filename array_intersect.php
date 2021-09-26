<?php
 $a1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
 $b1= array("a"=>"test","b"=>"green", "c"=>"blue","f"=>"green");

 $new_array = array_intersect_assoc($a1,$b1 );
 echo "<pre>";
 print_r($new_array);
 echo"</pre>";

?>