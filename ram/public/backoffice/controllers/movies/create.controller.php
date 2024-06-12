<?php

use Ram\Business\MovieBusiness;

require '../../../../vendor/autoload.php';

$movieBusiness = new MovieBusiness;
$movieBusiness->create($_POST);

header('location: ../../peliculas');
