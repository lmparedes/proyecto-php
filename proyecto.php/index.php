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
            <li>
                <a href="index.php">Categoria 1</a>
            </li>
            <li>
                <a href="index.php">Categoria 2</a>
            </li>
            <li>
                <a href="index.php">Categoria 3</a>
            </li>
            <li>
                <a href="index.php">Categoria 4</a>
            </li>
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
    <!-- BARRA LATERAL -->  
        <aside id="sidebar">
            <div id="login" class="bloque">
                <h3>Identificate</h3>
                <form action="login.php" method="POST">
                    <label for="email">Email</label>
                    <input type="email" name="email" />

                    <label for="password">Contraseña</label>
                    <input type="password" name="password" />

                    <input type="submit" value="Entrar" />
                </form>
            </div>
            <div id="register" class="bloque">
                <h3>Registrate</h3>
                <form action="registro.php" method="POST">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" />

                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos" />

                    <input type="submit" value="Registrar" />
                </form>
            </div>
        </aside>
    <!-- CAJA PRINCIPAL --> 
    <div id="principal">
        <h1>Ultimas entradas</h1>
        <article class="entrada">
            <h2>Titulo de mi entrada</h2>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </article>
        <article class="entrada">
            <h2>Titulo de mi entrada</h2>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </article>
             <article class="entrada">
            <h2>Titulo de mi entrada</h2>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </article>
             <article class="entrada">
            <h2>Titulo de mi entrada</h2>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </article>
        <div id="ver-todas">
            <a href="">Ver todas las entradas</a>
        </div>  
    </div>   
        </div> <!-- FIN PRINCIPAL -->
    <!-- PIE DE PAGINA -->
    <footer id="pie">
        <p>Desarrollado por Liliana Guerrero copy; 2023</p>
    </footer>
</body>
</html>