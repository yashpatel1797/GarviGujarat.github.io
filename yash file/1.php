<?php
	$fn=$_POST["fname"];
	$ln=$_POST["lname"];
	$e=$_POST["email"];
	$p=$_POST["pwd"];
	$cp=$_POST["cpwd"];
	
	$d=mysql_connect("localhost","root","");
	$s=mysql_select_db("mydb",$d);
	$q="insert into regis_form(firstname,lastname,email,password,confirmpass)
	values('".$fn."','".$ln."','".$e."','".$p."','".$cp."')";
	mysql_query($q);
	
	header("location:after-signup.php");
?>