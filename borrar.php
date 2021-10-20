<html>
    <head>
        <title>Blog de noticias PHP</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>BLOG DE NOTICIAS - BORRAR </h1>
        <button onclick="window.location.href='index.php'">VOLVER</button>
        <?php
            require_once('bd_connection.php');
            $id = $_GET['id'];
            echo "El registro a borrar es el número de id: $id<br>";
            $sql = "DELETE FROM demo.gnr_post WHERE post_id = '$id'  ";   
            if (!mysqli_query($con, $sql)) { 
                die('Error:'.mysqli_error($con)."<br>SQL:=".$sql);
            } 
            echo "registro borrado correctamente";     
            mysqli_close($con);  
            exit;
        ?>
    </body>
</html>
