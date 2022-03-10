<?php
include "koneksi.php";
?>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body style = 'margin : 20px; font : 16px arial;'>
		<center>
			<p> Data Baru</p>
			<form method = 'POST' action = 'tambah_aksi.php'>
			<table border = '1' cellspacing = '1' cellpadding = '10'
			style = 'border : #aaa; color: #101; font-family : arial; fot-size : 12px;'>
			<tr>
			<td> Nama Pelanggan</td>
			<td width = '5' align = 'center'> : </td>
			<td> <input type = 'text' placeholder='Nama Pelanggan' name = 'nama' /> </td>
			</tr>
			<tr>
			<td> Alamat Pelanggan </td>
			<td align = 'center'> : </td>
			<td> <input type = 'text' placeholder='Alamat' name = 'alamat' /> </td>
			</tr>
			<tr>
			<td> Bobot </td>
			<td align = 'center'> : </td>
			<td> <input type = 'number' placeholder='Bobot Pakaian' name = 'bobot' /> </td>
			</tr>
			<tr>
			<tr>
			<td colspan = '3' align = 'center'>
			<input type = 'submit' name = 'submit' value = 'Submit'/>
			<input type = 'reset' name = 'Reset' value = 'Reset' /> </td>
			</tr>
			</table>
			<a href = 'index.php'> Kembali </a>
			</form>
	</body>
</html>