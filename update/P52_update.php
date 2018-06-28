<?php
	include "../library/koneksi.php";

	//Grade ID point P52 
	$P52C	= $_POST['P52C'];
	$P52T	= $_POST['P52T'];
	$P52B	= $_POST['P52B'];
	$P52R	= $_POST['P52R'];
	$P52L	= $_POST['P52L'];
	
	
	mysql_query("update odontogram set P52C='$P52C',
									   P52T='$P52T',
									   P52B='$P52B',
									   P52R='$P52R',
									   P52L='$P52L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>