<?php require_once 'conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Blog de VideoJuegos</title>
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
    </head>
<body>
    <!-- CABECERA -->
    <header id="cabecera">
        <div id="logo">
            <a href="index.php">
                Blog de videojuegos
            </a>
        </div>
    <!-- MENU -->
    <nav id="menu">
        <ul>
            <li>
                <a href="index.php">inicio</a>
            </li>
            <?php 
            $categorias = conseguirCategorias($db);
            while($categoria = mysqli_fetch_assoc($categorias)): 
            ?>
                <li>
                    <a href="categoria.php?id=<?=$categoria['id']?>"><?=$categoria['nombre'] ?></a>
                </li>
            <?php endwhile; ?>
            <li>
                <a href="index.php">Sobre mi</a>
            </li>
            <li>
                <a href="index.php">Contacto</a>
            </li>
        </ul>
    </nav>
</header>
<div id="contenedor">