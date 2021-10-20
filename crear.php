<html>
    <head>
        <title>Blog de noticias PHP</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>BLOG DE NOTICIAS - CREAR</h1>
        <button onclick="window.location.href='index.php'">VOLVER</button>
        <?php
            require_once('bd_connection.php');
            $id = $_GET['id'];
            $titulo = $_POST['titulo'];
            $textoJunto = $_POST['textoJunto'];
            $descripcion = $_POST['descripcion'];
            $cuerpo = $_POST['cuerpo'];
            $fecha = $_POST['fecha'];
            $imagen = $_POST['imagen'];
            echo "la noticia se ha creado correctamente $id<br>";

            $sql= "INSERT INTO demo.gnr_post (post_title, post_slug, post_abstract, post_body, post_date, post_image) VALUES ('${titulo}', '${textoJunto}', '${descripcion}', '${cuerpo}', '${fecha}', '${imagen}')";  
            //echo $sql;

            if (!mysqli_query($con, $sql)) {
                
                die('Error:'.mysqli_error($con)."<br>SQL:=".$sql);
            } 
            
            echo "registro guardado correctamente";
                    
            mysqli_close($con);  
            
            exit;
                
            ?>
    </body>
</html>
