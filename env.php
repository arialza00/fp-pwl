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

function registrasi($data){
    global $con;

    $fullname = stripslashes($data["fullname"]);
    $username = stripslashes($data["username"]);
    $password = mysqli_real_escape_string($con,$data["password"]);
    $cpassword = mysqli_real_escape_string($con,$data["cpassword"]);

   $result = mysqli_query($con, "SELECT username FROM tbl_admin WHERE fullname='$fullname'");

    if(mysqli_fetch_assoc($result)){
        echo"<script>
            alert('nama sudah terdaftar');
        </script>";
        return false;
    }

    if ($password !== $cpassword){
        echo"<script>
            alert('konfirmasi password tidak sesuai');
        </script>";
        return false;
    }
    $password= password_hash($password,PASSWORD_DEFAULT);

    mysqli_query($con,"INSERT INTO tbl_admin VALUES(NULL,'$fullname','$username','$password')");

    return mysqli_affected_rows($con);
}
?>