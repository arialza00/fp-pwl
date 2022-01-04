<?php
    include("env.php");
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
    
        mysqli_query($con,"INSERT INTO tbl_admin VALUES(NULL,'$fullname','$username','$password')");
    
        return mysqli_affected_rows($con);
    }
    function contactform($data){
        global $con;
    
        $sql = "INSERT INTO `tbl_contact`(`nama`,`email`,`pesan`) ";
        $sql.= "VALUES ('".$_POST['nama']."','".$_POST['email']."','".$_POST['pesan']."')";
        $query = mysqli_query($con,$sql) or exit("Error query: <b>".$sql."</b>.");

        if($query->connect_errno){
            echo "Koneksi database gagal karena".$query->connect_error;
            exit;
        }else{
            session_start();
            $_SESSION['Flash_data'] = '<div class="alert alert-success">Data Berhasil di tambahkan.</div>';
            header("Location: contact.php");
        }
    }
?>