<?php
        $host = "localhost";
        $user = "root";
        $password = 'password';
        $database = 'dbpdo';
        //Crear conexion 
        $con=mysqli_connect($host, $user, $password, $database );
        //Comprobar conexion.
        if (mysqli_connect_errno($con)){
            echo "Fallo al conectar a MYSQL".
                    mysqli_connect_error();
        }
        else {
            echo "Conexion Correcta<br>";
        }
?>