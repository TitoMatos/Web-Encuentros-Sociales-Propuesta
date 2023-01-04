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


                        <form id="contact" action='Logearte.php' method='post' name='frmLogin' onSubmit='return validarLogin();'>
                            <div class="row">

                                <div class="col-lg-12">
                                    <h2>Inicia Sesión</h2>
                                    <p>Si no tienes una cuenta entonces <a href="Usuarios.php"> registrate!</a></p>
                                    <br><br>
                                </div>

                                <div class="col-lg-12">
                                    <fieldset>
                                        <input type='text' name='txtNick' placeholder='Nick' class='Campos' />
                                    </fieldset>
                                </div>

                                <div class="col-lg-12">
                                    <fieldset>
                                        <input type='password' name='txtClave' placeholder='Clave' class='Campos' />
                                    </fieldset>
                                </div>

                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type='submit' class='Campos'>Iniciar Sesión</button>
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