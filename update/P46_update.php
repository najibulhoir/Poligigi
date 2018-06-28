<?php
	include "../library/koneksi.php";

	//Grade ID point P46 
	$P46C	= $_POST['P46C'];
	$P46T	= $_POST['P46T'];
	$P46B	= $_POST['P46B'];
	$P46R	= $_POST['P46R'];
	$P46L	= $_POST['P46L'];
	
	
	mysql_query("update odontogram set P46C='$P46C',
									   P46T='$P46T',
									   P46B='$P46B',
									   P46R='$P46R',
									   P46L='$P46L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>