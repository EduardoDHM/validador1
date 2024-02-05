<?php

    if(isset($_POST['send']))
    {
        $valPass=valPass($pass,$pass2);
        $edad=valEdad($birthday);
        $mail=valEmail($email);
        $tel =validPhone($phone);

        if ($valPass && $edad && $mail && $tel)
        {
            include("exito.php");
        }
        
    }

    function valPass($pass,$pass2)
    {
        $valido=false;

        if($pass==$pass2)
        {
            if (preg_match('/^((?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=\S+$)(?=.*[;:\.,!¡\?¿@#\$%\^&\-_+=\(\)\[\]\{\}])).{8,20}$/', $pass))
                {
                    $valido=true;
                }
                else
                {
                    echo "<p class='disclaimer'> ¡ERROR! La contraseña debe ser de 8-20 caracteres y contar como mínimo un número, 
                    una letra minúscula, una letra mayúscula y un carácter especial. Todo esto sin espacios en blanco.</p>";
                }
            
        }
        else
        {
            echo "<p class='disclaimer'> ¡ERROR! Las contraseñas no coinciden</p>";
        }

        return $valido;

    }
 
    function valEdad($birthday)
    {
        $adult=false;

        $start = date_create($birthday);
        $limit =date_create('2023-12-05');
        $interval = date_diff($start,$limit);
        $tiempo = array();

        foreach($interval as $valor)
        {
            $tiempo[] = $valor;
        }

        $age=$tiempo[0];

        if ($age< 18)
        {
            echo "<p class='disclaimer'> ¡ERROR! No puedes participar pues tienes $age años por lo que eres menor de edad </p>";
        }
        else
        {
            $adult=true;
        }

        
        
        return $adult;
    }
    
    function valEmail($email)
    {
        $correo=false;
        
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $correo=true;
        }
        else
        {
            echo "<p class='disclaimer'> ¡ERROR! El correo $email no es admitido porque no esta escrito de modo correto </p>";
        }

        return $correo;
    }

    function validPhone($phone)
    {
        $valido = false;

        if (preg_match('/^[0-9]{10}$/', $phone))
        {
            $valido=true;
        }
        else
        {
            echo "<p class='disclaimer'> ¡ERROR! El numero de teléfono $phone no es valido</p>";
        }

        return $valido;
    }

    