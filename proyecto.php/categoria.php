<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>  
<?php 
    $categoria_actual = conseguirCategoria($db, $_GET['id']);
    if(!isset($categoria_actual['id'])){
        header('Location: index.php');
    }
?>
<?php require_once 'includes/cabecera.php'; ?>
    <!-- BARRA LATERAL -->  
<?php require_once 'includes/lateral.php'; ?>        
    <!-- CAJA PRINCIPAL --> 
    <div id="principal">
        <h1>Entradas de <?=$categoria_actual['nombre']?></h1>
        <?php 
            $entradas = conseguirTodasEntradas($db, $_GET['id']);
            if(!empty($entradas)):
                while($entrada = mysqli_fetch_assoc($entradas)):  
        ?>
        <article class="entrada">
           <a href="entrada.php?id=<?=$entrada['id']?>">
                <h2><?=$entrada['titulo']?></h2>
                <span class ='fecha'><?=$entrada['categoria'].' | '.$entrada['fecha']?></span>
                <p>
                    <?=substr($entrada['descripcion'],0,180)?>
                </p>
            </a> 
        </article>
        <?php
                endwhile;
            endif;
        ?> 
    </div> <!-- FIN PRINCIPAL -->
<?php require_once 'includes/pie.php'; ?>  