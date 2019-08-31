<?php
$con=mysqli_connect('localhost','root','','example');
if($con){
	echo "Connection Successfull";
}else{
	echo "Fail to connect";
}
	
?>
