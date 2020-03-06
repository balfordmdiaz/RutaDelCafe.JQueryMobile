<?php
		include ("utils/conexion.php");
		$id = $_GET["iddepartamento"];
		$sql = "SELECT * FROM tbl_departamentos WHERE iddepartamento=".$id;
		$peticion = mysql_query($sql,$conexion);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav data-role="navbar">
    <ul>
        <li><a href="#" data-icon="star" data-theme="a">Sobre Nicaragua</a></li>
        <li><a href="#" data-icon="star" data-theme="a">Hoteles</a></li>
        <li><a href="#" data-icon="star" data-theme="a">Restaurantes</a></li>
        <li><a href="#" data-icon="star" data-theme="a">Turismo</a></li>
    </ul>
</body>
</html>
