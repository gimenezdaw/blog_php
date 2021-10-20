<html>
    <head>
        <title>Blog de noticias PHP</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>BLOG DE NOTICIAS - DETALLES</h1>
        <button onclick="window.location.href='index.php'">VOLVER</button>
        <?php
            require_once('bd_connection.php');
            $id = $_GET['post_id'];
            $sql =  "SELECT post_title, post_abstract FROM demo.gnr_post WHERE post_id = '$id'";
            echo "<table border=1 width='100%'>";
            $result = mysqli_query($con, $sql);        
            echo "<th>Titulo noticia</th><th>Descripción</th>";
            while ($fila = mysqli_fetch_array($result)) {
                echo "<tr>";
                 echo "<td>".$fila['post_title']."</td><td width='50%'>".$fila['post_abstract']." </td>";
                echo "</tr>";
            }
            echo "</table>";
            mysqli_close($con);
        ?>
    </body>
</html>