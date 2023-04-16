<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<form method="get" action="" class="col-6">
    <input type="text" class="form-control" name="nombre" placeholder="Nombre">
    <input type="text" class="form-control" name="telefono" placeholder="Telefono">
    <input type="text" class="form-control" name="email" placeholder="Email">
    <button type="submit" >Add</button>
    <a href="admin.php">Cancel</a>
</form>
<?php
include('conexion.php');
if(isset($_GET['nombre']) && isset($_GET['telefono']) && isset($_GET['email'])) {
    $nombre = $_GET['nombre'];
    $telefono = $_GET['telefono'];
    $email = $_GET['email'];
    if($nombre != null && $telefono != null && $email != null) {
        $sql="INSERT INTO users(nombre, telefono, email) VALUES ('".$nombre."','".$telefono."','".$email."')";
        if ($conn->query($sql) === TRUE) {
            header("location:admin.php");
        } else {
            echo "Error al agregar el registro: " . $conn->error;
        }
    }
}
?>

</body>
</html>