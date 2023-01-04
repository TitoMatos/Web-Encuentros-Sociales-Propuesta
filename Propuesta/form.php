<html>
    <body>
        <?php
            //======================================================================
            // PROCESAR FORMULARIO 
            //======================================================================
            // Comprobamos si nos llega los datos por POST
            if ($_SERVER['REQUEST_METHOD'] == 'POST') 
			{
                //-----------------------------------------------------
                // Funciones Para Validar
                //-----------------------------------------------------

                /**
                 * Método que valida si un texto no esta vacío
                 * @param {string} - Texto a validar
                 * @return {boolean}
                 */
                function validar_requerido(string $texto): bool
                {
                    return !(trim($texto) == '');
                }

                /**
                 * Método que valida si es un número entero 
                 * @param {string} - Número a validar
                 * @return {bool}
                 */
                function validar_entero(string $numero): bool
                {
                    return (filter_var($numero, FILTER_VALIDATE_INT) === FALSE) ? False : True;
                }

                /**
                 * Método que valida si el texto tiene un formato válido de E-Mail
                 * @param {string} - Email
                 * @return {bool}
                 */
                function validar_email(string $texto): bool
                {
                    return (filter_var($texto, FILTER_VALIDATE_EMAIL) === FALSE) ? False : True;
                }

                //-----------------------------------------------------
                // Variables
                //-----------------------------------------------------
                $errores = [];
                $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
                $edad = isset($_POST['edad']) ? $_POST['edad'] : null;
                $email = isset($_POST['email']) ? $_POST['email'] : null;

                //-----------------------------------------------------
                // Validaciones
                //-----------------------------------------------------
                // Nombre
                if (!validar_requerido($nombre)) {
                    $errores[] = 'El campo Nombre es obligatorio.';
                }
                // Edad
                if (!validar_entero($edad)) {
                    $errores[] = 'El campo de Edad debe ser un número.';
                }
                // Email
                if (!validar_email($email)) {
                    $errores[] = 'El campo de Email tiene un formato no válido.';
                }
				if(empty($errores))
				{
					echo"No hay errores";
				}else{
					echo"hay errores";
				}
            }
        ?>
        <!-- Mostramos errores por HTML -->
        <?php 
			if (isset($errores))
			{ 
				echo'<ul class="errores">';
                foreach ($errores as $error) {
                    echo '<li>' . $error . '</li>';
                } 
				echo'</ul>';
            } else if (!isset($errores))
			{
				echo"PUEDO GUARDAR";
			} 
        ?>
        <!-- Formulario -->
        <form method="post">
            <p>
                <!-- Campo nombre -->
                <input type="text" name="nombre" placeholder="Nombre">
            </p>
            <p>
                <!-- Campo edad -->
                <input type="text" name="edad" placeholder="Edad">
            </p>
            <p>
                <!-- Campo Email -->
                <input type="text" name="email" placeholder="Email">
            </p>
            <p>
                <!-- Botón submit -->
                <input type="submit" value="Enviar">
            </p>
        </form>
    </body>
</html>