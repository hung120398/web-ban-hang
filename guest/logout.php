<?php
	
	if (!isset($_SESSION))
	{
	  session_start();
	}
	
	
	session_destroy();
	echo"Huy session thanh cong <br>";
	
	echo"Huy session thanh cong <br>";
	header('Location:../banban.php')
	
?>