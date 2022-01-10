<?php session_start()?>
<?php 
    if (!isset($_SESSION['carrito']) ){
        $_SESSION['carrito'] = [];
    }

    $_SESSION['carrito'][] = ['producto'=>$_GET['prod'], 'precio'=>$_GET['precio'], 'cnt'=>1];

    header('Location: index.php?m=1&prod='.$_GET['prod']);
?>