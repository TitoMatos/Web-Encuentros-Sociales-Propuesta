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
                                    <h2>Perfil</h2>
                                </div>


                                <section>
 
                                
                                    <?php
                                    include_once("Conf/Funciones.php");
                                    identificarUsuario();
                                    mostrarLogin();
                                    ?>


                                </section>

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