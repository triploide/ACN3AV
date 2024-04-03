<?php

echo '<pre>';

function errorHandler (int $number, string $message, string $file, int $line) {
    echo '<h1>Error</h1>';
    echo $message;
    // var_dump($number, $message, $file, $line);

    error_log($message . PHP_EOL, 3, 'miserrores.log');
}

set_error_handler('errorHandler');

echo $x;
