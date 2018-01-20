<?php 
	include("conexion-admin.php");
		$user=$_POST["user"];
$pass=$_POST["contra"];

$resultados = $mysqli -> query("SELECT * FROM usuarios WHERE nombre ='$user' AND password='$pass'");
$filas = $resultados -> fetch_all();

if(count($filas)==0){

echo "Usuario no valido amiguito\n";
}
else{
	header('Location: /AdminPlus/comenzar.html');
	die();
}
var_dump($filas);


 ?>





