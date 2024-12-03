<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "user_list";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if (!$db) {
    echo "eror";
}
