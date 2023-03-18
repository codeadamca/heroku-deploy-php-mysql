<?php

include('connect.php');

$links = file_get_contents('links.sql');

mysqli_multi_query($connect, $links);
