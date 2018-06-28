<?php
	include "../library/koneksi.php";

	//Grade ID point P64 
	$P64C	= $_POST['P64C'];
	$P64T	= $_POST['P64T'];
	$P64B	= $_POST['P64B'];
	$P64R	= $_POST['P64R'];
	$P64L	= $_POST['P64L'];
	
	
	mysql_query("update odontogram set P64C='$P64C',
									   P64T='$P64T',
									   P64B='$P64B',
									   P64R='$P64R',
									   P64L='$P64L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>