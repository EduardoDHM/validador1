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
            <img src="pictures/chek01.png" class="logo" alt="">
        </div>
    </div>

        <div class="instructions-box">

            <div class="instructions2">

                <p class="congrats"> ¡Felicidades! Ya estas participando</p>
                
                <p class="dat1"> Usuario </p>
                <p class="disclaimer"><?php echo $user; ?>  </p>

                <p class="dat1"> contraseña</p>
                <p class="disclaimer"> <?php echo $pass; ?> </p>

                <p class="dat1">Nombre </p>
                <p class="disclaimer"><?php echo $name; ?></p>

                <p class="dat1"> Apellido</p>  
                <p class="disclaimer"><?php echo $lastname; ?></p>

                <p class="dat1">Fecha de nacimiento</p>
                <p class="disclaimer"><?php echo $birthday; ?> </p>

                <p class="dat1">E-mail</p>
                <p class="disclaimer"><?php echo $email; ?> </p>

                <p class="dat1">Telefono</p>
                <p class="disclaimer"><?php echo $phone; ?></p>
    

            </div>

            
        </div>
    
</body>

</html>