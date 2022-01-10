<?php session_start()?>
<?php 
    if(isset($_SESSION['carrito'])){
        unset($_SESSION['carrito']);
    }
    session_destroy();
    header('Location: index.php?m=2');
?>
