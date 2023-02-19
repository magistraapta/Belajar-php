<?php 
$db_host = "127.0.0.1";
$db_user = "root";
$db_name = "multiuser";

$koneksi = mysqli_connect($db_host,$db_user);
$db = mysqli_select_db($koneksi, $db_name);


function query ($query) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}

function tambah ($data){
    global $koneksi;
    $username = $data["username"];
    $password = $data["password"];

    $query = "INSERT INTO admin VALUES (NULL, '$username', '$password')";

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}
?>