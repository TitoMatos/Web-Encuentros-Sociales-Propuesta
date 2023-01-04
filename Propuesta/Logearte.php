<?php
include_once("Header.php");
?>

<!--Inicio del contenido-->

 
<section class="contact-us" id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 align-self-center">
        <div class="row">
          <div class="col-lg-12">


            <div id="contact">
              <div class="row">

                <div class="col-lg-12">
                  <h2>Cargando...</h2>
                </div>







                <section class='col-lg-12'>
                  <section class="PerfilUsuario BarraTitulo">
                    
                    
                    
                    
                    
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                      /*Datos del Form*/
                      $Nick    = $_POST['txtNick'];
                      $Clave    = $_POST['txtClave'];
                      if (!empty($Nick) and !empty($Clave)) {
                        include_once("Conf/Funciones.php");
                        /*Encriptamos la clave para que no vea visibles para quienes administran la DB*/
                        $Clave = md5($Clave);
                        iniciarSession($Nick, $Clave);
                      } else {
                        echo "<section class='Errores'>Debe indicar Nick y Clave. <a href='Login.php'>Volver.</a></section>";
                      }
                    }
                    ?>



                  </section>
                </section>
                <!--Final del contenido-->






              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>









  <?php
  include_once("footer.php");
  ?>