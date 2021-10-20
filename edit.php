<html>
    <head>
        <title>Blog de noticias PHP</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>BLOG DE NOTICIAS - EDITAR</h1>
        <button onclick="window.location.href='index.php'">VOLVER</button>
        <?php
            require_once('bd_connection.php');
            $id = $_GET['id'];
            $sql =  "SELECT * FROM demo.gnr_post WHERE post_id  = $id ";
            $result = mysqli_query($con, $sql);
            while ( $fila = mysqli_fetch_array($result)) {
                        $imagen= $fila['post_image'];                          
                    }
            ?>
        <form name="form2" action="actualizar.php" method="POST">
            Imagen nueva:
            <input type="file" name="imagen" accept="image/x-png,image/gif,image/jpeg" value="<?php echo $imagen; ?>" /><br>
            <input type="hidden" name="id" value="<?php echo $id; ?>" />
            <input type="submit" value="Actualizar" name="actualizar" /> 
        </form>  
    </body>
</html>