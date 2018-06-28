<?php
	include "../library/koneksi.php";

	//Grade ID point P82 
	$P82C	= $_POST['P82C'];
	$P82T	= $_POST['P82T'];
	$P82B	= $_POST['P82B'];
	$P82R	= $_POST['P82R'];
	$P82L	= $_POST['P82L'];
	
	
	mysql_query("update odontogram set P82C='$P82C',
									   P82T='$P82T',
									   P82B='$P82B',
									   P82R='$P82R',
									   P82L='$P82L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>