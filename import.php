<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

include('connect.php');

echo getenv('DB');
echo '<br>';
echo getenv('DB_USER');
echo '<br>';
echo getenv('DB_USER_PASSWORD'); 
echo '<br>';
echo getenv('DB_HOST');
echo '<br>';
echo function_exists('mysqli_connect');
echo '<br>';


$links = file_get_contents('links.sql');

print_r($links);
