<?php
require  'database.php';
$id = $_GET['id'];
$query = "DELETE FROM obat WHERE id='$id'";
mysqli_query($db, $query);

header("Location: panel.php");
