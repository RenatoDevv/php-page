<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Register</title>
</head>
<body>
    <form action="admin.php" id="form" method="post" class="dropdown-menu p-4">
        <i class="bi bi-person-circle"></i>
        <p>Register</p>
        <div class="input-group mb-3">
        <i class="bi bi-person-fill-check input-group-text"></i>
        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
        <i class="bi bi-phone input-group-text"></i>
        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <input type="text" class="form-control m-2" name="nombre" id="place" placeholder="Nombre">
        <input type="text" class="form-control m-2" name="telefono" id="place" placeholder="telefono">
        <input type="email" class="form-control m-2" name="email" id="place" placeholder="Email">
        <input type="password" class="form-control m-2" name="password" id="place" placeholder="Password">
        <span>
            <input type="checkbox" class="form-check-input" name="" id="checkbox">
            <label for="heckbox" class="form-check-label">Remenberme</label>
        </span>
        <button type="submit" class="btn btn-primary" id="btn">Register</button>
        <hr>
        <a href="login.php">Iniciar Sesion</a>
    </form>
</body>
</html>