<?php
	include "../library/koneksi.php";

	//Grade ID point P51 
	$P51C	= $_POST['P51C'];
	$P51T	= $_POST['P51T'];
	$P51B	= $_POST['P51B'];
	$P51R	= $_POST['P51R'];
	$P51L	= $_POST['P51L'];
	
	
	mysql_query("update odontogram set P51C='$P51C',
									   P51T='$P51T',
									   P51B='$P51B',
									   P51R='$P51R',
									   P51L='$P51L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>