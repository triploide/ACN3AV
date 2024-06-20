<?php

require '../vendor/autoload.php';

use Ram\Business\AuthBusiness;
use Ram\Business\MovieBusiness;

$movieBusiness = new MovieBusiness;
$movie = $movieBusiness->find($_GET['id'] ?? null);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Post preview-->
    <div class="post-preview">
        <a href="pelicula.php?id=<?php echo $movie->getId(); ?>">
            <h2 class="post-title"><?php echo $movie->getTitle() ; ?></h2>
            <h3 class="post-subtitle"><?php echo $movie->getSubtitle() ; ?></h3>
            <?php if(AuthBusiness::check()): ?>
                <p>
                    <a class="btn btn-primary" href="comprar.php">Comprar</a>
                </p>
            <?php endif; ?>
        </a>
        <p class="post-meta">
            Posted by
            <a href="#!"><?php echo $movie->getOwner()->getFullName() ; ?></a>
            on <?php echo $movie->since(); ?>
        </p>
    </div>
    <!-- Divider-->
    <hr class="my-4" />
</body>
</html>