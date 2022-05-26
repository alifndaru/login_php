<?php
// koneksi ke server dan database
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'login'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
// jika gagal maka akan menampilkan Gagal terhubung MySQL
if (!$conn) {
 die ('Gagal terhubung MySQL: ' . mysqli_connect_error()); 
}

//nama table yang akan dibuat 
$table_name = 'users';

// membuat querry
$sql = 'CREATE TABLE IF NOT EXISTS ' . $table_name . ' (
    id int(11) NOT NULL AUTO_INCREMENT,
    username varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    PRIMARY KEY(id)
    );';
  
$query = mysqli_query($conn, $sql);
//jika gagal maka akan menampilkan gagal dibuat
if (!$query) {
 die ('ERROR: Tabel ' . $table_name . ' gagal dibuat: ' . mysqli_error($conn));
}

// jika berhasil akan menampilka tulisan berhasil dibuat
echo 'Tabel ' . $table_name . ' berhasil dibuat <br/>';

//melakukan insert data kedalam table yaitu pada query Kd_spesialis`, `spesialis`
$sql = "INSERT INTO $table_name (`username`, `email`,`password`) 
  VALUES ('Niagahoster Tutorial', 'nhtutorial@gmail.com', '12345')";
  
$query = mysqli_query($conn, $sql);

if (!$query) {
 die ('ERROR: Data gagal dimasukkan pada tabel ' . $table_name . ': ' . mysqli_error($conn));
}

echo 'Data berhasil dimasukkan pada tabel ' . $table_name . '';