<?php

$HOSTNAME='localhost';
$USERNAME='128DB';
$PASSWORD='pass4128DB';
$DATABASE='128db';

$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

if($con){
	// echo"connected";
}
	else {
		die(mysqli_error($con));
	}
	
?>