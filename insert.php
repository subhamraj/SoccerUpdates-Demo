<?php

 $con = mysqli_connect('127.0.0.1','root','');

 if (!$con) {
 	echo 'Sorry for your inconvinience. We will check it soon';
 }

if(!mysqli_select_db($con,'soon')){
		echo "Database not there";
}

$Email = $_POST['email'];

$sql = "INSERT INTO email (Email) VALUES ('$Email') ";

if(!mysqli_query($con,$sql)){
	echo "please enter Email";
}
 else{
 	echo "Thanks for Registering your mail. We will Get back to you soon";
 }
 header("refresh:2 url=thank_you.html");

?>