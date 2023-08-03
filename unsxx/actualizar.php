 <?php
require "conexion.php";
$ci=$_POST['txtci'];
$nombre=$_POST['txtnomed'];
$appaterno=$_POST['txtdesc'];
$apmaterno=$_POST['txttip'];
$email=$_POST['txttdo'];
$telefono=$_POST['txtapo'];
$id=$_POST['txtid'];
$genero=$_POST['genero'];
$curso=$_POST['curso'];

//$txtFechaReg = strtotime($fechacrea);
//$newFechaReg = date('Y-m-d',$txtFechaReg);

//$txtFechaVen = strtotime($fechavenc);
//$newFechaVen = date('Y-m-d',$txtFechaVen);

echo $ci.''.$nombre.' '.$appaterno.' '.$apmaterno.' '.$email.' '.$telefono;
echo $genero.''.$curso;
//echo $newFechaReg;

//echo $newFechaVen;
//UPDATE cupo SET nombre='julieta' WHERE codestud=4;
mysqli_query($con,"UPDATE cupo SET  ci=$ci, nombre='$nombre', appaterno='$appaterno', apmaterno='$appaterno', email='$email', telefono=$telefono, genero='$genero', curso='$curso' WHERE codestud=$id;");
//ci,nombre,appaterno,apmaterno,email,telefono
header('location:listado.php');
//echo $ci.' '.$celu.' '.$nombre.' '.$direc.' '.$pais.' '.$gen;
?>