<?php
/*Funcion para REGISTRAR ARTICULOS*/
function IdentificadorLogin()
{
	session_start();
	if($_SESSION['Nick'])
	{
		
	}
}
/*FUNCION PARA REGISTRAR USUARIO*/	
function regUsuario($Nick,$Clave,$Nombre,$Genero,$Imagen,$Correo)
{
	include_once("Conexion.php");
	if(mysqli_num_rows(mysqli_query(Conectar(),"SELECT nick FROM Usuario WHERE nick='$Nick'")) <1)
	{
		/*Encriptamos la clave para que no vea visibles para quienes administran la DB*/
		$Clave=md5($Clave);
		/*Preparamos la Sentencia SQL para registrar el Usuario*/
		$Guardar="INSERT INTO usuario (nick,clave,nombre,correo,genero,foto)values('$Nick','$Clave','$Nombre','$Correo','$Genero','$Imagen')";
		/*Si al Conectarnos y ejecutar la Sentencia SQL todo se ejecuta correctamente, el registro fue Exito*/
			if(mysqli_query(Conectar(), $Guardar) ) 
			{echo"<section class='Errores'>Bienvenido <b>$Nombre<b>, ya puedes <a href='Login.php'>Iniciar sesión</a>.</section>";}
			else
			{echo"<section class='Errores'>Lo sentimos, ha fallado el registro, revise y trate  <a href='Usuarios.php'>Nuevamente.</a>.</section>";}
		
	}else{
		echo"<section class='Errores'>El Nick $Nick se encuentra en uso.</section>";
	}
}
/*FUNCION PARA INICIAR SESSION*/	
function iniciarSession($Nick,$Clave)
{
	include_once("Conexion.php");
	$Consulta="SELECT * FROM Usuario WHERE nick='$Nick' and clave='$Clave'";
	
	if(mysqli_num_rows(mysqli_query(Conectar(),$Consulta)) >=1)
	{
		/*Recogemos en la variable $Fila todos los datos del usuario que se esta Logeando*/
		$Fila = mysqli_fetch_assoc(mysqli_query(Conectar(),$Consulta));
		/*Damos inicio a Crear la Session de Usuario*/
		//session_start();
		session_regenerate_id();
		/*Creamos una variable de Session por cada dato del Usuario*/
		/*Variable de Session<----->Campo de la Tabla*/
		/*Variable de Session	<>	Campo de nuestra Tabla*/
		$_SESSION['sNick']		= 	$Fila['nick'];
		$_SESSION['sNombre']	= 	$Fila['nombre'];
		$_SESSION['sGenero']	= 	$Fila['genero'];
		$_SESSION['sCorreo']	= 	$Fila['correo'];
		$_SESSION['sFoto']		= 	$Fila['foto'];
		/*Cerramos la creacion de la Session*/
		@session_write_close();
		/*Redirigimos a la  Pagina de Perfil*/
		echo"<script>location.href='Perfil.php';</script>";
	}else{
		echo"<section class='Errores'>El Nick o clave son incorrectos. <br>Revise y trate  <a href='Login.php'>Nuevamente.</a></section>";
	}
}

function identificarUsuario()
{
	/*Si existe la variable de Session $_SESSION['sNick'] entonces hay un usuario Loego, de lo contrario lo redirigiremos al Login*/
	if(isset($_SESSION['sNick']))
	{
		//echo"Hola:..".$_SESSION['sNombre'];
		//echo"<section class='Errores'><a href='Salir.php'>Salir.</a></section>";
	}else{
		
		echo"<section class='Errores'>Debes Logearte</section>";
		echo"<script>location.href='Deslogeado.php';</script>";		
	}
}
function mostrarLogin()
{
	/*Si existe la variable de Session $_SESSION['sNick'] entonces hay un usuario Loego, de lo contrario lo redirigiremos al Login*/
	if(isset($_SESSION['sNick']))
	{
		$Nick=$_SESSION['sNick'];
		$Nombre=$_SESSION['sNombre'];
		$Imagen=$_SESSION['sFoto'];
		$Correo=$_SESSION['sCorreo'];
		$Genero=$_SESSION['sGenero'];
		echo"
		<section class='PerfilUsuario'>
			<img src='images/Usuarios/$Imagen' alt='Foto de Perfil'>
			<br><br>
			<br> 			<h4> <strong>Nick: </strong> $Nick </h4>
			<br> 			<h4> <strong>Nombre de usuario: </strong> $Nombre </h4>
			<br> 			<h4> <strong>Correo eléctronico:</strong> $Correo </h4>
			<br> 			<h4> <strong>Género:</strong> $Genero </h4>
			<br>			<div class='main-button-red'><a href='Salir.php'>Cerrar sesión</a></div>					
		</section>		
		
		";
		
	}
}

function regArticulo($Descripcion,$Precio,$Costo,$Proveedor,$Imagen)
{
	include_once("Conexion.php");
	$Con=Conectar();
	$SQL="
		INSERT INTO articulo
			(descripcion,costo,precio,proveedor,imagen)
		VALUES
			('$Descripcion','$Precio','$Costo','$Proveedor','$Imagen')
	";
	if(mysqli_query($Con,$SQL)){
		echo"<a href='articulos.php'><h2>Se ha registrado el Articulo, registrar otro</h2></a>";
	}else{
		echo"<h2>Algo no anda bien, revisa nuevamente</h2>";
	}
}

/*Funcion para Consultar y mostrarlos ARTICULOS*/
function mostrarArticulos()
{
	include_once("Conexion.php");
	$Conexion=Conectar();
	//Consultamos la tabla para verificar si ya existe un usuario igual al nuevo que se esta creando

	$Consulta = "SELECT *  FROM articulo";
	$Resultados = mysqli_query($Conexion, $Consulta);
	/*Si los resultados de la consulta >0 entonces ya existe un usuario registrar con el Nick enviado*/
	/*Creamos una tabla para mostrar los resultados*/
	echo"	  <table class='table table-hover'>
				<thead>	
					<tr>
						<th>Imagen</th>
						<th>Descripci&oacute;n</th>
						<th>Precio</th> 
						<th>Proveedor</th>
					</tr>
				</thead>
				<tbody>
		
						";

	if (mysqli_num_rows($Resultados) > 0) 
	{
		while($Fila = mysqli_fetch_assoc($Resultados)) 
		{
			/*Recogemos cada campo en una variable*/
			$Imagen			=$Fila["imagen"];
			$Descripcion	=$Fila["descripcion"];
			$Precio			=$Fila["precio"];
			$Proveedor		=$Fila["proveedor"];
			/*Por cada registro imprimimos una fila*/
			echo"
			<tr>
				<td> <img src='images/Articulos/$Imagen'> </td>
				<td>$Descripcion</td>
				<td>$Precio</td>
				<td>$Proveedor</td>
			</tr>";
		}		 
	} 
	else 
	{
		echo"
			<tr>
				<td colspan='5'>
					<div class='Errores'>No se encontraron giras registradas</div>
				</td>
			</tr>
			
			";			 
	}
	echo"
		</tbody>
	</table";
	/*Cerramos la conexion*/
	mysqli_close($Conexion);
}
?> 