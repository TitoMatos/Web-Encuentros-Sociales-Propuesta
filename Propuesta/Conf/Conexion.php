<?php

	/*Funcion para realizar una conexion MySql*/
	function Conectar()
	{
		//Datos del servidor
		$Servidor="localhost";
		$UserDB="root";
		$ClaveDB="";
		$BaseDatos="db_encuentros_sociales";
				
		/*Lanzamos la conexion y validamos si no se ha realizado correctamente*/
		if(!mysqli_connect($Servidor,$UserDB,$ClaveDB,$BaseDatos))
		{
			
			echo"<div class='Error'>Ha ocurrido el siguiente error con la Base de Datos:</div>";
			/*Recogemos el mensaje de error y lo mostramos*/
			$ErrorSQL	=	@mysqli_connect_error();
			echo"<div class='Error'>$ErrorSQL</div>";
			exit(0);
		}else{
			return mysqli_connect($Servidor,$UserDB,$ClaveDB,$BaseDatos);
			/*Conexion exitosa, no es necesario notificarlo a menos que sea en pruebas*/
			//echo"<div class='Mensaje'>Conectado exitosamente a: $BaseDatos</div>";
		}
	} 
	//Conectar();
?>