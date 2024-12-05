<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="password" name="password">
    <input type="email" name="email">
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $nama = htmlspecialchars($_POST['password']);
    $password = htmlspecialchars($_POST['password']);
    $query = 'INSERT INTO user '
}

?>