<?php require_once 'includes/helpers.php'; ?>
<aside id="sidebar">
            <div id="register" class="bloque"> 
                <h3>Registrate</h3>
                <form action="registro.php" method="POST">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" />
                    <?php echo isset($_SESSION['errores']) ? MostrarError($_SESSION['errores'], 'nombre') : ''; ?>

                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos" />
                    <?php echo isset($_SESSION['errores']) ? MostrarError($_SESSION['errores'], 'apellidos') : ''; ?>

                    <label for="email">Email</label>
                    <input type="email" name="email" />
                    <?php echo isset($_SESSION['errores']) ? MostrarError($_SESSION['errores'], 'email') : ''; ?>

                    <label for="password">Contraseña</label>
                    <input type="password" name="password" />
                    <?php echo isset($_SESSION['errores']) ? MostrarError($_SESSION['errores'], 'password') : ''; ?>

                    <input type="submit" name="submit" value="Registrar" />
                </form>
            </div>
        </aside>