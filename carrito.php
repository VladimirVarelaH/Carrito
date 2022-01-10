<?php session_start()?>
<?php 
    if (!isset($_SESSION['carrito']) ){
        $_SESSION['carrito'] = [];
    }
    $total = 0;
    $carrito = [];
 
    foreach ($_SESSION['carrito'] as $prod){
        if (!isset ($carrito[$prod['producto']])){
            $carrito[$prod['producto']] = [];
            $carrito[$prod['producto']]['precio'] = $prod['precio'];
            $carrito[$prod['producto']]['cantidad'] = $prod['cnt'];
        } else {
            $carrito[$prod['producto']]['cantidad'] += $prod['cnt'];
        }
    }
    
?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>MiTienda</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <h5>MiTienda</h5>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./">Productos</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./carrito.php">Carrito</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="./cerrar_sesion.php">Cerrar Sesión </a>
                    </li>
            </ul>
        </div>
    </nav>

    <main class="m-5">
        <style>
            h2{
                text-align: center;
            }
            tr{
                display: flex;
                justify-content: space-around;
            }
            td{
                width:33.4%;
                display: flex;
                justify-content: center;
                align-items: center;
            }
          
        </style>
        <h2 >Productos</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td >Producto</td>
                    <td >Cantidad</td>
                    <td >Total</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($carrito as $key => $val):?>
                    <?php if($carrito[$key]['cantidad']>0):?>
                        <tr>
                            <td>
                                <?php print_r($key)?>
                            </td>
                            <td>
                                <?php echo ($carrito[$key]['cantidad'])?>
                            </td>
                            <td>
                                <?php echo "$".$carrito[$key]['cantidad']*$carrito[$key]['precio']?>
                            </td>
                            <?php $total += $carrito[$key]['cantidad']*$carrito[$key]['precio'] ?>
                        </tr>
                    <?php endif?>
                <?php endforeach?>
                <tr>
                    <?php echo "<h4>Total: $".$total."</h4>"?>
                </tr>
            </tbody>
        </table>
    </main>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>