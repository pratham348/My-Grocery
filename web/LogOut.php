<?php
	session_start();
	session_regenerate_id();
	session_destroy();

	echo "<script>document.location='SignIn.php';</script>";
?>