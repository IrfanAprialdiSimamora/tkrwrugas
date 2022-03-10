<?php
 include("Koneksi.php"); // untuk memanggil file koneksi.php
$no=$_GET['no'];
//query untuk delete data
$query="DELETE FROM laundry WHERE no='".$no."'";
$hasil=mysqli_query($koneksi,$query);
//setelah data dihapus redirect ke halaman index.php
header("Location:index.php");
?>