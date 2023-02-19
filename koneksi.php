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
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);

    $query = "INSERT INTO admin VALUES (NULL, '$username', '$password')";

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function hapus ($id ){
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM admin WHERE login_id = $id");
    return mysqli_affected_rows($koneksi);
}
?>