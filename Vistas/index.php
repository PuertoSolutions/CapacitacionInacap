<?php
	if(isset($_SESSION["Usuario"])){
		if ($_SESSION["Usuario"] == "Administrador") {
			require "Bienvenida.php";
		}else{
			require "Bienvenida.php";
		}
	}else{
		require "Bienvenida.php";
	}
?>