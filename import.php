<?php

include('connect.php');

$links = file_get_contents('links.sql');

print_r($links);
