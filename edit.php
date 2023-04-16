<?php
include('conexion.php');
$id = $_GET['ID'];
$sql = "SELECT * FROM users WHERE nombre='".$id."' LIMIT 1";
$result = $conn->query($sql);
$fila = $result->fetch_assoc();
?>

<form method="get" action="">
    <input type="hidden" name="ID" value="<?php echo $fila['ID'] ?>">
    <input type="text" name="Nombre" placeholder="Nombre" value="<?php echo $fila['Nombre'] ?>">
    <input type="text" name="Telefono" placeholder="Tel" value="<?php echo $fila['Telefono'] ?>">
    <input type="text" name="Email" placeholder="Email" value="<?php echo $fila['Email'] ?>">
    <button type="submit" >Edit</button>
    <a href="admin.php">Cancel</a>
</form>

<?php
if(isset($_GET['ID']) && isset($_GET['Nombre']) && isset($_GET['Telefono']) && isset($_GET['Email'])) {
    $id = $_GET['ID'];
    $nombre = $_GET['Nombre'];
    $telefono = $_GET['Telefono'];
    $email = $_GET['Email'];
    $sql = "UPDATE users SET Nombre='".$nombre."', Telefono='".$telefono."', Email='".$email."' WHERE ID=".$id;
    if ($conn->query($sql) === TRUE) {
        header("location:admin.php");
    } else {
        echo "Error al actualizar el registro: " . $conn->error;
    }
}
?>

