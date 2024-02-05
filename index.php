<?php

if(isset($_POST['send']))
    {   
        $user = $_POST['userName'];
        $pass = $_POST['pass1'];
        $pass2 = $_POST['pass2'];
        $name = $_POST['nombre'];
        $lastname = $_POST['lastname'];
        $birthday = $_POST['birthday'];
        $email = $_POST['emails'];
        $country = $_POST['pais'];
        $phone = $_POST['phone'];

    }
  
 
?>




<!doctype html>
<html lang="es">

<head>
    <title>Mr. Beast Sorteo</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/Style.css">
</head>

<body>
    
    <div class="header">
        <div class="logo-space">
            <img src="pictures/MrBeast.svg" class="logo" alt="">
        </div>
    </div>

    <div class="content">
        <div class="instructions-box">

            <div class="instructions">
                <p>
                    Bienvenido al sorteo mundial de Mr. Beast en donde puedes ganar pantallas, laptops, consolas, celulares, un auto y hasta
                    un millón de dólares. Solo registra tus datos en formulario y ya estarás participando. Tienes hasta el 12 de diciembre del 
                    2023 para regístrate y los sorteos se harán el día 20 de diciembre de 2023 por YouTube en el canal oficial
                    de Mr. Beast a las 8:00 p.m. (GMT-6) Hora en Wichita, Kansas, EE. UU.
                </p>
    
                <p class="disclaimer">
                    Recuerda que debes ser mayor de edad para participar.
                </p>
                <p class="disclaimer">
                    Todos los campos son obligatorios.
                </p>
                <p class="disclaimer">
                    Su nombre de usuario sera lo equivalente a su numero de loteria.
                </p>

                <p class="disclaimer">
                    La contraseña debe ser de 8-20 caracteres y contar como mínimo un número, una letra minúscula, una letra mayúscula y 
                    un carácter especial. Todo esto sin espacios en blanco.
                </p>

                <p class="disclaimer" name="pes">
                    ¡No olvide su usuario contraseña ya que si es el ganador se le enviará un enlace y donde debera iniciar sesión para
                    reclamar el premio!.
                </p>
    

            </div>

            
        </div>
    </div>

    <div class="formbox">

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> " method="post">

            <?php 
                include("validar.php");
            ?>
        
            <label for="userName">Escriba su nombre de usuario:</label>
            <input type="text" class="boxtext" name="userName" id="userName" placeholder="Nombre de usuario" required>

            <label for="pass1">Escriba su contraseña:</label>
            <input type="password" class="boxtext" name="pass1" id="pass1" placeholder="Contraseña" required>
            
            <label for="pass2">Vuelva a escribir su contraseña:</label>
            <input type="password" class="boxtext" name="pass2" id="pass2" placeholder="Confirme Contraseña" required>
        
            <label for="nombre">Escriba su nombre o nombres:</label>
            <input type="text" class="boxtext" name="nombre" id="nombre" placeholder="Nombres" required>

            <label for="lastname">Escriba su apellido o apellidos:</label>
            <input type="text" class="boxtext" name="lastname" id="lastname" placeholder="Apellidos" required>

            <label for="lastname">Escriba su fecha de nacimiento:</label>
            <input type="date" class="boxtext" name="birthday" id="birthday" required>

            <label for="emails">Escriba su e-mail:</label>
            <input type="email" class="boxtext" name="emails" id="emails" placeholder="e-mail" required>

            <label for="Pais">¿De que país eres?:</label>
            <input type="text" class="boxtext" name="pais" id="pais" placeholder="Nombre de tu pais" required>

            <label for="lastname">Escriba su número de teléfono</label>
            <input type="tel" class="boxtext" name="phone" id="phone"  placeholder="Teléfono" required>

            <input type="submit"  name="send" id="send" value="Participar">

            

        </form>
        
        

    </div>

    <div class="foot">

        <p class="credits">
           Creado por Eduardo Darynel Huchin Moo
        </p>

        <p  class="credits">
            28 de Noviembre de 2023
        </p>

    </div>

</body>

</html>

<!--
  El if(isset($_POST['send'])) sirve para correr el código solo cuando se oprima “participar”, evitando errores al momento de 
  cargar la página, debido a que haremos 2 include los otros 2 documentos también tienen esta condición. El formulario este 
  hecho en html y css, el htmlspecialchars($_SERVER['PHP_SELF']) está ahí para hacer más seguro el código, más abajo hacemos 
  un include al documento validar.php donde se encuentra nuestra lógica de validación sin Código html, se llama a la función 
  valPass(); que valida si los campos de contraseña coinciden y después mediante una expresión regular valida si cumple el 
  formato requerido, en valEdad se convierte la variable $birthday en una fecha y mediante un date_diff  y un for each se saca 
  la edad para verificar si el usuario es menor de 18, si no lo es se procede con normalidad, en valEmail validamos el e-mail 
  con la ayuda de FILTER_VALIDATE_EMAIL y para el teléfono usamos expresiones regulares, en todos los casos se regresan valores, 
  falso si no pasó la validación y verdadero si pasó, si no pasa se da un mensaje del error y si pasa se llama a otro php en 
  donde se mostrara que el registro es exitoso y los datos registrados.
 
-->