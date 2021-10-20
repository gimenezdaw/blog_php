<html>
    <head>
        <title>Blog de noticias PHP</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>BLOG DE NOTICIAS - ACTUALIZAR</h1>
        <button onclick="window.location.href='index.php'">VOLVER</button>
        <?php
            require_once('bd_connection.php');
            $id = $_POST['id'];
            $imagen= $_POST['imagen'];
            $sql= "UPDATE demo.gnr_post SET post_image = '$imagen' WHERE post_id = '$id'";    
            echo "<br>La imagen se ha actualizado. SQL: $sql";
            if (!mysqli_query($con, $sql)) {
                die('Error:'.mysqli_error($con)."<br>SQL:=".$sql);
            } 
            mysqli_close($con);        
            exit;
        ?>
    </body>
</html>