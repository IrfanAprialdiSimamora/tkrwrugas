<?php
error_reporting(E_ALL ^ E_NOTICE);
include "koneksi.php";
// file submit.php
// menangkap data yang dikirimkan dari file tambah.php mwnggunakan method = POST
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$bobot = $_POST['bobot'];
// perintah SQL
$query="INSERT INTO laundry VALUES ('','$nama' ,'$alamat','$bobot') " ;
$hasil=mysqli_query($koneksi,$query);
if ($hasil){
//header ('location:index.php');
echo " <center> <b> <font color = 'red' size = '4'> <p> Data Berhasil disimpan </p> </center> </b> </font> <br/>
<meta http-equiv='refresh' content='2; url= index.php'/> ";
} else { echo "Data gagal disimpan
<meta http-equiv='refresh' content='2; url= tambah.php'/> ";
}
?>