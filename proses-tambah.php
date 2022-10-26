<?php
include("koneksi.php");
if(isset($_POST['kirim_data'])){
    $Nama_lengkap=$_POST['Nama_lengkap'];
    $jb=$_POST['jb'];

    $sql="INSERT INTO tb_data(Nama_lengkap,jb) VALUES ('$Nama_lengkap','$jb')";
    $query=mysqli_query($koneksi,$sql);

}else{
    ("akses dilarang");
}
?>