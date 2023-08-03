<?php
require "conexion.php";
$id=$_GET['ide'];
//echo $id;

$ide=mysqli_query($con, "select * from cupo where codestud=$id");
$editar=mysqli_fetch_array($ide);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/datatables.min.css">
    <link rel="stylesheet" href="bootstrap/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="bootstrap/css/responsive.dataTables.min.css">
    <script src="bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/datatables.min.js"></script>
    <script src="bootstrap/js/dataTables.responsive.min.js"></script>
    <script src="bootstrap/js/script.js"></script>
</head>
<body class="bg-danger">
    <div class="container">
        <h2 class="text-center bg-dark text-light">ELIMINAR ESTUDIANTE</h2>
        <div class="card">
            <div class="card-body bg-dark"> <!--para separa todo-->
        <form action="eliminar.php" method="POST" class="bg-light text-info row"> <!-- para darle color a las letras y el fondo -->
         
            <div class="col-6  text-left">
                <b>¿DESEA ELIMINAR A:</b> <?php echo $editar["nombre"];?>
            </div>

            <div class="col-6 text-left">
                <input type="hidden" name="textid" id="" value="<?php echo $editar["codestud"];?>">
            </div>

            <div class="col-6 text-rigth">
                <input class="btn btn-success" type="submit" style="width: 100px;height: 80px;" value="SI">
            </div>

            <div class="col-6 text-left">
                <a class="btn btn-danger"href="listado.php" style="width: 100px;height: 80px;">
                 NO</a>
            </div>
            
            <img src="eliminarimagen.png" style="width: 300px;height: 300px;">

        </form>
        </div>
        </div>
    </div>
        <footer class="footer">
        <section class="footer__copy container">
            <div class="footer__social">
                <a href="https://www.facebook.com/kevinzettsu.lopesmarciel" class="footer__icons"><img
                        src="../images/facebook.svg" class="footer__img"></a>
                <a href="https://api.whatsapp.com/send/?phone=59171833593&text&type=phone_number&app_absent=0"
                    class="footer__icons"><img src="../images/whatsapp.svg" class="footer__img"></a>
            </div>

            <h3 class="footer__copyright">Derechos reservados &copy; Kevin Nelson Lopez Colque</h3>
        </section>
    </footer>
</body>
</html>