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
<body class="bg-light">
    <div class="container">
        <h2 class="text-center  bg-dark text-light">REGUISTRO ESTUDIANTIL
 
        </h2>
        <div class="card">
            <div class="card-body  bg-primary border border-success">
        <form action="insertar.php" method="POST" class="row">
        <img src="unsxx.png" class="rounded mx-auto d-block" alt="..." style="width: 450px; height: 200px;">

        <div class="col-12 text-center p-3">
            <label for="">CI</label>
            <input type="number" style="font-size: 12pt; font-weight: bold; color: white;" class="form-control bg-info" name="txtci" id=""  placeholder="ingrese su ci">

        </div>
        <div class="col-4 text-center">
            <label for="">NOMBRE</label>
            <input type="text" style="font-size: 12pt; font-weight: bold; color: white;" class="form-control bg-info " name="txtnomed" id="" placeholder="ingrese nombre">

        </div>
        <div class="col-4 text-center">
            <label for="">APPATERNO</label>
            <input type="text" style="font-size: 12pt; font-weight: bold; color: white;" class="form-control bg-info" name="txtdesc" id=""  placeholder="ingrese el apellidopaterno">

        </div>
        <div class="col-4 text-center ">
            <label for="">APMATERNO</label>
            <input type="text" style="font-size: 12pt; font-weight: bold; color: white;" class="form-control bg-info" name="txttip" id=""  placeholder="ingrese el apellidomaterno">

        </div>
        
        <div class="col-12 text-center p-3">
            <label for="">EMAIL</label>
            <input type="text" style="font-size: 12pt; font-weight: bold; color: white;" class="form-control bg-info" name="txttdo" id=""  placeholder="ingrese su correo">

        </div>
    

        <div class="col-6 text-center">
            <label for="">TELEFONO</label>
            <input type="number" style="font-size: 12pt; font-weight: bold; color: white;" class="form-control bg-info" name="txtapo" id=""  placeholder="ingrese su numero de telefono">

        </div>

         <div class="col-5 text-center">
            <label for="">CURSO</label>
            <select name="txtpa" id="" style="font-size: 12pt; font-weight: bold; color: white;" class="form-control bg-info">
                <option value="">--elija opcion--</option>
                <option value="1er AÑO">1er AÑO</option>
                <option value="2do AÑO">2do AÑO</option>
                <option value="3er AÑO">3er AÑO</option>
                <option value="4to AÑO">4to AÑO</option>
                <option value="5to AÑO">5to AÑO</option>
            </select>

        </div><br>
        <div  class="col-12 text-left p-3">
            <label for="">GENERO</label><br>
            <label for="">MASCULINO</label>
            <input type="radio" name="gen" id="" value="MASCULINO">
            <label for="">FEMENINO</label>
            <input type="radio" name="gen" id="" value="FEMENINO">

        </div>

        <div class="col-6 text-rigth">
            <input class="btn btn-success" type="submit" value="REGISTRAR" >

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