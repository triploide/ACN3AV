<?php

use Ram\Business\AuthBusiness;

require '../../vendor/autoload.php';

$authBusiness = new AuthBusiness;

$authBusiness->logout();

header('location: /backoffice/login');
exit;
