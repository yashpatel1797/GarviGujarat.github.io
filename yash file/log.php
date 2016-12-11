<?php
	$un=$_POST["email"];
	$p=$_POST["pwd"];
	
	session_start();
	$_SESSION["login"] = $un;
	$_SESSION["password"] = $p;
	
	$c=mysql_connect("localhost","root","");
	$s=mysql_select_db("mydb",$c);
	$q="select * from regis_form where email='".$un."' and password='".$p."' ";
	$r=mysql_query($q);
	if(mysql_num_rows($r)>0)
	{
		$_SESSION["x"]=1;
		$in = mysql_fetch_assoc($r);
		$_SESSION["check_log"] = $in["firstname"];
		header("location:home2.php");
	}
	else
	{
		header("location:login.php?error");
	}
?>