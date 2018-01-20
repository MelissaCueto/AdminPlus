<?php

		$nombre=$_POST["new_user"];
		$contra=$_POST["contra"];
        $contra2=$_POST["confirmar"];
		$email=$_POST["email"];
    
        if($contra == $contra2){
		$mysqli->query("INSERT INTO usuarios(usuario, correo, password) VALUES ('$nombre','$email','$contra')");
        }
    else{
        echo "Las contraseñas no coinciden";
    }
	if($mysqli->errno==0){
		echo "Registro exitoso";
		$url="login-admin.html";
	header("localhost:".$url);
	die();

	}else{
		echo "No se pudo registrar el usuario :c";
		
	}


  ?>