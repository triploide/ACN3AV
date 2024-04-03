<?php

function exceptionHandler (Throwable $e) {
    if ($e instanceof DBNotFoundException) {
        $error = file_get_contents(__DIR__ . '/views/404.php');
        echo $error;
        exit;
    }

    if ($e instanceof Exception) {
        // TODO: 
    }
}

set_exception_handler('exceptionHandler');
