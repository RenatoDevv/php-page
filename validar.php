<?php 
$email=$_POST['email'];
$password=$_POST['password'];
session_start();
$_SESSION['email']=$email;

include('conexion.php');
$consulta="select * from users where email='$email' and password='$password'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header('location:home.php');
}
else{
    ?>
    <?php
    include('index.php');
    ?>
    <h1>Error utentificcacion</h1>
    <?php 
}
mysqli_free_result($resultado);
mysqli_close($conexion);