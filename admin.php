<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Admin</title>
</head>
<body>
    <?php
    include('conexion.php');
    $sql = "SELECT * FROM users";
    $result =$conn->query($sql);

    ?>
    <div>
        <a href="Add.php">NUEVO</a>
        <table>
            <thead>
                <tr>
                    <td>id</td>
                    <td>Nombre</td>
                    <td>Tel</td>
                    <td>Email</td>
                    <td>Password</td>
                    <td>ACCIONES</td>
                </tr>
            </thead>
            <tbody>
            <?php while($fila = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $fila['ID'] ?></td>
                <td><?php echo $fila['Nombre'] ?></td>
                <td><?php echo $fila['Telefono'] ?></td>
                <td><?php echo $fila['Email'] ?></td>
                <td><?php echo $fila['Password'] ?></td>
                <td>
                    <a href="edit.php?ID=<?php echo $fila['Nombre'] ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $fila['ID'] ?>">Eliminar</a>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>