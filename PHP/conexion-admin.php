<?php 
		$mysqli= new mysqli("localhost", "root","melissa10", "adminplus");
		if($mysqli->connect_errno){
				echo "\nError al conectar con la base de datos ".$mysqli-> connect_errno()."\n";
		}
        else{
			echo "Conexion exitosa.\n";
		}


 ?>

