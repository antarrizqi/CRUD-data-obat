<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "user_list";

$db = mysqli_connect("localhost", 'root', $password, $database_name);

if (!$db) {
    echo "eror";
}
