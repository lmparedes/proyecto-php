<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>  
<?php 
    $entrada_actual = conseguirEntrada($db, $_GET['id']);
    if(!isset($entrada_actual['id'])){
        header('Location: index.php');
    }
?>
<?php require_once 'includes/cabecera.php'; ?>
    <!-- BARRA LATERAL -->  
<?php require_once 'includes/lateral.php'; ?>  
 <div id="principal">
        <h1>Editar entradas</h1>
        <p>
            Edita tu entrada <?=$entrada_actual['titulo']?>
        </p>
        <br/>
        <form action="guardar-entrada.php" method="POST">
            <label for="titulo">titulo:</label>
            <input type="text" name="titulo">

            <label for="descripcion">Descripcion:</label>
            <textarea name="descripcion"></textarea>

            <label for="categoria">Categorias</label>
            <select name="categoria">
                <?php 
                    $categorias = conseguirCategorias($db);
                    if(!empty($categorias)):
                    while($categoria = mysqli_fetch_assoc($categorias)):  
                ?>
                <option value="<?=$categoria['id']?>">
                    <?=$categoria['nombre']?>
                </option>
                <?php 
                    endwhile;
                endif;
                ?>
            </select>

            <input type="submit" value="Guardar" />
        </form>
</div> <!-- FIN PRINCIPAL -->
<?php require_once 'includes/pie.php'; ?>  