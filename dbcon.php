<?php


$host ="localhost";
$user ="root";
$password= "123456";
$dbname = "online_medical_store";


$con =mysqli_connect($host,$user,$password,$dbname);

if(!$con){

	echo mysqli_connect_error($con);
}

?> 