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
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./carrito.php">Carrito</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="./cerrar_sesion.php">Cerrar Sesión </a>
                    </li>
            </ul>
        </div>
    </nav>

    <?php if (!empty($_GET['m'])):?>
        <?php if ($_GET['m'] == 1):?>
            <div class="alert alert-success" role="alert">
                <?php echo "Producto ".$_GET['prod']." añadido exitosamente."?>
            </div>
        <?php elseif ($_GET['m'] == 2):?>
            <div class="alert alert-warning" role="alert">
            <?php echo "Producto ".$_GET['prod']." eliminado exitosamente."?>
            </div>
        <?php elseif ($_GET['m'] == 3):?>
            <div class="alert alert-danger" role="alert">
                Sesión cerrada con éxito.
            </div>
        <?php endif?>
    <?php endif?>

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
                width:25%;
                display: flex;
                justify-content: center;
                align-items: center;
            }
        </style>
        <h2 >Productos</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>Producto</td>
                    <td>Precio</td>
                    <td>Agregar</td>
                    <td>Eliminar</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td ><img style='max-width:100%; max-height: 10vh;' src="./public/img/coke.png" alt="Coca Cola"></td>
                    <td >$500</td>
                    <td ><a href="agregar.php?prod=coca_cola&precio=500" class="btn btn-primary">Agregar</a></td>
                    <td ><a href="eliminar.php?prod=coca_cola&precio=500" class="btn btn-warning">Eliminar</a></td>
                </tr>
                <tr>
                    <td ><img style='max-width:100%; max-height: 10vh;' src="./public/img/chips.png" alt="Papas Fritas"></td>
                    <td >$900</td>
                    <td ><a href="agregar.php?prod=papas_fritas&precio=900" class="btn btn-primary">Agregar</a></td>
                    <td ><a href="eliminar.php?prod=papas_fritas&precio=900" class="btn btn-warning">Eliminar</a></td>
                </tr>
                <tr>
                    <td ><img style='max-width:100%; max-height: 10vh;' src="./public/img/cookie.png" alt="Galletas"></td>
                    <td >$750</td>
                    <td ><a href="agregar.php?prod=galleta&precio=750" class="btn btn-primary">Agregar</a></td>
                    <td ><a href="eliminar.php?prod=galleta&precio=750" class="btn btn-warning">Eliminar</a></td>
                </tr>
            </tbody>
        </table>
    </main>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>