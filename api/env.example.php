<?php

$variables = [
    'DB_HOST' => '',
    'DB_NAME' => '',
    'DB_USERNAME' => '',
    'DB_PASSWORD' => '',
];

foreach ($variables as $key => $value) {
    putenv("$key=$value");
}