<?php
include('conexion.php');
$id = $_GET['id'];
$sql = "DELETE FROM users WHERE ID='$id'";
if ($conn->query($sql) === TRUE) {
    header('location:admin.php');
} else {
    echo "Error al eliminar el registro: " . $conn->error;
}
$conn->close();
?>
