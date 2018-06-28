<?php
	include "../library/koneksi.php";

	//Grade ID point P45 
	$P45C	= $_POST['P45C'];
	$P45T	= $_POST['P45T'];
	$P45B	= $_POST['P45B'];
	$P45R	= $_POST['P45R'];
	$P45L	= $_POST['P45L'];
	
	
	mysql_query("update odontogram set P45C='$P45C',
									   P45T='$P45T',
									   P45B='$P45B',
									   P45R='$P45R',
									   P45L='$P45L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>