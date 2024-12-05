<?php
require "database.php";

if (isset($_GET['id'])) {
    hapus('id', 'obat', $_GET['id']);
}

function query($query)
{
    global $db;
    $result = mysqli_query($db, $query);

    $rows = [];
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
    }

    return $rows;
}


function upload()
{
    $originalName = $_FILES['gambar']['name'];
    $filesize = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if (
        $error === 4
    ) {
        echo "<script>
				alert('pilih gambar terlebih dahulu!');
			  </script>";
        return false;
    }

    $validExtension = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $originalName);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $validExtension)) {
        echo "<script>
				alert('File bukan gambar');
			  </script>";
        return false;
    }

    if ($filesize > 1000000) {
        echo "<script>
				alert('Ukuran gambar terlalu besar!');
			  </script>";
        return false;
    }

    $imgFolder = 'img/';
    if (!is_dir($imgFolder)) {
        mkdir($imgFolder, 0755, true);
    }
    $newFilename = uniqid() . '.' . $ekstensiGambar;
    move_uploaded_file($tmpName, $imgFolder . $newFilename);

    return $newFilename;
}

function hapus($identifier, $table, $id)
{
    global $db;
    mysqli_query($db, "DELETE FROM $table WHERE $identifier='$id'");
    // return mysqli_affected_rows($db);

    header("Location: panel.php");
}
function update($table, $data, $where)
{
    global $db;

    if (isset($data['id'])) {
        unset($data['id']);
        unset($data['update']);
    }



    $fields = [];
    foreach ($data as $column => $value) {
        if ($column === 'password') {
            $value = password_hash($value, PASSWORD_DEFAULT);
        } elseif ($column === 'gambar' && $_FILES['gambar']['error'] !== 4) {
            $image = upload();
            if (!$image) {
                return false;
            }
            if (!empty($data['old_image'])) {
                unlink('./img/' . $data['old_image']);
            }
            $value = $image;
        } else {
            $value = htmlspecialchars($value);
        }

        $fields[] = "$column = '$value'";
    }

    $fields_sql = implode(", ", $fields);

    $where_sql = [];
    foreach ($where as $key => $val) {
        $val = htmlspecialchars($val);
        $where_sql[] = "$key = '$val'";
    }
    $where_clause = implode(" AND ", $where_sql);

    $query = "UPDATE $table SET $fields_sql WHERE $where_clause";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
