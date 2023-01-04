<?php
	session_start();
	session_destroy();
	/*Redirigimos al home*/
	echo"<script>location.href='index.php';</script>";	 
		
?>