<?php

$connect = mysqli_connect(
  getenv(DB_HOST),
  getenv(DB_USER), 
  getenv(DB_USER_PASSWORD), 
  getenv(DB)
) or die( mysqli_error());