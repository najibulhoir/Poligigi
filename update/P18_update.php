<?php
	include "../library/koneksi.php";

	//Grade ID point P18 
	$P18C	= $_POST['P18C'];
	$P18T	= $_POST['P18T'];
	$P18B	= $_POST['P18B'];
	$P18R	= $_POST['P18R'];
	$P18L	= $_POST['P18L'];
	
	
	mysql_query("update odontogram set P18C='$P18C',
									   P18T='$P18T',
									   P18B='$P18B',
									   P18R='$P18R',
									   P18L='$P18L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>