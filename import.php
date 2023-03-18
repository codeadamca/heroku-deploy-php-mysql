<?php

// include('connect.php');

echo getenv('DB_HOST');
echo '<br>';
echo getenv('DB_USER');
echo '<br>';
echo getenv('DB_PASSWORD'); 
echo '<br>';
echo getenv('DB_DATABASE');
echo '<br>';
echo function_exists('mysqli_connect');
echo '<br>';


$links = file_get_contents('links.sql');

print_r($links);
