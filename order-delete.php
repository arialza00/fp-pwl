<?php 
// koneksi database
include 'env.php';

$id = $_GET['id'];

function hapus($id) {
    global $con;
    mysqli_query($con,"DELETE FROM tbl_order WHERE id='$id'");
    return mysqli_affected_rows($con);
}
// menangkap data id yang di kirim dari url
 
if(hapus($id)>0) {
    echo"
    <script>
        alert('data berhasil dihapus!');
        document.location.href='manage-order.php';
    </script>
    ";
}else{
    echo"
    <script>
        alert('data gagal dihapus!');
        document.location.href='manage-order.php';
    </script>
    ";
}
// menghapus data dari database
 
?>