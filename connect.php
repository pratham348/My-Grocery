<?php
	$l = "localhost";
	$r = "root";
	$p = "";
	$db = "my_grocery";

	$con = mysqli_connect($l, $r, $p, $db);

	if(!$con == true) die("Unsuccessful")
	
?>