<?php
require "conexion.php";
$id=$_GET['ide'];
//echo $id;
$edi=mysqli_query($con, "select * from cupo where codestud=$id");
$editar=mysqli_fetch_array($edi);
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
<body class="bg-info">
    <div class="container">
        <h2 class="text-center bg-dark text-light">ACTUALIZAR DATOS DEL ESTUDIANTE</h2>
        <div class="card">
            <div class="card-body  bg-dark border border-success">
        <form action="actualizar.php" method="POST" class="row">
    <img src="unsxx.png" class="rounded mx-auto d-block" alt="..." style="width: 450px; height: 200px;">

        <div class="col-12 text-center p-3  text-light">
            <label for=""  >CI</label>
            <input type="number" style="font-size: 12pt; font-weight: bold; color: white;" class="form-control bg-secondary " name="txtci" id=""  placeholder="ingrese su ci" value="<?php echo $editar['ci']; ?>">

        </div>
        <div class="col-4 text-center   text-light">
            <label for="">NOMBRE</label>
            <input type="text" style="font-size: 12pt; font-weight: bold; color: white;" class="form-control bg-secondary" name="txtnomed" id="" placeholder="ingrese nombre" value="<?php echo $editar['nombre']; ?>">

        </div>
        <div class="col-4 text-center  text-light">
            <label for="">APPATERNO</label>
            <input type="text" style="font-size: 12pt; font-weight: bold; color: white;" class="form-control bg-secondary" name="txtdesc" id=""  placeholder="ingrese el apellidopaterno"value="<?php echo $editar['appaterno']; ?>">

        </div>
        <div class="col-4 text-center  text-light">
            <label for="">APMATERNO</label>
            <input type="text" style="font-size: 12pt; font-weight: bold; color: white;" class="form-control bg-secondary" name="txttip" id=""  placeholder="ingrese su tipo"value="<?php echo $editar['apmaterno']; ?>">

        </div>


        <div class="col-12 text-center p-3  text-light">
            <label for="">EMAIL</label>
            <input type="text" style="font-size: 12pt; font-weight: bold; color: white;" class="form-control bg-secondary" name="txttdo" id=""  placeholder="ingrese su correo"value="<?php echo $editar['email']; ?>">

        </div>
        <div class="col-8 text-center  text-light">
            <label for="">TELEFONO</label>
            <input type="text" style="font-size: 12pt; font-weight: bold; color: white;" class="form-control bg-secondary" name="txtapo" id=""  placeholder="ingrese su numero de telefono"value="<?php echo $editar['telefono']; ?>">

        </div>
       
        <div class="col-12 text-center p-3  text-light">
            <label for="">GENERO</label>
            <input type="text" style="font-size: 12pt; font-weight: bold; color: white;" class="form-control bg-secondary" name="genero" id=""  placeholder="ingrese su genero" value="<?php echo $editar['genero']; ?>">

        </div>
        <div class="col-6 text-center  text-light">
            <label for="">CURSO</label>
            <input type="text" style="font-size: 12pt; font-weight: bold; color: white;" class="form-control bg-secondary" name="curso" id=""  placeholder="ingrese su curso" value="<?php echo $editar['curso']; ?>">

        </div>

        <div class="col-5 text-center">
          <input type="hidden" name="txtid" id="" value="<?php echo $editar['codestud']; ?>">

        </div>
</br>
        <hr size="2px" color="white" />
        <div class="col-6 text-rigth">
            <input class="btn btn-success" type="submit" value="ACTUALIZAR" >

        </div class="col-6 text-left">
        <a class="btn btn-warning" href="listado.php">VOLVER</a>
        <div>

        </div>

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