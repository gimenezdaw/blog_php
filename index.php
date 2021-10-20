<html>
    <head>
        <title>Blog de noticias PHP</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>BLOG DE NOTICIAS - INDEX</h1>
        <button onclick="window.location.href='nueva.php'">NUEVA NOTICIA</button>
        <?php
            require_once('bd_connection.php');
            $orden = 'post_id';
            if (isset($_GET['orden'])) {
                $orden=$_GET['orden'];
            }           
            $sql =  "SELECT * FROM gnr_post ORDER BY $orden";
            echo "<table border=1 width='100%'>";
            
            $result = mysqli_query($con, $sql);
            echo "<th>Titulo noticia</th><th>Foto</th><th>EDITAR</th><th>BORRAR</th>";

            while ( $fila = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td><a href='detalle.php?post_id=".$fila['post_id']."'>".$fila['post_title']."</a></td><td><img src='blog/".$fila['post_image']."' width='200px' height='150px' />";
                
                $id=$fila['post_id'];
                echo "<td><a href='edit.php?id=$id'>Cambiar imagen</a></td>";
                echo "<td><a href='borrar.php?id=$id'>Borrar</a></td>";
                
                echo "</tr>";
            }            
            echo "</table>";
            mysqli_close($con);
            ?>
    </body>
</html>