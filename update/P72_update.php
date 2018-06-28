<?php
	include "../library/koneksi.php";

	//Grade ID point P72 
	$P72C	= $_POST['P72C'];
	$P72T	= $_POST['P72T'];
	$P72B	= $_POST['P72B'];
	$P72R	= $_POST['P72R'];
	$P72L	= $_POST['P72L'];
	
	
	mysql_query("update odontogram set P72C='$P72C',
									   P72T='$P72T',
									   P72B='$P72B',
									   P72R='$P72R',
									   P72L='$P72L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>