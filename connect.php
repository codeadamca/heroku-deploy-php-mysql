<?php

$connect = mysqli_connect(
  getenv(DB), 
  getenv(DB_USER), 
  getenv(DB_USER_PASSWORD), 
  getenv(DB_DATABASE)
);