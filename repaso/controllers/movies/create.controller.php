<?php

require '../../app/DataAccess/MovieDao.php';
require '../../app/Business/MovieBusiness.php';
$movieBusiness = new MovieBusiness;
$movieBusiness->create($_POST);

header('location: ../../peliculas');