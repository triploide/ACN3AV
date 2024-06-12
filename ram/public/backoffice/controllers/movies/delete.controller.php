<?php

use Ram\Business\MovieBusiness;

require '../../../../vendor/autoload.php';

$movieBusiness = new MovieBusiness;
$movieBusiness->delete($_POST['id']);

header('location: ../../../peliculas');
