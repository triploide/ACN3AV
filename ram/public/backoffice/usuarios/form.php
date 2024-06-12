<?php

require '../../../vendor/autoload.php';

use Ram\Business\UserBusiness;

$userBusiness = new UserBusiness;
$user = $userBusiness->find($_GET['id']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title><?php echo $user->first_name; ?> | Backoffice</title>
</head>
<body>
    <?php include __DIR__ . '/../partials/navbar.php'; ?>

    <main class="vh-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php echo $user->first_name; ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="../controllers/users/edit.controller.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group mt-3">
                            <label for="first_name">Nombre</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" value="<?php echo $user->first_name; ?>">
                        </div>
                        <div class="form-group mt-3">
                            <label for="last_name">Apellido</label>
                            <input type="text" id="last_name" name="last_name" class="form-control" value="<?php echo $user->last_name; ?>">
                        </div>
                        <div class="form-group mt-3">
                            <label for="role_id">Rol</label>
                            <select name="role_id" id="role_id">
                                <option value="1">Admin</option>
                                <option value="2">Editor</option>
                            </select>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $user->id; ?>">
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php include __DIR__ . '/../partials/footer.php'; ?>
</body>
</html>