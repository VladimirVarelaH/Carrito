<?php session_start()?>
<?php 
    if (!isset($_SESSION['carrito']) ){
        $_SESSION['carrito'] = [];
    }

    $_SESSION['carrito'][] = ['producto'=>$_GET['prod'], 'precio'=>$_GET['precio']];

    header('Location: index.php?m=1&prod='.$_GET['prod']);
?>