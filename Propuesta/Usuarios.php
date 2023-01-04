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


            <form id="contact" enctype="multipart/form-data" action='Registrarse.php' method='post' name='frmContacto' onSubmit='return validarDatos();'>
              <div class="row">

                <div class="col-lg-12">
                  <h2>Regístrate</h2>
                  <p>Debes completar todos los campos para registrarte!</p>
                  <p>Si ya tienes una cuenta puedes <a href="Login.php"> iniciar sesión!</a></p>
                  <br><br>
                </div>

                <div class="col-lg-12">
                  <fieldset>
                    <input type='text' name='txtNick' placeholder='Nick' class='Campos'>
                  </fieldset>
                </div>

                <div class="col-lg-12">
                  <fieldset>
                    <input type='password' name='txtClave' placeholder='Clave' class='Campos' />
                  </fieldset>
                </div>

                <div class="col-lg-12">
                  <fieldset>
                    <input type='password' name='txtRepClave' placeholder='Repetir clave' class='Campos' />
                  </fieldset>
                </div>

                <div class="col-lg-12">
                  <fieldset>
                    <input type='text' name='txtNombre' placeholder='Nombre...' class='Campos' />
                  </fieldset>
                </div>

                <div class="col-lg-12">
                  <fieldset>
                    <input type='mail' name='txtCorreo' placeholder='Correo@server.do' class='Campos' />
                  </fieldset>
                </div>

                <div>
                  <fieldset>

                    <select class="col-lg-12" name="txtGenero">
                      <option value="Ninguno"> G&eacute;nero->Elegir </option>
                      <option value="Masculino">Masculino</option>
                      <option value="Femenino"> Ferminino</option>
                      <option value="Indefinido">Indefinido</option>
                    </select>

                  </fieldset>
                </div> <br><br><br>

                <div class="col-lg-12">
                  <fieldset>
                    <input name="Imagen" id="Imagen" type="file" placeholder='Imagen' class='Campos' />
                  </fieldset>
                </div>

                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class='Campos'>Registrarse</button>
                  </fieldset>
                </div>

              </div>
            </form>



          </div>
        </div>
      </div>
    </div>
  </div>
















  <!-- Fin de contenido -->

  <?php
  include_once("footer.php");
  ?>