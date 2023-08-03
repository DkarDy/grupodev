<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/normalize.css">

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
<body class="bg-warning">
    <div class="container p-4">
        <a href="nuevo.php" class="btn btn-primary">NUEVO</a>
        <a href="../index.html" class="btn btn-danger">REGRESAR</a>
    </div>






    <div class="container">
    <h2 class="text-center bg-dark text-light">ESTUDIANTES REGISTRADOS</h2>
    <div class="card">
        <div class="card-body border border-success bg-primary">
            <!--info, primary, success, dark, warning, danger, light-->
            
    <div class="row ">
        <div class="col-lg-12">
            <div class="table_responsive ">
                <table id="bus" class="table table-borderer table-striped" style="width:100%">
                    <thead class="bg-white text-seconday">
                   
                    <th>CI</th>
                    <th>NOMBRE</th>
                    <th>APPATERNO</th>
                    <th>APMATERNO</th>
                    <th>EMAIL</th>
                    <th>TELEFONO</th>
                    <th>GENERO</th>
                    <th>CURSO</th>
                    <th>ACCION</th>
                    
                    </thead>
                    <tbody>
                    <?php
                    require "conexion.php";
                    $consul=mysqli_query($con,"select *from cupo");
                    while($dato=mysqli_fetch_assoc($consul)){
                    
                        echo '<tr>';
                             echo '<td>'.$dato['ci'].'</td>';
                             echo '<td>'.$dato['nombre'].'</td>';
                             echo '<td>'.$dato['appaterno'].'</td>';
                             echo '<td>'.$dato['apmaterno'].'</td>';
                             echo '<td>'.$dato['email'].'</td>';
                             echo '<td>'.$dato['telefono'].'</td>';
                             echo '<td>'.$dato['genero'].'</td>';
                             echo '<td>'.$dato['curso'].'</td>';
                        
                             
                             echo '<td> <a href="editar.php?ide='.$dato['codestud'].'" class="btn btn-success"><img src="basuradb.svg" style="width: 40px;height: 40px;"></a>   <a href="delete.php?ide='.$dato['codestud'].'" class="btn btn-danger">  <img src="editardb.svg" style="width: 40px;height: 40px;"></a></td>';
                    
                    
                    
                        echo'</tr>';     
                    
                    }
                    ?>
                    
                    </tbody>
                        </table>

            </div>
        </div>
    </div>
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