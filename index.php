<?php

		include("utils/conexion.php");
		$sql = "SELECT * FROM tbl_departamentos";
		$peticion = mysql_query($sql,$conexion);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="img/myicon.ico" type="image/x-icon" rel="shortcut icon" />
    <title>Ruta del Cafe</title>
    <link rel="stylesheet" href="jqm/jquery.mobile-1.2.0.css">
    <script src="jqm/jquery-1.8.2.min.js"></script>
    <script src="jqm/jquery.mobile-1.2.0.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
<body>

    <div data-role="page" id = "inicio"> 

        <div data-role="header" data-theme="b">
            <a href="#" data-icon="home">Inicio</a>    
            <h1>Ruta del Cafe</h1>
            <a href="#" data-icon="info">Acerca de</a>
          
    </div>
    
    <div data-role="content">
        <h2 id="titulo">Ruta del Cafe</h2>

        <section class="banner">
            <div class="banner-content">
                <h2>Esto es la Ruta del cafe</h2>
            </div>
        </section>

        <ul data-role="listview" data-inset="true" data-theme="b">
            <li data-role="listdivider">Departamentos de Nicaragua</li>
                <ul data-role="listview" data-inset="true" data-split-theme="c">
                    <!-- Aquí va el código que muestra las categorías -->

                    <?php
                        while ($fila = mysql_fetch_array($peticion)){

                        echo '
                            <li>
                                <a href="departamentos.php?idcat='.$fila["iddepartamento"].'" data-transition="slide">
                                <h3>'.utf8_encode($fila["nombre"]).'</h3>
                                </a>
                            </li>
                    ';
                    }
                    ?>
                </ul>    

    </div>


    <div data-role="footer">
        <h4>Copyright - 2020 Nicaragua Derechos reservados</h4>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>