<?php

// include('connect.php');

echo getenv('DB_USER');

$links = file_get_contents('links.sql');

print_r($links);
