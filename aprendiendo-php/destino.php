<?php 
if(isset($_GET['var1'])&&isset($_GET['var2'])){ 
    $var1=$_GET['var1'];
    $var2=$_GET['var2'];
    echo($var1*$var2);
}
?>