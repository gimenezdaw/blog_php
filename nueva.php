<html>
    <head>
        <title>Blog de noticias PHP</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>BLOG DE NOTICIAS - NUEVA NOTICIA</h1>
        <button onclick="window.location.href='index.php'">VOLVER</button>
        <?php
            require_once('bd_connection.php');
            $id = $_GET['post_id'];
            $titulo = $_GET['post_title'];
            $textoJunto = $_GET['post_slug'];
            $descripcion = $_GET['post_abstract'];
            $cuerpo = $_GET['post_body'];
            $fecha = $_GET['post_date'];
            $imagen = $_GET['post_image'];
            $sql =  "SELECT * FROM demo.gnr_post WHERE post_id  = $id ";
            $result = mysqli_query($con, $sql);
            while ( $fila = mysqli_fetch_array($result)) {
                        $imagen= $fila['post_image'];                          
                    }
            ?>
        <form name="form1" action="crear.php" method="POST">
            Titulo:
            <input type="text" name="titulo" value="<?php echo $titulo; ?>" /><br>
            Titulo junto:
            <input type="text" name="textoJunto" value="<?php echo $textoJunto; ?>" /><br>
            Descripción:
            <input type="text" name="descripcion" value="<?php echo $descripcion; ?>" /><br>
            Cuerpo de la noticia:
            <input type="text" name="cuerpo" value="<?php echo $cuerpo; ?>" /><br>
            Fecha:
            <input type="date" name="fecha" value="<?php echo $fecha; ?>"/><br>
            Imagen nueva:
            <input type="file" name="imagen" accept="image/x-png,image/gif,image/jpeg" value="<?php echo $imagen; ?>" /><br>
            <input type="hidden" name="id" value="<?php echo $id; ?>" />
            <input type="submit" value="CREAR NOTICIA" name="actualizar" />
        </form>  
    </body>
</html>
