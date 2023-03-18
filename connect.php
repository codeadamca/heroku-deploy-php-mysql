<?php

$connect = mysqli_connect(
  getenv(DB_HOST), 
  getenv(DB_USERNAME), 
  getenv(DB_PASSWORD), 
  getenv(DB_DATABASE)
);