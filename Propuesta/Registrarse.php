<?php
include_once("header.php");
?>

<!-- Inicio de contenido -->






<section class="contact-us" id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 align-self-center">
        <div class="row">
          <div class="col-lg-12">


            <div id="contact">
              <div class="row">

              <div class="col-lg-12">
                  <h2>Registrando cuenta...</h2>
                </div>


              <?php 
								if($_SERVER['REQUEST_METHOD'] == 'POST')
								{
									/*Datos del Form*/
									$Nick	=isset($_POST['txtNick']) ?$_POST['txtNick']:null;
									$Clave	=$_POST['txtClave'];
									$RClave	=$_POST['txtRepClave'];
									$Nombre	=$_POST['txtNombre'];
									$Genero	=$_POST['txtGenero'];
									$Correo	=$_POST['txtCorreo'];
									
									/*Validando campos*/									
									if($Nick===""){echo"<section class='Errores'>Indique su nick.</section>";}	
									if($Clave===""){echo"<section class='Errores'>Escriba la clave.</section>";}	
									if($RClave!=$Clave){echo"<section class='Errores'>Las claves no coinciden.</section>";}	
									if($Nombre===""){echo"<section class='Errores'>Indique su nombre</section>";}	
									if($Genero==="Ninguno"){echo"<section class='Errores'>Seleccione su genero.</section>";}	
									
									if( !empty($Correo) && filter_var($Correo, FILTER_VALIDATE_EMAIL) === FALSE )
									{echo"<section class='Errores'>Correo no valido</section>";}
									/*Si nunguno de los campos obligatorio esta vacio, podemos:
										1:Conectarnos al Servidor 
										2:Procesar el registro
											Consultando que no exista el Nick que estamos registrando
									DE LOS CONTRARIO
										Indicamos que faltan campos por llenar
									*/
										if( $Nick!="" && $Clave!="" && $RClave===$RClave )
										{
											//echo"<section class='Errores'>PUEDE GUARDAR</section>";
											/*PROCESAMOS LA FOTO*/
												$Imagen = $_FILES['Imagen']['name'];
												$Imagen = str_replace(" ","_",$Imagen);									
												if (move_uploaded_file($_FILES['Imagen']['tmp_name'], 'images/Usuarios/'.$Imagen)) {
													//Cambiamos los permisos del Imagen a 777 para poder modificarlo posteriormente
													chmod('images/Usuarios/'.$Imagen, 0777);
												}
												else {
												   //Si no se ha podido subir la imagen, mostramos un mensaje de error
												   //echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
												   $Imagen="NoImagen.png";
												}
												/*LLAMAMOS LA FUNCION QUE REGISTRA EL USUARIO*/
												include_once("Conf/Funciones.php");
												regUsuario($Nick,$Clave,$Nombre,$Genero,$Imagen,$Correo);
											
										}else{
											echo"<section class='Errores'>FALTAN CAMPOS POR LLENAR</section>";
										}
									
								}
							?>	




              

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>





























  <!-- Fin de contenido -->

  <?php
  include_once("footer.php");
  ?>