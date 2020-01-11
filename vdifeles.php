<?php 
$today = "thu hai";
if ($today = "thu hai") {
	echo "hom nay la thu hai";
	echo "<br";
	# code...
}
$today = ($today == 2) ? 2 : 3;
echo $today;
echo "<br>";
$n = 10;
$so = ($n%2==0)?"chan":"le";
echo $so;
echo "<br>";
 ?>
 <?php 
 $today = "thu bay";
 switch ($today) {
 	case "chu nhat":
 	echo "ngay cuoi tuan";
 		# code...
 		break;
 	case "thu bay":
 	echo "ngay cuoi tuan";
 		break;
 	case "thu hai":
 	echo "ngay dau tuan";
 		break;
 	
 	default:
 	echo "ngay trong tuan khong phai la dau tuan";
 		# code...
 		break;
 }
 echo "<br>";
  ?>