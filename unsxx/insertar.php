<?php
require "conexion.php";
$ci=$_POST['txtci'];
$nombre=$_POST['txtnomed'];
$appaterno=$_POST['txtdesc'];
$apmaterno=$_POST['txttip'];
$email=$_POST['txttdo'];
$telefono=$_POST['txtapo'];
$genero=$_POST['gen'];
$curso=$_POST['txtpa'];


//$txtFechaReg = strtotime($fechacrea);
//$newFechaReg = date('Y-m-d',$txtFechaReg);

//$txtFechaVen = strtotime($fechavenc);
//$newFechaVen = date('Y-m-d',$txtFechaVen);

//echo $nombremedi.' '.$descripcion.' '.$tipo;

//echo $newFechaReg;

//echo $newFechaVen;

mysqli_query($con,"insert into cupo(ci,nombre,appaterno,apmaterno,email,telefono,genero,curso) 
values($ci,'$nombre','$appaterno','$apmaterno','$email',$telefono,'$genero','$curso')");

header('location:listado.php');
//echo $ci.''.$nombre.' '.$appaterno.' '.$apmaterno.' '.$email.' '.$telefono.' '.$genero.' '.$curso;
?>