<?php
/*Indentificador de Secciones*/
/*Si existe la Variable de Session mostramos los datos del Usuario, 
DE LO CONTRARIO mostramos los Links de Logearse o Registrarse*/
if (isset($_SESSION['sNick'])) {
	$Nombre	= $_SESSION['sNombre'];
	$Correo	= $_SESSION['sCorreo'];
	$Genero	= $_SESSION['sGenero'];
	$Foto	= $_SESSION['sFoto'];
	echo "
	<li><a href='indexlogueado.php'>Incio</a></li>
	<li><a href='Reuniones.php'>Reuniones</a></li>
	<li><a href='Cursos.php'>Cursos</a></li>
	<li><a href='Galeria.php'>Galería</a></li>
	<div class='main-button-red'><a href='Perfil.php'>$Nombre</a></div>
	
	";
} else {

	echo "	
	<li><a href='index.php'>Incio</a></li>		
	<li><a href='Galeria.php'>Galería</a></li>			
	<div class='main-button-red'><a href='Login.php'>Iniciar Sesión</a></div>
	";
}

?>

