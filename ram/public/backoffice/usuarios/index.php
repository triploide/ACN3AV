<?php

require '../../../vendor/autoload.php';

use Ram\Business\UserBusiness;

$userBusiness = new UserBusiness;
$users = $userBusiness->all();

// echo '<pre>';
// var_dump($users);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Usuarios | Backoffice</title>
</head>
<body>
    <?php include __DIR__ . '/../partials/navbar.php'; ?>

    <main class="vh-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Usuarios</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-border table-striped">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Email</th>
                                <th>Accions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($users as $user): ?>
                                <tr>
                                    <td><?php echo $user->first_name; ?></td>
                                    <td><?php echo $user->last_name; ?></td>
                                    <td><?php echo $user->email; ?></td>
                                    <td>
                                        <a href="form.php?id=<?php echo $user->id; ?>" class="btn btn-primary">
                                            <span class="fa fa-pencil"></span>
                                        </a>
                                        <a href="#" class="btn btn-danger">
                                            <span class="fa fa-trash"></span>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <?php include __DIR__ . '/../partials/footer.php'; ?>
</body>
</html>