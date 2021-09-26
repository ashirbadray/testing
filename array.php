<?php
//  $emp = array(
//     array('1','Ashirbad','Male',23),
//     array('2','Alok','Male',23),
//     array('3','Padrip','Male',34)

//  );
//  echo "<pre>";
//  print_r($emp);
//  echo "<pre>";
//  foreach ($emp as  $value)
//  {
//    foreach($value as $value1)
//    {
//        echo $value1;
//        echo"<br>";
//    }

//  }
?>

<?php
  $emp = array(
     'ashirbad' => array("id" =>6, "name" => 'ashibrbad', "gender" => 'Male'),
     'alok' => array("id" => 7 , "name"=>'alok',"gender"=>'Male'),
     'pradip' => array('id'=>8,"name"=>'pradip',"gender"=>'Male')

  );
  echo "<pre>";
  print_r($emp);
  echo "<pre>";


 $fruit = ['apple','angur','orange',1=>'pijuli']; 
 $veggie =['pattao','tamato'];
 $newarray = array_replace($fruit,$veggie);
 echo "<pre>";
 print_r($newarray);
 echo "<pre>";

 $array1 = array('a'=>array('Ashirbad','Ray'),'b'=>array("Biakash","Satapathy"));
 $array2 = array('b'=>array('green'),"c"=>array('yellow'));



?>