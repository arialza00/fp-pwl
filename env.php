<?php 
//sialhkan di isi dengan user masing2
$hostname   = "localhost";
$username   = "root";
$password   = "";
$database   = "food-order";

$con        = mysqli_connect($hostname,$username,$password,$database);

if($con->connect_errno){
    echo "Koneksi database gagal karena".$con->connect_error;
    exit;
}

?>