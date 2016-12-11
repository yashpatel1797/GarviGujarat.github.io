<?php
	
	$c=mysql_connect("localhost","root","");
	$s=mysql_select_db("my_db",$c);
	$q="select * from log_in";
	$r=mysql_query($q);
	echo "<table border='1' cellspacing='0'>";
	while($result=mysql_fetch_assoc($r))
	{
		echo "<tr><td style='text-align:center'>";
		echo "<b>UserName</b></td>
			  <td style='text-align:center'><b>Password</b></td></tr>";
		echo "<tr><td>";
		echo $result["username"]."</td><td>".
			 $result["pass"]."</td></tr>";
	}
	echo "</table>";
?>