<?php
$message1 = "lap trinh wed";
$message2 = 'lap trinh  wed';
var_dump($message1);
echo "<br>";
var_dump($message2);
 ?>
<?php 
$x = 2020;
var_dump($x);//var_dum
 ?>
 <?php
 $x = "2018";//$x dang o dang chuoi.
 $x = (int)$x;
 var_dump($x); 
  ?>
<?php 
$x = "3.14128";//$x dang o dang chuoi.
$x = is_int($x);
var_dump($x);
 ?>
 <?php
 $x = "3.14";//$x dang o dang chuoi.
 $x = is_float($x);
 var_dump($x); 
 ?>
 <?php 
  $x = 1234567;
  $x = (string)$x;
  var_dump($x);
 ?>
 <?php 
  $x = "3.14";
  $x = is_string($x);
  var_dump($x);
  ?>
  <?php
   $hwc  = array("html","css","jquery",1024);
   echo $hwc[0]; 
  ?>
  <?php
   $hwc  = array("html","css","jquery",1024);
   var_dump($hwc); 
  ?>
  <?php
   $hwc  = array("html","css","jquery",1024);
   $hwc = is_array($hwc);
   var_dump($hwc); 
  ?>
  <?php
  $x = true;
  var_dump($x); 
   ?>
   <?php 
   $x = 1234566;
   $x = (boolean)$x;
   var_dump($x);
   ?>
   <?php 
    $hwc  = array("html","css","jquery",1024);
    $hwc = is_bool($hwc);
    var_dump($hwc);
   ?>
    <?php 
     class myclass
     {
     	function do_myclass(){
     		echo "Doing here.";
     	}
     }
     $obj = new myclass;
     $obj -> do_myclass();
      ?>
    <?php 
     $x = "2020";
     $x = null;
     var_dump($x);
    ?>