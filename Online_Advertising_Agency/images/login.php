<?php

	$con=mysql_connect ("localhost","root","","log in");
	
	if(mysql_connect_error())
	{
		echo"<script> alert("Cannot connect to the database");</script>"
		exit();
	}
	
		
?>